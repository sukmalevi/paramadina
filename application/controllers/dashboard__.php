<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CUTI_Controller{
	function __construct(){
		parent::__construct();		
		$this->auth = unserialize(base64_decode($this->session->userdata('cuti_parmad')));
		$this->host	= $this->config->item('base_url');
		
		$this->db2 = $this->load->database('second', TRUE); 
		
		$site = "";
		$modul = "";
		$this->smarty->assign('modul',$modul);
		$this->smarty->assign('site',$site);
		$this->smarty->assign('lokasi',"Dashboard");
		$this->smarty->assign('host',$this->host);
		
		$nama = $this->auth['name'];
		$this->smarty->assign('nama',$nama);
		
		$this->notification();
		$this->activity();
		
		$this->smarty->display('index.html');
	}
	
	function index() {
		
		}
	
	function notification(){
		$notif = $this->db2->query("SELECT t.nama as namaAct, a.kode as kodeActivity, a.id_activity, a.created_date,
				SUBSTRING(MONTHNAME(a.created_date),1,3) as bulan, DAYNAME(a.created_date) as hari, DAY(a.created_date) as tgl,
				HOUR(a.created_date) as jam, MINUTE(a.created_date) as menit
				FROM adis_activity a
				INNER JOIN adis_type t ON t.kode = a.id_activity
				WHERE a.status_activity = '0'
				ORDER BY a.created_date DESC
				");
		$notifRes = $notif->result();
		$notifNum = $notif->num_rows();
		$this->smarty->assign('notif',$notifRes);
		$this->smarty->assign('notifNum',$notifNum);
                
                $event = "SELECT CONCAT(B.nama,' ',A.ruang,' ', TIME_FORMAT(A.jamMasuk, '%H:%m')) as title, 
                    A.tanggal as start, A.tanggal as end, A.kode
                    FROM adis_event_smb A
                    LEFT JOIN adis_jalur_smb B ON B.kode = A.jalur
                    WHERE LEFT(periode,4) = '2016'";
                $event = $this->db->query($event)->result_array();
                        
                $child = '';
                foreach ($event as $k => $v){
                    $child[$k]["title"] = $v["title"];
                    $child[$k]["start"] = $v['start']; 
                    $child[$k]["end"] = $v['end']; 
                    $child[$k]["url"] = $this->host.'admisi/absen/'.$v['kode']; 
                }
//                $json_data =array($child);
                $json = json_encode($child);
                file_put_contents('assets/even.json', $json);
                                               
	}
	
	function activity(){
                $periode = $this->db2->query("SELECT * FROM adis_periode_master WHERE status = 1")->row_array();
            
		$notif = $this->db2->query("SELECT t.nama as namaAct, a.kode, a.id_activity, a.created_date, id_cmb,
				SUBSTRING(MONTHNAME(a.created_date),1,3) as bulan, DAYNAME(a.created_date) as hari, DAY(a.created_date) as tgl,
				HOUR(a.created_date) as jam, MINUTE(a.created_date) as menit
				FROM adis_activity a
				INNER JOIN adis_type t ON t.kode = a.id_activity
				ORDER BY a.created_date DESC
				");
		$notifRes = $notif->result();
		$notifNum = $notif->num_rows();
		$this->smarty->assign('aktifiti',$notifRes);
		$this->smarty->assign('aktifitiNum',$notifNum);
                
		$newReg = "SELECT COUNT(kode) as newReg FROM adis_smb_form WHERE LEFT(bukaSmb,4) = '".$periode['tahun']."' AND stsApplyPaid = 0;";
		$newPay = "SELECT COUNT(kode)  as newPay FROM adis_smb_form WHERE LEFT(bukaSmb,4) = '".$periode['tahun']."' AND (stsApplyPaid = 1 AND stsApplyPaidConfirm = 0); ";
		$newRereg = "SELECT COUNT(kode)  as newRereg FROM adis_smb_form WHERE LEFT(bukaSmb,4) = '".$periode['tahun']."' AND (stsReapplyPaid = 1 AND stsReapplyPaidConfirm = 0);";
		$newStudent = "SELECT COUNT(kode) as newStudent FROM adis_smb_form WHERE LEFT(bukaSmb,4) = '".$periode['tahun']."' AND nim != '';";
                                
		$this->smarty->assign('newReg',$this->db2->query($newReg)->row_array());
		$this->smarty->assign('newPay',$this->db2->query($newPay)->row_array());
		$this->smarty->assign('newRereg',$this->db2->query($newRereg)->row_array());
		$this->smarty->assign('newStudent',$this->db2->query($newStudent)->row_array());
		
		$qryReg = "SELECT B.singkatan as prodi, COUNT(A.kode) as totalMhs FROM adis_smb_form A
			LEFT JOIN adis_prodi B ON B.kode = SUBSTR(A.bukaSmb,-4)
			WHERE (stsResultConfirm = 1 AND  stsReApplyPaid = 1) 
			AND (SUBSTR(bukaSmb, 1, 13) = '".$periode['kode'].'.1.01'."' AND substr(bukaSmb, -4)) 
			GROUP BY B.nama;";
		$totalReg = $this->db2->query($qryReg)->result_array();
		
		$data[0] = array('Program Studi','Mahasiswa');		
		foreach ($totalReg as $key => $val) {
			$data[0] = array('Program Studi','Mahasiswa');		
			$data[$key+1] = array($val['prodi'],(int)$val['totalMhs']);
		}	
		$totalReg = json_encode($data);
		$this->smarty->assign('totalReg',$totalReg);
		
		$qryKP = "SELECT B.singkatan as prodi, COUNT(A.kode) as totalMhs FROM adis_smb_form A
			LEFT JOIN adis_prodi B ON B.kode = SUBSTR(A.bukaSmb,-4)
			WHERE (stsResultConfirm = 1 AND  stsReApplyPaid = 1) 
			AND (SUBSTR(bukaSmb, 1, 13) = '".$periode['kode'].'.1.KP'."' AND substr(bukaSmb, -4)) 
			GROUP BY B.nama;";
		$totalKP = $this->db2->query($qryKP)->result_array();
		
		$dataKP[0] = array('Program Studi','Mahasiswa');		
		foreach ($totalKP as $key => $val) {
			$dataKP[0] = array('Program Studi','Mahasiswa');		
			$dataKP[$key+1] = array($val['prodi'],(int)$val['totalMhs']);
		}	
		$totalKP = json_encode($dataKP);
		$this->smarty->assign('totalKP',$totalKP);
	}
	
	function clickNotif(){
		$idActivity = $this->uri->segment(3);
		$kodeActivity = $this->uri->segment(4);
		
		$this->db2->where('kode', $kodeActivity);
		$this->db2->update('adis_activity',array('status_activity'=>1));
		
		if ($idActivity == '13.1'){
			redirect ('/smb/smbCalon', 'location');
		}else if ($idActivity == '13.2'){
			redirect ('/smb/smbCalon', 'location');
		}else if ($idActivity == '13.3'){
			redirect ('/smb/smbPay', 'location');
		}else if ($idActivity == '13.4'){
			redirect ('/smb/smbCalon', 'location');
		}else if ($idActivity == '13.5'){
			redirect ('/smb/smbSeleksi', 'location');
		}else if ($idActivity == '13.9'){
			redirect ('/smb/smbDaftarUlang', 'location');
		}
		
	}
}