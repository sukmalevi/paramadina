<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admisi_Integrasi extends CI_Controller{
	function __construct(){
		parent::__construct();	
		date_default_timezone_set("Asia/Jakarta");
		$this->db2 = $this->load->database('second', TRUE);
		// $this->db4 = $this->load->database('quart', TRUE);
		$this->auth = unserialize(base64_decode($this->session->userdata('cuti_parmad')));
		$this->host	= $this->config->item('base_url');
		$this->smarty->assign('host',$this->host);
		$host = $this->host;
		
	}
	
	function index() {
	
			
	}
	
	function json_tag_daftar(){ 
		
		$host_asik = "https://asik.paramadina.ac.id/gt/gtpembayaran/";
		$service_url = $host_asik.'index.php?mod=service&sub=pembayaranAdmisi&act=rest&typ=rest';
		
		$username = 'registrasi';
		$password = 'regGT2015';
		
		$kode = "kinanti.sinaga@yahoo.com"; //$this->input->post("kode");
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
		echo '<pre>';
		print_r($data);
		
		
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
		print_r($curl_response);
		
	}
	
	function json_bayar_daftar(){ 
		
		$host_asik = "https://asik.paramadina.ac.id/gt/uat/gtpembayaran/";
		$service_url = $host_asik.'index.php?mod=service&sub=validasiPembayaranAdmisi&act=rest&typ=rest';
		
		$username = 'registrasi';
		$password = 'regGT2015';
		
		$kode = "kinanti.sinaga@yahoo.com";
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
		echo '<pre>';
		print_r($data);
		
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
		print_r($curl_response);
		
	}
	
	function update_noreg(){
		
		$host_asik = "https://asik.paramadina.ac.id/gt/uat/gtpembayaran/";
		$service_url = $host_asik.'index.php?mod=service&sub=updateNoregDaftar&act=rest&typ=rest';
		
		$username = 'registrasi';
		$password = 'regGT2015';
		
		$kode='bt4ivel@gmail.com';
		
		$sql = "SELECT k.no_tagihan_daftar as noregLama, nomor as noregBaru
			FROM adis_smb_form f
			LEFT JOIN adis_smb_usr_keu k ON k.smbUsr = f.kode
			WHERE stsApplyPaidConfirm = 1 AND f.kode = '$kode'";		
		$json_noreg = $this->db2->query($sql)->row_array();
		$data = $json_noreg;
		
		echo "<pre>";
		print_r($data);
		
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
		print_r($curl_response);
		
	}
	
	function insert_bulk(){
		$kode = $this->uri->segment(3);
		$method = $this->uri->segment(4);
		$sql = "";
		switch($method){
			case "1" :
				$val = 'Insert Mahasiswa : {"gtfwResult":0} Parameter : Array';
				$sql = "SELECT kode_mahasiswa as kode FROM `tbl_log_respon` 
					WHERE kode_mahasiswa = '$kode'
					GROUP BY kode_mahasiswa;";
			break;
			case "2":
				$val2 = 'Generate Tagihan : {"gtfwResult":"Data setting pembayaran untuk no pendaftaran%';
				$sql = "SELECT kode_mahasiswa as kode FROM `tbl_log_respon`
					WHERE kode_mahasiswa = '$kode'
					GROUP BY kode_mahasiswa;";
			break;
			case "3":
				$sql = "SELECT f.kode as kode, f.nim as nim,  p.nama as nama, LEFT(bukaSmb, 4) as angkatan,r.kode_asik as program_studi, 
						'1' as semester_masuk, '' as konsentrasi, 
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
						j.kode_asik as status, p.nomorKtp as nik
						FROM adis_smb_form f
						LEFT JOIN adis_smb_usr u ON u.kode = f.kode
						LEFT JOIN adis_smb_usr_pribadi p ON p.kode = f.kode
						LEFT JOIN adis_smb_usr_edu e ON e.smbUsr = f.kode
						LEFT JOIN adis_wil w ON e.kabKota = w.kode
						LEFT JOIN adis_prodi r ON r.kode = RIGHT(f.bukaSmb,4)
						LEFT JOIN adis_jalur_smb j ON j.kode = SUBSTR(f.bukaSmb,12,2)
						WHERE nim LIKE '11610%' OR nim LIKE '2161%' AND nim != '' ORDER BY nim;";
			break;
		}			
		
		$sql = $this->db2->query($sql)->result_array();
		
		$jumlah = count ($sql);
		
		foreach($sql as $v){
			switch($method){
				case "1" :
					$this->json_data_calon_mah($v['kode']);
				break;
				case "2":
					$this->json_tagihan($v['kode']);
				break;
				case "3":
					$this->json_mahasiswa($v['kode']);
				break;
			}
		}
		
		//echo $jumlah;
	}
	
	function json_data_calon_mah($kode = ''){ 
		
		// $host_asik = "https://asik.paramadina.ac.id/gt/gtpembayaran/";
		$host_asik = "https://asik.paramadina.ac.id/gt/cloning/gtpembayaran/";
		$service_url = $host_asik.'index.php?mod=service&sub=addMahasiswa&act=rest&typ=rest';
		
		$username = 'registrasi';
		$password = 'regGT2015';
		
		//Err 1 $kode = "55cea84670ce3";
		//Err 2 $kode = "55cebaf70c9ba";
		$kode = "57f2013cc6540";
		
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
                        k.alumni_s1 as mahasiswaS2Alumni
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
		
		echo "<pre>";
		print_r($data);exit;
		
		
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
		
		print_r($curl_response);
		
		
		
	}
	
	function reGenTag(){
		$mhs = "SELECT A.kode as main_code, A.nomor as 'No Reg', A.nim AS NIM, B.nama AS Nama, D.nama as 'Program Studi', B.ibuNama AS 'Nama Ibu', C.nama AS 'Asal SMA',
			C.nisn_nim AS NISN, E.nama as 'Nama Jalur', E.kode as 'kode_jalur'
			FROM adis_smb_form A 
			LEFT JOIN adis_smb_usr_pribadi B ON B.kode = A.kode
			LEFT JOIN adis_smb_usr_edu C ON C.smbUsr = A.kode
			LEFT JOIN adis_prodi D ON D.kode = RIGHT(A.bukaSmb,4)
			LEFT JOIN adis_jalur_smb E ON E.kode = SUBSTR(A.bukaSmb, 12, 2)
			WHERE nim = '116108008'";
			//WHERE nim LIKE  '11610%' AND E.kode IN('02', '01', 'CI', 'PS') AND  D.kode = '1208' LIMIT 10 OFFSET 10";
		$mhs = $this->db->query($mhs)->result_array();
		foreach($mhs as $val){
			//$this->json_tagihan($val['main_code'], $val['kode_jalur']);
			$this->json_validasi_pembayaran($val['main_code']);
		}
	}
	
	function json_tagihan($kode = '', $kode_jalur = ''){ 
	
		// $kode = "billy.kabul@gmail.com";//1620216120090
		$kode = "57bd5ba85a186";//1620216120090
		// $kode_jalur = 'JP';
		$kode_jalur = '10';
		
		// $host_asik = "https://asik.paramadina.ac.id/gt/gtpembayaran/";
		$host_asik = "https://asik.paramadina.ac.id/gt/cloning/gtpembayaran/";
		// $service_url = $host_asik . 'index.php?mod=service&sub=generateTagihanRegistrasi&act=rest&typ=rest';  
		
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
			if (	$kode_jalur == '10' || $kode_jalur == 'F1' || 
					$kode_jalur == 'F2' || $kode_jalur == 'F5' || 
					$kode_jalur == 'F7' 
				){
					$sql = "SELECT p.*,k.*, a.nomor as mahasiswaNoPendaftaran, 
							CONCAT(LEFT(a.bukaSmb, 4), pm.semester) as mahasiswaPeriodeKode, 
							IF (k.metodePembayaran = '0', 1, 0) as tagihanIsCicilan,
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
					case 'F1':
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
					// integrasi untuk kasus MIAI, request dari tim GT. untuk pola normal akan digunakan 
					// $biayaUM = $hasilUM/$SQLrry['jumlahSemester'];
					
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
								WHEN k.sks_acc > 81 AND k.sks_acc < 100 THEN '50'																		ELSE '0'
							END AS potonganMahasiswaTransfer
							FROM adis_smb_form a 
							LEFT JOIN adis_smb_usr_keu k ON k.smbUsr = a.kode
							LEFT JOIN adis_pembayaran p ON p.kode = k.metodBayarDaftarUlang 
								AND p.periode_kode = LEFT(a.bukaSmb, 8)
							LEFT JOIN adis_periode_master pm ON pm.kode = LEFT(a.bukaSmb, 8)
							WHERE a.stsReapplyPaid = 1 AND a.kode = '$kode'";		
					$json_tagihan = $this->db2->query($sql);
					
					$cicilan = "SELECT 
								CONCAT_WS(',',k.cicilan1,k.cicilan2,k.cicilan3) as nominal,
								CONCAT_WS(',', c.due_date1, c.due_date2, c.due_date3) as tglJatuhTempo,
								p.bpp, p.sks, p.spp, p.jumlahSks, a.sks_approve
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
						}else if ($kode_jalur == '02'){
							$perSks = $rows_a['sks']/$rows_a['jumlahSks'];
							$biayaSKS = $perSks * $rows_a['sks_approve'];
							$data['totalSppSksBpp'] = $rows_a['spp']+$biayaSKS+$rows_a['bpp'];
						}else{
							$data['totalSppSksBpp'] = $rows_a['spp']+$rows_a['sks']+$rows_a['bpp'];
						}
						$data['tglJatuhTempo'] = $tglTempo;
						$data['nominalCicilan'] = $nominal;
						$data['potonganEarlyBird'] = $row['potonganEarlyBird']; //default 0 tidak ada potongan early bird. jika di isi 30 maka ada potongan 30%
						$data['potonganMahasiswaTransfer'] = $row['potonganMahasiswaTransfer']; //default 0 bukan mahasiswa transfer, jika di isi 25 maka potongan 25%,atau misal di isi 50 maka ada potongan 50%

					}
					
					/*
					echo "<pre>";
					print_r($json_tagihan->result_array());
					
					echo "<pre>";
					print_r($rows_a);
					*/
				}
		}
		
		$data = array($data);
		
		echo "<pre>";
		print_r($data); exit;
		
		
		
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
		// echo $curl_post_data;
		$response = json_decode($curl_response, true);
		print_r($curl_response);
		
		$respon = $response['gtfwResult'];
		$status = $respon['status'];
		$notagihantemp = $respon['data'];
         
		 
		if($status == '201'){
//                    $notagihantemp=explode(",",$datas);	
			if ($row['tagihanIsCicilan'] == 1){
				$notagihanSppSksBpp = $notagihantemp[0];
				$notagihan1         = $notagihantemp[1];
				$notagihan2         = $notagihantemp[2];
				$notagihan3         = $notagihantemp[3];
				
				IF ($kode_jalur == 'KP'){
					$notagihan4         = $notagihantemp[4];
//                            $notagihan5         = $notagihantemp[5];
					$this->db2->query("UPDATE adis_smb_usr_keu "
							. " SET no_tagihanSppSksBpp = '$notagihanSppSksBpp', "
							. " no_tagihan1 = '$notagihan1', no_tagihan2 = '$notagihan2', "
							. " no_tagihan3 = '$notagihan3', no_tagihan4 = '$notagihan4' "
							. " WHERE smbUsr='$kode';");
					
				}else{                            
					$this->db2->query("UPDATE adis_smb_usr_keu "
									. " SET no_tagihanSppSksBpp = '$notagihanSppSksBpp', "
									. " no_tagihan1 = '$notagihan1', no_tagihan2 = '$notagihan2', "
									. " no_tagihan3 = '$notagihan3' WHERE smbUsr='$kode';");
				}
			}else{
				$notagihan1=$notagihantemp[0];
				$this->db2->query("UPDATE adis_smb_usr_keu SET no_tagihanSppSksBpp = '$notagihan1' "
									. " WHERE smbUsr='$kode';");		
			}
		}
		
		
		
		
	}
	
	function updateTagihanParalel(){
		$sqlMhs = "SELECT bukaSmb, kode, nim 
			FROM `adis_smb_form` 
			WHERE (LEFT(bukaSmb,4) = '2016' AND RIGHT(bukaSmb,4) = '1206') 
			AND (nim != '' AND SUBSTR(bukaSmb, 12, 2) = 'KP') LIMIT 11 OFFSET 9;";
		$sqlMhs = $this->db->query($sqlMhs)->result_array();
		// print_r($sqlMhs);exit;
		foreach ($sqlMhs as $val){
			$arrRespon = $this->generateTagParalel($val['kode']);
			echo "<br>";
			print_r($arrRespon);
		}
		
	}
	
	function generateTagParalel($kode = 'claudia.hutagalung@gmail.com'){    

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
				WHERE (tahun >= '$tahun' AND jenjangType = 1) AND kode = '2017.1.1';";
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
					$tglMulai = $v['tanggalMulai'];
					// $tglMulai = '2017-03-01';
                    if (($val > $tglMulai) && ($val < $v['tanggalSelesai']))
                    {
                      $arryPeriode[$k] = $v['periode'];
                      $arryTglTagihan[$k] = $val;
                      $arryValTagihan[$k] = $arryPil[$k];
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
            
			##untuk generate tagihan dengan uang masuk
			/*
            $data['mahasiswaNoPendaftaran'] = $sql['mahasiswaNoPendaftaran'];
            $data['tagihanPeriode'] = $arry['periodeTagihan'];
            $data['tagihanIsCicilan'] = $sql['tagihanIsCicilan'];
            $data['tglJatuhTempo'] = $arry['tglTagihan'];
            $data['nominalCicilan'] = $arry['angsuranTagihan'];
			*/
            
			##untuk generate tagihan paralel di periode periode berikutnya
            $data['mahasiswaNoPendaftaran'] = $sql['mahasiswaNoPendaftaran'];
            $data['tagihanIsCicilan'] = $sql['tagihanIsCicilan'];
			
			$k = 0;
			foreach($arryPeriode as $i => $v){
				$data['tagihanPeriode'][$k] = $arryPeriode[$i];
				$data['tglJatuhTempo'][$k] = $arryTglTagihan[$i];
				$data['nominalCicilan'][$k] = $arryValTagihan[$i];
				
				$k ++;
			}
            
            $data = array($data);
//		
		   echo "<pre>";
		   print_r($data);exit;
		
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
			print_r($curl_response);
            
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
	
	function test(){
		// $response = array("gtfwResult"=>"14102141100021");
		// //print_r($response);
		// $notagihan=$response['gtfwResult'];
		// $notagihantemp=explode(",",$notagihan);
		// $notagihanuse=$notagihantemp[0];
		// //echo $notagihanuse;
		// echo '<pre>';
		$curl_response = '{"gtfwResult":"14102141100021,14102141100022,14102141100023"}';
		$response = json_decode($curl_response,true);
		print_r ($response);
	}
	
	function json_validasi_pembayaran($kode = '', $jalur=''){ 
		
		$host_asik = "https://asik.paramadina.ac.id/gt/gtpembayaran/";
		$service_url = $host_asik.'index.php?mod=service&sub=validasiTagihanRegistrasi&act=rest&typ=rest';
		
		$username = 'registrasi';
		$password = 'regGT2015';
		
		// $kode = "billy.kabul@gmail.com";//1620216120090
		$kode = "putriselaras91@gmail.com";//1620216120090
		
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
		
		echo "<pre>";
        print_r($data);
		
		
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
		echo $curl_post_data;
		print_r($curl_response);
		
		
	}
	
	function json_up_nim(){ 
		
		$host_asik = "https://asik.paramadina.ac.id/gt/gtpembayaran/";
		$service_url = $host_asik.'index.php?mod=service&sub=generateNIM&act=rest&typ=rest';
		
		$username = 'registrasi';
		$password = 'regGT2015';
		
		$kode = "116102001@paramadina.ac.id";
		$sql = "SELECT f.nomor as mahasiswaNoPendaftaran, f.nim as mahasiswaNIM
			FROM adis_smb_form f
			WHERE f.stsReapplyPaidConfirm = 1 AND
			f.kode = '$kode'";		
		$json_up_nim = $this->db2->query($sql);
		
		foreach($json_up_nim->result_array() as $row){
			$data[] = $row;
		}
		
		echo "<pre>";
		print_r($data);
		
		
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
		print_r($curl_response);
		
	}
	
	function json_mahasiswa($kode = "116102001@paramadina.ac.id"){ 
		
		// $service_url = 'http://asik.paramadina.ac.id/gt/gtakademik_service/rest-v2.php/service/updateStudent';
		$service_url = 'http://asik.paramadina.ac.id/gt/gtakademik_service/rest-v2.php/service/addStudent';
		$username = 'admingt';
		$password = 'admingt';
		
		// $kode = "alifiaainurr9@gmail.com";
		
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
			j.kode_asik as status, p.nomorKtp as nik
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
		
		$sql_sau = "SELECT nim, kerja as nama_tempat_bekerja, '' as alamat_tempat_bekerja
		FROM adis_smb_usr_kel
		WHERE smbUsr = '$kode';";
		$json_sau = $this->db2->query($sql_sau)->result_array();	
		
		$data[] = array("mahasiswa" => $json_mah, "mahasiswa_kegiatan" => $json_keg, "mahasiswa_orang_tua" => $json_ortu,
			"mahasiswa_saudara" => $json_sau);
		
		echo "<pre>";
		print_r($data);
		
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
		print_r($curl_response);echo "<br>";
		
	}
	
	
	
	function his_to_asik(){
		
	
	}
	
	function delete_mahasiswa($nim = ""){ 
		// $nim = "116206001";
		
		$service_url = 'http:####//asik.paramadina.ac.id/gt/gtakademik_service/rest-v2.php/service/deleteStudent';
		
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
		print_r($curl_response);
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
					$rows = $this->db2->query("SELECT * FROM adis_status_integrasi WHERE kode '$kode'")->result_array();
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
?>