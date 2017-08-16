<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class Mportal extends CUTI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	function Mportal(){
		parent::__construct();
		
		$this->db2->query("SET lc_time_names = 'id_ID'");
	}
	
	
	function mCmb($kode){
		if (is_numeric($kode)){
			$wer = "WHERE f.nomor = '$kode'";
		}else{
			$wer ="WHERE f.kode = '$kode'";
		}
		
		$sql = "SELECT f.kode as kode_smb, f.bukaSmb, f.nomor as no_smb, u.username as nama_cm , 
				p.nama as progdi, p.kode as kodeProdi,  
				DAYNAME(u.createTime) as hari, DATE(u.createTime) as tanggal, up.agamaType,
				DAY(u.createTime) as cDay, MONTHNAME(u.createTime) as cMonth, YEAR(u.createTime) as cYear,
				u.validation_status, m.jenjangType, up.rumahCell, up.genderType, up.nomorKtp,
				up.suratKabKota, up.suratKodePos, up.suratProp, up.suratTel, up.rumahFax,
				up.tempatLahir, up.tanggalLahir, DAYNAME(up.tanggalLahir) as hLahir, DATE_FORMAT(up.tanggalLahir,'%d-%m-%Y') as dateBirth,
				DAY(up.tanggalLahir) as tLahir, MONTHNAME(up.tanggalLahir) as bLahir, YEAR(up.tanggalLahir) as yLahir,
				up.rumahAlamat, up.suratAlamat, up.statusAlamat, up.nama as gender, up.statusKeluarga, e.status as statusPend,
				up.statusPrestasi, up.stsPribadiConfirm, up.statusSaudara, up.foto, up.confirmSaudara,
				f.stsApplyPaid, f.stsApplyPaidConfirm, up.stsPribadiConfirm, f.stsEventConfirm, f.stsResultConfirm, f.stsMundurBeforeReapply,
				f.stsReapplyPaid, stsReapplyPaidConfirm, f.stsMundurAfterReapply, j.nama as n_jalur, f.stsResultPass, f.stsReapplyPaidConfirm, f.stsReapplyPaid,
				m.tahun, m.semester, f.nim, m.nama as namaPeriode,
				k.tolakPendaftaran, k.tolakDU, k.pesanTolakP, k.pesanTolakDU, b.jalur, e.nisn_nim
				FROM adis_smb_form f 
				LEFT JOIN adis_smb_usr u ON u.kode = f.kode
				LEFT JOIN adis_buka_smb b ON b.kode = f.bukaSmb
				LEFT JOIN adis_periode d ON d.kode = b.periode
				LEFT JOIN adis_periode_master m ON m.kode = d.idPeriodeMaster		
				LEFT JOIN adis_smb_usr_pribadi up ON up.kode = f.kode
				LEFT JOIN adis_smb_usr_edu e ON e.smbUsr = f.kode
				LEFT JOIN adis_prodi p ON p.kode = b.prodi
				LEFT JOIN adis_jalur_smb j ON j.kode = b.jalur
				LEFT JOIN adis_type t ON t.kode = up.genderType
				LEFT JOIN adis_smb_usr_keu k ON k.smbUsr = f.kode 
				$wer";
		$sql = $this->db2->query($sql)->row();
		$this->smarty->assign("cmb", $sql);
		
		return $sql;
	
	}
	
	function mProfil($kode){
		if (is_numeric($kode)){
			$wer = "WHERE f.nomor = '$kode'";
		}else{
			$wer ="WHERE f.kode = '$kode'";
		}
		
		$sql = "SELECT f.kode as kode_smb, f.bukaSmb, f.nomor as no_smb, u.username as nama_cm , p.nama as progdi, p.kode as proKode, 
				m.jenjangType, up.rumahCell, up.genderType, up.tempatLahir, up.tanggalLahir, DAYNAME(up.tanggalLahir) as hLahir, 
				DAY(up.tanggalLahir) as tLahir, MONTHNAME(up.tanggalLahir) as bLahir, YEAR(up.tanggalLahir) as yLahir,
				up.nomorKtp, up.rumahEmail, up.suratAlamat, tA.nama as suratProp, tD.kodepos as suratKodPos,
				up.suratTel, up.suratFax,
				up.rumahAlamat, t2.nama as propNama, t3.nama as kabKotaNama, t4.kodepos as kodePos, up.rumahTel, up.rumahFax, 
				up.ayahNama, up.ayahAlamat, up.ayahCell, up.ayahEmail, 
				up.ibuNama, up.ibuAlamat, up.ibuCell, up.ibuEmail, 
				up.waliNama, up.waliAlamat, up.waliCell, up.waliEmail, 
				t.nama as gender, t.kode as kodeGender, t1.nama as agamaName,
				up.statusAlamat, up.statusKeluarga, 
				e.status as statusPend, e.nama as namaEdu, e.jurusan,
				up.statusPrestasi, up.stsPribadiConfirm, up.statusSaudara, up.foto,
				f.stsApplyPaid, f.stsApplyPaidConfirm, up.stsPribadiConfirm, f.stsEventConfirm, f.stsResultConfirm, f.stsMundurBeforeReapply,
				f.stsReapplyPaid, stsReapplyPaidConfirm, f.stsMundurAfterReapply, j.nama as n_jalur, f.stsResultPass, f.stsReapplyPaidConfirm,
				m.tahun, m.semester, e.file_ijazah, e.file_rapor, p.jenjang
				FROM adis_smb_form f 
				INNER JOIN adis_smb_usr u ON u.kode = f.kode
				LEFT JOIN adis_buka_smb b ON b.kode = f.bukaSmb
				LEFT JOIN adis_periode d ON d.kode = b.periode
				LEFT JOIN adis_periode_master m ON m.kode = d.idPeriodeMaster
				INNER JOIN adis_smb_usr_pribadi up ON up.kode = f.kode
				INNER JOIN adis_smb_usr_edu e ON e.smbUsr = f.kode
				LEFT JOIN adis_prodi p ON p.kode = b.prodi
				LEFT JOIN adis_jalur_smb j ON j.kode = b.jalur
				LEFT JOIN adis_type t ON t.kode = up.genderType
				LEFT JOIN adis_type t1 ON t1.kode = up.agamaType
				LEFT JOIN adis_wil t2 ON t2.kode = up.rumahProp
				LEFT JOIN adis_wil t3 ON t3.kode = up.rumahKabKota		
				LEFT JOIN adis_kodepos t4 ON t4.kode = up.rumahKodePos
				LEFT JOIN adis_wil tA ON tA.kode = up.suratProp	
				LEFT JOIN adis_kodepos tD ON tD.kode = up.suratKodePos 
				$wer";
		$sql = $this->db2->query($sql)->row();
		$this->smarty->assign("prof", $sql);
		
		$rapor = $sql->file_rapor;
		$rapor = json_decode($rapor);
		$this->smarty->assign('rapor', $rapor);
	}
	
	function mStatus($kode){
		$sql = "SELECT f.kode 
				FROM adis_smb_form f 
				INNER JOIN adis_smb_usr_pribadi u ON u.kode = f.kode
				INNER JOIN adis_smb_usr_edu e ON e.smbUsr = f.kode";
	}
	
	function mDetailAlamat($kode){
		$sql ="SELECT up.kode, up.nama, up.rumahCell, t.nama as gender, up.tempatLahir, up.tanggalLahir, up.nomorKtp, 
		agamaType, t2.nama as agama, 
		rumahProp, w.nama as propRumah, rumahKabKota, w2.nama as kabkotaRumah, rumahKodePos, k.kodepos as kodeposRumah, 
		suratProp, ws.nama as propSurat, suratKabKota, ws2.nama as kabkotaSurat, suratKodePos, ks.kodepos as kodeposSurat, 		
		up.rumahAlamat, up.rumahKabKota, up.rumahProp, up.rumahKodePos, rumahTel, rumahFax,
		up.suratAlamat, up.suratKabKota, up.suratProp, up.suratKodePos, suratTel, suratFax,
		up.statusAlamat 
		FROM adis_smb_usr_pribadi up
		LEFT JOIN adis_type t ON t.kode = up.genderType
		LEFT JOIN adis_type t2 ON t2.kode = up.agamaType
		LEFT JOIN adis_wil w ON w.kode = up.rumahProp
		LEFT JOIN adis_wil w2 ON w2.kode = up.rumahKabKota
		LEFT JOIN adis_kodepos k ON k.kode = up.rumahKodePos
		LEFT JOIN adis_wil ws ON ws.kode = up.suratProp
		LEFT JOIN adis_wil ws2 ON ws2.kode = up.suratKabKota
		LEFT JOIN adis_kodepos ks ON k.kode = up.suratKodePos
		WHERE up.kode = '$kode'";
		$sql = $this->db2->query($sql)->row();
		$this->smarty->assign("alamat", $sql);
	}
	
	function mPaidPendaftaran($kode){
		$sql = "SELECT f.kode as kode_smb, f.bukaSmb, f.nomor as no_smb, u.username as nama_cm , p.nama as progdi, 
		DAYNAME(u.createTime) as hari, DATE(u.createTime) as tanggal, u.validation_status, m.jenjangType, up.rumahCell, 
		FORMAT(f.applyBankTransferAmount, 2) as biaya, f.stsApplyPaid, f.stsApplyPaidConfirm, j.nama as n_jalur, t.kode as kode_typeTrans,
		m.tahun, m.semester, t.nama as typeTrans, t2.nama as typeAccount, DAYNAME(f.applyBankTransferTime) as hari_trans, 
		DATE(f.applyBankTransferTime) as tanggal_trans, k.buktiBayarPendaftaran as buktiBayarPendaftaran, 
		k.noRekPengirimPendaftaran, k.namaRekPengirimPendaftaran, k.noAtmCardPendaftaran
		FROM adis_smb_form f 
		INNER JOIN adis_smb_usr u ON u.kode = f.kode
		INNER JOIN adis_buka_smb b ON b.kode = f.bukaSmb
		INNER JOIN adis_periode d ON d.kode = b.periode
		INNER JOIN adis_periode_master m ON m.kode = d.idPeriodeMaster
		INNER JOIN adis_smb_usr_pribadi up ON up.kode = f.kode
		INNER JOIN adis_prodi p ON p.kode = b.prodi
		INNER JOIN adis_jalur_smb j ON j.kode = b.jalur
		INNER JOIN adis_type t ON t.kode = f.applyBankTransferType
		INNER JOIN adis_type t2 ON t2.kode = f.applyBankAccountType
		INNER JOIN adis_smb_usr_keu k ON k.smbUsr = f.kode 
		WHERE f.kode = '$kode'";
		$sql = $this->db2->query($sql)->row();
		$this->smarty->assign("transPaid", $sql);
	}
	
	function mSimpanBayar($file_name, $kode){
		$unik = uniqid();
		$date = date("Y-m-d H:i:s");                
                
                $this->db2->trans_begin();
		
		$this->db2->where("kode", $kode);
		$this->db2->update("adis_smb_form", array(
				"applyBankTransferType"=>$this->input->post("typeTrans"),
				"applyBankAccountType"=>$this->input->post("bankAkun"),
				"applyBankTransferAmount"=>$this->input->post("totalBiaya"),
				"applyBankTransferTime"=>$this->input->post("tanggalBayar"),
				"stsApplyPaid"=>1
			));
		
		
		$dbExist = $this->db->query("SELECT kode, smbUsr FROM adis_smb_usr_keu WHERE smbUsr = '$kode'")->num_rows();
		if ( $dbExist == 0){
			$this->db2->insert("adis_smb_usr_keu", array(
					"kode"=>$unik,
					"smbUsr"=>$kode,
					"createTime"=>$date,
					"createUser"=>$kode,
					"buktiBayarPendaftaran"=>$file_name,
					"noRekPengirimPendaftaran"=>$this->input->post("no_rek_cmb"),
					"namaRekPengirimPendaftaran"=>$this->input->post("nama_rek_cmb"),
					"noAtmCardPendaftaran"=>$this->input->post("noAtmCard")
				));
		}else{
			$this->db2->where("smbUsr", $kode);
			$this->db2->update("adis_smb_usr_keu", array(
					"smbUsr"=>$kode,
					"createTime"=>$date,
					"createUser"=>$kode,
					"buktiBayarPendaftaran"=>$file_name,
					"noRekPengirimPendaftaran"=>$this->input->post("no_rek_cmb"),
					"namaRekPengirimPendaftaran"=>$this->input->post("nama_rek_cmb"),
					"noAtmCardPendaftaran"=>$this->input->post("noAtmCard"),
					"tolakPendaftaran"=>0
				));
		}               
                
                if ($this->db2->trans_status() === FALSE){
                    $this->db2->trans_rollback();
                    return 0;
                }else{
                    $this->db2->trans_commit();
                    return 1;
                }
	}
	
	function mEmailKonfirm($kode, $bayar, $konten = ""){
			$cmb = $this->db->query("SELECT nama FROM adis_smb_usr_pribadi WHERE kode = '$kode';")->row();
			$noReg = $this->db->query("SELECT nomor FROM adis_smb_form WHERE kode = '$kode';")->row();
			$nama = $cmb->nama;
			$regNo = $noReg->nomor;
			// Validasi email terlebih dahulu.
				// Email configuration
                        $config = Array(
                                'protocol' => 'smtp',
                                'smtp_host' => 'students.paramadina.ac.id',
                                'smtp_port' => 25,
//                                'smtp_user' => 'orangbaik@students.paramadina.ac.id', // change it to yours
//                                'smtp_pass' => 'S@l4mb3l@k4ng', // change it to yours				  
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
                        $this->email->bcc("rahmad.syalevi@paramadina.ac.id");                                       
                        $this->email->cc("div.humas@paramadina.ac.id");
                        $this->email->to("div.keu@paramadina.ac.id");
                        if ($bayar == 'D'){
                                $this->email->subject("Pembayaran Pendaftaran Registrasi Online (".$nama.")");
                                $htmlMessage = $this->parser->parse('email_template.html', $konten, true);
                                $this->email->message($htmlMessage);
                        }else{
                                $this->email->subject("Pembayaran Pendaftaran Ulang (".$nama.")");
                                $htmlMessage = $this->parser->parse('email_template.html', $konten, true);
                                $this->email->message($html);
                        }
                        $data['message'] = "Sorry Unable to send email...";	
                        if($this->email->send()){					
                                $data['message'] = "Mail sent...";			
                        }
	}
	
	function mPaidDaftarUlang($kode, $saudara, $jenjang = '', $periode){
		$angsuran = '';
		
		$sql = "SELECT f.kode as kode_smb, f.bukaSmb, f.nomor as no_smb, u.username as nama_cm , p.nama as progdi, RIGHT(f.bukaSmb,4) as kodeProdi, 
		SUBSTR(bukaSmb,12, 2) as jalur,
		DAYNAME(u.createTime) as hari, DATE(u.createTime) as tanggal, u.validation_status, m.jenjangType, up.rumahCell, 
		f.stsReapplyPaid, f.stsReapplyPaidConfirm, j.nama as n_jalur,b.jalur as kode_jalur, 
		t.kode as kode_typeTrans,
		m.tahun, m.semester, t.nama as typeTrans, t2.nama as typeAccount, DAYNAME(f.reapplyBankTransferTime) as hari_trans, 
		DATE(f.reapplyBankTransferTime) as tanggal_trans, k.buktiBayarDaftarUlang, f.reapplyBankTransferAmount,
		k.noRekPengirimDaftarUlang, k.namaRekPengirimDaftarUlang, f.stsResultGrade,
		k.metodBayarDaftarUlang, k.totalBiayaDaftarUlang, k.noAtmCardDaftarulang, k.sks_acc,  k.noAtmCardPendaftaran,
		SUBSTR(k.metodBayarDaftarUlang, 12, 3) as lulusan, k.alumni_s1 as alumni, e.lulus_acc, f.earlyBird,
		k.earlybird as earlybirdS2, k.keluargacivitas, k.keluargadlb, k.metodePembayaran, k.miaiPindahan
		FROM adis_smb_form f 
		LEFT JOIN adis_smb_usr u ON u.kode = f.kode
		LEFT JOIN adis_buka_smb b ON b.kode = f.bukaSmb
		LEFT JOIN adis_periode d ON d.kode = b.periode
		LEFT JOIN adis_periode_master m ON m.kode = d.idPeriodeMaster
		LEFT JOIN adis_smb_usr_pribadi up ON up.kode = f.kode
		LEFT JOIN adis_prodi p ON p.kode = b.prodi
		LEFT JOIN adis_jalur_smb j ON j.kode =  SUBSTR(f.bukaSmb, 12, 2)
		LEFT JOIN adis_type t ON t.kode = f.reapplyBankTransferType
		LEFT JOIN adis_type t2 ON t2.kode = f.reapplyBankAccountType
		LEFT JOIN adis_smb_usr_keu k ON k.smbUsr = f.kode 
		LEFT JOIN adis_smb_usr_edu e ON e.smbUsr = f.kode 
		WHERE f.kode = '$kode'";
		$sql = $this->db2->query($sql)->row();
		$this->smarty->assign("transPaid", $sql);
		
		$jalur_code = $sql->jalur;
                $earlybird = $sql->earlyBird;
		
		switch($jenjang){
			case '1':
				IF  ($jalur_code == 'KP'){
//                                    $kodePaidType = $sql-> metodBayarDaftarUlang;
					$kodePaidType = "";
					if(!$kodePaidType){
						$kodePaidType = $sql->kodeProdi.'.'.'69'.'.'.'KP'.'.'.$sql->lulus_acc;
					}
		// echo '<script>alert("'.$kodePaidType.'");</script>';
					
					$metodBayar = "SELECT A.*,
						C.tempo, C.tgl_jatuh_tempo 
						FROM `adis_pembayaran_kelasmalam` A
						LEFT JOIN tbl_tgl_tempo_kelasmalam C ON C.kode_periode = A.periode_kode
						WHERE A.kode = '$kodePaidType' AND A.periode_kode = '$periode' ;";
					
					$biaya = $this->db2->query($metodBayar)->row();									
					
					$pilBiaya = json_decode($biaya->pilihanBiayaUM);
					$this->smarty->assign('pilihanBiaya',$pilBiaya);
					
					$biayaSks = $biaya->biayaPerSks * $biaya->jumlahSks;
					$total = $biaya->uangMasuk + $biaya->spp + $biayaSks;
					$angsurPerBulan = $total/$biaya->tempoAngsuran;
                                    
					$tglJatuhTempo = $biaya->tgl_jatuh_tempo;
					$tglJatuhTempo = json_decode($tglJatuhTempo);
					
					$detailAngsur = array();
					$angsuran = array();
					
					foreach ($tglJatuhTempo as $k => $val){
						$dateTempo = date("Y-m-d", strtotime($val));
						$angsuran[$k] = array('angsuran'=>$angsurPerBulan,'tglTempo'=>$dateTempo);
					}
					$this->listAngsuran($sql->reapplyBankTransferAmount, $kodePaidType, $periode);
				  
					$this->smarty->assign('uangMasuk', $biaya->uangMasuk);
					$this->smarty->assign('total', $total);
					$this->smarty->assign('method','69');		
					$this->smarty->assign('biaya', $biaya);
					$this->smarty->assign('jalur', $sql->jalur);
					$this->smarty->assign('prodi', $sql->kodeProdi);                         
					$this->smarty->assign('angsuran', $angsuran);
					$this->smarty->assign('kodePayTipe', $kodePaidType);
						
				}ELSE{
						
					$sks_acc = $sql->sks_acc;
					$rank = $sql->stsResultGrade;
					$kodePaidType = $sql->metodBayarDaftarUlang;
					if(!$kodePaidType){
						$kodePaidType = $sql->kodeProdi.'.'.'1'.'.'.'01';
					}

				   //echo '<script>alert("Kode Tipe :'.$kodePaidType.'");</script>';
					$metodBayar = "SELECT p.*, c.*, c.kode as code, p.kode as kode_pembayaran 
							FROM adis_pembayaran p
							LEFT JOIN adis_cicilan c ON c.id_pembayaran = p.kode AND c.periode_kode = '$periode'
							WHERE p.kode='$kodePaidType'  AND p.periode_kode = '$periode'";
					$biaya = $this->db2->query($metodBayar)->row();
					if ($biaya == null){
						echo '<script>alert("Setting pembayaran uang masuk belum dibuat. Hubungi Admin.");</script>';						
						redirect ('/portal/seleksi', 'refresh');
					}
					

					$pembayaran = $biaya->pembayaran;
					
					if ($jalur_code == 'JP'){						
						if ($rank == '1'){$uangMasuk = $biaya->uangMasuk1*0.25;}
						if ($rank == '2'){$uangMasuk = $biaya->uangMasuk1*0.5;}
						if ($rank == '3'){$uangMasuk = $biaya->uangMasuk1*0.75;}
						
						if($rank == 1){	$total = ($biaya->total1-$biaya->uangMasuk1)+$uangMasuk;}
						if($rank == 2){	$total = ($biaya->total1-$biaya->uangMasuk1)+$uangMasuk;}
						if($rank == 3){	$total = ($biaya->total1-$biaya->uangMasuk1)+$uangMasuk;}
						
					}else{					
						if($rank == 1){	$total = $biaya->total1;}
						if($rank == 2){	$total = $biaya->total2;}
						if($rank == 3){	$total = $biaya->total3;}

						if ($rank == '1'){$uangMasuk = $biaya->uangMasuk1;}
						if ($rank == '2'){$uangMasuk = $biaya->uangMasuk2;}
						if ($rank == '3'){$uangMasuk = $biaya->uangMasuk3;}
					}
					// echo '<script>alert("Uang masuk :'.$total.'");</script>';
					
					if ($rank == 5){ $total = $biaya->total1 - $biaya->uangMasuk1;}
					if ($rank == 5){ $uangMasuk = 0;}

					$sisaAng = 0;
					$angsuran1 = 0;
					$angsuran2 = 0;
					$angsuran3 = 0;
					$totalDiskon = 0;
					$diskonSau = "";
					$diskonSKS = 0;
					$totalAll = $total;
					$totalUangMasuk = $uangMasuk;
					$earlyBirdPot = 0;

					//Potongan memiliki saudara && Early Bird
					if ($sql->kodeProdi != '1204'){
						
						if ($earlybird == 99){
							$earlyBirdPot = 30/100*$uangMasuk;
						}

						if ($saudara != 0){
							if ($earlybird != 99 || $pembayaran != 1){
								$diskonSau = 20/100*$uangMasuk;
							}else{                                                
								$diskonSau = 20/100*($uangMasuk - $earlyBirdPot);
							}
						}
					}


					if ($sks_acc > 40 && $sks_acc <= 80){
							$diskonSKS = (25/100)*($totalUangMasuk-$diskonSau);
					}else if ($sks_acc > 80){
							$diskonSKS = (50/100)*($totalUangMasuk-$diskonSau);
                                        }

					//JUMLAH DISKON SAUDARA DENGAN SKS
					$totalDiskon = $diskonSau + $diskonSKS ;

					//Potongan pembayaran lunas
					if ($pembayaran == 1){
							if ($sql->kodeProdi != '1204'){
									if($sql->jalur == '01' || $sql->jalur == '02'){
										if ($earlybird == 99){
											$totalDiskon = $diskonSau + $diskonSKS + $earlyBirdPot;
										}else{
											$totalDiskon = $diskonSau + $diskonSKS + 1000000;
										}
									}
							}
					}else{
					//Pemabyaran Angsuran							

						if ($rank == '1'){$totalAll = ($total - $uangMasuk);} //+ $biaya->angsuran1_1;}
						if ($rank == '2'){$totalAll = ($total - $uangMasuk);} //+ $biaya->angsuran1_2;}
						if ($rank == '3'){$totalAll = ($total - $uangMasuk);} //+ $biaya->angsuran1_3;}

						if ($rank == '1'){
								$angsuran = array(
										'angsuran1'=>$biaya->angsuran1_1,
										'angsuran2'=>$biaya->angsuran2_1,
										'angsuran3'=>$biaya->angsuran3_1 - $totalDiskon,
								);
						}else
						if ($rank == '2'){
								$angsuran = array(
										'angsuran1'=>$biaya->angsuran1_2,
										'angsuran2'=>$biaya->angsuran2_2,
										'angsuran3'=>$biaya->angsuran3_2 - $totalDiskon,
								);
						}else
						if ($rank == '3'){
								$angsuran = array(
										'angsuran1'=>$biaya->angsuran1_3,
										'angsuran2'=>$biaya->angsuran2_3,
										'angsuran3'=>$biaya->angsuran3_3 - $totalDiskon
								);
						}
												
						// echo '<script>alert("Uang masuk :'.$angsuran['angsuran1'].'");</script>';

						$sisaAng = $angsuran['angsuran1']+$angsuran['angsuran2']+$angsuran['angsuran3'];

						$angsuran1 = $angsuran['angsuran1'];
						if ($angsuran['angsuran3']<0){
								$angsuran2 = $angsuran['angsuran2'] + $angsuran['angsuran3'];
						}else{
								$angsuran2 = $angsuran['angsuran2'];
						}

						if ($angsuran['angsuran3'] < 0){
						 $angsuran3 = $angsuran['angsuran3'] - $angsuran['angsuran3'];
						}else{
								$angsuran3 = $angsuran['angsuran3'];
						}
						
						// $totalAll = ($totalAll + $angsuran['angsuran1']) - ($totalDiskon-$diskonSau);
						$totalAll = ($totalAll + $angsuran['angsuran1']); // - ($totalDiskon-$diskonSau);
						// echo '<script>alert("Diskon :'.$totalAll.'");</script>';

					}
						
					$totalUangMasuk = $uangMasuk - $totalDiskon ; 
					$total = $total - $totalDiskon;

					
					$this->smarty->assign('earlyBird', $earlybird);
					$this->smarty->assign('uangMasuk', $uangMasuk);
					$this->smarty->assign('angsuran',$angsuran);
					$this->smarty->assign('angsuran1',$angsuran1);
					$this->smarty->assign('angsuran2',$angsuran2);
					$this->smarty->assign('angsuran3',$angsuran3);
					$this->smarty->assign('sisaAng',$sisaAng);
					$this->smarty->assign('diskonSau', $diskonSau);
					$this->smarty->assign('totalDiskon', $totalDiskon);
					$this->smarty->assign('totalUangMasuk', $totalUangMasuk);
					$this->smarty->assign('totalAll', $totalAll);
					$this->smarty->assign('total', $total);
					$this->smarty->assign('method',$pembayaran);		
					$this->smarty->assign('biaya', $biaya);
					$this->smarty->assign('jalur', $sql->jalur);
					$this->smarty->assign('prodi', $sql->kodeProdi);
					
					
				}
			break;
			case '2_old':                          
                                
				$totalAll = 0;
				$diskonAlum = 0;
                                $total = 0;
                                $pembayaran = 0;
                                $biaya = 0;
				$prodi = $sql->kodeProdi;
				$alumni = $sql->alumni;
				
				$sisaAng = 0;
                            
				$this->smarty->assign('totalAll', $totalAll);
				$this->smarty->assign('diskonAlum', $diskonAlum);
				$this->smarty->assign('total', $total);
				$this->smarty->assign('method',$pembayaran);		
				$this->smarty->assign('biaya', $biaya);
				$this->smarty->assign('jalur', $sql->jalur);
				$this->smarty->assign('prodi', $prodi);
				$this->smarty->assign('alumni', $alumni);
                        break;
			case '2':
				$kodePaidType = $periode.'.'.$sql->kodeProdi.'.'.'1';   
                                $potonganBea = 0;
                                
				$metodBayar = "SELECT p.*, p.kode as kode_pembayaran FROM adis_pembayaran_s2 p
					WHERE p.kode='$kodePaidType' AND kodePeriode = '$periode'";                                
				$biaya = $this->db2->query($metodBayar)->row();	
                                
				$diskonVal = 0;
				$uangMasuk = $biaya->uangMasuk;
				$jumlahSem = $biaya->jumlahSemester;
				$biayaSpp = $biaya->biayaSpp;
				$biayaSks = $biaya->biayaSks;                                  
                                // echo '<script>alert("Jalur Tipe : '.$jalur_code.', Periode : '.$periode.'");</script>';
                                
				if ($jalur_code == 'F2'){
					$potonganBea = 0.25;		
					$diskonVal += $potonganBea*$uangMasuk;
					$biayaSks = $biaya->sksSem1F25;
					$uangMasuk = $uangMasuk - ($potonganBea*$uangMasuk);
					$biayaSpp = $biayaSpp - ($potonganBea*$biayaSpp);	
				}else if  ($jalur_code == 'F5'){
					$potonganBea = 0.5;		
					$diskonVal += $potonganBea*$uangMasuk;
					$biayaSks = $biaya->sksSem1F50;
					$uangMasuk = $uangMasuk - ($potonganBea*$uangMasuk);
					$biayaSpp = $biayaSpp - ($potonganBea*$biayaSpp);	
				}else if  ($jalur_code == 'F7'){
					$potonganBea = 0.75;
					$biayaSks = $biaya->sksSem1F75;		
					$diskonVal += $potonganBea*$uangMasuk;
					$uangMasuk = $uangMasuk - ($potonganBea*$uangMasuk);
					$biayaSpp = $biayaSpp - ($potonganBea*$biayaSpp);	
				}else if  ($jalur_code == 'F1'){
					$potonganBea = 1;
					// $biayaSks = $biaya->sksSem1F75;			
					$diskonVal += $potonganBea*$uangMasuk;
					$uangMasuk = $uangMasuk - ($potonganBea*$uangMasuk);	
				}
				
				$prodi = $sql->kodeProdi;
				$alumni = $sql->alumni;
				$earlybirdS2 = $sql->earlybirdS2;
				$keluargacivitas = $sql->keluargacivitas;
				$keluargadlb = $sql->keluargadlb;
				$metPembayaran = $sql->metodePembayaran;                            
				$isMIAI = $sql->miaiPindahan;  
				
				$sisaAng = 0;
				$diskonAlum = 0;
				$diskonMIAI = 0;
				$diskonEarlyBird = 0;
				$diskonKlgCivitas = 0;
				$diskonKlgDlb = 0;
				$diskonLunas = 0;
				$hasilUM = $uangMasuk;
				
//                                Potongan Early Bird
				if ($jalur_code == '10'){
//                                Potongan Early Bird
					if ($earlybirdS2 == 1){
						if ($alumni || $keluargacivitas || $keluargadlb){
							$diskonEarlyBird = 0;
						}else{                      
							$diskonEarlyBird = 2000000;
							$diskonVal += 2000000;
						}
						$hasilUM = $uangMasuk - $diskonEarlyBird;
					}

					//Potongan Alumni
					if ($alumni == 1){					
						$diskonAlum = $uangMasuk*1;	
						$hasilUM = $uangMasuk - $diskonAlum;
						$diskonVal += $diskonAlum;
					}

					//Potongan Keluarga Inti Civitas Akademika
					if ($keluargacivitas == 1){					
						$diskonKlgCivitas = $uangMasuk*1;
						$hasilUM = $uangMasuk - $diskonKlgCivitas;	
						$diskonVal += $diskonKlgCivitas;
					}

					//Potongan Keluarga Inti DLB
					if ($keluargadlb == 1){					
						$diskonKlgDlb = 0.7*$uangMasuk;	
						$hasilUM = $uangMasuk - $diskonKlgDlb;	
						if ($metPembayaran != 1){
							$uangMasuk = $hasilUM/3;
						}
						$diskonVal += $diskonKlgDlb;
					}
					
					//Potongan Keluarga Inti DLB
					if ($isMIAI == 1){					
						$diskonMIAI = $uangMasuk;	
						$hasilUM = $uangMasuk - $uangMasuk;	
						$diskonVal += $diskonMIAI;
					}

					//Potongan pembayaran lunas
					if ($metPembayaran == 1){    
						$diskonLunas = "";
						if ($alumni || $keluargacivitas || $keluargadlb){
							$diskonLunas = 0;
						}else{ 
							if ($isMIAI = 1){
								$diskonLunas = 0;
							}else{
								$diskonLunas = 3000000;  
								$diskonVal += $diskonLunas;     
							}							
						}
						$totalDiskonUM = $diskonEarlyBird + $diskonLunas + $diskonAlum + $diskonKlgCivitas + $diskonKlgDlb + $diskonMIAI;   
						$hasilUM = $uangMasuk - $totalDiskonUM;
					}else{
						$totalDiskonUM = $hasilUM;
					}
				}
                                
				
				// Total Uang Masuk dibagi jumlah semester
				$hasilUM = $hasilUM/$jumlahSem;
				$totalSemester = $hasilUM + $biayaSpp + $biayaSks;                                				
                             				
				$this->smarty->assign('diskonVal', $diskonVal);
				$this->smarty->assign('totalAll', $totalSemester);
				$this->smarty->assign('uangMasuk', $hasilUM);
				$this->smarty->assign('method',$metPembayaran);		
				$this->smarty->assign('biaya', $biaya);
				$this->smarty->assign('jalur', $sql->jalur);
				$this->smarty->assign('prodi', $prodi);
				$this->smarty->assign('alumni', $alumni);
				$this->smarty->assign('earlybird', $diskonEarlyBird);
				$this->smarty->assign('diskonLunas', $diskonLunas);
				$this->smarty->assign('klgCivitas', $diskonKlgCivitas);
				$this->smarty->assign('klgDlb', $diskonKlgDlb);
				$this->smarty->assign('diskonAlum', $diskonAlum);
				$this->smarty->assign('diskonMIAI', $diskonMIAI);
				$this->smarty->assign('hasilUM', $hasilUM);
				$this->smarty->assign('biayaSpp', $biayaSpp);
				$this->smarty->assign('biayaSks', $biayaSks);
				
			break;
		}
		
		
		
		return true;
	}
        
	function mDaftarUlangReg($kode, $saudara, $jenjang = '', $pembayaran, $prodiType, $periode){
		$angsuran = '';
		
		$sql = "SELECT f.kode as kode_smb, f.bukaSmb, f.nomor as no_smb, u.username as nama_cm , p.nama as progdi, RIGHT(f.bukaSmb,4) as kodeProdi, 
		SUBSTR(bukaSmb,12, 2) as jalur,
		DAYNAME(u.createTime) as hari, DATE(u.createTime) as tanggal, u.validation_status, m.jenjangType, up.rumahCell, 
		f.stsReapplyPaid, f.stsReapplyPaidConfirm, j.nama as n_jalur,b.jalur as kode_jalur, 
		t.kode as kode_typeTrans,
		m.tahun, m.semester, t.nama as typeTrans, t2.nama as typeAccount, DAYNAME(f.reapplyBankTransferTime) as hari_trans, 
		DATE(f.reapplyBankTransferTime) as tanggal_trans, k.buktiBayarDaftarUlang, f.reapplyBankTransferAmount,
		k.noRekPengirimDaftarUlang, k.namaRekPengirimDaftarUlang, f.stsResultGrade,
		k.metodBayarDaftarUlang, k.totalBiayaDaftarUlang, k.noAtmCardDaftarulang, k.sks_acc,  k.noAtmCardPendaftaran,
		SUBSTR(metodBayarDaftarUlang, 12, 3) as lulusan, k.alumni_s1 as alumni, f.earlyBird, e.lulus_acc
		FROM adis_smb_form f 
		LEFT JOIN adis_smb_usr u ON u.kode = f.kode
		LEFT JOIN adis_buka_smb b ON b.kode = f.bukaSmb
		LEFT JOIN adis_periode d ON d.kode = b.periode
		LEFT JOIN adis_periode_master m ON m.kode = d.idPeriodeMaster
		LEFT JOIN adis_smb_usr_pribadi up ON up.kode = f.kode
		LEFT JOIN adis_prodi p ON p.kode = b.prodi
		LEFT JOIN adis_jalur_smb j ON j.kode =  SUBSTR(f.bukaSmb, 12, 2)
		LEFT JOIN adis_type t ON t.kode = f.reapplyBankTransferType
		LEFT JOIN adis_type t2 ON t2.kode = f.reapplyBankAccountType
		LEFT JOIN adis_smb_usr_keu k ON k.smbUsr = f.kode 
                LEFT JOIN adis_smb_usr_edu e ON e.smbUsr = f.kode
		WHERE f.kode = '$kode'";
		$sql = $this->db2->query($sql)->row();
		$this->smarty->assign("transPaid", $sql);
		
		$jalur_code = $sql->jalur;
		$kodePaidType = "";
		$earlybird = $sql->earlyBird;
		//echo '<script>alert("'.$jalur_code.'");</script>';
//		echo '<script>alert("'.$kodePaidType.'");</script>';
		
		switch($jenjang){
			case '1':
				IF  ($jalur_code == 'KP'){
                                    
						$kodePaidType = $sql-> metodBayarDaftarUlang;
						if (!$kodePaidType){
							$kodePaidType = $sql->kodeProdi.'.'.'69'.'.'.'KP'.'.'.$sql->lulus_acc;
						}
						
//                            		echo '<script>alert("'.$kodePaidType.'");</script>';
						$metodBayar = "SELECT A.*, 
							C.tempo, C.tgl_jatuh_tempo 
							FROM `adis_pembayaran_kelasmalam` A
							LEFT JOIN tbl_tgl_tempo_kelasmalam C ON C.kode_periode = A.periode_kode
							WHERE A.kode = '$kodePaidType' AND A.periode_kode = '$periode' ;";
						
						$biaya = $this->db2->query($metodBayar)->row();
						
						$pilBiaya = json_decode($biaya->pilihanBiayaUM);
						$this->smarty->assign('pilihanBiaya',$pilBiaya);
						
						$biayaSks = $biaya->biayaPerSks * $biaya->jumlahSks;
						$total = $biaya->uangMasuk + $biaya->spp + $biayaSks;
						$angsurPerBulan = $total/$biaya->tempoAngsuran;
						
						$tglJatuhTempo = $biaya->tgl_jatuh_tempo;
						$tglJatuhTempo = json_decode($tglJatuhTempo);
						
						$detailAngsur = array();
						$angsuran = array();
						
						foreach ($tglJatuhTempo as $k => $val){
							$dateTempo = date("Y-m-d", strtotime($val));
							$angsuran[$k] = array('angsuran'=>$angsurPerBulan,'tglTempo'=>$dateTempo);
						}
//                                    print_r($angsuran);
					  
						$this->smarty->assign('uangMasuk', $biaya->uangMasuk);
						$this->smarty->assign('total', $total);
						$this->smarty->assign('method','69');		
						$this->smarty->assign('biaya', $biaya);
						$this->smarty->assign('jalur', $sql->jalur);
						$this->smarty->assign('prodi', $sql->kodeProdi);                         
						$this->smarty->assign('angsuran', $angsuran);
						$this->smarty->assign('angsuranPerBulan', $angsurPerBulan);
						$this->smarty->assign('kodePayTipe', $kodePaidType);
						
				}ELSE{
					$ori_jalur = '';
					if ($jalur_code == '02' || $jalur_code == 'JP'){
						$ori_jalur = $jalur_code;
						$jalur_code = '01';
					}
					$kodePaidType = implode(".",array($prodiType,$pembayaran,$jalur_code));
		
					$sks_acc = $sql->sks_acc;
					$rank = $sql->stsResultGrade;
//						$kodePaidType = $sql->metodBayarDaftarUlang;
//						echo '<script>alert("Kode Tipe :'.$kodePaidType.'");</script>';
					$metodBayar = "SELECT p.*, c.*, c.kode as code, p.kode as kode_pembayaran 
							FROM adis_pembayaran p
							LEFT JOIN adis_cicilan c ON c.id_pembayaran = p.kode AND p.periode_kode = c.periode_kode
							WHERE p.kode='$kodePaidType' AND p.periode_kode = '$periode'";
					$biaya = $this->db2->query($metodBayar)->row();
						
					if ($ori_jalur == 'JP'){						
						if ($rank == '1'){$uangMasuk = $biaya->uangMasuk1*0.25;}
						if ($rank == '2'){$uangMasuk = $biaya->uangMasuk1*0.5;}
						if ($rank == '3'){$uangMasuk = $biaya->uangMasuk1*0.75;}
						
						if($rank == 1){	$total = ($biaya->total1-$biaya->uangMasuk1)+$uangMasuk;}
						if($rank == 2){	$total = ($biaya->total1-$biaya->uangMasuk1)+$uangMasuk;}
						if($rank == 3){	$total = ($biaya->total1-$biaya->uangMasuk1)+$uangMasuk;}
						
					}else{					
						if($rank == 1){	$total = $biaya->total1;}
						if($rank == 2){	$total = $biaya->total2;}
						if($rank == 3){	$total = $biaya->total3;}

						if ($rank == '1'){$uangMasuk = $biaya->uangMasuk1;}
						if ($rank == '2'){$uangMasuk = $biaya->uangMasuk2;}
						if ($rank == '3'){$uangMasuk = $biaya->uangMasuk3;}
					}
					// echo '<script>alert("Uang masuk :'.$uangMasuk.'");</script>';
					
					if ($rank == 5){ $total = $biaya->total1 - $biaya->uangMasuk1;}
					if ($rank == 5){ $uangMasuk = 0;}
						
					$sisaAng = 0;
					$angsuran1 = 0;
					$angsuran2 = 0;
					$angsuran3 = 0;
					$totalDiskon = 0;
					$diskonSau = "";
					$diskonSKS = 0;
					$totalAll = $total;
					$totalUangMasuk = $uangMasuk;
					$earlyBirdPot = 0;

					//Potongan memiliki saudara
					if ($sql->kodeProdi != '1204'){
						if ($earlybird == 99){
							$earlyBirdPot = 30/100*$uangMasuk;
						}
						
						if ($saudara != 0){
							if ($earlybird != 99 || $pembayaran != 1){
								$diskonSau = 20/100*$uangMasuk;
							}else{                                                
								$diskonSau = 20/100*($uangMasuk - $earlyBirdPot);
							}
						}
					}
		
		
					if ($sks_acc > 40 && $sks_acc <= 80){
							$diskonSKS = (25/100)*($totalUangMasuk-$diskonSau);
					}else if ($sks_acc > 80){
							$diskonSKS = (50/100)*($totalUangMasuk-$diskonSau);
					}
						
					//JUMLAH DISKON SAUDARA DENGAN SKS
					$totalDiskon = $diskonSau + $diskonSKS;

					//Potongan pembayaran lunas
					if ($pembayaran == 1){
							if ($sql->kodeProdi != '1204'){
								if($sql->jalur == '01' || $sql->jalur == '02'){
									if ($earlybird == 99){
										$totalDiskon = $diskonSau + $diskonSKS + $earlyBirdPot;
									}else{
										$totalDiskon = $diskonSau + $diskonSKS + 1000000;
									}
								}
							}
					}else{
						//Pemabyaran Angsuran							
									
					if ($rank == '1'){$totalAll = ($total - $uangMasuk);} //+ $biaya->angsuran1_1;}
					if ($rank == '2'){$totalAll = ($total - $uangMasuk);} //+ $biaya->angsuran1_2;}
					if ($rank == '3'){$totalAll = ($total - $uangMasuk);} //+ $biaya->angsuran1_3;}
	
					if ($rank == '1'){
							$angsuran = array(
									'angsuran1'=>$biaya->angsuran1_1,
									'angsuran2'=>$biaya->angsuran2_1,
									'angsuran3'=>$biaya->angsuran3_1 - $totalDiskon,
							);
					}
					if ($rank == '2'){
							$angsuran = array(
									'angsuran1'=>$biaya->angsuran1_2,
									'angsuran2'=>$biaya->angsuran2_2,
									'angsuran3'=>$biaya->angsuran3_2 - $totalDiskon,
							);
					}
					if ($rank == '3'){
							$angsuran = array(
									'angsuran1'=>$biaya->angsuran1_3,
									'angsuran2'=>$biaya->angsuran2_3,
									'angsuran3'=>$biaya->angsuran3_3 - $totalDiskon
							);
					}
							
					$sisaAng = $angsuran['angsuran1']+$angsuran['angsuran2']+$angsuran['angsuran3'];

					$angsuran1 = $angsuran['angsuran1'];
					if ($angsuran['angsuran3']<0){
							$angsuran2 = $angsuran['angsuran2'] + $angsuran['angsuran3'];
					}else{
							$angsuran2 = $angsuran['angsuran2'];
					}

					if ($angsuran['angsuran3'] < 0){
							$angsuran3 = $angsuran['angsuran3'] - $angsuran['angsuran3'];
					}else{
							$angsuran3 = $angsuran['angsuran3'];
					}
								
					$totalAll = ($totalAll + $angsuran['angsuran1']) - ($totalDiskon-$diskonSau);

				}
						
				$totalUangMasuk = $uangMasuk - $totalDiskon ; 
				$total = $total - $totalDiskon;
				
				$this->smarty->assign('uangMasuk', $uangMasuk);
				$this->smarty->assign('earlyBird', $earlybird);
				$this->smarty->assign('angsuran',$angsuran);
				$this->smarty->assign('angsuran1',$angsuran1);
				$this->smarty->assign('angsuran2',$angsuran2);
				$this->smarty->assign('angsuran3',$angsuran3);
				$this->smarty->assign('sisaAng',$sisaAng);
				$this->smarty->assign('diskonSau', $diskonSau);
				$this->smarty->assign('totalDiskon', $totalDiskon);
				$this->smarty->assign('totalUangMasuk', $totalUangMasuk);
				$this->smarty->assign('totalAll', $totalAll);
				$this->smarty->assign('total', $total);
				$this->smarty->assign('method',$pembayaran);		
				$this->smarty->assign('biaya', $biaya);
				$this->smarty->assign('jalur', $sql->jalur);
				$this->smarty->assign('prodi', $sql->kodeProdi);
					
					
			}
			break;
			case '2':                          
                                
				$totalAll = 0;
				$diskonAlum = 0;
                                $total = 0;
                                $pembayaran = 0;
                                $biaya = 0;
				$prodi = $sql->kodeProdi;
				$alumni = $sql->alumni;
				
				$sisaAng = 0;
                            
				$this->smarty->assign('totalAll', $totalAll);
				$this->smarty->assign('diskonAlum', $diskonAlum);
				$this->smarty->assign('total', $total);
				$this->smarty->assign('method',$pembayaran);		
				$this->smarty->assign('biaya', $biaya);
				$this->smarty->assign('jalur', $sql->jalur);
				$this->smarty->assign('prodi', $prodi);
				$this->smarty->assign('alumni', $alumni);
                        break;
			case '2_later':
				$kodePaidType = $sql->metodBayarDaftarUlang;
				$metodBayar = "SELECT p.*, p.kode as kode_pembayaran FROM adis_pembayaran_pasca p
					WHERE p.kode='$kodePaidType'";
				$biaya = $this->db2->query($metodBayar)->row();	
				$pembayaran = $biaya->pembayaran;
				$total = $biaya->totalAll;
				$totalDU = $biaya->totalDaftarUlang;
				
				$prodi = $sql->kodeProdi;
				$alumni = $sql->alumni;
				
				$sisaAng = 0;
				$totalAll = 0;
				$diskonAlum = 0;
				
				//Potongan Alumni
				if ($alumni == 1){
					if ($prodi != '1234'){
						$total = $total - $biaya->totalUangMasuk;
						$diskonAlum = $biaya->totalUangMasuk;
					}else{
						$total = $total - (0.5*$biaya->totalUangMasuk);
						$diskonAlum = 0.5*$biaya->totalUangMasuk;
					}
				}
				
				//Potongan pembayaran lunas
				if ($pembayaran == 1){
					$totalAll = $total - 5000000;
				}else{
					$totalAll =  $total ;
				}
				

				$this->smarty->assign('totalAll', $totalAll);
				$this->smarty->assign('diskonAlum', $diskonAlum);
				$this->smarty->assign('total', $total);
				$this->smarty->assign('method',$pembayaran);		
				$this->smarty->assign('biaya', $biaya);
				$this->smarty->assign('jalur', $sql->jalur);
				$this->smarty->assign('prodi', $prodi);
				$this->smarty->assign('alumni', $alumni);
				
			break;
		}
		
		
		
		return true;
	}
	
	
	
	function mSimpanDaftarUlang($file_name, $kode){
		$date = date("Y-m-d H:i:s");
		
		$jumlahBayar = str_replace(' ', '', str_replace('.', '', $this->input->post("jumlahBayar")));
                $earlybird = "0";
                
                $this->db2->trans_begin();
                
                if (new DateTime() < new DateTime("2016-02-28 24:00:00")){                    
                    $earlybird = 1;
                }
		
		$this->db2->where("kode", $kode);
		$this->db2->update("adis_smb_form", array(
				"reapplyBankTransferType"=>$this->input->post("typeTrans"),
				"reapplyBankAccountType"=>$this->input->post("bankAkun"),
				"reapplyBankTransferAmount"=>$jumlahBayar,
				"reapplyBankTransferTime"=>$this->input->post("tanggalBayar"),
				"stsReapplyPaid"=>1,
                                'earlyBird'=>$earlybird
			));
		
		$this->db2->where("smbUsr", $kode);
		$this->db2->update("adis_smb_usr_keu", array(				
				"updateTime"=>$date,
				"updateUser"=>$kode,
				"buktiBayarDaftarUlang"=>$file_name,
				"noRekPengirimDaftarUlang"=>$this->input->post("no_rek_cmb"),
				"namaRekPengirimDaftarUlang"=>$this->input->post("nama_rek_cmb"),
				"metodBayarDaftarUlang"=>$this->input->post("kodeMetod"),
				"totalBiayaDaftarUlang"=>$jumlahBayar,
				"noAtmCardDaftarulang"=>$this->input->post("noAtmCard"),
                                'cicilan1'=>$this->input->post('angsuran1'),
                                'cicilan2'=>$this->input->post('angsuran2'),
                                'cicilan3'=>$this->input->post('angsuran3'),
				"tolakDU"=>0
			));
                if ($this->db2->trans_status() === FALSE){
                    $this->db2->trans_rollback();
                }else{
                    $this->db2->trans_commit();
                }
	}
	
	function mSaveAlamat($file_name, $kode, $date){
		$this->db2->where('kode', $kode);
		$this->db2->update('adis_smb_usr_pribadi', 
				array(  "updateUser"=>$kode,
						"updateTime"=>$date,
						"nama"=> $this->input->post("nama"),
						"tempatLahir" => $this->input->post("tempatLahir"),
						"tanggalLahir" => $this->input->post("tanggalLahir"),
						"nomorKtp" => $this->input->post("no_id"),
						"agamaType" => $this->input->post("agama"),
						"foto"=>$file_name,
						"rumahAlamat" => $this->input->post("occupation"),
						"rumahProp" => $this->input->post("propinsi"),
						"rumahKabKota" => $this->input->post("kabkota"),
						"rumahKodePos" => $this->input->post("kodepos"),
						"rumahTel" => $this->input->post("telRumah"),
						"rumahFax" => $this->input->post("fax"),
						"suratAlamat" => $this->input->post("occupationsur"),
						"suratProp" => $this->input->post("propinsi2"),
						"suratKabKota" => $this->input->post("kabkota2"),
						"suratKodePos" => $this->input->post("kodepos2"),
						"suratTel" => $this->input->post("telRumah2"),
						"suratFax" => $this->input->post("fax2"),
						"statusAlamat" =>1,
                ));
	}
	
	function mAddSaudara($kode){
		$unik = uniqid();
		$time = date("Y-m-d H:i:s");
		$this->db2->insert('adis_smb_usr_kel', array(
							"createUser"=>$kode,
							"createTime"=>$time,
							"kode"=>$unik,
							"smbUsr"=>$kode,
							"nomor"=>$this->input->post("nomorKe"),
							"nama"=>$this->input->post("namaSaudara"),
							"genderType"=>$this->input->post("sexSaudara"),
							"prodi"=>$this->input->post("pendSaudara"),
							"lulus"=>$this->input->post("sekSau"),
							"nim"=>$this->input->post("nim"),
							"kerja"=>$this->input->post("perSau"),
							"angkatan"=>$this->input->post("angkatan"),
							"tanggalLahir"=>$this->input->post("tglLahirSau"),
							"status"=>1));

		$this->db2->where('kode',$kode);
		$this->db2->update('adis_smb_usr_pribadi', array('adaSaudara' => +1));
	}
	
	function mSelectSaudara($kode){
		$query = "	SELECT s.kode as kodeSaudara, s.smbUsr, s.nomor, s.nama as namaSaudara, s.genderType,
					t.nama as gender, p.nama as prodi, s.confirmed,
					p.singkatan as singProdi, s.angkatan, s.lulus, s.nim, 
					s.tanggalLahir, s.kerja, s.status
					FROM adis_smb_usr_kel s
					INNER JOIN adis_type t ON t.kode = s.genderType
					LEFT JOIN adis_prodi p ON p.kode = s.prodi
					WHERE s.smbUsr = '$kode' AND s.erased = 0 ORDER BY s.nomor;
				 ";
		$result = $this->db2->query($query)->result();
		$resultSau = $this->db2->query($query)->row();
		$num_rows =  $this->db2->query($query)->num_rows();
		
		$this->smarty->assign('saudara',$result);
		$this->smarty->assign('sau',$resultSau);
		$this->smarty->assign('saudara_rows',$num_rows);
	}
	
	
	
	function mAddOrtu($kode){		
		$time = date("Y-m-d H:i:s");
		$this->db2->where('kode',$kode);
		$this->db2->update('adis_smb_usr_pribadi', array(
							'updateuser'=>$kode,
							'updateTime'=>$time,
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
							'stsPribadi'=>1,
							'statusKeluarga'=>1,
							'tempatLahirIbu'=>$this->input->post('tempatLahirIbu'), // @tambahBaru field di database
							'tglLahirIbu'=>$this->input->post('tglLahirIbu') // @tambahBaru 
							));
	}
	
	function mSelectOrtu($kode){
		$qry =	"SELECT
				p.kode, p.ayahNama, p.ayahAlamat, p.ayahKabKota, p.ayahProp, p.ayahKodePos,	p.ayahCell, p.ayahTel,p.ayahEmail,
				p.ibuNama, p.ibuAlamat,	p.ibuKabKota, p.ibuProp, p.ibuKodePos, p.ibuCell, p.ibuTel,	p.ibuEmail,
				p.waliNama, p.waliAlamat, p.waliKabKota, p.waliProp, p.waliKodePos, p.waliCell,	p.waliTel, p.waliEmail,
				t.nama as ayahPropNama, t2.nama as ayahKabNama, t3.nama as ibuKabNama, t4.nama as ibuPropNama, 
				t6.nama as waliPropNama, t7.nama as waliKabNama, 
				k1.kodepos as ayahKodePosNama, k2.kodepos as ibuKodePosNama, k3.kodepos as waliKodePosNama
				FROM adis_smb_usr_pribadi p 
				LEFT JOIN adis_wil t ON p.ayahProp = t.kode 
				LEFT JOIN adis_wil t2 ON p.ayahKabKota = t2.kode 
				LEFT JOIN adis_wil t3 ON p.ibuKabKota = t3.kode 
				LEFT JOIN adis_wil t4 ON p.ibuProp = t4.kode  
				LEFT JOIN adis_wil t6 ON p.waliProp = t6.kode 
				LEFT JOIN adis_wil t7 ON p.waliKabKota = t7.kode 	
				LEFT JOIN adis_kodepos k1 ON p.ayahKodePos = k1.kode  
				LEFT JOIN adis_kodepos k2 ON p.ibuKodePos = k2.kode 
				LEFT JOIN adis_kodepos k3 ON p.waliKodePos = k3.kode 				
				WHERE p.kode ='$kode';";
		$qry = $this->db2->query($qry)->row();
		$this->smarty->assign('ortu',$qry);
	}
	
	function mSelectPendidikan($kode){
		$qry = "SELECT e.kode as kodeEdu, e.smbUsr, e.sekolahType, e.sekolahOwnerType, 
				e.nama as sekolah, e.prop, e.kabKota, e.kodePos,
				e.jurusan, e.tahunLulus, e.nilai, e.nisn_nim,
				t.nama as sekolahNama, t2.nama as sekolahTipe, w.nama as propNama, w2.nama as kabNama, k.kodepos
				FROM adis_smb_usr_edu e
				LEFT JOIN adis_type t ON t.kode = e.sekolahType
				LEFT JOIN adis_type t2 ON t2.kode = e.sekolahOwnerType
				LEFT JOIN adis_wil w ON w.kode = e.prop
				LEFT JOIN adis_wil w2 ON w2.kode = e.kabKota
				LEFT JOIN adis_kodepos k ON k.kode = e.kodePos
				WHERE e.smbUsr = '$kode' AND e.erased = 0;
				";
		$qry = $this->db2->query($qry)->result();
		$this->smarty->assign('eduList', $qry);
		
		$qry1 = "SELECT e.kode as kodeEdu, e.smbUsr, e.sekolahType, e.sekolahOwnerType, e.nama as sekolah, e.prop, e.kabKota, e.kodePos,
				e.jurusan, e.tahunLulus, e.nilai, e.nisn_nim,
				t.nama as sekolahNama, t2.nama as sekolahTipe, w.nama as propNama, w2.nama as kabNama, k.kodepos as kodeposN
				FROM adis_smb_usr_edu e
				LEFT JOIN adis_type t ON t.kode = e.sekolahType
				LEFT JOIN adis_type t2 ON t2.kode = e.sekolahOwnerType
				LEFT JOIN adis_wil w ON w.kode = e.prop
				LEFT JOIN adis_wil w2 ON w2.kode = e.kabKota
				LEFT JOIN adis_kodepos k ON k.kode = e.kodePos
				WHERE e.smbUsr = '$kode' AND e.erased = 0;
				";
		$qry1 = $this->db2->query($qry1)->row();
		$this->smarty->assign('eduData', $qry1);
	}
	
	function mAddPendidikan($kode, $ijazah, $rapor){		
		$date = date("Y-m-d H:i:s");
		$this->db2->where('smbUsr', $kode);
		$this->db2->update('adis_smb_usr_edu',array(
							"updateUser"=>$kode,
							"updateTime"=>$date,
							'sekolahType'=> $this->input->post("pendType"),
							'sekolahOwnerType'=> $this->input->post("sekType"),
							"nama"=> $this->input->post("namaSekolah"),
							'prop'=> $this->input->post("prop"),
							'kabKota'=> $this->input->post("kab"),
							'kodePos'=> $this->input->post("kpos"),
							'tahunLulus'=> $this->input->post("tahunLulus"),
							'jurusan'=> $this->input->post("jurusan"),
							'nilai'=> $this->input->post("nilai"),
							'nisn_nim'=>$this->input->post("nisn"),
							'file_ijazah'=> $ijazah, // @tambahBaru 
							'file_rapor'=> json_encode($rapor), // @tambahBaru 
							'status'=>1,
							'nama_guru'=>$this->input->post("guru"),
							'jabatan_guru'=>$this->input->post("jabatan"),
							'hp_telp_guru'=>$this->input->post("hp")
							));
	}
	
	function mAddPrestasi($kode, $file_prestasi){
		$date = date("Y-m-d H:i:s");
		$unik = uniqid();
		$this->db2->insert('adis_smb_usr_prestasi',array(
							"createUser"=>$kode,
							"createTime"=>$date,
							"kode"=>$unik,
							'smbUsr'=> $kode,
							'namaInstitusi'=> $this->input->post("instPres"),
							'namaPrestasi'=> $this->input->post("namaPres"),
							'tahun'=> $this->input->post("tahun"),
							'file_prestasi'=>$file_prestasi // @tambahBaru 
							));
	}
	
	function mAddOrganisasi($kode){
		$date = date("Y-m-d H:i:s");
		$unik = uniqid();
		$this->db2->insert('adis_smb_usr_org',array(
							"createUser"=>$kode,
							"createTime"=>$date,
							"kode"=>$unik,
							'smbUsr'=> $kode,
							'namaKegiatan'=> $this->input->post("namaOrg"),
							'jabatan'=> $this->input->post("jabatanOrg"),
							'tempat'=> $this->input->post("tempatOrg"),
							'dariTahun'=> $this->input->post("mulaiOrg"),
							'sampaiTahun'=> $this->input->post("selesaiOrg")
							));
	}
	
	function mRuangSmb($kode){
		$date = date("Y-m-d H:i:s");
		$this->db2->query("SET @_periode = (SELECT substr(bukaSmb, 1, 10) FROM adis_smb_form WHERE kode ='$kode');");
		$this->db2->query("SET @_jalur = (SELECT substr(bukaSmb, 12, 2) FROM adis_smb_form WHERE kode ='$kode');");
		
		$this->db2->query("SET @_prioritas = (SELECT e.prioritas FROM adis_event_smb e 
									INNER JOIN adis_ruang r ON r.kode = e.ruang 
									WHERE periode = @_periode AND jalur = @_jalur 
									AND e.totalPeserta < r.kursiTes 
									AND e.erased = 0 AND statusJadwal = 1 LIMIT 1);");
		
		$ruang = "SELECT e.kode, e.nama, e.periode, e.tanggal, e.jalur,e.jamMasuk, e.ruang, e.petugas, e.pewawancara, e.jamKeluar, e.statusJadwal,
							e.totalPeserta, e.pewawancara2, e.prioritas, r.kursiTes
							FROM adis_event_smb e
							INNER JOIN adis_ruang r ON r.kode = e.ruang
							WHERE periode = @_periode 
							AND jalur = @_jalur 
							AND e.erased = 0 AND e.statusJadwal = 1 
							AND e.totalPeserta != r.kursiTes 
							AND e.prioritas = @_prioritas LIMIT 1;";
							
		$ruang = $this->db2->query($ruang)->row();
		
		if (!$ruang){
			echo "<script>alert('Belum ada Jadwal Seleksi yang setting oleh Panitia, mohon menunggu dan silahkan konfirmasi kembali.');history.go(-1);</script>";
			
			
		}else{
			$kodeEvent = $ruang->kode;
			$totalPeserta = $ruang->totalPeserta;
			$ruangEvent = $ruang->ruang;
			
			$this->db2->where("kode", $kode);
			$this->db2->update("adis_smb_usr_pribadi", array('stsPribadiConfirm'=>1));
			
			$this->db2->where("kode", $kodeEvent);
			$this->db2->update("adis_event_smb", array('totalPeserta'=>$totalPeserta+1));
			
			$this->db2->where("kode", $kode);
			$this->db2->update("adis_smb_form", array(
								'updateUser'=>$kode,
								'updateTime'=>$date,
								'event'=>$kodeEvent,
								'ruangEvent'=>$ruangEvent,
								'stsEventConfirm'=>1
								));
								
			redirect ('/portal/jadwal', 'refresh');
		}
	}
	
	function mSelectJadwal($kode){
		$sql = "SELECT u.nama as namaCmb, f.kode, f.nomor, f.bukaSmb, f.`event`, s.nama as progdi, j.nama as jalurCmb,
				e.kode, e.nama as namaEvent, e.periode, DAY(e.tanggal) as days, u.foto,
				e.tanggal, DAYNAME(e.tanggal) as hari, MONTHNAME(e.tanggal) as bulan, YEAR(e.tanggal) as tahun,  
				e.jalur,e.jamMasuk, e.ruang, 
				e.petugas, e.pewawancara, e.jamKeluar, e.statusJadwal,
				e.totalPeserta, e.pewawancara2, e.prioritas, r.kursiTes, r.nama as namaRuang, 
				g.nama as namaGedung, g.alamat, g.fax, w.nama as kabKota, g.kodePos, wa.nama as prop, g.tel
				FROM adis_smb_form f
				INNER JOIN adis_event_smb e ON e.kode = f.`event`
				INNER JOIN adis_smb_usr_pribadi u ON u.kode = f.kode
				INNER JOIN adis_buka_smb b ON b.kode = f.bukaSmb
				INNER JOIN adis_jalur_smb j ON j.kode = e.jalur
				INNER JOIN adis_prodi s ON s.kode = b.prodi
				INNER JOIN adis_ruang r ON r.kode = e.ruang
				INNER JOIN adis_gedung g ON g.kode = r.gedung
				LEFT JOIN adis_wil w ON w.kode = g.kabKota
				LEFT JOIN adis_wil wa ON wa.kode = g.prop
				WHERE f.kode = '$kode'";
		$sql = $this->db2->query($sql)->row();
		$this->smarty->assign('jadwal',$sql);
	}
	
	function mJadwalInterview($kode){
		$sql = "SELECT u.nama as namaCmb, f.kode, f.nomor, f.bukaSmb, f.`event`, s.nama as progdi, j.nama as jalurCmb,
				e.kode, e.nama as namaEvent, e.periode, DAY(e.tanggal) as days, u.foto,
				e.tanggal, DAYNAME(e.tanggal) as hari, MONTHNAME(e.tanggal) as bulan, YEAR(e.tanggal) as tahun,  
				e.jalur,e.jamMasuk, e.ruang, 
				e.petugas, e.pewawancara, e.jamKeluar, e.statusJadwal,
				e.totalPeserta, e.pewawancara2, e.prioritas
				FROM adis_smb_form f
				INNER JOIN adis_event_smb e ON e.kode = f.`event`
				INNER JOIN adis_smb_usr_pribadi u ON u.kode = f.kode
				INNER JOIN adis_buka_smb b ON b.kode = f.bukaSmb
				INNER JOIN adis_jalur_smb j ON j.kode = e.jalur
				INNER JOIN adis_prodi s ON s.kode = b.prodi
				WHERE f.kode = '$kode';";
		$sql = $this->db2->query($sql)->row();
		$this->smarty->assign('jadwal',$sql);
	}
	
	function mHasilSeleksi($kode){
		$sql = "SELECT f.kode as kode_smb, f.bukaSmb, f.nomor as no_smb, 
				f.stsEventInterviewPresent as hadirWwc, f.stsEventUsmPresent hadirUsm, 
				f.resultUsm as hasilUsm, f.resultInterview as hasilWwc, f.resultPept, f.stsResultGrade as hasilAkhir,
				f.stsResultPass as lulusTidak, f.stsResultRecommended as recomended, f.stsResultKet as ket, f.stsResultConfirm as konfirm,
				b.prodi, p.nama as progdi, u.nama as student
				FROM adis_smb_form f 
				INNER JOIN adis_smb_usr_pribadi u ON u.kode = f.kode
				INNER JOIN adis_buka_smb b ON b.kode = f.bukaSmb
				INNER JOIN adis_prodi p ON p.kode = b.prodi
				WHERE f.kode = '$kode'";
		$sql = $this->db2->query($sql)->row();
		$this->smarty->assign('hasil', $sql);
	}
	
	function mPrestasi($kode){
		$prestasi = $this->db2->get_where('adis_smb_usr_prestasi', array('erased'=>0,'smbUsr'=>$kode))->result();
		$this->smarty->assign("prestasi", $prestasi);
	}
	
	function mOrganisasi($kode){
		$organisasi = $this->db2->get_where('adis_smb_usr_org', array('erased'=>0,'smbUsr'=>$kode))->result();
		$this->smarty->assign("organisasi", $organisasi);
	}
	
	function selectType(){
		$typeBayar = $this->db2->query("SELECT * FROM adis_type WHERE kode LIKE '04.%'")->result();
		$this->smarty->assign("typeBayar", $typeBayar);
		
		$bankAkun = $this->db2->query("SELECT * FROM adis_type WHERE kode LIKE '05.1'")->row();
		$this->smarty->assign("bankAkun", $bankAkun);
		
		$sex = $this->db2->query("SELECT * FROM adis_type WHERE kode LIKE '03.%' AND erased = 0")->result();
		$this->smarty->assign("sex", $sex);
		
		$edu = $this->db2->query("SELECT * FROM adis_type WHERE kode LIKE '08.%' AND erased = 0")->result();
		$this->smarty->assign("edu", $edu);
		
		$eduSMA = $this->db2->query("SELECT * FROM adis_type WHERE kode LIKE '08.1%' AND erased = 0")->result();
		$this->smarty->assign("eduSMA", $eduSMA);
		
		$prodi = $this->db2->query("SELECT * FROM adis_prodi WHERE erased = 0")->result();
		$this->smarty->assign("prodi", $prodi);
		
	}
	
	function selectAgama(){		
		$agama = $this->db2->query("SELECT * FROM adis_type WHERE kode LIKE '02.%' ORDER BY kode = '02.I' DESC")->result();
		$this->smarty->assign("religion", $agama);
	}
	
	function selectPropinsi(){
		$wil = $this->db2->get_where('adis_wil', array('parent'=>NULL))->result();
		$this->smarty->assign("wil", $wil);
	}
	
	function selectKabKota(){
		$wil = $this->db2->query("SELECT * FROM adis_wil WHERE parent != '' ORDER BY nama ASC;")->result();
		$this->smarty->assign("kab", $wil);
	}
	
	function selectKodePos(){
		$wil = $this->db2->query("SELECT * FROM adis_kodepos WHERE erased != '1' ORDER BY kodepos ASC;")->result();
		$this->smarty->assign("kodepos", $wil);
	}
	
	function updatePerosnalData($kode){
	
		$date = date("Y-m-d H:i:s");	
		$tanggalLahir = date("Y-m-d", strtotime($this->input->post("tanggalLahir")));
		
		$this->db2->where('kode', $kode);
		$this->db2->update('adis_smb_usr', array(
								"updateUser"=>$kode,
								"updateTime"=>$date,
								"username"=> $this->input->post("nameFull")
								));
		
		$this->db2->where('kode', $kode);
		$this->db2->update('adis_smb_usr_pribadi', 
							array("updateUser"=>$kode,
								"updateTime"=>$date,
								"nama"=> $this->input->post("nameFull"),
								"tempatLahir" => $this->input->post("tempatLahir"),
								"genderType"=>$this->input->post("sex"),
								"rumahCell"=>$this->input->post("no_hp"),
								"tanggalLahir" => $tanggalLahir,
								"nomorKtp" => $this->input->post("no_id"),
								"agamaType" => $this->input->post("agama"),
								"rumahAlamat" => $this->input->post("occupation"),
								"rumahProp" => $this->input->post("propinsi"),
								"rumahKabKota" => $this->input->post("kabkota"),
								"rumahKodePos" => $this->input->post("kodepos"),
								"rumahTel" => $this->input->post("telRumah"),
								"rumahFax" => $this->input->post("fax")
		));
		
		$this->db2->where('kode',$kode);
		$this->db2->update('adis_smb_usr_pribadi', array(
							'updateuser'=>$kode,
							'updateTime'=>$date,
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
							'waliEmail'=>$this->input->post('emailWali')
							));
		
		$this->db2->where('smbUsr', $kode);
		$this->db2->update('adis_smb_usr_edu',array(
							"updateUser"=>$kode,
							"updateTime"=>$date,
							'sekolahType'=> $this->input->post("pendType"),
							'sekolahOwnerType'=> $this->input->post("sekType"),
							"nama"=> $this->input->post("namaSekolah"),
							'prop'=> $this->input->post("propSek"),
							'kabKota'=> $this->input->post("kabSek"),
							'kodePos'=> $this->input->post("kposSek"),
							'tahunLulus'=> $this->input->post("tahunLulus"),
							'jurusan'=> $this->input->post("jurusan"),
							'nilai'=> $this->input->post("nilai")
							));
							
		
	}
	
	function listAngsuran($pilihan, $kodebayar, $periode){            
            
            $qry = "SELECT p.*, pr.singkatan as alias_prodi, pr.nama as prodi, p.kode as code
                        FROM adis_pembayaran_kelasmalam p
                        LEFT JOIN adis_prodi pr ON p.prodiTipe = pr.kode
                        WHERE p.kode = '$kodebayar' AND p.periode_kode = '$periode'";
            $sql = $this->db2->query($qry)->result_array();
            
            $arry = array();
            $response = array();
            $arryPil = array();

        foreach($sql as $val){
                $arry['uangMasuk'] = $val['uangMasuk'];
                $arry['spp'] = $val['spp'];
                $arry['jumlahSks'] = $val['jumlahSks'];
                $arry['tempoAngsuran'] = $val['tempoAngsuran'];
                $arry['biayaPerSks'] = $val['biayaPerSks'];
                $arry['pilihanBiayaUM'] = json_decode($val['pilihanBiayaUM']);
                $arry['biayaPembeda'] = json_decode($val['biayaPembeda']);
                $arry['totalBiaya'] = ($val['uangMasuk']+$val['spp'])+($val['jumlahSks']*$val['biayaPerSks']);

                foreach(json_decode($val['pilihanBiayaUM']) as $k => $v){
                    $arry2['biayaAngsur'.$k] = $arry['totalBiaya'] - $v - $arry['biayaPembeda'][$k];
                    for($i = 0; $i < $val['tempoAngsuran']-1; $i++){
                        $arryAngsur[$i] = $arry2['biayaAngsur'.$k]/($val['tempoAngsuran']-1);
                    }
                    $arryPil[$k] = $arryAngsur;
                }
            }

            $arrTglTempo = array();
            $sqlTglTempo = $this->db2->query("SELECT * FROM tbl_tgl_tempo_kelasmalam "
                    . " WHERE kode_pembayaran = '$kodebayar' AND kode_periode = '$periode';")->row_array();
            $arrTglTempo = json_decode($sqlTglTempo['tgl_jatuh_tempo']);
            
            $keyPil = array_search($pilihan, $arry['pilihanBiayaUM']); 
//            print_r($keyPil);exit;

            $this->smarty->assign('resTglTempo', $arrTglTempo);
            $response[] = $arry;
            $this->smarty->assign('sql', $response);
            $this->smarty->assign('pilih', $arryPil);
            $this->smarty->assign('keypilih', $keyPil);
            $this->smarty->assign('choose', $pilihan);
        }
	
	
}
