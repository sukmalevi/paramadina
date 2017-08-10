<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

class Madmisi extends CUTI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	function Madmisi(){
		parent::__construct();
		
		$this->db2->query("SET lc_time_names = 'id_ID'");
		
	}
	
	function mBukaSeleksi($periode, $jalur){
		
		$sql = "SELECT b.erased as hapuskah, b.kode as id_buka, b.nama as nama_buka, b.periode as periode_buka, 
		DAYNAME(b.tanggalBuka) as hariBuka, DAYNAME(b.tanggalTutup) as hariTutup, b.tanggalBuka, b.tanggalTutup,
		p.nama as nama_periode, j.nama as nama_jalur, pr.nama as nama_prodi, m.jenjangType as jenjang, m.tahun as tahun,
		pr.singkatan as ini_prodi, b.stsBuka as status, pr.kode as kode_prodi
		FROM adis_buka_smb b
		INNER JOIN adis_periode p ON b.periode = p.kode
		INNER JOIN adis_periode_master m ON m.kode = p.idPeriodeMaster
		INNER JOIN adis_jalur_smb j ON b.jalur = j.kode
		INNER JOIN adis_prodi pr ON b.prodi = pr.kode
		WHERE b.periode ='$periode'
		AND b.jalur = '$jalur'
		AND b.erased = 0;";
		$sql = $this->db2->query($sql)->result();
		$this->smarty->assign('sql',$sql);	
	}
	
	function mDataBuka($kode){
		
		$sql = "SELECT b.erased as status, b.kode as id_buka, b.nama as nama_buka, b.periode as periode_buka, 
		DAYNAME(b.tanggalBuka) as hariBuka, DAYNAME(b.tanggalTutup) as hariTutup, b.tanggalBuka, b.tanggalTutup,
		p.nama as nama_periode, j.kode as kode_jalur, j.nama as nama_jalur, pr.kode as kode_prodi,
		pr.nama as nama_prodi, m.jenjangType as jenjang, m.tahun as tahun,
		pr.singkatan as ini_prodi, b.stsBuka as status
		FROM adis_buka_smb b
		INNER JOIN adis_periode p ON b.periode = p.kode
		INNER JOIN adis_periode_master m ON m.kode = p.idPeriodeMaster
		INNER JOIN adis_jalur_smb j ON b.jalur = j.kode
		INNER JOIN adis_prodi pr ON b.prodi = pr.kode
		WHERE b.kode ='$kode';";
		$sql = $this->db2->query($sql)->row();
		$this->smarty->assign('buka',$sql);	
	}
	
	function mDataEvent($jalur, $periode){
		
		$sql = "SELECT b.erased, b.kode as id_event, b.nama as nama_event, 
			DAYNAME(b.tanggal) as hariEvent, b.tanggal, b.jamMasuk, b.jamKeluar, m.jenjangType as jenjang, r.gedung as gedung_event, r.kode as kode_kelas,
			p.nama as nama_periode, m.tahun as tahun, r.nama as nama_ruang, j.nama as nama_jalur, o.nama as nama_petugas, c.nama as nama_pww, f.nama as nama_pww2,
			b.statusJadwal as status, r.kursiTes, b.totalPeserta, b.prioritas
			FROM adis_event_smb b
			INNER JOIN adis_periode p ON b.periode = p.kode
			INNER JOIN adis_periode_master m ON m.kode = p.idPeriodeMaster
			INNER JOIN adis_ruang r ON b.ruang = r.kode
			INNER JOIN adis_jalur_smb j ON b.jalur = j.kode
			INNER JOIN adis_personal o ON b.petugas =o.kode
			INNER JOIN adis_personal c ON b.pewawancara =c.kode
			LEFT JOIN adis_personal f ON b.pewawancara2 =f.kode
			WHERE b.periode = '$periode' AND b.erased = 0
			AND jalur = '$jalur'
			ORDER BY id_event, status DESC";
			$sql = $this->db2->query($sql)->result();
			
			$this->smarty->assign('sql',$sql);	
	
	}
	
	function mSelectEvent($kode){
		
		$sql = "SELECT b.erased, b.kode as id_event, b.nama as nama_event, b.periode, b.jalur, b.ruang, 
                        b.petugas, b.pewawancara, b.pewawancara2,
			DAYNAME(b.tanggal) as hariEvent, b.tanggal, b.jamMasuk, b.jamKeluar, m.jenjangType as jenjang, 
                        r.gedung as gedung_event, r.kode as kode_kelas,
			p.nama as nama_periode, m.tahun as tahun, r.nama as nama_ruang, j.nama as nama_jalur, 
                        o.nama as nama_petugas, o2.nama as nama_petugas2, o2.nama as nama_petugas3,
                        c.nama as nama_pww, f.nama as nama_pww2, b.petugas2, b.petugas3,
			b.statusJadwal as status, r.kursiTes, b.totalPeserta, b.prioritas
			FROM adis_event_smb b
			LEFT JOIN adis_periode p ON b.periode = p.kode
			LEFT JOIN adis_periode_master m ON m.kode = p.idPeriodeMaster
			LEFT JOIN adis_ruang r ON b.ruang = r.kode
			LEFT JOIN adis_jalur_smb j ON b.jalur = j.kode
			LEFT JOIN adis_personal o ON b.petugas =o.kode
			LEFT JOIN adis_personal o2 ON b.petugas2 =o2.kode
			LEFT JOIN adis_personal o3 ON b.petugas3 =o3.kode
			LEFT JOIN adis_personal c ON b.pewawancara =c.kode
			LEFT JOIN adis_personal f ON b.pewawancara2 =f.kode
			WHERE b.kode = '$kode'";
			$sql = $this->db2->query($sql)->row();
			
			$this->smarty->assign('event',$sql);	
	
	}
	
	function mAddEvent(){
		
		$periode = $this->input->post("periode");
		$jalur = $this->input->post("jalur");
		$tanggal = $this->input->post("tanggal");
		$ruang = $this->input->post("ruang");
                $unik = uniqid();
		
		$this->db2->insert("adis_event_smb", array(
				"kode"=>implode (".",array($periode,$tanggal, $jalur, $ruang,$unik)),
				"nama"=>$this->input->post("nama"),
				"periode"=>$periode,
				"jalur"=>$jalur,
				"ruang"=>$this->input->post("ruang"),
				"tanggal"=>$this->input->post("tanggal"),
				"jamMasuk"=>$this->input->post("pukulMasuk"),
				"jamKeluar"=>$this->input->post("pukulKeluar"),
				"petugas"=>$this->input->post("petugas1"),
				"petugas2"=>$this->input->post("petugas2"),
				"petugas3"=>$this->input->post("petugas3"),
				"pewawancara"=>$this->input->post("pww1"),
				"pewawancara2"=>$this->input->post("pww2"),
				"statusJadwal"=>$this->input->post("status"),
				"prioritas"=>$this->input->post("prioritas")
			));
	}
	
	function mEditEvent(){
		
		$kode = $this->input->post("kode");
		
		$jalur = $this->input->post("jalur");
		$tanggal = $this->input->post("tanggal");
		
		$this->db2->where('kode', $kode);
		$this->db2->update("adis_event_smb", array(
				"nama"=>$this->input->post("nama"),
				"periode"=>$this->input->post("periode"),
				"jalur"=>$jalur,
				"ruang"=>$this->input->post("ruang"),
				"tanggal"=>$this->input->post("tanggal"),
				"jamMasuk"=>$this->input->post("pukulMasuk"),
				"jamKeluar"=>$this->input->post("pukulKeluar"),
				"petugas"=>$this->input->post("petugas1"),
				"petugas2"=>$this->input->post("petugas2"),
				"petugas3"=>$this->input->post("petugas3"),
				"pewawancara"=>$this->input->post("pww1"),
				"pewawancara2"=>$this->input->post("pww2"),
				"statusJadwal"=>$this->input->post("status"),
				"prioritas"=>$this->input->post("prioritas")
			));
	}
	
	function mEditPembayaran($kode, $periode){
            $date = date("Y-m-d H:i:s");
            
            $tglAwlAngsur = $this->input->post('tgl_awl_angsur');
            $tglAwlAngsur = date("Y-m-d", strtotime($tglAwlAngsur));            
            $jml_angsuran = $this->input->post('jml_angsuran');
            
            $um = str_replace(' ', '',str_replace('.', '', $this->input->post('um')));	
            $biayaPerSks = str_replace(' ', '', str_replace('.', '', $this->input->post('biaya_sks'))); 
            $spp = str_replace(' ', '', str_replace('.', '', $this->input->post('spp_total')));
            
            $jml_pil = $this->input->post('jml_pil');
            $arrUM = array();
            $arrBeda = array();
            if ($jml_pil){
                for($i = 1; $i <= $jml_pil; $i++){
                    $arrUM[] = $this->input->post('biaya-'.$i);
                    $arrBeda[] = $this->input->post('biayabeda-'.$i);
                }
            }
            
            $jsonUM = json_encode($arrUM);
            $jsonBeda = json_encode($arrBeda);
            
            $this->db2->where(array('kode'=>$kode, 'periode_kode'=>$periode));
            $this->db2->update("adis_pembayaran_kelasmalam", array(
                    "dateUpdated"=>$date,
                    "nama"=>$this->input->post('nama'),			
                    "uangMasuk"=>$um,
                    "biayaPerSks"=>$biayaPerSks,
                    "spp"=>$spp,		
                    "status"=>$this->input->post('status'),
                    "tempoAngsuran"=>$jml_angsuran,
                    "jumlahSks"=>$this->input->post('jumlah_sks'),
                    "biayaPembeda"=>$jsonBeda,
                    "tglAwalAngsuran"=>$tglAwlAngsur,
                    "banyakPilihanUM"=>$jml_pil,
                    "pilihanBiayaUM"=>$jsonUM
            ));
            
            $arr = array();
            for($i = 0; $i < $jml_angsuran; $i++){
                $timeAngsur = strtotime($tglAwlAngsur);
                $arr[] = date("Y-m-d", strtotime("+$i month", $timeAngsur));
            }
            
            $json_tgl = json_encode($arr);
            
            $this->db2->where(array('kode_pembayaran'=>$kode, 'kode_periode'=>$periode));
            $this->db2->update('tbl_tgl_tempo_kelasmalam', array(
                'tempo'=>$jml_angsuran,
                'tgl_jatuh_tempo'=>$json_tgl
            ));
        }
        
        function mAddPembayaran(){
            $date = date("Y-m-d H:i:s");
            
            $jalur = $this->input->post('jalur');
            $prodi = $this->input->post('prodi');
            $grade = $this->input->post('grade');
            $tglAwlAngsur = $this->input->post('tgl_awl_angsur');
            $tglAwlAngsur = date("Y-m-d", strtotime($tglAwlAngsur));            
            $jml_angsuran = $this->input->post('jml_angsuran');
            $periode = $this->input->post('periode');
            
            $kode = implode (".",array($prodi,'69',$jalur,$grade));
            
            $um = str_replace(' ', '',str_replace('.', '', $this->input->post('um')));	
            $biayaPerSks = str_replace(' ', '', str_replace('.', '', $this->input->post('biaya_sks'))); 
            $spp = str_replace(' ', '', str_replace('.', '', $this->input->post('spp_total')));
            
            //Increament tanggal Angsuran Kelas Malam by $tglAwlAngsur and $jml_angsuran
            $jml_pil = $this->input->post('jml_pil');
            $arrUM = array();
            $arrBeda = array();
            if ($jml_pil){
                for($i = 1; $i <= $jml_pil; $i++){
                    $arrUM[] = $this->input->post('biaya-'.$i);
                    $arrBeda[] = $this->input->post('biayabeda-'.$i);
                }
            }
            $jsonUM = json_encode($arrUM);
            $jsonBeda = json_encode($arrBeda);
            
            $this->db2->insert("adis_pembayaran_kelasmalam", array(                    
                    "kode"=>$kode,
                    "dateCreated"=>$date,
                    "nama"=>$this->input->post('nama'),
                    "periode_kode"=>$periode,
                    "prodiTipe"=>$prodi,		
                    "uangMasuk"=>$um,
                    "biayaPerSks"=>$biayaPerSks,
                    "grademasuk"=>$grade,
                    "spp"=>$spp,		
                    "status"=>1,		
                    "tempoAngsuran"=>$jml_angsuran,
                    "jumlahSks"=>$this->input->post('jumlah_sks'),
                    "biayaPembeda"=>$jsonBeda,
                    "tglAwalAngsuran"=>$tglAwlAngsur,
                    "banyakPilihanUM"=>$jml_pil,
                    "pilihanBiayaUM"=>$jsonUM
            ));
            
            //Increament tanggal Angsuran Kelas Malam by $tglAwlAngsur and $jml_angsuran
            $arr = array();
            for($i = 0; $i < $jml_angsuran; $i++){
                $timeAngsur = strtotime($tglAwlAngsur);
                $arr[] = date("Y-m-d", strtotime("+$i month", $timeAngsur));
            }
            
            $json_tgl = json_encode($arr);
            $this->db2->insert('tbl_tgl_tempo_kelasmalam', array(
                'kode_pembayaran'=>$kode,
                'kode_periode'=>$periode,
                'tempo'=>$jml_angsuran,
                'tgl_jatuh_tempo'=>$json_tgl
            ));
        }
	
	function mPaidDaftarUlang($kode){
		$sql = "SELECT f.kode as kode_smb, f.bukaSmb, f.nomor as no_smb, u.username as nama_cm , p.nama as progdi, 
		DAYNAME(u.createTime) as hari, DATE(u.createTime) as tanggal, u.validation_status, d.jenjangType, up.rumahCell, 
		f.stsReapplyPaid, f.stsReapplyPaidConfirm, j.nama as n_jalur, t.kode as kode_typeTrans,
		d.tahun, d.semester, t.nama as typeTrans, t2.nama as typeAccount, DAYNAME(f.reapplyBankTransferTime) as hari_trans, 
		DATE(f.reapplyBankTransferTime) as tanggal_trans, k.buktiBayarDaftarUlang, f.reapplyBankTransferAmount,
		k.noRekPengirimDaftarUlang, k.namaRekPengirimDaftarUlang, k.metodBayarDaftarUlang, k.totalBiayaDaftarUlang
		FROM adis_smb_form f 
		INNER JOIN adis_smb_usr u ON u.kode = f.kode
		INNER JOIN adis_buka_smb b ON b.kode = f.bukaSmb
		INNER JOIN adis_periode d ON d.kode = b.periode
		INNER JOIN adis_smb_usr_pribadi up ON up.kode = f.kode
		INNER JOIN adis_prodi p ON p.kode = b.prodi
		INNER JOIN adis_jalur_smb j ON j.kode = b.jalur
		INNER JOIN adis_type t ON t.kode = f.reapplyBankTransferType
		INNER JOIN adis_type t2 ON t2.kode = f.reapplyBankAccountType
		INNER JOIN adis_smb_usr_keu k ON k.smbUsr = f.kode 
		WHERE f.nomor = '$kode'";
		$sql = $this->db2->query($sql)->row();
		$this->smarty->assign("transPaid", $sql);
		
		$kodePaidType = $sql->metodBayarDaftarUlang;
		$metodBayar = "SELECT * FROM adis_pembayaran WHERE kode = '$kodePaidType'";
		$metodBayar = $this->db2->query($metodBayar)->row();
		
		
		$total = $metodBayar->total;
		$total = $total - 1000000;
		
		$pembayaran = $metodBayar->pembayaran;
		
		$this->smarty->assign('total', $total);
		$this->smarty->assign('method',$pembayaran);		
		$this->smarty->assign('biaya', $metodBayar);
	}
	
	
	function mSelectPeriodeFilter($bag){
		
		$filterQry = ($bag != '77') ? " AND status = 1 " : "";
		$periode ="SELECT * FROM adis_periode WHERE erased = 0 $filterQry ORDER by kode DESC";
		$periode = $this->db2->query($periode)->result();			
			
		$this->smarty->assign('periode',$periode);	
	
	}
	
	
	function mSelectPeriode(){
		$periode ="SELECT * FROM adis_periode WHERE status = 1 AND erased = 0 ORDER by kode DESC";
		$periode = $this->db2->query($periode)->result();			
			
		$this->smarty->assign('periode',$periode);	
	
	}
	
	function mSelectPeriodeAka(){
		$periodeAka = "SELECT * FROM adis_periode_master WHERE erased = 0 ORDER BY kode DESC";
		$periodeAka = $this->db2->query($periodeAka)->result();
		$this->smarty->assign('periodeAka', $periodeAka);
	}
	
	function mSelectPeriodeCMB($jenjang = ''){
		$where = '';
		IF ($jenjang == 's1'){
			$where = 'AND jenjangType = 1';
		}
		IF ($jenjang == 's2'){
			$where = 'AND jenjangType = 2';
		}
		$periodeAka = "SELECT * FROM adis_periode_master WHERE erased = 0 $where ORDER BY kode DESC";
		$periodeAka = $this->db2->query($periodeAka)->result();
		$this->smarty->assign('periodeAka', $periodeAka);
	}
	
	function mSelectProdi(){
		$prodi ="SELECT * FROM adis_prodi WHERE erased = 0";
		$prodi = $this->db2->query($prodi)->result();			
			
		$this->smarty->assign('prodi',$prodi);	
	
	}
	
	function mSelectJalur(){
		$jalur ="SELECT * FROM adis_jalur_smb WHERE erased = 0";
		$jalur = $this->db2->query($jalur)->result();			
			
		$this->smarty->assign('jalur',$jalur);	
	
	}
	
	function mSelectRuang(){
		$ruang ="SELECT * FROM adis_ruang WHERE erased = 0";
		$ruang = $this->db2->query($ruang)->result();			
			
		$this->smarty->assign('ruang',$ruang);	
	
	}
	
	function mSelectPetugas(){
		$person ="SELECT * FROM adis_personal WHERE erased = 0";
		$person = $this->db2->query($person)->result();			
			
		$this->smarty->assign('petugas',$person);	
	
	}
	
	function mAddBuka(){
		$periode = $this->input->post("periode");
		$jalur = $this->input->post("jalur");
		$prodi = $this->input->post("prodi");
		
		$nama = array($periode,$jalur,$prodi);
		$nama = implode (" - ",$nama);
		
		$this->db2->insert("adis_buka_smb", array(
				"kode"=>implode (".",array($periode,$jalur,$prodi)),
				"nama"=>$nama,
				"periode"=>$periode,
				"jalur"=>$jalur,
				"prodi"=>$prodi,
				"stsBuka"=>$this->input->post("status"),
				"tanggalBuka"=>$this->input->post("from"),
				"tanggalTutup"=>$this->input->post("to")
			));
	}
	
	function mEditBuka($kode){
		$periode = $this->input->post("periode");
		$jalur = $this->input->post("jalur");
		$prodi = $this->input->post("prodi");
				
		$nama = array($periode,$jalur,$prodi);
		$nama = implode (" - ",$nama);
		$this->db2->where("kode", $kode);
		$this->db2->update("adis_buka_smb", array(
				"nama"=>$nama,
				"periode"=>$periode,
				"jalur"=>$jalur,
				"prodi"=>$prodi,
				"stsBuka"=>$this->input->post("status"),
				"tanggalBuka"=>$this->input->post("from"),
				"tanggalTutup"=>$this->input->post("to")
			));
	}
        
        function mPeserta($kode){
            $query = "SELECT username as fullname, substring_index(username,' ', 1) as 'firstname', substring_index(username,' ', -1) as 'lastname', 
                email as username, '' as 'password', email
                FROM adis_smb_usr A 
                LEFT JOIN adis_smb_form B ON A.kode = B.kode 
                LEFT JOIN adis_smb_usr_keu C ON C.smbUsr = A.kode
                WHERE B.`event` = '$kode' AND B.interviewPhone = 0 
                ORDER BY RIGHT(B.bukaSmb,4) ;";
            $query = $this->db2->query($query);
            
            return $query;
        }
	
	function mAbsen($kode){
		$query = "	SELECT f.kode, f.`event`, f.nomor, p.nama as namaPeserta, e.nama as namaEvent, 
					e.ruang, e.petugas, e.pewawancara, e.pewawancara2, 
					o.nama as namaPetugas, p2.nama as namaPetugas2, p3.nama as namaPetugas3, 
                                        o1.nama as namaPww1, o2.nama as namaPww2,
					e.tanggal, e.jamMasuk, e.jamKeluar, pr.nama as namaProdi, d.sesi, pr.singkatan
					FROM adis_smb_form f
					INNER JOIN adis_smb_usr_pribadi p ON p.kode = f.kode
					INNER JOIN adis_event_smb e ON e.kode = f.`event`
					LEFT JOIN adis_personal o ON o.kode = e.petugas
					LEFT JOIN adis_personal o1 ON o1.kode = e.pewawancara
					LEFT JOIN adis_personal o2 ON o2.kode = e.pewawancara2
                                        LEFT JOIN adis_personal p2 ON e.petugas2 = p2.kode
                                        LEFT JOIN adis_personal p3 ON e.petugas3 = p3.kode
					INNER JOIN adis_prodi pr ON pr.kode = RIGHT(f.bukaSmb,4)
					INNER JOIN adis_periode d ON d.kode = e.periode
					WHERE f.`event` = '$kode' AND f.interviewPhone = 0 ORDER BY RIGHT(f.bukaSmb,4) ;";
		$query = $this->db2->query($query)->result();
		$this->smarty->assign('absen', $query);
		
		$query2 = "	SELECT e.nama as namaEvent, e.ruang, e.petugas, e.pewawancara, e.pewawancara2, 
					o.nama as namaPetugas,  p2.nama as namaPetugas2, p3.nama as namaPetugas3,
                                        o1.nama as namaPww1, o2.nama as namaPww2, 
					DAYNAME(e.tanggal) as hari, MONTHNAME(e.tanggal) as bulan, YEAR(e.tanggal) as tahun,  DAY(e.tanggal) as days,
					e.tanggal, e.jamMasuk, e.jamKeluar, d.sesi
					FROM adis_event_smb e 
					LEFT JOIN adis_personal o ON o.kode = e.petugas
					LEFT JOIN adis_personal o1 ON o1.kode = e.pewawancara
					LEFT JOIN adis_personal o2 ON o2.kode = e.pewawancara2
                                        LEFT JOIN adis_personal p2 ON e.petugas2 = p2.kode
                                        LEFT JOIN adis_personal p3 ON e.petugas3 = p3.kode
					INNER JOIN adis_periode d ON d.kode = e.periode
					WHERE e.kode = '$kode';";
		$query2 = $this->db2->query($query2)->row();
		$this->smarty->assign('event', $query2);
	
	}
	
	function mMahasiswa($kode, $prodi = ""){
		$this->db2->query("SET @num:=0;");
		$query = "	SELECT  @num:=@num+1 AS 'No', f.kode as 'Email', f.bukaSmb, f.nomor as 'No Registrasi', u.username as 'Nama Lengkap' 
					, p.nama as progdi, DATE(u.createTime) as 'Tanggal Pendaftaran', j.nama as Jalur
					FROM adis_smb_form f 
					INNER JOIN adis_smb_usr u ON u.kode = f.kode
					INNER JOIN adis_buka_smb b ON b.kode = f.bukaSmb
					INNER JOIN adis_smb_usr_pribadi up ON up.kode = f.kode
					INNER JOIN adis_prodi p ON p.kode = b.prodi
					INNER JOIN adis_jalur_smb j ON j.kode = b.jalur
					WHERE f.bukaSmb = '$kode'
					ORDER BY f.nomor";
		if ($prodi == ""){
			$query = $this->db2->query($query)->result();
			$this->smarty->assign('mahasiswa', $query);
		}else{
			$query = $this->db2->query($query);
			return $query;
		}
	}
	
	function mPembayaranS2($par = ""){
            $date = date("Y-m-d H:i:s");
            
            if ($par == 'addNew'){
                $periode = $this->input->post('periode');
                $prodi = $this->input->post('prodi');  
                $kode = implode (".",array($periode, $prodi,'1'));
            }
            $um = str_replace(' ', '',str_replace('.', '', $this->input->post('um')));	
            $biayaPerSks = str_replace(' ', '', str_replace('.', '', $this->input->post('biaya_sks'))); 
            $spp = str_replace(' ', '', str_replace('.', '', $this->input->post('spp')));          
            $sksF25 = str_replace(' ', '', str_replace('.', '', $this->input->post('sksF25')));          
            $sksF50 = str_replace(' ', '', str_replace('.', '', $this->input->post('sksF50')));          
            $sksF75 = str_replace(' ', '', str_replace('.', '', $this->input->post('sksF75')));          
            $jumlahSem = $this->input->post('jumlahSem');
            $totalSks = $this->input->post('totalSks');
            $jumlahSksSem1 = $this->input->post('jumlahSksSem1');
            $namaPembayaran = $this->input->post('nama');
            $dueDate1 = date("Y-m-d", strtotime($this->input->post('dueDate1')));  
            $dueDate2 = date("Y-m-d", strtotime($this->input->post('dueDate2'))); 
            
            $totalBiaya = ($um/$jumlahSem)+$spp+($biayaPerSks*$jumlahSksSem1);
            
            if ($par == 'addNew'){
                $this->db2->insert("adis_pembayaran_s2", array(                    
                        "kode"=>$kode,
                        "date_created"=>$date,
                        "description"=>$namaPembayaran,
                        "kodePeriode"=>$periode,
                        "prodi"=>$prodi,		
                        "uangMasuk"=>$um,
                        "biayaPerSks"=>$biayaPerSks,
                        "biayaSpp"=>$spp,		
                        "biayaSks"=>$biayaPerSks*$jumlahSksSem1,
                        "jumlahSks"=>$totalSks,
                        "jumlahSksSemester1"=>$jumlahSksSem1,
                        "jumlahSemester"=>$jumlahSem,
                        "dueDate1"=>$dueDate1,
                        "dueDate2"=>$dueDate2,
                        "totalBiaya"=>$totalBiaya,
                        "sksSem1F25"=>$sksF25,
                        "sksSem1F50"=>$sksF50,
                        "sksSem1F75"=>$sksF75,
                ));
            }else if($par == 'update'){
                $kodePembayaran = $this->input->post('kodePembayaran'); 
                $this->db2->where("kode", $kodePembayaran);
                $this->db2->update("adis_pembayaran_s2", array(  
                        "date_updated"=>$date,
                        "description"=>$namaPembayaran,	
                        "uangMasuk"=>$um,
                        "biayaPerSks"=>$biayaPerSks,
                        "biayaSpp"=>$spp,		
                        "biayaSks"=>$biayaPerSks*$jumlahSksSem1,
                        "jumlahSks"=>$totalSks,
                        "jumlahSksSemester1"=>$jumlahSksSem1,
                        "jumlahSemester"=>$jumlahSem,
                        "dueDate1"=>$dueDate1,
                        "dueDate2"=>$dueDate2,
                        "totalBiaya"=>$totalBiaya,
                        "sksSem1F25"=>$sksF25,
                        "sksSem1F50"=>$sksF50,
                        "sksSem1F75"=>$sksF75,
                ));
            }
            
        }
	
	
	
}
