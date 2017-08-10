<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrasi extends CUTI_Controller{
	function __construct(){
		parent::__construct();	
		setlocale (LC_TIME, 'INDONESIA');
		//$this->auth = unserialize(base64_decode($this->session->userdata('calon_mah')));
		$this->host	= $this->config->item('base_url');
		
		$this->db2 = $this->load->database('second', TRUE); 
		
		$modul = "pendaftaran/";
		$this->smarty->assign('modul',$modul);
		$this->smarty->assign('host',$this->host);
		$this->load->model('mregistrasi');
		$this->db2->query("SET lc_time_names = 'id_ID'");
		

	}
	
	function index() {
		$this->registrasiForm();
	}
		
	function faq(){
		$title = "FAQ";
		$page = "faq";
		$this->smarty->assign('title', $title);
		$this->smarty->assign('page', $page);
		$this->smarty->display("pendaftaran/index.html");		
	}

	function registrasiForm(){
		$this->mregistrasi->mSelectGender();
		$title = "FORM REGISTRASI";
		$page = "formPendaftaran";
		$this->smarty->assign('title', $title);
		$this->smarty->assign('page', $page);
		$this->smarty->display("pendaftaran/index.html");
	}
	
	function selectProdi(){
		$jenjang = $this->input->post("jenjang");
		
		$prodi ="SELECT * FROM adis_prodi WHERE erased = 0 AND jenjang = '$jenjang' ";
		$prodi = $this->db2->query($prodi)->result();			
		$view = '<option value="">--Pilih Program Studi--</option>
				{foreach name=lope from=$prodi item=row}
					<option value="{$row->kode}">{$row->nama}</option>
				{/foreach}';
					
		//INISIASI PERIODE YANG SEDANG AKTIF Berdasarkan Jenjang
		$periode = $this->db2->query("SELECT p.kode as id, m.jenjangType 
		from adis_periode p
		LEFT JOIN adis_periode_master m ON m.kode = p.idPeriodeMaster
		WHERE m.jenjangType = '$jenjang' AND p.status = 1 AND p.erased = 0")->row();
		$periode = $periode->id;
		$this->session->set_userdata('periode', $periode);
		
		//$periode = $this->db2->query("SELECT * from adis_periode WHERE jenjangType = '$jenjang' AND `status` = 1 AND erased = 0")->row();
		//$periode = $periode->kode;
		//$this->session->set_userdata('periode', $periode);
		
		////////////////////////////////////////////////////END
		
		$this->smarty->assign('prodi',$prodi);
		$this->smarty->display('string:'.$view);
	}
	
	function selectJalur(){
		
		$prodi = $this->input->post("prodi");
		// $periode = $this->session->userdata('periode');
		
		$jalur ="SELECT b.kode as kodesmb, j.nama as namajalur, p.kode , b.jalur, j.kode as kodejalur 
				,b.periode 
				FROM adis_buka_smb b
				INNER JOIN adis_prodi p ON b.prodi = p.kode
				INNER JOIN adis_jalur_smb j ON b.jalur = j.kode
				INNER JOIN adis_periode m ON m.kode = b.periode
				WHERE b.prodi = '$prodi' AND stsBuka = 1 AND b.erased = 0 AND m.`status` = 1";
		$jalur = $this->db2->query($jalur)->result();	
		
		$view = '<option value="">--Pilih Jalur Seleksi --</option>
				{foreach name=lope from=$jalur item=row}
					<option value="{$row->kodesmb}">{$row->namajalur}</option>
				{/foreach}';
		$this->smarty->assign('jalur',$jalur);
		$this->smarty->display('string:'.$view);
	}
	
	function formRegistrasi(){
		
		$prodi = $this->input->post("prodi");
		$jalur = $this->input->post("jalur");
		$names = $this->input->post("name");
		$sex = $this->input->post("sex");
		$ttl = $this->input->post("tempatLahir");
		$ocup = $this->input->post("occupation");
		$hp = $this->input->post("no_hp");
		$tlL = $this->input->post("tanggalLahir");
		
		require_once(APPPATH.'libraries/recaptchalib.php');
		$privatekey = "6Lcj_eoSAAAAADoqax2wXXYiskTaRz5YbWbSbCqF";
		$resp = recaptcha_check_answer ($privatekey,
                $_SERVER["REMOTE_ADDR"],
                $_POST["recaptcha_challenge_field"],
                $_POST["recaptcha_response_field"]);

		  if (!$prodi || !$jalur || !$names || !$sex || !$ttl || !$ocup || !$hp || !$tlL){
			echo '<script>alert("Kolom Program Studi & Jalur Seleksi Tidak Boleh Kosong!");history.go(-1);</script>';
		  }
		  
		  if (!$resp->is_valid) {
			// What happens when the CAPTCHA was entered incorrectly
			echo '<script>alert("The reCAPTCHA was not entered correctly. Go back and try it again.");history.go(-1);</script>';
			// die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
				 // "(reCAPTCHA said: " . $resp->error . ")");
		  } else {
			// Your code here to handle a successful verification	
			$email = $this->input->post("email");
			$count = $this->db2->query("SELECT * FROM adis_smb_usr WHERE kode = '$email'")->num_rows();
			
			if ($count > 0){
				echo '<script>alert("Email Sudah Terdaftar, Gunakan akun email yang lain.");history.go(-1);</script>';
			}else{
				$validation_key = md5(uniqid(rand()));
				$this->mregistrasi->mAddCalonMahasiswa($validation_key);
				
				// Validasi email terlebih dahulu.
				// Email configuration
					$config = Array(
						  'protocol' => 'smtp',
						  'smtp_host' => 'mail.paramadina.ac.id',
						  'smtp_port' => 25,
						  // 'smtp_user' => 'admin@students.paramadina.ac.id', // change it to yours
						  // 'smtp_pass' => 'v3mb424x1971', // change it to yours						  
						  'smtp_user' => 'rahmad.syalevi@paramadina.ac.id', // change it to yours
						  'smtp_pass' => '5ukm4zu7uA', // change it to yours
						  'mailtype' => 'html',
						  'charset' => 'utf-8',
						  'wordwrap' => FALSE,
						  'crlf' => '\r\n',
						  'newline' => '\r\n'
					);	
				
					$this->load->library('email', $config);
					$this->load->library('parser');
                                        
					$this->email->from('smb@paramadina.ac.id', "Panitia SMB Paramadina");
					$this->email->to($email);
					$this->email->bcc("rahmad.syalevi@paramadina.ac.id");                                        
				    $this->email->cc("div.humas@paramadina.ac.id");
					$konten = array( "konten" =>
							"Kepada Saudara ".$names.""
						  . "<br>"
						  . "<br>Untuk dapat Menggunakan Portal Online Admisi Paramadina, "
						  . "silahkan validasi akun Anda dengan mengunjungi tautan berikut :"
						  . "<br>"
						  . "<br>"
						  . "<br><a href='".$this->host."registrasi/validasi/".$validation_key."' class='btn' "
						  . "style='border-radius: 6px;font-family: Arial;color: #ffffff;font-size: 13px;padding: 10px 20px 10px 20px;
								text-decoration: none;background: #3498db;'>Validasi Akun</a>"
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
					$this->email->subject("Konfirmasi Pendaftaran Mahasiswa Baru Online Paramadina");
					
					$htmlMessage = $this->parser->parse('email_template.html', $konten, true);
					$this->email->message($htmlMessage);	
					$data['message'] = "Sorry Unable to send email...";	
					if($this->email->send()){					
						$data['message'] = "Mail sent...";			
					}
				//Memanggil fungsi notification
				$idActivity = "13.1";
				$this->activity($email, $idActivity, $email);
				
				//Kondisi mail server mati
				// $this->validasi($$validation_key);
				// $status = "valid";
				
				
				$status = "notvalid";
				$this->session->set_userdata('status', $status);
				
				redirect ('/site', 'refresh');
			}
		  }

		
	}
        
        function testMail(){
            $names = "Rahmad Syalevi";
            $validation_key = "iuerhwqeo98032";
            $config = Array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'students.paramadina.ac.id',
                        'smtp_port' => 25,
                        // 'smtp_user' => 'admin@students.paramadina.ac.id', // change it to yours
                        // 'smtp_pass' => 'v3mb424x1971', // change it to yours						  
                       'smtp_user' => 'rahmad.syalevi@paramadina.ac.id', // change it to yours
                       'smtp_pass' => '5ukm4zu7uA', // change it to yours
                        'mailtype' => 'html',
                        'charset' => 'utf-8',
                        'wordwrap' => FALSE,
                        'crlf' => '\r\n',
                        'newline' => '\r\n'
              );	

              $this->load->library('email', $config);
              $this->load->library('parser');

              $this->email->from('smb@paramadina.ac.id', "Panitia SMB Paramadina");
              $this->email->to("rahmadsyalevi@gmail.com");
              $this->email->cc("div.humas@paramadina.ac.id");
              $this->email->bcc("rahmad.syalevi@paramadina.ac.id");
              $konten = array( "konten" =>
                        "Kepada Saudara ".$names.""
                      . "<br>"
                      . "<br>Untuk dapat Menggunakan Portal Online Admisi Paramadina, "
                      . "silahkan validasi akun Anda dengan mengunjungi tautan berikut :"
                      . "<br>"
                      . "<br>"
                      . "<br><a href='".$this->host."registrasi/validasi/".$validation_key."' class='btn' "
                      . "style='border-radius: 6px;font-family: Arial;color: #ffffff;font-size: 13px;padding: 10px 20px 10px 20px;
                            text-decoration: none;background: #3498db;'>Validasi Akun</a>"
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
              $this->email->subject("Konfirmasi Pendaftaran Mahasiswa Baru Online Paramadina");

              $htmlMessage = $this->parser->parse('email_template.html', $konten, true);
              echo "<pre>";
              print_r($htmlMessage);
              $this->email->message($htmlMessage);	
              $data['message'] = "Sorry Unable to send email...";	
              if($this->email->send()){					
                      $data['message'] = "Mail sent...";			
              }
            
        }
	
	function validasi($validation_key = ""){
		if ($validation_key == ""){
			$validation_key = $this->uri->segment(3);
		}
		$usr = $this->db2->query("SELECT * FROM adis_smb_usr WHERE validation_Key = '$validation_key'")->row();
		
		if ($validation_key != ""){
		
			$this->db2->where("validation_key",$validation_key);
			$this->db2->update("adis_smb_usr", array("validation_status"=>1));
			
			$email = $usr->kode;
			$idActivity = "13.2";
			$this->activity($email, $idActivity, $email);
			
			$status = "valid";
			$this->session->set_userdata('status', $status);
			
			
			redirect ('/site', 'refresh');
			
		}else{
			header("Location: " .  $this->host."site");
		}
	}
	
	function activity($email, $idActivity, $user){
		$kode = uniqid();
		$date = date("Y-m-d H:i:s");
		$activity = $this->db2->query("SELECT nama, kode FROM adis_type WHERE kode = '$idActivity'")->row();
		$this->db2->insert('adis_activity', array('kode'=>$kode,
								'id_activity'=>$activity->kode,
								'created_date'=>$date,
								'created_user'=>$user,
								'nama_activity'=>$activity->nama,
								'status_activity'=>0,
								'id_cmb'=>$email
								));
	}
}
