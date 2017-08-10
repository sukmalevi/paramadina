<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Scheduler extends CI_Controller{
	function __construct(){
            parent::__construct();
            $this->db2 = $this->load->database('second', TRUE);
            $this->host	= $this->config->item('base_url');
        }
        
        function index(){
            if(!$this->input->is_cli_request()){
                echo "This script can only be accessed via the command line" . PHP_EOL;
                return;
            }
        }
        
        function autoMail(){        
        if(!$this->input->is_cli_request()){
                echo "This script can only be accessed via the command line" . PHP_EOL;
                return;
        }  else{
                $query = "SELECT DATEDIFF(A.createTime,NOW()) as countDay, A.email as kode, 
                        A.email as email , A.username
                        FROM `adis_smb_usr` A
                        LEFT JOIN adis_smb_form B ON A.email = B.kode
                        WHERE (stsApplyPaid = 0 AND LEFT(B.bukaSmb,4) = (SELECT MAX(tahun) FROM adis_periode_master WHERE status = 1 ))
                        AND DATEDIFF(A.createTime,NOW()) < -13 AND A.reminder = 0
						LIMIT 20";
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
				
				$monitor = array( "konten" =>"<p>Cront Running</p>");
				
				// $mailMon = "div.it@paramadina.ac.id";
				// $this->msmb->autoMail($mailMon, $monitor, "Moninotring : Cront Running", $mailMon);  
        }  
    }    
	
	function nonAktif(){
        if(!$this->input->is_cli_request()){
                    echo "This script can only be accessed via the command line" . PHP_EOL;
                    return;
            }else{			
                $query = "SELECT DATEDIFF(A.createTime,NOW()) as countDay, A.email as kode, A.username
                    FROM `adis_smb_usr` A
                    LEFT JOIN adis_smb_form B ON A.email = B.kode
                    WHERE (stsApplyPaid = 0 AND LEFT(B.bukaSmb,4) = (SELECT MAX(tahun) FROM adis_periode_master WHERE status = 1 ))
                    AND DATEDIFF(A.createTime,NOW()) < -30 AND A.nonaktif = 0 
                    LIMIT 20";
                $resQuer = $this->db2->query($query)->result_array();
                if (count($resQuer) > 0){
                        foreach ($resQuer as $val){  
                            $this->db->where('kode', $val['kode']);
                            $this->db->update('adis_smb_usr', array('nonaktif'=>1)); 
                            $message = $val['kode']." is nonaktif!";
                            file_put_contents($this->log, $date.": ".$message."\n",FILE_APPEND);
                        }
                }
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

