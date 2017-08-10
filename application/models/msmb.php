<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class Msmb extends CUTI_Model{
	
	function __construct(){
		parent::__construct();
		$this->log = $this->config->item('log_path');
	}
	
	function Msmb(){
		parent::__construct();
		
		$this->db2->query("SET lc_time_names = 'id_ID'");
		
	}
	
	function get_data_grid($type="", $p1="", $p2="", $p3=""){
		$this->load->library('lib');
		$where = "";
		switch($type){
			case 'cmb' :
				$method = $this->input->post('method');
				if ($method == 'search'){
					$srcNama = $this->input->post('nama_cm');
					if ($srcNama){
						$where = " WHERE u.username LIKE '%$srcNama%' OR  f.kode LIKE '%$srcNama%' OR f.nomor LIKE '%$srcNama%'";
					}					
				}
				if ($method == 'select'){
					$periode = $this->input->post('periode');	
					$this->smarty->assign('periode', $periode);
					$prodi = $this->input->post('prodi');					
					$jalur = $this->input->post('jalur');
					$wherePeriode = "";	
					$whereJalur = "";
					$whereProdi = "";
					if ($jalur != 'all'){						
						$periode = implode(".",array($periode,$jalur));
						$wherePeriode = " SUBSTR(f.bukaSmb, 1, 13) = '$periode' ";
					}else{
						$wherePeriode = " SUBSTR(f.bukaSmb, 1, 10) = '$periode' ";
					}
					if ($prodi != 'all'){
						$whereProdi = " AND substr(f.bukaSmb, -4) = '$prodi' ";
					}
					
					$where = " WHERE $wherePeriode $whereProdi";
				}
				
				$sql = "SELECT @num:=@num+1 AS 'No', f.kode as kode_smb, f.bukaSmb, f.nomor as no_smb, u.username as nama_cm , p.nama as progdi, 
					DAYNAME(u.createTime) as hari, DATE(u.createTime) as tanggal, p.singkatan as progdi_inisial,
					f.stsApplyPaid, f.stsApplyPaidConfirm, up.stsPribadiConfirm, f.stsEventConfirm, f.stsEventUsmPresent, up.foto,
					f.stsResultConfirm, f.stsMundurBeforeReapply,
					f.stsReapplyPaid, stsReapplyPaidConfirm, f.stsMundurAfterReapply, j.nama as n_jalur, 
					concat(
								f.stsApplyPaid, '-' , f.stsApplyPaidConfirm, '-' , 
								f.stsEventConfirm, '-' , f.stsEventUsmPresent, '-' ,  f.stsResultConfirm, '-' ,								
								f.stsReapplyPaid, '-' ,  f.stsReapplyPaidConfirm
							) as status
					FROM adis_smb_form f 
					INNER JOIN adis_smb_usr u ON u.kode = f.kode
					INNER JOIN adis_buka_smb b ON b.kode = f.bukaSmb
					INNER JOIN adis_smb_usr_pribadi up ON up.kode = f.kode
					INNER JOIN adis_prodi p ON p.kode = b.prodi
					INNER JOIN adis_jalur_smb j ON j.kode = b.jalur $where 
					ORDER BY u.createTime DESC";
			break;
			case 'cmbPrestasi' :
				$method = $this->input->post('method');
				if ($method == 'search'){
					$srcNama = $this->input->post('nama_cm');
					if ($srcNama){
						$where = " WHERE u.username LIKE '%$srcNama%' OR  f.kode LIKE '%$srcNama%' OR f.nomor LIKE '%$srcNama%'";
					}					
				}	
				$wherePeriode = "";	
				$whereJalur = "";
				$whereProdi = "";	
				$jalur = 'JP';
				
				$periodeAka = "SELECT A.kode as idPeriode FROM adis_periode A 
						LEFT JOIN  adis_periode_master B ON B.kode = A.idPeriodeMaster
						WHERE A.erased = 0 AND B.jenjangType = 1 AND A.status = 1 ORDER BY A.kode DESC";
				$periodeAka = $this->db2->query($periodeAka)->row_array();	
				
				$periode = implode(".",array($periodeAka['idPeriode'],$jalur));
				$wherePeriode = " SUBSTR(f.bukaSmb, 1, 13) = '$periode' ";
				
				if ($method == 'select'){
					$periode = $this->input->post('periode');					
					$prodi = $this->input->post('prodi');	
					
					$periode = implode(".",array($periode,$jalur));
					$wherePeriode = " SUBSTR(f.bukaSmb, 1, 13) = '$periode' ";
					
					if ($prodi != 'all'){
						$whereProdi = " AND substr(f.bukaSmb, -4) = '$prodi' ";
					}
				}
					
				$where = " WHERE $wherePeriode $whereProdi";
				
				$sql = "SELECT @num:=@num+1 AS 'No', f.kode as kode_smb, f.bukaSmb, f.nomor as no_smb, u.username as nama_cm , p.nama as progdi, 
					DAYNAME(u.createTime) as hari, DATE(u.createTime) as tanggal, p.singkatan as progdi_inisial,
					f.stsApplyPaid, f.stsApplyPaidConfirm, up.stsPribadiConfirm, f.stsEventConfirm, f.stsEventUsmPresent, up.foto,
					f.stsResultConfirm, f.stsMundurBeforeReapply,
					f.stsReapplyPaid, stsReapplyPaidConfirm, f.stsMundurAfterReapply, j.nama as n_jalur, 
					concat(
								f.stsApplyPaid, '-' , f.stsApplyPaidConfirm, '-' , 
								f.stsEventConfirm, '-' , f.stsEventUsmPresent, '-' ,  f.stsResultConfirm, '-' ,								
								f.stsReapplyPaid, '-' ,  f.stsReapplyPaidConfirm
							) as status
					FROM adis_smb_form f 
					INNER JOIN adis_smb_usr u ON u.kode = f.kode
					INNER JOIN adis_buka_smb b ON b.kode = f.bukaSmb
					INNER JOIN adis_smb_usr_pribadi up ON up.kode = f.kode
					INNER JOIN adis_prodi p ON p.kode = b.prodi
					INNER JOIN adis_jalur_smb j ON j.kode = b.jalur $where 
					ORDER BY u.createTime DESC";
			break;
		}
		
		return $this->lib->jsondata($sql, $type);
	}
	
	function modelCalon($periode = ''){	
	
			// $QWhere = '';
			// if ($prodi != 'all'){ $QWhere = " AND p.kode = '$prodi'"; }
			// if ($jalur != 'all'){ $QWhere = " AND j.kode = '$'"; }
	
			$this->db2->query("SET @num:=0;");
			$sql = "SELECT @num:=@num+1 AS 'No', u.username as 'Nama Lengkap',  f.bukaSmb, f.nomor as 'No Registrasi', 
			p.nama as 'Program Studi', up.rumahCell as 'No HP', DATE(u.createTime) as 'Tanggal Daftar', j.nama as 'Jalur Ujian',
			if (f.stsApplyPaid = 1 ,'Sudah', 'Belum') as 'Bayar Pendaftaran',if (f.stsApplyPaidConfirm = 1 ,'Sudah', 'Belum') AS 'Confirm BP', 
			if (up.stsPribadiConfirm = 1 ,'Sudah', 'Belum') AS 'Melengkapi Formulir', 
			if (f.stsEventConfirm=1 ,'Sudah', 'Belum') AS 'Jadwal Ujian', 
			if (f.stsEventUsmPresent= 1 ,'Hadir', 'Belum') AS Kehadiran,
			if (f.stsResultConfirm = 1, 'Sudah', 'Belum') AS 'Hasil Ujian', 
			if (f.stsReapplyPaid = 1, 'Sudah', 'Belum') AS 'Pembayaran Daftar Ulang', 
			if (stsReapplyPaidConfirm = 1 ,'Sudah', 'Belum') AS 'Konfirm DU', 
			if (f.stsMundurAfterReapply = 1, 'Mundur', 'Tidak') AS Mundur, f.kode as 'Email',
			e.nama as 'Nama Sekolah', w.nama as 'Kab/Kota', w2.nama as 'Provinsi'
			FROM adis_smb_form f 
			INNER JOIN adis_smb_usr u ON u.kode = f.kode
			INNER JOIN adis_buka_smb b ON b.kode = f.bukaSmb
			INNER JOIN adis_smb_usr_pribadi up ON up.kode = f.kode
			INNER JOIN adis_prodi p ON p.kode = b.prodi
			INNER JOIN adis_jalur_smb j ON j.kode = b.jalur
			INNER JOIN adis_smb_usr_edu e ON e.smbUsr = f.kode
			LEFT JOIN adis_wil w ON w.kode = e.kabKota
			LEFT JOIN adis_wil w2 ON w2.kode = e.prop
			WHERE SUBSTR(f.bukaSmb, 1, 10) = '$periode'
			ORDER BY 'Tanggal Daftar' DESC";
			
			
			$sql = $this->db2->query($sql);
			return $sql;
			
	}
	
	function exportCalon($periode = '', $prodi = '', $jalur = ''){	
	
			 $QWhere = '';
			 if ($prodi != 'all'){ $QWhere .= " AND p.kode = '$prodi'"; }
			 if ($jalur != 'all'){ $QWhere .= " AND j.kode = '$jalur'"; }
	
			$this->db2->query("SET @num:=0;");
			$sql = "SELECT @num:=@num+1 AS 'No', u.username as 'Nama Lengkap',  f.bukaSmb, f.nomor as 'No Registrasi', 
			p.nama as 'Program Studi', up.rumahCell as 'No HP', DATE(u.createTime) as 'Tanggal Daftar', j.nama as 'Jalur Ujian',
			if (f.stsApplyPaid = 1 ,'Sudah', 'Belum') as 'Bayar Pendaftaran',if (f.stsApplyPaidConfirm = 1 ,'Sudah', 'Belum') AS 'Confirm BP', 
			if (up.stsPribadiConfirm = 1 ,'Sudah', 'Belum') AS 'Melengkapi Formulir', 
			if (f.stsEventConfirm=1 ,'Sudah', 'Belum') AS 'Jadwal Ujian', 
			if (f.stsEventUsmPresent= 1 ,'Hadir', 'Belum') AS Kehadiran,
			if (f.stsResultConfirm = 1, 'Sudah', 'Belum') AS 'Hasil Ujian', 
			if (f.stsReapplyPaid = 1, 'Sudah', 'Belum') AS 'Pembayaran Daftar Ulang', 
			if (stsReapplyPaidConfirm = 1 ,'Sudah', 'Belum') AS 'Konfirm DU', 
			if (f.stsMundurAfterReapply = 1, 'Mundur', 'Tidak') AS Mundur, f.kode as 'Email',
			e.nama as 'Nama Sekolah', w.nama as 'Kab/Kota', w2.nama as 'Provinsi'
			FROM adis_smb_form f 
			INNER JOIN adis_smb_usr u ON u.kode = f.kode
			INNER JOIN adis_buka_smb b ON b.kode = f.bukaSmb
			INNER JOIN adis_smb_usr_pribadi up ON up.kode = f.kode
			INNER JOIN adis_prodi p ON p.kode = b.prodi
			INNER JOIN adis_jalur_smb j ON j.kode = b.jalur
			INNER JOIN adis_smb_usr_edu e ON e.smbUsr = f.kode
			LEFT JOIN adis_wil w ON w.kode = e.kabKota
			LEFT JOIN adis_wil w2 ON w2.kode = e.prop
			WHERE SUBSTR(f.bukaSmb, 1, 10) = '$periode' $QWhere
			ORDER BY 'Tanggal Daftar' DESC";
			
			
			$sql = $this->db2->query($sql);
			return $sql;
			
	}
	
	
	function mMundur($kode){
		$row = $this->db2->query("SELECT kode from adis_smb_form WHERE nomor='$kode'")->row();
		$kode = $row->kode;
		$date = date("Y-m-d H:i:s");
		
		$this->db2->where("kode", $kode);
		$this->db2->update("adis_smb_form", array(
				"stsMundurAfterReapply"=>1
			));
		$jumlahBayar = $this->input->post("jumlahBayar");
		$jumlahBayar = str_replace('.', '', $jumlahBayar); 
		$jumlahBayar = str_replace(' ', '', $jumlahBayar);
		
		$this->db2->insert("adis_resign_smb", array(
				"kode"=>$kode,
				"smbUsr"=>$kode,
				"createTime"=>$date,
				"createUser"=>$this->auth['name'],
				"reason"=>$this->input->post('alasan'),
				"otherReason"=>$this->input->post('alasanLain'),
				"paymentMethod"=>$this->input->post("typeTrans"),
				"amountRegistration"=>$jumlahBayar,
				"bankName"=>$this->input->post("bank"),
				"bankAccount"=>$this->input->post("kcp"),
				"bankBranch"=>$this->input->post("noRek"),
				"bankAccountName"=>$this->input->post("an")
			));
	}
	
	function saveCmbNotReg($bukaSmb, $noReg){
	
		$date = date("Y-m-d H:i:s");	
		$tanggalLahir = date("Y-m-d", strtotime($this->input->post("tanggalLahir")));
		$nomor = uniqid();
		$jenjang = $this->input->post('jenjang');
		
		$rank = $this->input->post('rank');
		$bayar_met = $this->input->post('lunas');
		$jalur = $this->input->post('jalur');
		$prodi = $this->input->post('prodi');
		$lulusan = $this->input->post('lulusan');
		$alumni = 0;
		$earlybird = 0;
		$keluargacivitas = 0;
		$keluargadlb = 0;
		$miai = 0;
		
		$grade = '1';
		if ($jalur == 'CI'){ $grade = '5';}
		if ($rank != '0' || $rank != ''){
			$grade = $rank;
		}
		
		switch($jenjang){
			case '1':
				if($jalur == 'KP'){			
					if ($bayar_met == '0'){
						if ($lulusan){$metodBayar = implode (".", array($prodi,'69', 'KP', $lulusan));}
						else{$metodBayar = implode (".", array($prodi,'69', 'KP'));}
					}else{
						if ($lulusan){$metodBayar = implode (".", array($prodi,'1', 'KP', $lulusan));}				
						else{$metodBayar = implode (".", array($prodi,'1', 'KP'));}
					}
				}else if ($jalur == '02' || $jalur == '01'){
					if ($bayar_met == '0'){
						$metodBayar = implode (".", array($prodi,'69', '01'));			
					}else{
						$metodBayar = implode (".", array($prodi,'1', '01'));				
					}
				}else{			
					$metodBayar = implode (".", array($prodi,'1', '01'));
				}
			break;
			case '2':
				
				$alumni = $this->input->post('alumni');
				$miai = $this->input->post('miai');
				$earlybird = $this->input->post('earlybird');
				$keluargacivitas = $this->input->post('keluargacivitas');
				$keluargadlb = $this->input->post('keluargadlb');
				$grade = '0';				                                   
				$periode = $this->input->post('periode');
				$metodBayar = implode (".", array($periode, $prodi,'1'));
				$grade = '0';
				// if ($jalur == '10'){
					// if ($bayar_met == '0'){
						// $metodBayar = implode (".", array($prodi,'69', '10'));			
					// }else{
						// $metodBayar = implode (".", array($prodi,'1', '10'));				
					// }
				// }else{			
					// $metodBayar = implode (".", array($prodi,'69', '10'));
				// }
			break;
		}
		
		
		
		
		
		
		
		$this->db2->insert("adis_smb_usr", array(
				"kode"=>$nomor,
				"username"=>$this->input->post('name'),
				"email"=>$this->input->post('email'),
				"createUser"=>'Admin Admisi',
				"createTime"=>$date
			));
		
		$this->db2->insert("adis_smb_form", array(
				"kode"=>$nomor,
				"bukaSmb"=>$bukaSmb,
				"nomor"=>$noReg,
				"stsResultPass"=>'1',
				"stsResultGrade"=>$grade,
				"createTime"=>$date,
				"createUser"=>'Admin Admisi'
			));
			
		$this->db2->insert("adis_smb_usr_keu", array(
				"kode"=>$noReg,
				"smbusr"=>$nomor,
				"metodBayarDaftarUlang"=>$metodBayar,
				"metodePembayaran"=>$bayar_met,
				"sks_acc"=>$this->input->post('sks_acc'),
				"createTime"=>$date,
				"createUser"=>'Admin Admisi',
				"alumni_s1"=>$alumni,
				"earlybird"=>$earlybird,
				"keluargacivitas"=>$keluargacivitas,
				"keluargadlb"=>$keluargadlb,
				"miaiPindahan"=>$miai
			));
			
		$this->db2->insert("adis_smb_usr_edu", array(
				"kode"=>$noReg,
				"smbUsr"=>$nomor,
				"nama"=>$this->input->post("namaSekolah"),
				"jurusan"=>$this->input->post("jurusanSMA"),
				"tahunLulus"=>$this->input->post("tahunLulus"),
				'sekolahType'=> $this->input->post("pendType"),
				'sekolahOwnerType'=> $this->input->post("sekType"),
				'sekolahAlamat'=> $this->input->post("alamatSekPT"),
				'prop'=> $this->input->post("propSek"),
				'kabKota'=> $this->input->post("kabSek"),
				'kodePos'=> $this->input->post("kposSek"),
				'nilai'=> $this->input->post("nilai"),
				'nisn_nim'=> $this->input->post("nisnnim"),
				"createUser"=>'Admin Admisi',
				"createTime"=>$date
			));
			
		$this->db2->insert("adis_smb_usr_pribadi", array(
				'kode'=>$nomor,
				'nama'=>$this->input->post('nameFull'),
				'genderType'=>$this->input->post('sex'),
				'tempatLahir'=>$this->input->post('tempatLahir'),
				'tanggalLahir'=>$tanggalLahir,
				'rumahAlamat'=>$this->input->post('occupation'),
				'rumahCell'=>$this->input->post('no_hp'),
				'stsPribadi'=>0,
				'stsPribadiConfirm'=>0,
				'nomorKtp' => $this->input->post('no_id'),
				'agamaType' => $this->input->post('agama'),
				'rumahProp' => $this->input->post('propinsi'),
				'rumahKabKota' => $this->input->post('kabkota'),
				'rumahKodePos' => $this->input->post('kodepos'),
				'rumahTel' => $this->input->post('telRumah'),
				'rumahFax' => $this->input->post('fax'),
				'ayahNama'=>$this->input->post('namaAyah'),
				'ayahAlamat'=>$this->input->post('alamatAyah'),
				'ayahKabKota'=>$this->input->post('kabAyah'),
				'ayahProp'=>$this->input->post('propAyah'),
				'ayahKodePos'=>$this->input->post('kposAyah'),
				'ayahTel'=>$this->input->post('telAyah'),
				'ayahCell'=>$this->input->post('hpAyah'),
				'ayahEmail'=>$this->input->post('emailAyah'),
				'ibuNama'=>$this->input->post('namaIbu'),
				'ibuAlamat'=>$this->input->post('alamatIbu'),
				'ibuKabKota'=>$this->input->post('kabIbu'),
				'ibuProp'=>$this->input->post('propIbu'),
				'ibuKodePos'=>$this->input->post('kposIbu'),
				'ibuTel'=>$this->input->post('telIbu'),
				'ibuCell'=>$this->input->post('hpIbu'),
				'ibuEmail'=>$this->input->post('emailIbu'),
				'waliNama'=>$this->input->post('namaWali'),
				'waliAlamat'=>$this->input->post('alamatWali'),
				'waliKabKota'=>$this->input->post('kabWali'),
				'waliProp'=>$this->input->post('propWali'),
				'waliKodePos'=>$this->input->post('kposWali'),
				'waliTel'=>$this->input->post('telWali'),
				'waliCell'=>$this->input->post('hpWali'),
				'waliEmail'=>$this->input->post('emailWali'),
				'createUser'=>'Admin Admisi',
				'createTime'=>$date,
                                'nama_donor'=>$this->input->post('nama_donor')
			));
			
		if ($this->input->post('saudara') == '1'){
			$this->db2->insert("adis_smb_usr_kel", array(
					"kode"=>$nomor,
					"smbusr"=>$nomor,
					"status"=>1,
					"confirmed"=>1,
					"createTime"=>$date,
					"createUser"=>'Admin Admisi'
				));
		}
							
		
	}
	
	function mProfil($kode, $asu=''){
		
		if (is_numeric($kode)){
			$wer = "WHERE f.nomor = '$kode'";
		}else{
			$wer ="WHERE f.kode = '$kode'";
		}
		// echo '<script>alert("Kode Tipe :'.$kode.'");</script>';
		$sql = "SELECT f.kode as kode_smb, f.bukaSmb, f.nomor as no_smb, up.nama as nama_cm , f.nim,
				p.nama as progdi, p.kode as proKode, 
				DAYNAME(u.createTime) as hari, DATE(u.createTime) as tanggal, up.agamaType,
				DAY(u.createTime) as cDay, MONTHNAME(u.createTime) as cMonth, YEAR(u.createTime) as cYear,
				m.jenjangType, up.rumahCell, up.genderType, up.tempatLahir, up.tanggalLahir, DAYNAME(up.tanggalLahir) as hLahir, 
				DAY(up.tanggalLahir) as tLahir, MONTHNAME(up.tanggalLahir) as bLahir, YEAR(up.tanggalLahir) as yLahir,
				up.nomorKtp, up.rumahEmail, up.suratAlamat, tA.nama as suratProp, tD.kodepos as suratKodPos,
				up.suratTel, up.suratFax,
				up.rumahAlamat, t2.nama as propNama, t3.nama as kabKotaNama, t4.kodepos as kodePos, up.rumahTel, up.rumahFax, 
				up.ayahNama, up.ayahAlamat, up.ayahCell, up.ayahEmail, 
				up.ibuNama, up.ibuAlamat, up.ibuCell, up.ibuEmail, 
				up.waliNama, up.waliAlamat, up.waliCell, up.waliEmail, 
				t.nama as gender, t.kode as kodeGender, t1.nama as agamaName,f.stsResultGrade,
				up.statusAlamat, up.statusKeluarga,  m.nama as namaPeriode,
				e.status as statusPend, e.nama as namaEdu, e.jurusan,
				up.statusPrestasi, up.stsPribadiConfirm, up.statusSaudara, up.foto,
				f.stsApplyPaid, f.stsApplyPaidConfirm, up.stsPribadiConfirm, f.stsEventConfirm, f.stsResultConfirm, f.stsMundurBeforeReapply,
				f.stsReapplyPaid, stsReapplyPaidConfirm, f.stsMundurAfterReapply, j.nama as n_jalur, f.stsResultPass, f.stsReapplyPaidConfirm,
				m.tahun, m.semester, SUBSTR(f.bukaSmb, 12, 2) as kode_jalur
				FROM adis_smb_form f 
				LEFT JOIN adis_smb_usr u ON u.kode = f.kode
				LEFT JOIN adis_periode_master m ON m.kode = LEFT(f.bukaSmb,8)
				LEFT JOIN adis_smb_usr_pribadi up ON up.kode = f.kode
				LEFT JOIN adis_smb_usr_edu e ON e.smbUsr = f.kode
				LEFT JOIN adis_prodi p ON p.kode = RIGHT(f.bukaSmb,4)
				LEFT JOIN adis_jalur_smb j ON j.kode = SUBSTR(f.bukaSmb, 12, 2)
				LEFT JOIN adis_type t ON t.kode = up.genderType
				LEFT JOIN adis_type t1 ON t1.kode = up.agamaType
				LEFT JOIN adis_wil t2 ON t2.kode = up.rumahProp
				LEFT JOIN adis_wil t3 ON t3.kode = up.rumahKabKota		
				LEFT JOIN adis_kodepos t4 ON t4.kode = up.rumahKodePos
				LEFT JOIN adis_wil tA ON tA.kode = up.suratProp	
				LEFT JOIN adis_kodepos tD ON tD.kode = up.suratKodePos ".
				$wer;
		
		$sql = $this->db2->query($sql)->row();
		if ($asu){
			$this->smarty->assign("cmb", $sql);
		}else{
			$this->smarty->assign("prof", $sql);		
		}
	}
        
        
        
        function sendMail($email,$index, $konten){
			
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
                $this->email->bcc("div.humas@paramadina.ac.id");
                $this->email->to($email);
                if ($index == 'confirmDaftar'){
                        $this->email->subject("Konfirmasi Pembayaran Pendaftaran");
                        $htmlMessage = $this->parser->parse('email_template.html', $konten, true);
                        $this->email->message($htmlMessage);
                }else{
                        $this->email->subject("Pembayaran Pendaftaran Ulang (".$nama.")");
                        $htmlMessage = $this->parser->parse('email_template.html', $konten, true);
                        $this->email->message($htmlMessage);
                }
                $data['message'] = "Sorry Unable to send email...";	
                if($this->email->send()){					
                        $data['message'] = "Mail sent...";			
                }
	}
	
	function autoMail($email, $konten, $subject, $kodeusr){
			
                $date = date('Y/m/d H:i:s');
                $config = Array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'mail.paramadina.ac.id',
                        'smtp_port' => 25,			  
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
                $this->email->to($email);
                $this->email->subject($subject);
                $htmlMessage = $this->parser->parse('email_template.html', $konten, true);
                $this->email->message($htmlMessage);
                
                
                $data['message'] = "Sorry Unable to send email to $email...";	
                if($this->email->send()){					
                    $data['message'] = "Mail sent to $email...";    
                    $this->db->where('kode', $kodeusr);
                    $this->db->update('adis_smb_usr', array('reminder'=>1)); 
                }else{
                    $data['message'];
                }
                
                file_put_contents($this->log, $date.": ".$data['message']."\n",FILE_APPEND);
                echo $data['message'];
	}
}