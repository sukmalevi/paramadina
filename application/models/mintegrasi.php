<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class Mintegrasi extends CUTI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	function Mintegrasi(){
		parent::__construct();
		
		$this->db2->query("SET lc_time_names = 'id_ID'");
		
	}
	/*** Di panggil ketika mahasiswa melakukan pembayaran di portal Admisi ****/
	function pembayaran_admisi($kode){ 
		
		$host_asik = "https://asik.paramadina.ac.id/gt/gtpembayaran/";
		$service_url = $host_asik.'index.php?mod=service&sub=pembayaranAdmisi&act=rest&typ=rest';
		
		$username = 'registrasi';
		$password = 'regGT2015';
		$sql = "SELECT nomor as mahasiswaNoPendaftaran, d.kode_asik as mahasiswaProdiKode,
				j.kode_asik as mahasiswaJalurKode, REPLACE(LEFT(bukaSmb, 6),'.','') as mahasiswaPeriodeKode, 
                                p.nama as mahasiswaNama,
				applyBankTransferAmount as nominal, dueDateTagihanDaftar as dueDateTagihan
				FROM `adis_smb_form` f
				LEFT JOIN adis_smb_usr_pribadi p ON p.kode = f.kode
				LEFT JOIN adis_smb_usr_keu k ON k.smbUsr = f.kode
				LEFT JOIN adis_jalur_smb j ON SUBSTR(f.bukaSmb,12,2) = j.kode
				LEFT JOIN adis_prodi d ON d.kode = RIGHT(f.bukaSmb,4)
				WHERE f.kode = '$kode'";
		$json_daftar = $this->db2->query($sql);		
		$data = '';
		foreach($json_daftar->result_array() as $row){
			$data[] = $row;
			
		}
		//print_r($data);
		
		
		$curl_post_data = json_encode($data);
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $service_url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT ,0);
		curl_setopt($curl, CURLOPT_TIMEOUT, 400); //timeout in seconds
		curl_setopt($curl, CURLOPT_VERBOSE, true); #debugging purpose only

		$curl_response = curl_exec($curl);
		curl_close($curl);

		$response = json_decode($curl_response, true);
//		echo $curl_post_data;
//		print_r($curl_response);                
                
		$resp = $response['gtfwResult'];
                $respon = $resp['status'];
//              echo $respon;
                $step = "daftar";                
                $this->status_integrasi($kode, $respon, $step);
                $this->log_asik_resp($kode, "Pembayaran Admisi : ".$curl_response." Parameter : ".$curl_post_data);
                
                if ($respon == '419'){$this->sendMail($step, $kode, $curl_response);}
		
	}
	
	/*** Di gunakan ketika KEU melakukan Approval transaksi keuangan mahasiswa di Admin Admisi ***/
	function validasi_pemb_admisi($kode){ 
		
		$host_asik = "https://asik.paramadina.ac.id/gt/gtpembayaran/";
		$service_url = $host_asik.'index.php?mod=service&sub=validasiPembayaranAdmisi&act=rest&typ=rest';
		
		$username = 'registrasi';
		$password = 'regGT2015';
		
		$sql = "SELECT nomor as mahasiswaNoPendaftaran, 
			k.no_tagihan_daftar as nomorTagihan,
			applyBankTransferTime as tanggalBayar
			FROM adis_smb_form f
			LEFT JOIN adis_smb_usr_keu k ON k.smbUsr = f.kode
			WHERE stsApplyPaidConfirm = 1 AND f.kode = '$kode'";		
		$json_bayar_daftar = $this->db2->query($sql);
		
		foreach($json_bayar_daftar->result_array() as $row){
			$data[] = $row;
			
		}
		//print_r($data);
		
		$curl_post_data = json_encode($data);
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $service_url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT ,0);
		curl_setopt($curl, CURLOPT_TIMEOUT, 400); //timeout in seconds
		curl_setopt($curl, CURLOPT_VERBOSE, true); #debugging purpose only

		$curl_response = curl_exec($curl);
		curl_close($curl);

		$response = json_decode($curl_response, true);
		//echo $curl_post_data;
//		print_r($curl_response);
                
		$resp = $response['gtfwResult'];
                $respon = $resp['status'];
//                echo $respon;
                $step = "bayar_daftar";                
                $this->status_integrasi($kode, $respon, $step);
                $this->log_asik_resp($kode, "Validasi Bayar Pendaftaran Admisi : ".$curl_response." Parameter : ".$curl_post_data);
		
                if ($respon == '419'){$this->sendMail($step, $kode, $curl_response);}
	}
        
	/*** Di gunakan ketika KEU melakukan Approval transaksi keuangan mahasiswa di Admin Admisi ***/
        function update_noreg($kode){
		
		$host_asik = "https://asik.paramadina.ac.id/gt/gtpembayaran/";
		$service_url = $host_asik.'index.php?mod=service&sub=updateNoregDaftar&act=rest&typ=rest';
		
		$username = 'registrasi';
		$password = 'regGT2015';
		
		$sql = "SELECT k.no_tagihan_daftar as noregLama, nomor as noregBaru
			FROM adis_smb_form f
			LEFT JOIN adis_smb_usr_keu k ON k.smbUsr = f.kode
			WHERE stsApplyPaidConfirm = 1 AND f.kode = '$kode'";		
		$json_noreg = $this->db2->query($sql)->row_array();
		$data = $json_noreg;
		
		//print_r($data);
		
		$curl_post_data = json_encode($data);
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $service_url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT ,0);
		curl_setopt($curl, CURLOPT_TIMEOUT, 400); //timeout in seconds
		curl_setopt($curl, CURLOPT_VERBOSE, true); #debugging purpose only

		$curl_response = curl_exec($curl);
		curl_close($curl);

		$response = json_decode($curl_response, true);
		//echo $curl_post_data;
//		print_r($curl_response);
                
		$resp = $response['gtfwResult'];
                $respon = $resp['status'];
//                echo $respon;
                $step = "update_noreg";                
                $this->status_integrasi($kode, $respon, $step);
                $this->log_asik_resp($kode, "Update Noreg : ".$curl_response." Parameter : ".$curl_post_data);
		
                if ($respon == '419'){$this->sendMail($step, $kode, $curl_response);}
	}
	
	/*** Digunakan ketika Admin Admisi mengubah status mahasiswa menjadi lulus di Modul Admin Admisi ***/
	function insert_mahasiswa($kode){ 
		
		$host_asik = "https://asik.paramadina.ac.id/gt/gtpembayaran/";
		$service_url = $host_asik.'index.php?mod=service&sub=addMahasiswa&act=rest&typ=rest';
		
		$username = 'registrasi';
		$password = 'regGT2015';
		
		$sql = "SELECT 
                        f.nomor as mahasiswaNoPendaftaran, 
                        f.nim as mahasiswaNIM, 
                        f.nomor as mahasiswaNoTest, 
                        p.nama as mahasiswaNama, 
                        p.rumahAlamat as mahasiswaAlamat, 
                        d.kode_asik as mahasiswaProdiKode,
                        LEFT(bukaSmb, 4) as mahasiswaAngkatan, 
                        CONCAT('','0',f.stsResultGrade) as mahasiswaPeringkatKode,
                        j.kode_asik as mahasiswaJalurKode, 
                        CONCAT(LEFT(bukaSmb, 4),pm.semester) as mahasiswaPeriodeKode ,
                        IF((SELECT COUNT(k.kode) FROM adis_smb_usr_kel k WHERE k.smbUsr = f.kode) > 0 , 'AD', 'UM') as mahasiswaStatKelKode,
                        'CM' as mahasiswaStatusMhsKode,
                        IF(e.lulus_acc = 'D3', 'D3', 'SMA') as mahasiswaLulusAsal,
                        d.konsentrasi as mahasiswaKonsentrasi,
                        k.alumni_s1 as mahasiswaS2Alumni,
						k.earlyBird as mahasiswaGelombang
                        FROM adis_smb_form f
                        LEFT JOIN adis_smb_usr_pribadi p ON p.kode = f.kode
                        LEFT JOIN adis_jalur_smb j ON SUBSTR(f.bukaSmb,12,2) = j.kode
                        LEFT JOIN adis_prodi d ON d.kode = RIGHT(f.bukaSmb,4)
                        LEFT JOIN adis_smb_usr_edu e ON e.smbUsr = f.kode
                        LEFT JOIN adis_smb_usr_keu k ON k.smbUsr = f.kode
                        LEFT JOIN adis_periode_master pm ON pm.kode = LEFT(f.bukaSmb, 8)
                        WHERE f.stsResultConfirm = 1 AND 
                        f.kode = '$kode'";		
		$json_data_calon_mah = $this->db2->query($sql);
		
		foreach($json_data_calon_mah->result_array() as $row){
				$data['mahasiswa'] = array($row);;
			
		}
		// print_r($data);
		
		$curl_post_data = json_encode($data);
		
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $service_url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT ,0);
		curl_setopt($curl, CURLOPT_TIMEOUT, 400); //timeout in seconds
		curl_setopt($curl, CURLOPT_VERBOSE, true); #debugging purpose only

		$curl_response = curl_exec($curl);
		curl_close($curl);

		$response = json_decode($curl_response, true);
		
		// print_r($curl_response);
                
		$resp = $response['gtfwResult'];
		$respon = $resp['status'];
//                echo $respon;
		$step = "insert_cmb";                
		$this->status_integrasi($kode, $respon, $step);
		
		$this->log_asik_resp($kode, "Insert Mahasiswa : ".$curl_response." Parameter : ".$curl_post_data);   
		
		if ($respon == '419'){$this->sendMail($step, $kode, $curl_response);}
		
		return $respon;
	}
	
	/**** Digunakan ketika mahasiswa melakukan pembayaran daftar ulang di modul portal Admisi ***/
	function generate_tagihan($kode, $kode_jalur){ 
		
		$host_asik = "https://asik.paramadina.ac.id/gt/gtpembayaran/";
		if ($kode_jalur == '10' || $kode_jalur == 'F1' || $kode_jalur == 'F2' || $kode_jalur == 'F5' || $kode_jalur == 'F7'){
			$service_url = $host_asik . 'index.php?mod=service&sub=generateTagihanRegistrasiS2&act=rest&typ=rest';
		}else{
			$service_url = $host_asik . 'index.php?mod=service&sub=generateTagihanRegistrasi&act=rest&typ=rest';                    
		}
		
		$username = 'registrasi';
		$password = 'regGT2015';
			
		$nominal = "";
		$tglTempo = "";
                
		$json_tagihan = "";
		
		$transferKah = "0";
		
		IF ($kode_jalur == 'KP'){                    
	
			$sql = "SELECT a.nomor as mahasiswaNoPendaftaran, 
					CONCAT(LEFT(a.bukaSmb, 4), pm.semester) as mahasiswaPeriodeKode,  
					IF (p.pembayaran = '69', 1, 0) as tagihanIsCicilan, 
					'0' as potonganEarlyBird,
					CASE 
						WHEN k.sks_acc > 41 AND k.sks_acc < 81 THEN '25'
						WHEN k.sks_acc > 81 AND k.sks_acc < 100 THEN '50'																		ELSE '0'
					END AS potonganMahasiswaTransfer
					FROM adis_smb_form a 
					LEFT JOIN adis_smb_usr_keu k ON k.smbUsr = a.kode
					LEFT JOIN adis_pembayaran_paralel p ON p.kode = k.metodBayarDaftarUlang 
						AND p.periode_kode = LEFT(a.bukaSmb, 8)
					LEFT JOIN adis_periode_master pm ON pm.kode = LEFT(a.bukaSmb, 8)
					WHERE a.stsReapplyPaid = 1 AND a.kode = '$kode'";		
			$json_tagihan = $this->db2->query($sql);
                        
			$cicilan = "SELECT p.pembayaran,
				CONCAT_WS(',',p.angsuran1,p.angsuran2,p.angsuran3,p.angsuran4, p.angsuran5) as nominal,
				CONCAT_WS(',', p.due_date1, p.due_date2, p.due_date3, p.due_date4, p.due_date5) as tglJatuhTempo,
                                 p.bpp, p.sks, p.spp, p.uangMasuk
				FROM adis_smb_form a 
				LEFT JOIN adis_smb_usr_keu k ON k.smbUsr = a.kode
				LEFT JOIN adis_pembayaran_paralel p ON p.kode = k.metodBayarDaftarUlang
                                    AND p.periode_kode = LEFT(a.bukaSmb, 8)
				WHERE a.stsReapplyPaid = 1 AND a.kode = '$kode'";
			$cicilan = $this->db2->query($cicilan);
			$rows_a = $cicilan->row_array();
                        
			IF ($rows_a['pembayaran'] == '69'){				
				$nominal = explode(",",$rows_a['nominal']);
				$tglTempo = explode(",",$rows_a['tglJatuhTempo']);
			}
			
		}else{                    
				if ($kode_jalur == '10' || $kode_jalur == 'F1' || $kode_jalur == 'F2' || $kode_jalur == 'F5' || $kode_jalur == 'F7'){
					$sql = "SELECT p.*,k.*, a.nomor as mahasiswaNoPendaftaran, 
							CONCAT(LEFT(a.bukaSmb, 4), pm.semester) as mahasiswaPeriodeKode, 
							IF (k.metodePembayaran = 1, 0, 1) as tagihanIsCicilan,
							IF (a.earlyBird = '99', 30, 0 ) as potonganEarlyBird,
							CASE 
								WHEN k.sks_acc > 41 AND k.sks_acc < 81 THEN '25'
								WHEN k.sks_acc > 81 AND k.sks_acc < 100 THEN '50'																		ELSE '0'
							END AS potonganMahasiswaTransfer
							FROM adis_smb_form a 
							LEFT JOIN adis_smb_usr_keu k ON k.smbUsr = a.kode
							LEFT JOIN adis_pembayaran_s2 p ON p.kode = k.metodBayarDaftarUlang 
							LEFT JOIN adis_periode_master pm ON pm.kode = LEFT(a.bukaSmb, 8)
							WHERE a.kode = '$kode'";		
					$json_tagihan = $this->db2->query($sql); 
					$SQLrry = $json_tagihan->row_array();
					
					$arrTglAng = array();
					$arrNomCil = array();
					$biayaUM = "";
					$biayaSks = "";
					$biayaSpp = "";
					$biayaSksAng = "";
					
					switch ($kode_jalur){
					case '10' : 
							$biayaUM = $SQLrry['uangMasuk']; 
							$biayaSpp = $SQLrry['biayaSpp']; 
							$biayaSks = $SQLrry['biayaSks'];
							$biayaSksAng = $SQLrry['biayaSks']; 
							break;
					case 'F2' : 
							// $biayaUM = $SQLrry['uangMasuk']-(0.25*$SQLrry['uangMasuk']); 
							// $biayaSpp = $SQLrry['biayaSpp']-(0.25*$SQLrry['biayaSpp']);
							$biayaSks = $SQLrry['sksSem1F25'];
							break;
					case 'F5' : 
							// $biayaUM = $SQLrry['uangMasuk']-(0.5*$SQLrry['uangMasuk']); 
							// $biayaSpp = $SQLrry['biayaSpp']-(0.5*$SQLrry['biayaSpp']);
							$biayaSks = $SQLrry['sksSem1F50']; 
							break;
					case 'F7' : 
							// $biayaUM = $SQLrry['uangMasuk']-(0.75*$SQLrry['uangMasuk']); 
							// $biayaSpp = $SQLrry['biayaSpp']-(0.75*$SQLrry['biayaSpp']);
							$biayaSks = $SQLrry['sksSem1F75']; 
							break;
					case 'F1' : 
							$biayaUM = $SQLrry['uangMasuk']; 
							$biayaSpp = $SQLrry['biayaSpp']; 
							$biayaSks = $SQLrry['biayaSks'];
							$biayaSksAng = $SQLrry['biayaSks']; 
							break;
					}
					
					$alumni = $SQLrry['alumni_s1'];
					$earlybirdS2 = $SQLrry['earlybird'];
					$keluargacivitas = $SQLrry['keluargacivitas'];
					$keluargadlb = $SQLrry['keluargadlb'];
					$metPembayaran = $SQLrry['metodePembayaran'];
					$uangMasuk = $SQLrry['uangMasuk'];
					$hasilUM = $uangMasuk;
					
					// Total Uang Masuk dibagi jumlah semester
					$biayaUM = $hasilUM/$SQLrry['jumlahSemester'];
					
					if ($SQLrry['tagihanIsCicilan'] == 1){
						$arrTglAng = array($SQLrry['dueDate1'],$SQLrry['dueDate2']);
					}else{
						$arrTglAng = array ();
					}
					$arrNomCil = array($biayaSks,($biayaSpp+($biayaUM))); 
					
					foreach ($json_tagihan->result_array() as $row){
						$data['mahasiswaNoPendaftaran'] = $row['mahasiswaNoPendaftaran'];
						$data['mahasiswaPeriodeKode'] = $row['mahasiswaPeriodeKode'];
						$data['tagihanIsCicilan'] = $row['tagihanIsCicilan'];
						$data['totalSppSksBpp'] = $biayaSpp+$biayaSks;
						$data['tglJatuhTempo'] = $arrTglAng;
						$data['nominalCicilan'] = $arrNomCil;                          
					}
				}else{
					$sql = "SELECT a.nomor as mahasiswaNoPendaftaran, 
							CONCAT(LEFT(a.bukaSmb, 4), pm.semester) as mahasiswaPeriodeKode, 
							IF (p.pembayaran = '69', 1, 0) as tagihanIsCicilan,
							IF (p.pembayaran = '69', 0, IF (a.earlyBird = '99', 30, 0 )) as potonganEarlyBird,
							CASE 
								WHEN k.sks_acc > 41 AND k.sks_acc < 81 THEN '25'
								WHEN k.sks_acc > 81 THEN '50'																		ELSE '0'
							END AS potonganMahasiswaTransfer
							FROM adis_smb_form a 
							LEFT JOIN adis_smb_usr_keu k ON k.smbUsr = a.kode
							LEFT JOIN adis_pembayaran p ON p.kode = k.metodBayarDaftarUlang 
								AND p.periode_kode = LEFT(a.bukaSmb, 8)
							LEFT JOIN adis_periode_master pm ON pm.kode = LEFT(a.bukaSmb, 8)
							WHERE a.stsReapplyPaid = 1 AND a.kode = '$kode'";		
							// WHEN k.sks_acc > 81 AND k.sks_acc < 100 THEN '50'	
					$json_tagihan = $this->db2->query($sql);

					$cicilan = "SELECT 
								CONCAT_WS(',',k.cicilan1,k.cicilan2,k.cicilan3) as nominal,
								CONCAT_WS(',', c.due_date1, c.due_date2, c.due_date3) as tglJatuhTempo,
								p.bpp, p.sks, p.spp
								FROM adis_smb_form a 
								LEFT JOIN adis_smb_usr_keu k ON k.smbUsr = a.kode
								LEFT JOIN adis_pembayaran p ON p.kode = k.metodBayarDaftarUlang
									AND p.periode_kode = LEFT(a.bukaSmb, 8)
								LEFT JOIN adis_cicilan c On c.id_pembayaran = p.kode 
									AND p.periode_kode = c.periode_kode
								WHERE a.stsReapplyPaid = 1 AND a.kode = '$kode'";
					$cicilan = $this->db2->query($cicilan);

					$num_rows = $cicilan->num_rows();
					$rows_a = $cicilan->row_array();

					if ($num_rows > 0){
							$nominal = explode(",",$rows_a['nominal']);
							$tglTempo = explode(",",$rows_a['tglJatuhTempo']);
					}
					
					foreach ($json_tagihan->result_array() as $row){
						$data['mahasiswaNoPendaftaran'] = $row['mahasiswaNoPendaftaran'];
						$data['mahasiswaPeriodeKode'] = $row['mahasiswaPeriodeKode'];
						$data['tagihanIsCicilan'] = $row['tagihanIsCicilan'];
						IF ($kode_jalur == 'KP'){         
							$data['totalSppSksBpp'] = $rows_a['spp']+$rows_a['sks']+($rows_a['uangMasuk']*4);
//                            $data['totalSppSksBpp'] = $rows_a['angsuran1'];
						}else{
							$data['totalSppSksBpp'] = $rows_a['spp']+$rows_a['sks']+$rows_a['bpp'];
						}
						$data['tglJatuhTempo'] = $tglTempo;
						$data['nominalCicilan'] = $nominal;
						$data['potonganEarlyBird'] = $row['potonganEarlyBird']; //default 0 tidak ada potongan early bird. jika di isi 30 maka ada potongan 30%
						$data['potonganMahasiswaTransfer'] = $row['potonganMahasiswaTransfer']; //default 0 bukan mahasiswa transfer, jika di isi 25 maka potongan 25%,atau misal di isi 50 maka ada potongan 50%

					}
				}
		}
		
		$data = array($data);
		
		 // echo "<pre>";
		 // print_r($data);
		
		$curl_post_data = json_encode($data);
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $service_url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT ,0);
		curl_setopt($curl, CURLOPT_TIMEOUT, 400); //timeout in seconds
		curl_setopt($curl, CURLOPT_VERBOSE, true); #debugging purpose only

		$curl_response = curl_exec($curl);
		curl_close($curl);			
		
		$response = json_decode($curl_response, true);
		// print_r($curl_response);
                
		$respon = $response['gtfwResult'];
		$status = $respon['status'];
		$notagihantemp = $respon['data'];
                
		if($status == '201'){
			if ($kode_jalur == '10' || $kode_jalur == 'F1' || $kode_jalur == 'F2' || $kode_jalur == 'F5' || $kode_jalur == 'F7'){                       
				$notagihantemp = explode(',',$notagihantemp);
				$arrCount = count($notagihantemp);
				if ($arrCount > 1){
					$notagihan1 = $notagihantemp[0];
					$notagihan2 = $notagihantemp[1];
					$this->db2->query("UPDATE adis_smb_usr_keu SET no_tagihanSppSksBpp = '$notagihan1',"
								. " no_tagihan1 = '$notagihan1', no_tagihan2 = '$notagihan2' "
								. " WHERE smbUsr='$kode';");   
				}else{
					$notagihan1=$notagihantemp[0];
					$this->db2->query("UPDATE adis_smb_usr_keu SET no_tagihanSppSksBpp = '$notagihan1' "
								. " WHERE smbUsr='$kode';");   
				}
			}else{
				if ($row['tagihanIsCicilan'] == 1){
					$notagihanSppSksBpp = $notagihantemp[0];
					$notagihan1         = $notagihantemp[1];
					$notagihan2         = $notagihantemp[2];
					$notagihan3         = $notagihantemp[3];				
											   
					$this->db2->query("UPDATE adis_smb_usr_keu "
								. " SET no_tagihanSppSksBpp = '$notagihanSppSksBpp', "
								. " no_tagihan1 = '$notagihan1', no_tagihan2 = '$notagihan2', "
								. " no_tagihan3 = '$notagihan3' WHERE smbUsr='$kode';");
				}else{
					$notagihan1=$notagihantemp[0];
					$this->db2->query("UPDATE adis_smb_usr_keu SET no_tagihanSppSksBpp = '$notagihan1' "
										. " WHERE smbUsr='$kode';");		
				}
			}
		}          
                
		$step = "gen_tagihan";                
		$this->status_integrasi($kode, $status, $step);
		$this->log_asik_resp($kode, "Generate Tagihan : ".$curl_response." Parameter : ".$curl_post_data);
		
		if ($status == '419'){$this->sendMail($step, $kode, $curl_response);}      
		
		return $status;
	}
	
	function generateTagParalel($kode){    

            $host_asik = "https://asik.paramadina.ac.id/gt/gtpembayaran/";
            $service_url = $host_asik . 'index.php?mod=service&sub=generateTagihanRegistrasiPar&act=rest&typ=rest';               

            $username = 'registrasi';
            $password = 'regGT2015';
                
            $sql = "SELECT A.nomor as mahasiswaNoPendaftaran, CONCAT(LEFT(A.bukaSmb,4), D.semester) as mahasiswaPeriodeKode, 
                    (LEFT(A.bukaSmb,8)) as periodeAdmisi, B.metodBayarDaftarUlang as kodePembayaran,
                    '1' as tagihanIsCicilan, '1' as potonganEarlyBird, '0' as potonganMahasiswaTransfer,
                    C.spp, C.uangMasuk,B.totalBiayaDaftarUlang as pilihanUM , C.biayaPerSks,C.jumlahSks,
                    (C.biayaPerSks*C.jumlahSks) as biayaSksSemester, F.tgl_jatuh_tempo, C.tempoAngsuran, C.biayaPembeda
                    ,C.pilihanBiayaUM
                    FROM adis_smb_form A
                    LEFT JOIN adis_smb_usr_keu B ON B.smbUsr = A.kode
                    INNER JOIN adis_pembayaran_kelasmalam C ON C.kode = B.metodBayarDaftarUlang AND C.periode_kode = (LEFT(A.bukaSmb,8))
                    LEFT JOIN adis_periode_master D ON D.kode = LEFT(A.bukaSmb,8)
                    INNER JOIN tbl_tgl_tempo_kelasmalam F ON F.kode_periode = (LEFT(A.bukaSmb,8)) AND F.kode_pembayaran = B.metodBayarDaftarUlang
                    WHERE A.stsReapplyPaid = 1 AND A.kode = '$kode'";		
            $sql = $this->db2->query($sql)->row_array();
            $tahun = substr($sql['periodeAdmisi'], 0, 4);
            
            $periodeQry = "SELECT A.*, CONCAT(A.tahun, A.semester)as periode 
					FROM adis_periode_master A 
					WHERE (tahun >= '$tahun' AND jenjangType = 1) AND kode = '".$sql['periodeAdmisi']."';";
            $result_per = $this->db2->query($periodeQry)->result_array();
            
            $arry = array();
            $arry['uangMasukPilihan'] = $sql['pilihanUM'];
            $arry['spp'] = $sql['spp'];
            $arry['jumlahSks'] = $sql['jumlahSks'];
            $arry['tempoAngsuran'] = $sql['tempoAngsuran'];
            $arry['biayaPerSks'] = $sql['biayaPerSks'];
            $arry['totalBiaya'] = ($sql['uangMasuk']+$sql['spp'])+($sql['jumlahSks']*$sql['biayaPerSks']); 
            $pilihanUM = json_decode($sql['pilihanBiayaUM']);
            $biayaPembeda = json_decode($sql['biayaPembeda']);
            $idxArrPilihan = "";
            foreach ($pilihanUM as $k => $val){
                if ($val == $sql['pilihanUM']){
                    $idxArrPilihan = $k;
                }
            }
            $arry['$idxArrPilihan'] = $idxArrPilihan;              
            $arry['biayaPembeda'] = $biayaPembeda[$idxArrPilihan];              

            $arry2['biayaAngsur'] = $arry['totalBiaya'] - $arry['uangMasukPilihan'] - $arry['biayaPembeda'];
            for($i = 0; $i < $arry['tempoAngsuran']-1; $i++){
                $arryAngsur[$i] = $arry2['biayaAngsur']/($arry['tempoAngsuran']-1);
            }
            $arryPil = $arryAngsur;            
            
            $arrTglTempo = array();
            $sqlTglTempo = $this->db2->query("SELECT * FROM tbl_tgl_tempo_kelasmalam "
                    . " WHERE kode_pembayaran = '".$sql['kodePembayaran']."' 
					 AND kode_periode = '".$sql['periodeAdmisi']."';")->row_array();
					 
					 
            $arrTglTempo = json_decode($sqlTglTempo['tgl_jatuh_tempo']);
            
            foreach ($result_per as $key => $v){
                foreach ($arrTglTempo as $k => $val){
                    if (($val > $v['tanggalMulai']) && ($val < $v['tanggalSelesai']))
                    {
                      $arryPeriode[$k] = $v['periode'];
                    }
                }
            }
            
            $lengthArr = count($arryPeriode); //Disimpan untuk parameter yang akan digunakan pada generate berikutnya
            $arry['periodeTagihan'] = $arryPeriode;
            $arry['tglTagihan'] = array_slice($arrTglTempo, 0, $lengthArr);
            $arry['angsuranTagihan'] = array_slice($arryPil, 0, $lengthArr);
            
            $periodeUM = array($tahun."1");
            $tglTagiUM = array($arry['tglTagihan'][0]);
            $valTagiUM = array($arry['uangMasukPilihan']);
            
            array_splice( $arry['periodeTagihan'] , 0, 0, $periodeUM);
            array_splice( $arry['tglTagihan'], 0, 0, $tglTagiUM );
            array_splice( $arry['angsuranTagihan'], 0, 0, $valTagiUM);
            
            $data['mahasiswaNoPendaftaran'] = $sql['mahasiswaNoPendaftaran'];
            $data['tagihanPeriode'] = $arry['periodeTagihan'];
            $data['tagihanIsCicilan'] = $sql['tagihanIsCicilan'];
            $data['tglJatuhTempo'] = $arry['tglTagihan'];
            $data['nominalCicilan'] = $arry['angsuranTagihan'];
            
            $data = array($data);
//		
//            echo "<pre>";
//            print_r($data);
		
            $curl_post_data = json_encode($data);
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $service_url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
            curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT ,0);
            curl_setopt($curl, CURLOPT_TIMEOUT, 400); //timeout in seconds
            curl_setopt($curl, CURLOPT_VERBOSE, true); #debugging purpose only

            $curl_response = curl_exec($curl);
            curl_close($curl);			

            $response = json_decode($curl_response, true);
//            print_r($curl_response);
            
            $respon = $response['gtfwResult'];
            $status = $respon['status'];
            $notagihantemp = $respon['data'];

            if($status == '201'){	
                $notagihantemp = json_encode($notagihantemp);
                $this->db2->query("UPDATE adis_smb_usr_keu "
                    . " SET noTagihanParalel = '$notagihantemp' "
                    . " WHERE smbUsr='$kode';");      
            }          

            $step = "gen_tagihan";                
            $this->status_integrasi($kode, $status, $step);
            $this->log_asik_resp($kode, "Generate Tagihan : ".$curl_response." Parameter : ".$curl_post_data);

            if ($status == '419'){$this->sendMail($step, $kode, $curl_response);}

            return $status;
        }
	
	
	/***** Digunakan ketika bagian keuangan melakukan approval transaksi 
       *** keuangan pendaftaran ulang mahasiswa di admin Admisi ***/
	function validasi_pembayaran($kode, $jalur){ 
		
		$host_asik = "https://asik.paramadina.ac.id/gt/gtpembayaran/";
		$service_url = $host_asik.'index.php?mod=service&sub=validasiTagihanRegistrasi&act=rest&typ=rest';
		
		$username = 'registrasi';
		$password = 'regGT2015';
		
		$sql = "SELECT f.nomor as mahasiswaNoPendaftaran, 
			k.no_tagihanSppSksBpp as nomorTagihan, k.noTagihanParalel,
			REPLACE(LEFT(f.bukaSmb, 6), '.','') as pembayaranPeriodeKode,
			TRUNCATE(f.reapplyBankTransferAmount, 0) as totalBayar, 
                        f.reapplyBankTransferTime as tanggalBayar
			FROM adis_smb_form f
			LEFT JOIN adis_smb_usr_keu k ON k.smbUsr = f.kode
			WHERE f.stsReapplyPaidConfirm = 1 AND
			f.kode = '$kode';";		
		$dataJson = $this->db2->query($sql)->row_array();
                
		$tagihanNo= "";
		if ($jalur == 'KP'){
			$tagihanNo = json_decode($dataJson['noTagihanParalel']);
			$tagihanNo = $tagihanNo[0];
		}else{
			$tagihanNo = $dataJson['nomorTagihan'];
		}
		
		$dataQry['mahasiswaNoPendaftaran'] = $dataJson['mahasiswaNoPendaftaran'];
		$dataQry['nomorTagihan'] = $tagihanNo;
		$dataQry['pembayaranPeriodeKode'] = $dataJson['pembayaranPeriodeKode'];
		$dataQry['totalBayar'] = $dataJson['totalBayar'];
		$dataQry['tanggalBayar'] = $dataJson['tanggalBayar'];
		
		$data[] = $dataQry;
		
		
		//print_r($data);
		
		$curl_post_data = json_encode($data);
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $service_url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT ,0);
		curl_setopt($curl, CURLOPT_TIMEOUT, 400); //timeout in seconds
		curl_setopt($curl, CURLOPT_VERBOSE, true); #debugging purpose only

		$curl_response = curl_exec($curl);
		curl_close($curl);

		$response = json_decode($curl_response, true);
//		echo $curl_post_data;
//		print_r($curl_response);               
               
                
		$resp = $response['gtfwResult'];
		$respon = $resp['status'];
//                echo $respon;
		$step = "validasi_pembayaran";                
		$this->status_integrasi($kode, $respon, $step);
		
		$this->log_asik_resp($kode, "Validasi Pembayaran : ".$curl_response." Parameter : ".$curl_post_data);
		if ($respon == '419'){$this->sendMail($step, $kode, $curl_response);}
		
		return $respon;
	}
	
	/*** Digunakan bersamaan ketika mahasiswa di approve keuangan pendaftaran ulang dan setelah proses generate NIM selesai **/
	function update_nim($kode){ 
		
		$host_asik = "https://asik.paramadina.ac.id/gt/gtpembayaran/";
		$service_url = $host_asik.'index.php?mod=service&sub=generateNIM&act=rest&typ=rest';
		
		$username = 'registrasi';
		$password = 'regGT2015';
		
		$sql = "SELECT f.nomor as mahasiswaNoPendaftaran, f.nim as mahasiswaNIM,
			REPLACE(LEFT(f.bukaSmb, 6), '.','') as pembayaranPeriodeKode
			FROM adis_smb_form f
			WHERE f.stsReapplyPaidConfirm = 1 AND
			f.kode = '$kode'";		
		$json_up_nim = $this->db2->query($sql);
		
		foreach($json_up_nim->result_array() as $row){
			$data[] = $row;
		}
		
		
		//print_r($data);
		
		$curl_post_data = json_encode($data);
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $service_url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT ,0);
		curl_setopt($curl, CURLOPT_TIMEOUT, 400); //timeout in seconds
		curl_setopt($curl, CURLOPT_VERBOSE, true); #debugging purpose only

		$curl_response = curl_exec($curl);
		curl_close($curl);

		$response = json_decode($curl_response,true);
//		echo $curl_post_data;
//		print_r($curl_response);
                
		$resp = $response['gtfwResult'];
                $respon = $resp['status'];
//                echo $respon;
                $step = "update_nim";                
                $this->status_integrasi($kode, $respon, $step);
                $this->log_asik_resp($kode, "Update NIM : ".$curl_response." Parameter : ".$curl_response);
                
                if ($respon == '419'){$this->sendMail($step, $kode, $curl_response);}
	}
	
	function upload_mahasiswa($kode){ 
		
		$service_url = 'http://asik.paramadina.ac.id/gt/gtakademik_service/rest-v2.php/service/addStudent';
		$username = 'admingt';
		$password = 'admingt';
				
		$sql_mah = "SELECT f.nim as nim, p.nama as nama, LEFT(bukaSmb, 4) as angkatan,
			r.kode_asik as program_studi, 
			pm.semester as semester_masuk, r.konsentrasi as konsentrasi, 
			f.nomor as nomor_test_masuk,  p.tanggalLahir as tanggal_lahir, IF (p.genderType = '03.P', 'L', 'P') as jenis_kelamin, 
			p.suratAlamat as alamat_asli, p.rumahAlamat as alamat_sekarang, p.rumahCell as telepon_hp, p.tempatLahir as kota_kelahiran,
			CASE 
				WHEN p.agamaType = '02.I' THEN '1'
				WHEN p.agamaType = '02.K' THEN '2'
				WHEN p.agamaType = '02.P' THEN '3'
				WHEN p.agamaType = '02.H' THEN '4'
				WHEN p.agamaType = '02.B' THEN '5'
				WHEN p.agamaType = '02L' THEN '6'
				WHEN p.agamaType = '02.C' THEN '8'
			END agama, u.email as email, 
			e.nama as nama_smta, w.nama as alamat_smta,
			j.kode_asik as status
			FROM adis_smb_form f
			LEFT JOIN adis_smb_usr_pribadi p ON p.kode = f.kode
			LEFT JOIN adis_smb_usr_edu e ON e.smbUsr = f.kode
			LEFT JOIN adis_smb_usr u ON u.kode = f.kode
			LEFT JOIN adis_wil w ON e.kabKota = w.kode
			LEFT JOIN adis_prodi r ON r.kode = RIGHT(f.bukaSmb,4)
			LEFT JOIN adis_periode_master pm ON pm.kode = LEFT(f.bukaSmb, 8)
			LEFT JOIN adis_jalur_smb j ON j.kode = SUBSTR(f.bukaSmb,12,2)
			WHERE f.kode = '$kode'";		
		$json_mah = $this->db2->query($sql_mah)->row_array();
		
		$sql_keg = "SELECT namaKegiatan as nama_kegiatan, 
			dariTahun as tanggal_kegiatan_mulai,
			sampaiTahun as tanggal_kegiatan_selesai,
			jabatan as deskripsi_kegiatan 
			FROM adis_smb_usr_org 
			WHERE smbUsr = '$kode';";
		$json_keg = $this->db2->query($sql_keg)->result_array();
		
		$sql_ortu = "SELECT ayahNama as nama_ayah,ibuNama as nama_ibu, waliNama as nama_wali, 
			ayahAlamat as alamat_ayah, ibuAlamat as alamat_ibu, waliAlamat as alamat_wali, 
			ayahCell as telepon_hp_ayah, ibuCell as telepon_hp_ibu, waliCell as telepon_hp_wali,
			ayahEmail as email_ayah,ibuEmail as email_ibu,waliEmail as email_wali, 
			'' as pekerjaan_ayah,'' as pekerjaan_ibu,'' as pekerjaan_wali,
			'' as pendidikan_ayah,'' as pendidikan_ibu,'' as pendidikan_wali, 
			'' as tanggal_ayah_meninggal,'' as tanggal_ibu_meninggal
			FROM adis_smb_usr_pribadi 
			WHERE kode = '$kode';";
		$json_ortu = $this->db2->query($sql_ortu)->row_array();
		
		/*
		$sql_ibu = "SELECT ibuNama as nama, ibuAlamat as alamat, ibuCell as telepon_hp, ibuEmail as email, '' as pekerjaan,
			'' as tanggal_meninggal
			FROM adis_smb_usr_pribadi 
			WHERE kode = '$kode';";
		$json_ibu = $this->db2->query($sql_ibu)->row_array();
		
		$sql_wli = "SELECT waliNama as nama, waliAlamat as alamat, waliCell as telepon_hp, waliEmail as email,'' as pekerjaan,
			'' as tanggal_meninggal
			FROM adis_smb_usr_pribadi 
			WHERE kode = '$kode';";
		$json_wli = $this->db2->query($sql_wli)->row_array();
		*/
		
		$sql_sau = "SELECT nim, kerja as nama_tempat_bekerja, '' as alamat_tempat_bekerja
		FROM adis_smb_usr_kel
		WHERE smbUsr = '$kode';";
		$json_sau = $this->db2->query($sql_sau)->result_array();		
		
		// $json_ortu = array("ayah" => $json_ayh, "ibu" => $json_ibu, "wali" => $json_wli);
		
		
		$data[] = array("mahasiswa" => $json_mah, "mahasiswa_kegiatan" => $json_keg, "mahasiswa_orang_tua" => $json_ortu,
			"mahasiswa_saudara" => $json_sau);
		
		// echo "<pre>";
		// print_r($data);
		
		$curl_post_data = json_encode($data);
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $service_url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT ,0);
		curl_setopt($curl, CURLOPT_TIMEOUT, 400); //timeout in seconds
		curl_setopt($curl, CURLOPT_VERBOSE, true); #debugging purpose only

		$curl_response = curl_exec($curl);
		curl_close($curl);

		$response = json_decode($curl_response, true);
                
		$resp = $response['gtfwResult'];
		$respon = $resp['status'];
//                echo $respon;
		$step = "insert_asik";                
		$this->status_integrasi($kode, $respon, $step);
		$this->log_asik_resp($kode, "Upload Mahasiswa Ke ASIK: ".$curl_response." Parameter : ".$curl_post_data);
		if ($respon == '201'){ $this->service_status_bayar($kode, "01");}
		else if ($respon == '419'){$this->sendMail($step, $kode, $curl_response);}
	}
	
	function service_status_bayar($code, $jalur){ 
		$kode = $code;
		$service_url = 'http://asik.paramadina.ac.id/gt/gtakademik_service/rest-v2.php/service/addStudentPaymentAcad';
		$username = 'admingt';
		$password = 'admingt';
		
		$sql = "SELECT A.nim, CONCAT(B.tahun, B.semester)  as semester, '2' as jenis_pembayaran, 
                    'Registrasi' as label_jenis_pembayaran, A.stsReapplyPaidConfirm as status_lunas, 
                    C.no_tagihanSppSksBpp as nomor_tagihan, C.noTagihanParalel,
                    'Pembayaran Mahasiswa Registrasi' as Keterangan 
                    FROM adis_smb_form A 
                    LEFT JOIN adis_periode_master B ON B.kode = LEFT(A.bukaSmb,8)
                    LEFT JOIN adis_smb_usr_keu C ON C.smbUsr = A.kode 
                    WHERE A.kode = '$kode' AND A.stsReapplyPaidConfirm = 1;";
		$result = $this->db->query($sql)->row_array();
		
		$noTagihanMhs = $result['nomor_tagihan'];
		if ($jalur == 'KP'){
			$noTagihanMhs = json_decode($result['noTagihanParalel']);
			$noTagihanMhs = $noTagihanMhs[0];
		}
		
		$resData['nim'] = $result['nim'];
		$resData['semester'] = $result['semester'];
		$resData['jenis_pembayaran'] = $result['jenis_pembayaran'];
		$resData['label_jenis_pembayaran'] = $result['label_jenis_pembayaran'];
		$resData['status_lunas'] = $result['status_lunas'];
		$resData['nomor_tagihan'] = $noTagihanMhs;
		$resData['Keterangan'] = $result['Keterangan'];
		
		$data[] = array('mahasiswa_pembayaran' => $resData);
		
		$curl_post_data = json_encode($data);
                // echo $curl_post_data;
                
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $service_url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT ,0);
		curl_setopt($curl, CURLOPT_TIMEOUT, 400); //timeout in seconds
		curl_setopt($curl, CURLOPT_VERBOSE, true); #debugging purpose only

		$curl_response = curl_exec($curl);
		curl_close($curl);

		$response = json_decode($curl_response, true);
		// print_r($curl_response);
                
		$resp = $response['gtfwResult'];
		$respon = $resp['status'];
		$step = "insert_asik";                
		$this->status_integrasi($kode, $respon, $step);
		$this->log_asik_resp($kode, "Upload Status Bayar Ke ASIK: ".$curl_response." Parameter : ".$curl_post_data);
		
		if ($respon == '419'){$this->sendMail($step, $kode, $curl_response);}
		
		return $respon;
		
	}
	
	function delete_mahasiswa($nim){ 
		
		$service_url = 'http://asik.paramadina.ac.id/gt/gtakademik_service/rest-v2.php/service/deleteStudent';
		
                $username = 'admingt';
		$password = 'admingt';
		
		$data[] = array("nim"=>$nim); 
		
		// echo "<pre>";
		// print_r($data);
		
		$curl_post_data = json_encode($data);
                
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $service_url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		curl_setopt($curl, CURLOPT_USERPWD, $username . ":" . $password);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT ,0);
		curl_setopt($curl, CURLOPT_TIMEOUT, 400); //timeout in seconds
		curl_setopt($curl, CURLOPT_VERBOSE, true); #debugging purpose only

		$curl_response = curl_exec($curl);
		curl_close($curl);

		$response = json_decode($curl_response);
		//echo $curl_post_data;
		//print_r($curl_response);
                $this->log_asik_resp($nim, "Hapus Mahasiswa ASIK: ".$curl_response);
	}
        
	function log_asik_resp($kode, $respon){
		$this->db2->insert('tbl_log_respon',array(
				'kode_mahasiswa'=>$kode, 
				'date_time'=>date("Y-m-d H:i:s"),
				'respon_integrasi'=>$respon));
	}       
        
	
	function status_integrasi($kode, $respon, $step){
            
            switch ($step){
                case "daftar":
					$rows = $this->db2->query("SELECT * FROM adis_status_integrasi WHERE kode = '$kode'")->result_array();
					if ($rows){
						$this->db2->where('kode', $kode);
						$this->db2->update('adis_status_integrasi',array('status_daftar'=>$respon));						
					}else{
						$this->db2->insert('adis_status_integrasi',array('kode'=>$kode,'status_daftar'=>$respon));
					}
                    break;
                case "bayar_daftar":                    
                    $this->db2->where('kode', $kode);
                    $this->db2->update('adis_status_integrasi',array('status_bayar_daftar'=>$respon));
                    break;
                case "update_noreg":                    
                    $this->db2->where('kode', $kode);
                    $this->db2->update('adis_status_integrasi',array('status_update_noreg'=>$respon));
                    break;
                case "insert_cmb":                    
                    $this->db2->where('kode', $kode);
                    $this->db2->update('adis_status_integrasi',array('status_insert_cmb'=>$respon));
                    break;
                case "gen_tagihan":                    
                    $this->db2->where('kode', $kode);
                    $this->db2->update('adis_status_integrasi',array('status_gen_tagihan'=>$respon));
                    break;
                case "validasi_pembayaran":                    
                    $this->db2->where('kode', $kode);
                    $this->db2->update('adis_status_integrasi',array('status_validasi_pembayaran'=>$respon));
                    break;
                case "update_nim":                    
                    $this->db2->where('kode', $kode);
                    $this->db2->update('adis_status_integrasi',array('status_update_nim'=>$respon));
                    break;
                case "insert_asik":                    
                    $this->db2->where('kode', $kode);
                    $this->db2->update('adis_status_integrasi',array('status_insert_asik'=>$respon));
                    break;
                case "update_asik":                    
                    $this->db2->where('kode', $kode);
                    $this->db2->update('adis_status_integrasi',array('status_update_asik'=>$respon));
                    break;
                    
            }
	
	}
        
        function sendMail($step, $kode, $curl_response){
			
                $config = Array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'students.paramadina.ac.id',
                        'smtp_port' => 25,
//                          'smtp_user' => 'orangbaik@students.paramadina.ac.id', // change it to yours
//                          'smtp_pass' => 'S@l4mb3l@k4ng', // change it to yours				  
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

                $this->email->from('smb@paramadina.ac.id', "Panitai SMB Paramadina");
                $this->email->to('rahmad.syalevi@paramadina.ac.id');
                
                switch ($step){
                case "daftar":
                    $this->email->subject("Error Integrasi Step Daftar $kode");
                    $this->email->message("<p>Calon Mahasiswa berikut : '".$kode."' gagal diintegrasikan ke sistem ASIK </p>"
                            . " Respon : ".$curl_response);
                    break;
                case "bayar_daftar":                    
                    $this->email->subject("Error Integrasi Step Bayar Pendaftaran $kode");
                    $this->email->message("<p>Calon Mahasiswa berikut : '".$kode."' gagal diintegrasikan ke sistem ASIK </p>"
                            . " Respon : ".$curl_response);
                    break;
                case "update_noreg":                    
                    $this->email->subject("Error Integrasi Step Update No Registrasi $kode");
                    $this->email->message("<p>Calon Mahasiswa berikut : '".$kode."' gagal diintegrasikan ke sistem ASIK </p>"
                            . " Respon : ".$curl_response);
                    break;
                case "insert_cmb":                    
                    $this->email->subject("Error Integrasi Step Insert Mahasiswa $kode");
                    $this->email->message("<p>Calon Mahasiswa berikut : '".$kode."' gagal diintegrasikan ke sistem ASIK </p>"
                            . " Respon : ".$curl_response);
                    break;
                case "gen_tagihan":                    
                    $this->email->subject("Error Integrasi Step Generate Tagihan $kode");
                    $this->email->message("<p>Calon Mahasiswa berikut : '".$kode."' gagal diintegrasikan ke sistem ASIK </p>"
                            . " Respon : ".$curl_response);
                    break;
                case "validasi_pembayaran":                    
                    $this->email->subject("Error Integrasi Step Validasi Pembayaran $kode");
                    $this->email->message("<p>Calon Mahasiswa berikut : '".$kode."' gagal diintegrasikan ke sistem ASIK </p>"
                            . " Respon : ".$curl_response);
                    break;
                case "update_nim":                    
                    $this->email->subject("Error Integrasi Step Update NIM $kode");
                    $this->email->message("<p>Calon Mahasiswa berikut : '".$kode."' gagal diintegrasikan ke sistem ASIK </p>"
                            . " Respon : ".$curl_response);
                    break;
                case "insert_asik":                    
                    $this->email->subject("Error Integrasi Step Insert Mahasiswa ke ASIK $kode");
                    $this->email->message("<p>Calon Mahasiswa berikut : '".$kode."' gagal diintegrasikan ke sistem ASIK </p>"
                            . " Respon : ".$curl_response);
                    break;
                case "update_asik":                    
                    $this->email->subject("Error Integrasi Step Update Data ke ASIK $kode");
                    $this->email->message("<p>Calon Mahasiswa berikut : '".$kode."' gagal diintegrasikan ke sistem ASIK </p>"
                            . " Respon : ".$curl_response);
                    break;
                    
            }
                
                $data['message'] = "Sorry Unable to send email...";	
                if($this->email->send()){					
                        $data['message'] = "Mail sent...";			
                }
	}
	
}