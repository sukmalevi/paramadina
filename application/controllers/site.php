<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller{
	function __construct(){
		parent::__construct();		
		// setlocale (LC_TIME, 'INDONESIA');
		date_default_timezone_set("Asia/Jakarta");
		$this->auth = unserialize(base64_decode($this->session->userdata('calon_mah')));
		$this->host	= $this->config->item('base_url');
		
		$this->db2 = $this->load->database('second', TRUE); 
		
		$this->smarty->assign('host',$this->host);
		$host = $this->host;
		
		//$this->session->unset_userdata("status");
	}
	
	function index() {
			if(!$this->auth){
			$status ="";
			$status = $this->session->userdata("status");
				
			$this->smarty->assign("status",$status);
			$this->smarty->display('login_soft.html');
			
			}else{
				header("Location: " .  $this->host."portal");
			}
		}
		
	function login(){
		$this->load->library('encrypt');
		$username = $this->input->post("username");
		$pass = $this->input->post("password");
		$date = date('Y-m-d H:i:s');
		if (!$username OR !$pass)
                    {echo "<script>alert('Username dan Password tidak boleh kosong!');history.go(-1);</script>";}
		
		$sql = "SELECT A.*, LEFT(bukaSmb, 8) as periode FROM adis_smb_usr A "
                        . "LEFT JOIN adis_smb_form B ON B.kode = A.kode "
                        . "WHERE A.kode = '$username'";
				
		$rs  = $this->db2->query($sql)->row();
		
		if ($rs){
			$row['password'] = $rs->password;
			$passdb = $this->encrypt->decode($row['password']);
			
			if($passdb != $pass){
                                echo "<script>alert('Password Yang Anda Masukkan Salah!');history.go(-1);</script>";
                        }
			else if($rs->validation_status == 0){
				$status ="notaktif";
				$this->session->set_userdata('status', $status);
				redirect ('/site', 'refresh');
			}else{
				$row['kode'] 		=  $rs->kode;
				$row['username'] 	=  $rs->username;
				$row['validation_status'] =  $rs->validation_status;
				$row['periode'] = $rs->periode;
                                
				if ($row['nonaktif'] == 1){
					$this->db->where('kode', $row['kode']);
					$this->db->update('adis_smb_usr', array('nonaktif'=>0)); 
				}                                
				
				$this->db->where('kode', $row['kode']);
				$this->db->update('adis_smb_usr', array('last_login'=>$date)); 
                                
				$this->session->set_userdata('calon_mah', base64_encode(serialize($row)));
				$this->session->unset_userdata("status");
				header("Location: " . $this->host."portal");
				
			}
                }else {
                    echo "<script>alert('Password atau Username Yang Anda Masukkan Salah!');history.go(-1);</script>";
                }

        }
	
	function logout(){
        $this->session->unset_userdata("calon_mah");
        header("Location: " . $this->host."site");
    }

}
?>