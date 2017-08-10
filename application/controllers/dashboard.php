<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CUTI_Controller{
	function __construct(){
		parent::__construct();		
		$this->auth = unserialize(base64_decode($this->session->userdata('cuti_parmad')));
		$this->host	= $this->config->item('base_url');
		if(! $this->auth) {redirect('/site','refresh');}
		
		$this->db2 = $this->load->database('second', TRUE); 
		
		$site = "";
		$modul = "";
		$this->smarty->assign('modul',$modul);
		$this->smarty->assign('site',$site);
		$this->smarty->assign('lokasi',"Dashboard");
		$this->smarty->assign('host',$this->host);
		
		$nama = $this->auth['name'];
		$level = $this->auth['level'];
		$this->smarty->assign('nama',$nama);
		$this->smarty->assign('level',$level);
		
		$this->notification();
		$this->activity();
		$this->grafikCalonMahasiswa();
		
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
				ORDER BY a.created_date DESC LIMIT 20
				");
		$notifRes = $notif->result();
		$notifNum = $notif->num_rows();
		$this->smarty->assign('notif',$notifRes);
		$this->smarty->assign('notifNum',$notifNum);
                
		
		$periode = $this->db2->query("SELECT * FROM adis_periode_master WHERE status = 1 AND jenjangType = 1 AND semester = 1")->row_array();
		$event = "SELECT CONCAT(SUBSTRING(B.nama,1, 3),'-',A.ruang,'-', TIME_FORMAT(A.jamMasuk, '%H:%m')) as title, 
			A.tanggal as start, A.tanggal as end, A.kode
			FROM adis_event_smb A
			LEFT JOIN adis_jalur_smb B ON B.kode = A.jalur
			WHERE LEFT(periode,4) = '".$periode['tahun']."'";
		$event = $this->db->query($event)->result_array();
				
		$child = '';
		foreach ($event as $k => $v){
			$child[$k]["title"] = $v["title"];
			$child[$k]["start"] = $v['start']; 
			$child[$k]["end"] = $v['end']; 
			$child[$k]["url"] = $this->host.'admisi/absen/'.$v['kode'].'/table'; 
		}
//                $json_data =array($child);
		$json = json_encode($child);
		file_put_contents('assets/even.json', $json);
                                               
	}
	
	function activity(){
		$QryProdi = $this->db2->query('SELECT * FROM `adis_prodi` WHERE jenjang = 1 AND erased = 0;')->result_array();
		$periode = $this->db2->query("SELECT * FROM adis_periode_master WHERE status = 1 AND jenjangType = 1 AND semester = 1")->row_array();
		$this->smarty->assign('periode',$periode);
		$notif = $this->db2->query("SELECT t.nama as namaAct, a.kode, a.id_activity, a.created_date, id_cmb,
				SUBSTRING(MONTHNAME(a.created_date),1,3) as bulan, DAYNAME(a.created_date) as hari, DAY(a.created_date) as tgl,
				HOUR(a.created_date) as jam, MINUTE(a.created_date) as menit
				FROM adis_activity a
				INNER JOIN adis_type t ON t.kode = a.id_activity
				ORDER BY a.created_date DESC LIMIT 20
				");
		$notifRes = $notif->result();
		$notifNum = $notif->num_rows();
		$this->smarty->assign('aktifiti',$notifRes);
		$this->smarty->assign('aktifitiNum',$notifNum);
		
		$totalreg = array();         
		if ($periode){       
		
			$newReg = "SELECT COUNT(kode) as newReg FROM adis_smb_form WHERE LEFT(bukaSmb,4) = '".$periode['tahun']."' AND stsApplyPaid = 0;";
			$newPay = "SELECT COUNT(kode)  as newPay FROM adis_smb_form WHERE LEFT(bukaSmb,4) = '".$periode['tahun']."' AND (stsApplyPaid = 1 AND stsApplyPaidConfirm = 0); ";
			$newRereg = "SELECT COUNT(kode)  as newRereg FROM adis_smb_form WHERE LEFT(bukaSmb,4) = '".$periode['tahun']."' AND (stsReapplyPaid = 1 AND stsReapplyPaidConfirm = 0);";
			$newStudent = "SELECT COUNT(kode) as newStudent FROM adis_smb_form WHERE LEFT(bukaSmb,4) = '".$periode['tahun']."' AND nim != '';";
		
			$daftar = $this->db2->query($newReg)->row_array();
			$bayarDaftar = $this->db2->query($newPay)->row_array();
			$daftarUlang = $this->db2->query($newRereg)->row_array();
			$mhsBaru = $this->db2->query($newStudent)->row_array();
			
			$this->smarty->assign('newReg',$daftar);
			$this->smarty->assign('newPay',$bayarDaftar);
			$this->smarty->assign('newRereg',$daftarUlang);
			$this->smarty->assign('newStudent',$mhsBaru);
			// echo $periode['kode'];exit;
			$qryReg = "SELECT B.singkatan as prodi, COUNT(A.kode) as totalMhs FROM adis_smb_form A
				LEFT JOIN adis_prodi B ON B.kode = SUBSTR(A.bukaSmb,-4)
				WHERE (stsResultConfirm = 1 AND  stsReApplyPaid = 1)  
				AND (SUBSTR(bukaSmb, 1, 8) = '".$periode['kode']."' AND SUBSTR(A.bukaSmb,12,2) = '01')
				GROUP BY B.nama;";
			$totalReg = $this->db2->query($qryReg)->result_array();
			
			$qryTRF = "SELECT B.singkatan as prodi, COUNT(A.kode) as totalMhs FROM adis_smb_form A
				LEFT JOIN adis_prodi B ON B.kode = SUBSTR(A.bukaSmb,-4)
				WHERE (stsResultConfirm = 1 AND  stsReApplyPaid = 1)  
				AND (SUBSTR(bukaSmb, 1, 8) = '".$periode['kode']."' AND SUBSTR(A.bukaSmb,12,2) = '02')
				GROUP BY B.nama;";
			$totalTRF = $this->db2->query($qryTRF)->result_array();
			
			$qryPSR = "SELECT B.singkatan as prodi, COUNT(A.kode) as totalMhs FROM adis_smb_form A
				LEFT JOIN adis_prodi B ON B.kode = SUBSTR(A.bukaSmb,-4)
				WHERE (stsResultConfirm = 1 AND  stsReApplyPaid = 1)  
				AND (SUBSTR(bukaSmb, 1, 8) = '".$periode['kode']."' AND SUBSTR(A.bukaSmb,12,2) = 'PS')
				GROUP BY B.nama;";
			$totalPSR = $this->db2->query($qryPSR)->result_array();
			
			$qryBM = "SELECT B.singkatan as prodi, COUNT(A.kode) as totalMhs FROM adis_smb_form A
				LEFT JOIN adis_prodi B ON B.kode = SUBSTR(A.bukaSmb,-4)
				WHERE (stsResultConfirm = 1 AND  stsReApplyPaid = 1)  
				AND (SUBSTR(bukaSmb, 1, 8) = '".$periode['kode']."' AND SUBSTR(A.bukaSmb,12,2) = 'BM')
				GROUP BY B.nama;";
			$totalBM = $this->db2->query($qryBM)->result_array();
			
			$qryPF = "SELECT B.singkatan as prodi, COUNT(A.kode) as totalMhs FROM adis_smb_form A
				LEFT JOIN adis_prodi B ON B.kode = SUBSTR(A.bukaSmb,-4)
				WHERE (stsResultConfirm = 1 AND  stsReApplyPaid = 1)  
				AND (SUBSTR(bukaSmb, 1, 8) = '".$periode['kode']."' AND SUBSTR(A.bukaSmb,12,2) = '03')
				GROUP BY B.nama;";
			$totalPF = $this->db2->query($qryPF)->result_array();
			
			$qryKPD3 = "SELECT B.singkatan as prodi, COUNT(A.kode) as totalMhs FROM adis_smb_form A
				INNER JOIN adis_prodi B ON B.kode = SUBSTR(A.bukaSmb,-4)
				INNER JOIN adis_smb_usr_edu C ON C.smbUsr = A.kode  
				WHERE (stsResultConfirm = 1 AND  stsReApplyPaid = 1) 
				AND (SUBSTR(bukaSmb, 1, 13) = '".$periode['kode'].'.1.KP'."') 
				AND C.lulus_acc = 'D3'
				GROUP BY B.nama;";
			$totalKPD3 = $this->db2->query($qryKPD3)->result_array();
			
			
			$qryKPSMA = "SELECT B.singkatan as prodi, COUNT(A.kode) as totalMhs FROM adis_smb_form A
				LEFT JOIN adis_prodi B ON B.kode = SUBSTR(A.bukaSmb,-4)
				LEFT JOIN adis_smb_usr_edu C ON C.smbUsr = A.kode  
				WHERE (stsResultConfirm = 1 AND  stsReApplyPaid = 1) 
				AND (SUBSTR(bukaSmb, 1, 13) = '".$periode['kode'].'.1.KP'."' AND substr(bukaSmb, -4)) 
				AND C.lulus_acc = 'SMA'
				GROUP BY B.nama;";
			$totalKPSMA = $this->db2->query($qryKPSMA)->result_array();
			
			
			$qryJP = "SELECT B.singkatan as prodi, COUNT(A.kode) as totalMhs FROM adis_smb_form A
				LEFT JOIN adis_prodi B ON B.kode = SUBSTR(A.bukaSmb,-4)
				LEFT JOIN adis_smb_usr_edu C ON C.smbUsr = A.kode  
				WHERE (stsResultConfirm = 1 AND  stsReApplyPaid = 1) 
				AND (SUBSTR(bukaSmb, 1, 13) = '".$periode['kode'].'.1.JP'."' AND substr(bukaSmb, -4))
				GROUP BY B.nama;";
			$totalJP = $this->db2->query($qryJP)->result_array();
		
			$data[0] = array('PROGRAM STUDI','Mahasiswa');	
			// for($i = 0; $i < count($totalReg); $i++){
			for($i = 0; $i < count($QryProdi); $i++){
				$data[0] = array('Program Studi','REGULER', 'PARALEL D3', 'PARALEL SMA', "PSR", "FELLOWSHIP", "BIDIK MISI", "TRANSFER", "PRESTASI");
				$totalRegAll = 0;
				$totalParD3 = 0;
				$totalParSMA = 0;						
				$totalPSRAll = 0;	
				$totalBMAll = 0;
				$totalPFAll = 0;
				$totalTRFAll = 0;
				$totalJPAll = 0;
				
				for($j = 0; $j < count($totalReg); $j++){
					if ($totalReg[$j]['prodi'] == $QryProdi[$i]['singkatan']){
						$totalRegAll = $totalReg[$j]['totalMhs'];
					}
					
				}
				for($j = 0; $j < count($totalJP); $j++){
					if ($totalJP[$j]['prodi'] == $QryProdi[$i]['singkatan']){
						$totalJPAll = $totalJP[$j]['totalMhs'];
					}
					
				}
				
				for($j = 0; $j < count($totalKPD3); $j++){
					if ($totalKPD3[$j]['prodi'] == $QryProdi[$i]['singkatan']){
						$totalParD3 = $totalKPD3[$j]['totalMhs'];
					}
					
				}
				
				for($k = 0; $k < count($totalKPSMA); $k++){
					if ($totalKPSMA[$k]['prodi'] == $QryProdi[$i]['singkatan']){
						$totalParSMA = $totalKPSMA[$k]['totalMhs'];
					}
				}
					
				for($k = 0; $k < count($totalPSR); $k++){
					if ($totalPSR[$k]['prodi'] == $QryProdi[$i]['singkatan']){
						$totalPSRAll = $totalPSR[$k]['totalMhs'];
					}
				}
					
				for($k = 0; $k < count($totalBM); $k++){
					if ($totalBM[$k]['prodi'] == $QryProdi[$i]['singkatan']){
						$totalBMAll = $totalBM[$k]['totalMhs'];
					}
				}
					
				for($k = 0; $k < count($totalPF); $k++){
					if ($totalPF[$k]['prodi'] == $QryProdi[$i]['singkatan']){
						$totalPFAll = $totalPF[$k]['totalMhs'];
					}
				}
					
				for($k = 0; $k < count($totalTRF); $k++){
					if ($totalTRF[$k]['prodi'] == $QryProdi[$i]['singkatan']){
						$totalTRFAll = $totalTRF[$k]['totalMhs'];
					}
				}
				
				$data[$i+1] = array(
					$QryProdi[$i]['singkatan'],
					(int)$totalRegAll, 
					(int)$totalParD3, 
					(int)$totalParSMA,
					(int)$totalPSRAll,
					(int)$totalPFAll,
					(int)$totalBMAll,
					(int)$totalTRFAll,
					(int)$totalJPAll
					);
				
			}	
			$totalReg = json_encode($data);
			// echo $totalReg;exit;
			$this->smarty->assign('totalReg',$totalReg);
		}
	}
	
	function grafikCalonMahasiswa(){
		$QryProdi = $this->db2->query('SELECT * FROM `adis_prodi` WHERE jenjang = 1 AND erased = 0;')->result_array();
		$periode = $this->db2->query("SELECT * FROM adis_periode_master WHERE status = 1 AND jenjangType = 1 AND semester = 1")->row_array();
		$totalreg = array();         
		if ($periode){       
		
			$qryReg = "SELECT B.singkatan as prodi, COUNT(A.kode) as totalMhs FROM adis_smb_form A
				LEFT JOIN adis_prodi B ON B.kode = SUBSTR(A.bukaSmb,-4)
				WHERE (SUBSTR(bukaSmb, 1, 8) = '".$periode['kode']."' AND SUBSTR(A.bukaSmb,12,2) = '01')
				GROUP BY B.nama;";
			$totalReg = $this->db2->query($qryReg)->result_array();
			
			$qryTRF = "SELECT B.singkatan as prodi, COUNT(A.kode) as totalMhs FROM adis_smb_form A
				LEFT JOIN adis_prodi B ON B.kode = SUBSTR(A.bukaSmb,-4)
				WHERE (SUBSTR(bukaSmb, 1, 8) = '".$periode['kode']."' AND SUBSTR(A.bukaSmb,12,2) = '02')
				GROUP BY B.nama;";
			$totalTRF = $this->db2->query($qryTRF)->result_array();
			
			$qryPSR = "SELECT B.singkatan as prodi, COUNT(A.kode) as totalMhs FROM adis_smb_form A
				LEFT JOIN adis_prodi B ON B.kode = SUBSTR(A.bukaSmb,-4)
				WHERE (SUBSTR(bukaSmb, 1, 8) = '".$periode['kode']."' AND SUBSTR(A.bukaSmb,12,2) = 'PS')
				GROUP BY B.nama;";
			$totalPSR = $this->db2->query($qryPSR)->result_array();
			
			$qryBM = "SELECT B.singkatan as prodi, COUNT(A.kode) as totalMhs FROM adis_smb_form A
				LEFT JOIN adis_prodi B ON B.kode = SUBSTR(A.bukaSmb,-4)
				WHERE (SUBSTR(bukaSmb, 1, 8) = '".$periode['kode']."' AND SUBSTR(A.bukaSmb,12,2) = 'BM')
				GROUP BY B.nama;";
			$totalBM = $this->db2->query($qryBM)->result_array();
			
			$qryPF = "SELECT B.singkatan as prodi, COUNT(A.kode) as totalMhs FROM adis_smb_form A
				LEFT JOIN adis_prodi B ON B.kode = SUBSTR(A.bukaSmb,-4)
				WHERE (SUBSTR(bukaSmb, 1, 8) = '".$periode['kode']."' AND SUBSTR(A.bukaSmb,12,2) = '03')
				GROUP BY B.nama;";
			$totalPF = $this->db2->query($qryPF)->result_array();
			
			$qryKPD3 = "SELECT B.singkatan as prodi, COUNT(A.kode) as totalMhs FROM adis_smb_form A
				INNER JOIN adis_prodi B ON B.kode = SUBSTR(A.bukaSmb,-4)
				INNER JOIN adis_smb_usr_edu C ON C.smbUsr = A.kode  
				WHERE (SUBSTR(bukaSmb, 1, 13) = '".$periode['kode'].'.1.KP'."') 
				AND C.lulus_acc = 'D3'
				GROUP BY B.nama;";
			$totalKPD3 = $this->db2->query($qryKPD3)->result_array();
			
			
			$qryKPSMA = "SELECT B.singkatan as prodi, COUNT(A.kode) as totalMhs FROM adis_smb_form A
				LEFT JOIN adis_prodi B ON B.kode = SUBSTR(A.bukaSmb,-4)
				LEFT JOIN adis_smb_usr_edu C ON C.smbUsr = A.kode  
				WHERE (SUBSTR(bukaSmb, 1, 13) = '".$periode['kode'].'.1.KP'."' AND substr(bukaSmb, -4)) 
				AND C.lulus_acc = 'SMA'
				GROUP BY B.nama;";
			$totalKPSMA = $this->db2->query($qryKPSMA)->result_array();
			
			
			$qryJP = "SELECT B.singkatan as prodi, COUNT(A.kode) as totalMhs FROM adis_smb_form A
				LEFT JOIN adis_prodi B ON B.kode = SUBSTR(A.bukaSmb,-4)
				LEFT JOIN adis_smb_usr_edu C ON C.smbUsr = A.kode  
				WHERE (SUBSTR(bukaSmb, 1, 13) = '".$periode['kode'].'.1.JP'."' AND substr(bukaSmb, -4)) 
				GROUP BY B.nama;";
			$totalJP = $this->db2->query($qryJP)->result_array();
		
			$data[0] = array('PROGRAM STUDI','Mahasiswa');	
			
			// for($i = 0; $i < count($totalReg); $i++){
			for($i = 0; $i < count($QryProdi); $i++){
				$data[0] = array('Program Studi','REGULER', 'PARALEL D3', 'PARALEL SMA', "PSR", "FELLOWSHIP", "BIDIK MISI", "TRANSFER", "PRESTASI");
				$totalParD3 = 0;
				$totalParSMA = 0;						
				$totalPSRAll = 0;	
				$totalBMAll = 0;
				$totalPFAll = 0;
				$totalTRFAll = 0;
				$totalJPAll = 0;
				$totalRegAll = 0;
				
				for($j = 0; $j < count($totalReg); $j++){
					if ($totalReg[$j]['prodi'] == $QryProdi[$i]['singkatan']){
						$totalRegAll = $totalReg[$j]['totalMhs'];
					}
					
				}
				for($j = 0; $j < count($totalJP); $j++){
					if ($totalJP[$j]['prodi'] == $QryProdi[$i]['singkatan']){
						$totalJPAll = $totalJP[$j]['totalMhs'];
					}
					
				}
				
				for($j = 0; $j < count($totalKPD3); $j++){
					if ($totalKPD3[$j]['prodi'] == $QryProdi[$i]['singkatan']){
						$totalParD3 = $totalKPD3[$j]['totalMhs'];
					}
					
				}
				
				for($k = 0; $k < count($totalKPSMA); $k++){
					if ($totalKPSMA[$k]['prodi'] == $QryProdi[$i]['singkatan']){
						$totalParSMA = $totalKPSMA[$k]['totalMhs'];
					}
				}
					
				for($k = 0; $k < count($totalPSR); $k++){
					if ($totalPSR[$k]['prodi'] == $QryProdi[$i]['singkatan']){
						$totalPSRAll = $totalPSR[$k]['totalMhs'];
					}
				}
					
				for($k = 0; $k < count($totalBM); $k++){
					if ($totalBM[$k]['prodi'] == $QryProdi[$i]['singkatan']){
						$totalBMAll = $totalBM[$k]['totalMhs'];
					}
				}
					
				for($k = 0; $k < count($totalPF); $k++){
					if ($totalPF[$k]['prodi'] == $QryProdi[$i]['singkatan']){
						$totalPFAll = $totalPF[$k]['totalMhs'];
					}
				}
					
				for($k = 0; $k < count($totalTRF); $k++){
					if ($totalTRF[$k]['prodi'] == $QryProdi[$i]['singkatan']){
						$totalTRFAll = $totalTRF[$k]['totalMhs'];
					}
				}
				
				$data[$i+1] = array(
					$QryProdi[$i]['singkatan'],
					(int)$totalRegAll, 
					(int)$totalParD3, 
					(int)$totalParSMA,
					(int)$totalPSRAll,
					(int)$totalPFAll,
					(int)$totalBMAll,
					(int)$totalTRFAll,
					(int)$totalJPAll
					);
				
			}	
			$totalReg = json_encode($data);
			// echo $totalReg;exit;
			$this->smarty->assign('totalPeserta',$totalReg);
		}
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