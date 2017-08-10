<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
	function __construct(){
		parent::__construct();	
		date_default_timezone_set("Asia/Jakarta");
		$this->db2 = $this->load->database('second', TRUE);
		$this->auth = unserialize(base64_decode($this->session->userdata('cuti_parmad')));
		
		$this->host	= $this->config->item('base_url');
		$this->smarty->assign('host',$this->host);
		$host = $this->host;
		
		
		$nama = $this->auth['name'];
		$level = $this->auth['level'];
		$this->smarty->assign('levelID',$level);
		$this->smarty->assign('nama',$nama);
		$this->smarty->assign('level',$level);
	}
	
	function index() {
			if(!$this->auth){
				$this->smarty->display('login.html');
			}else{
				header("Location: " .  $this->host."dashboard");
			}
		}
		
	function login(){
		$this->load->library('encrypt');
		$username = $this->input->post("username");
		$pass = $this->input->post("password");
		//$pass = $this->encrypt->encode($pass);
		if (!$username OR !$pass){echo "Salah";}
		
		// $sql = "SELECT * FROM tbl_usrm_users LEFT JOIN tbl_usrm_level ON tbl_usrm_users.tbl_usrm_level_id = tbl_usrm_level.id
				// WHERE tbl_usrm_users.username = '".$username."' limit 1";
			
		$sql = "SELECT * FROM adis_sys_usr u LEFT JOIN tbl_usrm_level l ON l.id = u.id_level WHERE u.kode = '$username';";
		$rs  = $this->db2->query($sql)->row();
		
		if ($rs){
			$row['password'] = $rs->password;
			$passdb = $this->encrypt->decode($row['password']);
			
			if($passdb != $pass){
				echo "<script>alert('Password Yang Anda Masukkan Salah!');history.go(-1);</script>";
				}
			else if($rs->status == 0){
				echo "<script>alert('User Tidak Aktif!');history.go(-1);</script>";
			}else{
				// $row['id'] 			=  $rs->id;
                // $row['username'] 	=  $rs->username;
				// $row['status'] 		=  $rs->aktif;
				// $row['name'] 		=  $rs->name;
                // $row['tbl_usrm_level_id'] 	=  $rs->tbl_usrm_level_id;
				// $row['id_pegawai'] 		=  $rs->id_pegawai;
				
				$row['id'] 			=  $rs->kode;
                $row['name'] 	=  $rs->username;
				$row['status'] 		=  $rs->status;
                $row['level'] 	=  $rs->id_level;
				$row['email'] 		=  $rs->email;
				
                $this->session->set_userdata('cuti_parmad', base64_encode(serialize($row)));
				header("Location: " . $this->host."dashboard");
				
				//redirect('/dashboard','refresh');
			}
        }else {
			echo "<script>alert('Password atau Username Yang Anda Masukkan Salah!');history.go(-1);</script>";
		}
		
	}
	
	function logout(){
        $this->session->unset_userdata("cuti_parmad");
        header("Location: " . $this->host."home");
    }
	
	function autoMail(){    
		if(!$this->input->is_cli_request()){
			echo "This script can only be accessed via the command line" . PHP_EOL;
			return;
		}  else{
			$query = "SELECT DATEDIFF(A.createTime,NOW()) as countDay, A.email as kode, 
				'rahmad.syalevi@paramadina.ac.id' as email , A.username
				FROM `adis_smb_usr` A
				LEFT JOIN adis_smb_form B ON A.email = B.kode
				WHERE (stsApplyPaid = 0 AND LEFT(B.bukaSmb,4) = (SELECT MAX(tahun) FROM adis_periode_master WHERE status = 1 ))
				AND DATEDIFF(A.createTime,NOW()) < -13 AND A.reminder = 0";
			$resQuer = $this->db2->query($query)->result_array();
			
			$this->load->model('msmb');
			
			$subject = "Friendly Reminder Admisi Universitas Paramadina";
			if (count($resQuer) > 0){
				foreach ($resQuer as $val){            
					$konten = array( "konten" =>
						  "<p>Dear ".$val['username']."</p>"
						. "<p>Terima kasih sudah membuat akun di admission.paramadina.ac.id, "
						. "silahkan segera melakukan pembayaran uang ujian Rp 300.000 ke No. Rekening Mandiri Universitas Paramadina 070.00000.43526</p>"
						. "<p>Bukti pembayaran diunggah ke admission.paramadina.ac.id sebelum hari kamis untuk mengikuti ujian terdekat.</p>"
						. "<p>Jika anda tidak segera melakukan pembayaran dan mengikuti ujian maka akun anda akan dinonaktifkan. "
						. "Otomatis aktif saat anda login kembali ke admisi</p>"
						. "<p>Untuk informasi lebih lanjut silahkan ke leo.ericton@paramadina.ac.id, WA 08159181190, PIN BB 28249c59 SMS 08159181188</p>"
						. "<br>"
						. "<a href='".$this->host."' class='btn' "
						. "style='border-radius: 6px;font-family: Arial;color: #ffffff;font-size: 13px;padding: 10px 20px 10px 20px;"
						. "text-decoration: none;background: #3498db;'>Login ke akun Admisi</a>"
						. "<br>"
						. "<br>"
						. "<br>"
						. "<br>Terima Kasih"
						. "<br>Best Regards"
						. "<br>"
						. "<br>"
						. "<br>Panitia SMB Universitas Paramadina"
						. "<br>"
						. "<br>"
						. "<br>"
						. "<br>Jl. Gatot Subroto Kav. 97 Mampang"
						. "<br>Jakarta 12790 Indonesia"
						. "<br>Office Ph : +62 21 7918 1188 Ext 213"
						. "<br>Office Fax : +62 21 799 3375"
						. "<br>E-mail : smb@paramadina.ac.id"
					);
					$this->msmb->autoMail($val['email'], $konten, $subject, $val['kode']);  
				}
			}
		}  
    }
	
	function laporan($p1 = '', $p2= ''){
		
		$this->load->model('madmisi');
		$post = $this->input->post();
				
		switch ($p1){
			case "select":		
				$site = "Select";	
				$lokasi = "Laporan";
				$pages = "seleksi";	
				
				$periode ="SELECT * FROM adis_periode_master WHERE erased = 0 ORDER by kode DESC";
				$periode = $this->db2->query($periode)->result();
				$this->smarty->assign('periode',$periode);
				
				$this->madmisi->mSelectJalur();
				$this->madmisi->mSelectProdi();
			break;
			case 'seleksi':
				$periode = $post['periode'];
				$prodi = $post['prodi'];
				$jalur = $post['jalur'];
				$whereQry = '';
				
				
				$this->grafikCalonMahasiswa($periode);
				##filter all query
				if($periode){ $whereQry = " LEFT(bukaSmb, 8) = '$periode' "; }
				if ($jalur != 'all'){
					$whereQry = " LEFT(bukaSmb,8) = '$periode' AND SUBSTR(bukaSmb,12,2) = '$jalur' ";
				}
				if ($prodi != 'all'){
					if ($jalur == 'all'){
						$whereQry = " LEFT(bukaSmb,8) = '$periode' AND RIGHT(bukaSmb, 4) = '$prodi' ";
					}else{
						$whereQry = " LEFT(bukaSmb,8) = '$periode' 
							AND SUBSTR(bukaSmb,12,2) = '$jalur' AND RIGHT(bukaSmb, 4) = '$prodi' ";
					}
				}
				// echo $whereQry;exit;
				$arrayStep = array("Daftar Online", "Bayar Formulir", "Mengikuti Seleksi", "Lulus Seleksi", "Daftar Ulang", "Mengundurkan Diri");
				
				$qryDaftar = "SELECT COUNT(A.kode) as mhsDaftar 
					FROM adis_smb_form A 
					WHERE $whereQry";
				$qryDaftar = $this->db2->query($qryDaftar)->row_array();
				
				$qryPayForm = "SELECT COUNT(A.kode) as mhsDaftar 
					FROM adis_smb_form A 
					WHERE $whereQry AND A.stsApplyPaid = 1";
				$qryPayForm = $this->db2->query($qryPayForm)->row_array();
				
				$qryHadirUjian = "SELECT COUNT(A.kode) as mhsDaftar
					FROM adis_smb_form A 
					WHERE $whereQry  AND A.stsEventConfirm = 1";
				$qryHadirUjian = $this->db2->query($qryHadirUjian)->row_array();
				
				$qrylulusUjian = "SELECT COUNT(A.kode) as mhsDaftar
					FROM adis_smb_form A 
					WHERE $whereQry AND A.stsResultConfirm = 1";
				$qrylulusUjian = $this->db2->query($qrylulusUjian)->row_array();
				
				$qryDaftarUlang = "SELECT COUNT(A.kode) as mhsDaftar 
					FROM adis_smb_form A 
					WHERE $whereQry  AND A.stsReapplyPaid = 1";
				$qryDaftarUlang = $this->db2->query($qryDaftarUlang)->row_array();
				
				$qryUndur = "SELECT COUNT(A.kode) as mhsDaftar
					FROM adis_smb_form A 
					WHERE $whereQry AND A.stsMundurAfterReapply = 1";
				$qryUndur = $this->db2->query($qryUndur)->row_array();
					
				$data[0] = array('Tahap Seleksi CMB','Jumlah CMB');	
				$data[1] = array($arrayStep[0],(int)$qryDaftar['mhsDaftar']);
				$data[2] = array($arrayStep[1],(int)$qryPayForm['mhsDaftar']);
				$data[3] = array($arrayStep[2],(int)$qryHadirUjian['mhsDaftar']);
				$data[4] = array($arrayStep[3],(int)$qrylulusUjian['mhsDaftar']);
				$data[5] = array($arrayStep[4],(int)$qryDaftarUlang['mhsDaftar']);
				$data[6] = array($arrayStep[5],(int)$qryUndur['mhsDaftar']);
				
				$totalReg = json_encode($data);
				$this->smarty->assign('totalReg',$totalReg);
				
				$arrIntBulan = '';
				$sql = "";
				
				$dataFrek[0] = array('Bulan','Jumlah Pendaftar CMB');
				for($i = 1; $i <= 12; $i++){
					if ($i < 10){
						$t = '0'.$i;
					}else{
						$t= $i;
					}
					
					$sql[$i] = "SELECT IF(COUNT(kode) = null, 0, COUNT(kode))  as mhsDaftar 
						FROM adis_smb_form A 
						WHERE DATE_FORMAT(createTime,'%m') = '$t' AND $whereQry
						GROUP BY LEFT(bukaSmb,10);";
					$sql[$i] = $this->db2->query($sql[$i])->row_array();
					if (!isset($sql[$i]['mhsDaftar'])){
						$sql[$i]['mhsDaftar'] = 0;
					}
					$arrIntBulan[$t] = $sql[$i]['mhsDaftar'];
					$dataFrek[$i] = array($t,(int)$sql[$i]['mhsDaftar']);
				}	
				
				
				$dataFrek[1] = array('Okt',(int)$sql[10]['mhsDaftar']);
				$dataFrek[2] = array('Nov',(int)$sql[11]['mhsDaftar']);
				$dataFrek[3] = array('Des',(int)$sql[12]['mhsDaftar']);
				$dataFrek[4] = array('Jan',(int)$sql[1]['mhsDaftar']);
				$dataFrek[5] = array('Peb',(int)$sql[2]['mhsDaftar']);
				$dataFrek[6] = array('Mar',(int)$sql[3]['mhsDaftar']);
				$dataFrek[7] = array('Apr',(int)$sql[4]['mhsDaftar']);
				$dataFrek[8] = array('Mei',(int)$sql[5]['mhsDaftar']);
				$dataFrek[9] = array('Jun',(int)$sql[6]['mhsDaftar']);
				$dataFrek[10] = array('Jul',(int)$sql[7]['mhsDaftar']);
				$dataFrek[11] = array('Ags',(int)$sql[8]['mhsDaftar']);
				$dataFrek[12] = array('Sep',(int)$sql[9]['mhsDaftar']);
				
				$totalRegFrek = json_encode($dataFrek);
				// echo $totalRegFrek;
				$this->smarty->assign('totalRegFrek',$totalRegFrek);
				
				$this->smarty->display('laporan/kontenSeleksi.html');
				
			break;
		}
		if ($p2 == ''){
			
			$this->smarty->assign('modul',"laporan/");
			$this->smarty->assign('lokasi',$lokasi);
			$this->smarty->assign('pages',$pages);
			$this->smarty->assign('site',$site);
			$this->smarty->display('index.html');
		}
	}
	
	function grafikCalonMahasiswa($periode){
		$periodeRow = $this->db2->query("SELECT * FROM adis_periode_master WHERE kode = '$periode'")->row_array();
		$QryProdi = $this->db2->query('SELECT * FROM `adis_prodi` WHERE jenjang = "'.$periodeRow['jenjangType'].'" 
			AND erased = 0;')->result_array();
			
		$qryjalur = $this->db2->query("SELECT * FROM adis_jalur_smb 
			WHERE jenjang = '".$periodeRow['jenjangType']."' AND erased = 0;")->result_array();
		
		
		$totalreg = array();         
		if ($periode){       
		
			foreach($qryjalur as $i => $v){
				$qry[$i] = "SELECT B.singkatan as prodi, COUNT(A.kode) as totalMhs FROM adis_smb_form A
					LEFT JOIN adis_prodi B ON B.kode = SUBSTR(A.bukaSmb,-4)
					WHERE (SUBSTR(bukaSmb, 1, 8) = '".$periode."' AND SUBSTR(A.bukaSmb,12,2) = '".$v['kode']."')
					GROUP BY B.nama;";
				$total[$i] = $this->db2->query($qry[$i])->result_array();
			} 
			
			$data[0] = array('PROGRAM STUDI','Mahasiswa');	
			
			for($i = 0; $i < count($QryProdi); $i++){
				$data[$i+1] = array($QryProdi[$i]['singkatan']);
				$data[0] = array('Program Studi');
				
				
				foreach($qryjalur as $k => $v){
					$dot = strlen($v['nama']) > 15 ? "..." : "";
					$data[0][$k+1] = substr($v['nama'],0,15).$dot;
					$totalall[$k] = 0;
					
					
					foreach($total[$k] as $x => $val){
						if ($val['prodi'] == $QryProdi[$i]['singkatan']){
							$totalall[$k] = $val['totalMhs'];
						}
						
					}	
					
					$data[$i+1][$k+1] = (int)$totalall[$k];
				}
				
			}	
			$totalReg = json_encode($data);
			// echo $totalReg;exit;
			$this->smarty->assign('totalPeserta',$totalReg);
		}
	}
	
	function test(){
		if(!$this->input->is_cli_request()){
			echo "This script can only be accessed via the command line" . PHP_EOL;
			return;
		}else{			
			echo "Hello Cron, can u help me?". PHP_EOL;
		}
	}

}
?>