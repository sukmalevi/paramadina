<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portal extends CUTI_Controller{
	function __construct(){
		parent::__construct();
		//setlocale (LC_TIME, 'id_ID');
		// setlocale (LC_TIME, 'INDONESIA');
		date_default_timezone_set("Asia/Jakarta");
		$this->auth = unserialize(base64_decode($this->session->userdata('calon_mah')));
		$this->host	= $this->config->item('base_url');

		if (!$this->auth){
			header("Location: " . $this->host."site");
		}

		$this->db2 = $this->load->database('second', TRUE);
		//$this->load->library('recaptcha');

		$modul = "portal/";
		$this->smarty->assign('modul',$modul);
		$this->smarty->assign('host',$this->host);
		$this->load->model('mportal');
		$this->db2->query("SET lc_time_names = 'id_ID'");


		$nama = $this->auth['username'];
		//first name
		$arr = explode(' ',trim($nama));
		$firstname = $arr[0];

		$this->smarty->assign("nama", $nama);
		$this->smarty->assign("firstname", $firstname);

		$kode = $this->auth['kode'];
		$this->dataCmb = $this->mportal->mCmb($kode);

	}

	function index() {
		if (!$this->auth){
			header("Location: " . $this->host."site");
		}else{
			$this->home();
		}
	}

	function editDataMahasiswa(){

		$kode = $this->auth['kode'];
		$uri = $this->uri->segment(3);

		if ($this->input->post("submit") == "save" && $uri == "update"){
			$this->mportal->updatePerosnalData($kode);
			redirect ('/portal', 'refresh');
		}else{

			$this->mportal->mSelectOrtu($kode);
			$this->mportal->mSelectSaudara($kode);
			$this->mportal->mSelectPendidikan($kode);

			$this->mportal->selectAgama();
			$this->mportal->selectType();
			$this->mportal->selectPropinsi();
			$this->mportal->selectKabKota();
			$this->mportal->selectKodePos();

			$site = "formEditMahasiswa";
			$this->smarty->assign("site", $site);
			$this->smarty->display("portal/index.html");

		}
	}

	function home(){
		$kode = $this->auth['kode'];

		$this->mportal->mCmb($kode);

		$nomorReg = $this->db2->query("SELECT nomor FROM adis_smb_form WHERE kode = '$kode'")->row();
		$termcond = $this->db2->query("SELECT termncondition FROM adis_smb_usr WHERE kode = '$kode'")->row();
		$this->smarty->assign("termcond", $termcond->termncondition);

		$this->smarty->assign("kode", $kode);
		$this->smarty->assign("nomorReg", $nomorReg->nomor);
		$site = "tiles";
		$this->smarty->assign("site", $site);
		$this->smarty->display("portal/index.html");
	}

	function pendaftaran(){
		$kode = $this->auth['kode'];

		$this->mportal->mCmb($kode);

		$site = "pendaftaran";
		$this->smarty->assign("site", $site);
		$this->smarty->display("portal/index.html");
	}

	function pembayaran(){
		$kode = $this->auth['kode'];

		$stsConfirm = $this->db2->query("SELECT stsApplyPaid, stsApplyPaidConfirm FROM adis_smb_form WHERE kode = '$kode'")->row();

		$this->mportal->mCmb($kode);

		$this->mportal->selectType();

		if ($stsConfirm->stsApplyPaidConfirm == 0  && $stsConfirm->stsApplyPaid == 0){
			$site = "pembayaran";

		}else if ($stsConfirm->stsApplyPaidConfirm == 0  && $stsConfirm->stsApplyPaid == 1){

			$this->mportal->mPaidPendaftaran($kode);
			$site = "pembayaranPaid";

		}else if ($stsConfirm->stsApplyPaidConfirm == 1){

			$this->mportal->mPaidPendaftaran($kode);
			$site = "buktiBayar";
		}

		$this->smarty->assign("site", $site);
		$this->smarty->display("portal/index.html");
	}

	function confirmPembayaran(){
		$this->load->model('mintegrasi');

		$kode = $this->input->post('kode');
		$setuju = $this->input->post('okekah');
		$uri = $this->uri->segment(3);
		$opt = $this->input->post('opt');

		if ($uri == "add" && $opt == "save"){
			// UPLOAD File menggunakan library upload CI
			$config['upload_path'] = './assets/upload/bukti_bayar';
			$config['allowed_types'] = 'gif|jpg|png|pdf';
//			$config['max_size']    = '10000';
//			$config['max_width']  = '1024';
//			$config['max_height']  = '768';

			$this->load->library('upload', $config);

			$this->upload->initialize($config);

			// $this->upload->set_allowed_types('*');

			$data['upload_data'] = '';

			$uploadFile = $this->upload->do_upload('bukti');

			if (!$uploadFile){

				echo "<script>alert('Upload GAGAL! Please :".$this->upload->display_errors()."');history.go(-1);</script>";

			}elseif (!$setuju){

				echo "<script>alert('Apakah Anda masih belum yakin dengan Data Anda? Silahkan centang jika data anda sudah benar.');history.go(-1);</script>";

			}else{

				$data = $this->upload->data();
				$file_name = $data['file_name'];
				$this->mportal->mSimpanBayar($file_name, $kode);
				$bayar = "D";

				$cmb = $this->db->query("SELECT nama FROM adis_smb_usr_pribadi WHERE kode = '$kode';")->row();
				$konten = array( "konten" =>
								"<p>Dear Bagian Keuangan,</p>"
							  . "<br>"
							  . "<p>Peserta Seleksi Mahasiswa Baru '$cmb->nama' Sudah melakukan pembayaran "
							  . "uang pendaftaran masuk Universitas Paramadina. Silahkan login ke akun Anda untuk melakukan konfirmasi :</p>"
							  . "<br>"
							  . "<br><a href='".$this->host."smb/smbPay/' class='btn' "
							  . "style='border-radius: 6px;font-family: Arial;color: #ffffff;font-size: 13px;padding: 10px 20px 10px 20px;
									text-decoration: none;background: #3498db;'>Konfirmasi Pembayaran</a></br>"
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
							  . "<br>"
							  . "<br>"
							  . "<br>Jl. Gatot Subroto Kav. 97 Mampang"
							  . "<br>Jakarta 12790 Indonesia"
							  . "<br>Office Ph : +62 21 7918 1188 Ext 213"
							  . "<br>Office Fax : +62 21 799 3375"
							  . "<br>E-mail : smb@paramadina.ac.id"
						  );

				$this->mportal->mEmailKonfirm($kode, $bayar, $konten);

				$idActivity = "13.3";
				$this->activity($kode, $idActivity, $kode);

				/*** Integrasi data ke ASIK */
				$this->mintegrasi->pembayaran_admisi($kode);
				/*** end */
				if ($this->dataCmb->jenjangType == '2'){
					echo '<script>alert("Terimakasih anda telah mendaftar sebagai calon mahasiswa baru di Paramadina Graduate Schools,\\nuntuk proses selanjutnya mohon menunggu konfrimasi selanjutnya dari admin\\natau untuk fast respon dapat menghubungi humas kami\\ndi hotline 0815-9181187");</script>';
				}else{
					echo "<script>alert('Data Berhasil Disimpan!');</script>";
				}

				redirect('/portal/pembayaran','refresh');
			}


		}
	}

	function formulir(){
		$config['upload_path'] = './assets/upload/berkas';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$kode = $this->auth['kode'];
		$this->smarty->assign("kode", $kode);

		$uri = $this->uri->segment(3);
		$id = $this->input->post('id');

		$stsConfirm = $this->db2->query("SELECT stsApplyPaid, stsApplyPaidConfirm FROM adis_smb_form WHERE kode = '$kode'")->row();

		$dataCmb = $this->mportal->mCmb($kode);

		$this->mportal->selectAgama();
		$this->mportal->selectPropinsi();
		$this->mportal->selectKabKota();
		$this->mportal->selectKodePos();
		$this->mportal->selectType();

		$this->mportal->mPaidPendaftaran($kode);

		$this->mportal->mSelectSaudara($kode);
		$this->smarty->assign('idTab', $uri);

		if ($uri == "alamat"){
			if ($id == "formAlamat"){
				$this->smarty->display("portal/formAlamat.html");
			}else{
				$this->mportal->mDetailAlamat($kode);
				$this->smarty->display("portal/detailAlamat.html");
			}
		}else if ($uri == "keluarga"){
			$this->mportal->mSelectSaudara($kode);

			if ($id == "formKeluarga"){
				$this->smarty->display("portal/formKeluarga.html");
			}else if ($id == "tambah"){
				$kode = $this->auth['kode'];
				$uri2 = $this->uri->segment(4);
				$opt = $this->input->post("opt");
				if ($uri2 == "add"){
					$this->mportal->mAddSaudara($kode);
				}else if($uri2 == "delete" && $opt == "delete"){
					$val = $this->input->post("val");
					$this->db2->where('kode',$val);
					$this->db2->update('adis_smb_usr_kel', array('erased' => 1));
				}
				$this->mportal->mSelectSaudara($kode);
				$this->smarty->display("portal/tblKeluarga.html");
			}else if ($id == "Ortu"){
				$this->mportal->mAddOrtu($kode);

			}else if ($id == "saudara"){
				$kode = $this->auth['kode'];
				$uri2 = $this->uri->segment(4);
				if ($uri2 == "saudaraConf"){
					$this->db2->where('kode',$kode);
					$this->db2->update('adis_smb_usr_pribadi', array('statusSaudara' => 1));
				}
			}else{
				$this->mportal->mSelectOrtu($kode);
				$this->smarty->display("portal/detailKeluarga.html");
			}
		}else if ($uri == "pendidikan"){

			$this->mportal->mSelectPendidikan($kode);

			if ($id == "formPendidikan"){
				$this->smarty->display("portal/formEdu.html");
			}else if ($id == "tambah"){
				$kode = $this->auth['kode'];
				$uri2 = $this->uri->segment(4);
				$opt = $this->input->post("opt");
				$ijazah = '';
				$rapor = '';
				if ($uri2 == "add"){
					if ($dataCmb->jalur == 'JP'){
						if($_FILES['ijazah']['name']!=''){
							if (!$this->upload->do_upload('ijazah')){
								echo "<script>alert('Ijzah Gagal diuplod! Error :".$this->upload->display_errors()."');history.go(-1);</script>";
							}else{
								$data = $this->upload->data();
								$ijazah =   $data['file_name'];
							}
						}
						for($i =1;$i <= 4;$i++){
							if($_FILES['rapor'.$i]['name']!=''){
								if (!$this->upload->do_upload('rapor'.$i)){
									echo "<script>alert('Rapor ".$i." gagal di upload! Error :".$this->upload->display_errors()."');history.go(-1);</script>";
								}else{
									$data = $this->upload->data();
									$rapor[$i]=   $data['file_name'];
								}
							}
						}
					}

					$this->mportal->mAddPendidikan($kode, $ijazah, $rapor);
					$this->mportal->mSelectPendidikan($kode);
					// $this->smarty->display("portal/tblPendidikan.html");
					redirect ('/portal/formulir', 'refresh');
				}
			}else{
				$this->mportal->mDetailAlamat($kode);
				$this->smarty->display("portal/formEdu.html");
			}
		}else if ($uri == "prestasi"){
			$kode = $this->auth['kode'];
			$uri2 = $this->uri->segment(4);

			$this->mportal->mPrestasi($kode);
			$this->mportal->mOrganisasi($kode);

			if ($id == "formPrestasi"){
				$this->smarty->display("portal/formPrestasi.html");
			}else if ($id == "tambahPres"){
				$file_prestasi = '';
				if ($uri2 == "add"){
					if ($dataCmb->jalur == 'JP'){
						if($_FILES['file_prestasi']['name']!=''){
							if (!$this->upload->do_upload('file_prestasi')){
								echo "<script>alert('File Gagal diuplod! Error :".$this->upload->display_errors()."');history.go(-1);</script>";
							}else{
								$data = $this->upload->data();
								$file_prestasi =   $data['file_name'];
							}
						}
					}

					$this->mportal->mAddPrestasi($kode, $file_prestasi);
					$this->mportal->mPrestasi($kode);
					$this->smarty->display("portal/tblPrestasi.html");
				}else if ($uri2 == "delete"){
					$val = $this->input->post('val');
					$this->db2->where('kode', $val);
					$this->db2->update('adis_smb_usr_prestasi',array('erased'=>1));
				}else{
					$this->mportal->mPrestasi($kode);
					$this->smarty->display("portal/tblPrestasi.html");
				}
			}else if ($id == "tambahOrg"){
				if ($uri2 == "add"){
				$this->mportal->mAddOrganisasi($kode);
				$this->mportal->mOrganisasi($kode);
				$this->smarty->display("portal/tblOrganisasi.html");
				}else if ($uri2 == "delete"){
					$val = $this->input->post('val');
					$this->db2->where('kode', $val);
					$this->db2->update('adis_smb_usr_org',array('erased'=>1));
				}else{
					$this->mportal->mOrganisasi($kode);
					$this->smarty->display("portal/tblOrganisasi.html");
				}
			}
		}else if ($uri == "konfirm" && $id = "akhir"){
			$kode = $this->input->post('kode');
			$konfirm = $this->input->post('konfirm');
			if ($konfirm == "setuju"){
				$sqlStatus = "SELECT p.statusAlamat, p.statusKeluarga, e.status
							 FROM adis_smb_usr_pribadi p
							 INNER JOIN adis_smb_usr_edu e ON p.kode = e.smbUsr
							 WHERE p.kode = '$kode'";
				$status = $this->db2->query($sqlStatus)->row();
				 if ($status->statusAlamat == 0){
					 echo "<script>alert('Form Alamat Wajib Diisi!');history.go(-1);</script>";
				 }else if($status->statusKeluarga == 0){
					 echo "<script>alert('Form Keluarga Wajib Diisi!');history.go(-1);</script>";
				 }else if($status->status == 0){
					 echo "<script>alert('Lengkapi Form Pendidikan!');history.go(-1);</script>";
				 }else{

				if ($this->dataCmb->jenjangType == 1){
					$this->mportal->mRuangSmb($kode);
				}else{
					$this->db2->where("kode", $kode);
					$this->db2->update("adis_smb_usr_pribadi", array('stsPribadiConfirm'=>1));
					$this->db2->where("kode", $kode);

					$this->db2->update("adis_smb_form", array(
										'updateUser'=>$kode,
										'stsEventConfirm'=>1
										));
				}

					$idActivity = "13.4";
					$this->activity($kode, $idActivity, $kode);

				}
			}
			redirect ('/portal/jadwal', 'refresh');
		}else{

			//$stsPribadi->statusAlamat = 1
			//$stsPribadi->statusKeluarga = 1
			//$stsPribadi->statusPrestasi = 1
			$site = "formulir";

			$this->smarty->assign("site", $site);
			$this->smarty->display("portal/index.html");

		}
	}

	function uploadFile(){
		$config['upload_path'] = './assets/upload/berkas';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ($this->upload->do_upload('poto')){
			// echo "<script>alert('Upload GAGAL!! Error :".$this->upload->display_errors()."');history.go(-1);</script>";
			return null;
		}else{
			$data = $this->upload->data();
			$file_name =   $upload_data['file_name'];

			return $file_name;
		}

	}

	function saveAlamat(){
		$uri = $this->uri->segment(3);
		$opt = $this->input->post("opt");
		$kode = $this->input->post("kode");
		$date = date("Y-m-d H:i:s");

		if ($uri == "save" && $opt == "save"){

			$config['upload_path'] = './assets/upload/foto';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			// $config['max_size']    = '10000';
			// $config['max_width']  = '1024';
			// $config['max_height']  = '768';
			// $config['min_height']  = '200';
			// $config['min_width']  = '200';

			$config['file_name'] = $kode.'.jpg';
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			// $this->upload->set_allowed_types('*');

			$data['upload_data'] = '';

			$uploadFile = $this->upload->do_upload('poto');

			if (!$uploadFile){
				echo "<script>alert('Upload GAGAL!! Error :".$this->upload->display_errors()."');history.go(-1);</script>";

			}else{
				$data = $this->upload->data();
				$file_name = $data['file_name'];
				$this->mportal->mSaveAlamat($file_name, $kode, $date);
			}

			redirect ('/portal/formulir', 'refresh');
		}
	}

	function jadwal(){

		$kode = $this->auth['kode'];
		$jenjang = $this->dataCmb->jenjangType;

		$interview = $this->db2->query("SELECT interviewPhone FROM adis_smb_form WHERE kode = '$kode'")->row();
		$interview = $interview->interviewPhone;
		if($interview == '1'){

			$this->mportal->mJadwalInterview($kode);

			$qry = "SELECT id, tanggal, DAY(tanggal) as tanggalPhone,
					DAYNAME(tanggal) as hariPhone, MONTHNAME(tanggal) as bulanPhone, YEAR(tanggal) as tahunPhone,
					no_hp1, no_hp2, jamMulai, jamSelesai
					FROM adis_via_phone
					WHERE kodeMahasiswa = '$kode'";
			$query = $this->db2->query($qry)->row();

			$this->smarty->assign('phone',$query);
			$site = "jadwalInterview";

		}else{

			$this->mportal->mSelectJadwal($kode);
			$site = ($jenjang == 1 ) ? "jadwal" : "jadwalPasca";

		}
		$this->smarty->assign("site", $site);
		$this->smarty->display("portal/index.html");
	}

	function seleksi(){
		$kode = $this->auth['kode'];

		$termcond = $this->db2->query("SELECT termncondition FROM adis_smb_usr WHERE kode = '$kode'")->row();
		$this->smarty->assign("termcond", $termcond->termncondition);

		$this->mportal->mHasilSeleksi($kode);

		$site = "hasilSeleksi";

		$this->smarty->assign("site", $site);
		$this->smarty->display("portal/index.html");
	}

	function daftarUlang(){
		$this->load->model('msmb');
		$kode = $this->auth['kode'];
		$periode = $this->auth['periode'];

		$kodew = $this->db->query("SELECT kode, stsReapplyPaid, SUBSTR(bukaSmb,12, 2) as jalur, SUBSTR(bukaSmb,6,1 ) as jenjang
				FROM adis_smb_form WHERE kode = '$kode'")->row();

		$stsConfirm = $this->db2->query("SELECT stsReapplyPaid, stsReapplyPaidConfirm , SUBSTR(bukaSmb,12, 2) as jalur FROM adis_smb_form WHERE kode = '$kode'")->row();

		//$this->mportal->mCmb($kode);
		$this->msmb->mProfil($kode);

		$this->mportal->selectType();

		$qr = $this->db2->query("SELECT nama FROM adis_smb_usr_kel WHERE smbUsr = '$kode' AND erased = 0");
		$saudara = $qr->num_rows();

		$statusSaudara = $this->db->query("SELECT confirmSaudara FROM adis_smb_usr_pribadi WHERE kode = '$kode'")->row();

		$this->smarty->assign('statusSaudara', $statusSaudara->confirmSaudara);
		$this->smarty->assign('saudara',$saudara);
		$jenjang = $kodew->jenjang;

		$this->smarty->assign('statusBayar', $stsConfirm->stsReapplyPaidConfirm);

		if ($stsConfirm->stsReapplyPaidConfirm == 0  && $stsConfirm->stsReapplyPaid == 0){

			$biaya = $this->db2->query("SELECT kode, nama FROM adis_pembayaran WHERE status = 1 AND erased = 0")->result();
			$this->smarty->assign('biaya',$biaya);
			$this->smarty->assign('jalur',$stsConfirm->jalur);
			// $site = "daftarUlang";
		   // echo '<script>alert("'.$stsConfirm->jalur.'");</script>';

			$this->mportal->mPaidDaftarUlang($kode,$saudara,$jenjang,  $periode);
			if ($stsConfirm->jalur == 'KP'){
					$this->msmb->mProfil($kode);
//                            $site = "daftarUlangKPv2";
					// $site = "kontenDaftarUlangKP";
					$site = "kontenDaftarUlangKM";
			}else
			if ($stsConfirm->jalur == '1'){
					$this->msmb->mProfil($kode);
					$site = "daftarUlang";
			}else{
					$this->msmb->mProfil($kode);
					$site = "kontenDaftarUlangPasca";
			}

		}else if ($stsConfirm->stsReapplyPaidConfirm == 0  && $stsConfirm->stsReapplyPaid == 1){

			$this->mportal->mPaidDaftarUlang($kode, $saudara, $jenjang, $periode);
			$this->smarty->assign('jalur',$stsConfirm->jalur);
//			$site = "daftarUlangPaid";
			// $site = "daftarUlangConfirmed";
			$site = "kontenDaftarUlangConfirmed";

		}else if ($stsConfirm->stsReapplyPaidConfirm == 1){

			$this->mportal->mPaidDaftarUlang($kode, $saudara, $jenjang,  $periode);
			$this->smarty->assign('jalur',$stsConfirm->jalur);
			$site = "daftarUlangConfirmed";
		}

		$this->smarty->assign("site", $site);
		$this->smarty->display("portal/index.html");
	}



	function detailPayment(){
		$kode = $this->auth['kode'];
		$periode = $this->auth['periode'];
		$opt = $this->input->post("opt");
		$saudara = 0;

		$pembayaran = $this->input->post("val");
		$saudara = $this->input->post("sau");

		$kodew = $this->db->query("SELECT kode, stsReapplyPaid, SUBSTR(bukaSmb,12, 2) as jalur, SUBSTR(bukaSmb,6,1 ) as jenjang
				FROM adis_smb_form WHERE kode = '$kode'")->row();
                $jenjang = $kodew->jenjang;
                $jalur = $kodew->jalur;

                $this->smarty->assign('saudara',$saudara);
                $this->smarty->assign('jalur',$jalur);

		$quer = "SELECT f.bukaSmb,p.kode, SUBSTR(bukaSmb,12, 2) as jalur,
                            CASE p.kode WHEN 1204 THEN 3 WHEN 1203 THEN 2 WHEN 1202 THEN 2 ELSE 1 END AS tipeProdi,
                            f.stsResultGrade
                            from adis_smb_form f
                            INNER JOIN adis_buka_smb b ON f.bukaSmb = b.kode
                            INNER JOIN adis_prodi p ON b.prodi = p.kode
                            WHERE f.kode ='$kode';";
		$quer = $this->db2->query($quer)->row();


		if ($jalur == 'KP'){
			$prodiType = "";
//			if ($quer->kode == '1206'){
//				$prodiType = 'IK';
//			}else if ($quer->kode == '1208'){
//				$prodiType = 'MNJ';
//			}
		}else{
			$prodiType = $quer->kode;
		}

		$this->mportal->mDaftarUlangReg($kode, $saudara, $jenjang, $pembayaran, $prodiType, $periode);
		if ($jalur == 'KP'){
			$this->smarty->display('portal/detailOngkosKM.html');
		}else{
		   $this->smarty->display('portal/detailOngkos.html');
		}

	}

	function mDetailBayar(){
		$user = $this->auth['kode'];
		$opt = $this->input->post("opt");
		$saudara = 0;

		$pembayaran = $this->input->post("val");
		$saudara = $this->input->post("sau");

		$quer = "SELECT f.bukaSmb,p.kode, SUBSTR(bukaSmb,12, 2) as jalur,
				CASE p.kode WHEN 1204 THEN 3 WHEN 1203 THEN 2 WHEN 1202 THEN 2 ELSE 1 END AS tipeProdi,
				f.stsResultGrade
				from adis_smb_form f
				INNER JOIN adis_buka_smb b ON f.bukaSmb = b.kode
				INNER JOIN adis_prodi p ON b.prodi = p.kode
				WHERE f.kode ='$user';";
		$quer = $this->db2->query($quer)->row();

		$jalur = $quer->jalur;
		if ($jalur == 'KP'){
			if ($quer->kode == '1206'){
				$prodiType = 'IK';
			}else if ($quer->kode == '1208'){
				$prodiType = 'MNJ';
			}
		}else{
			$prodiType = $quer->kode;
		}

		$rank = $quer->stsResultGrade;

		$tipeBayar = implode(".",array($prodiType,$pembayaran,$jalur));

		$qryHsl = "SELECT p.*, c.*, c.kode as code, p.kode as kode_pembayaran FROM adis_pembayaran p
			LEFT JOIN adis_cicilan c ON c.id_pembayaran = p.kode
			WHERE p.kode='$tipeBayar'";
		$biaya = $this->db2->query($qryHsl)->row();

		// echo "to :".$tipeBayar;
		//echo "Do :".$biaya->jumlahSks;
		// echo "Rank :".$rank;

		if ($rank == '1'){$total = $biaya->total1;}
		if ($rank == '2'){$total = $biaya->total2;}
		if ($rank == '3'){$total = $biaya->total3;}

		if ($rank == '1'){$uangMasuk = $biaya->uangMasuk1;}
		if ($rank == '2'){$uangMasuk = $biaya->uangMasuk2;}
		if ($rank == '3'){$uangMasuk = $biaya->uangMasuk3;}


		$sisaAng = 0;
		$totalAll = 0;
		$diskonSau = "";

		//Potongan memiliki saudara
		if ($quer->kode != '1204'){
			if ($saudara != 0){
				if ($pembayaran == 1){
					if ($rank == '1'){$diskonSau = 20/100*$biaya->uangMasuk1;}
					if ($rank == '2'){$diskonSau = 20/100*$biaya->uangMasuk2;}
					if ($rank == '3'){$diskonSau = 20/100*$biaya->uangMasuk3;}

					$total = $total - $diskonSau;
					$totalAll = $total;
				}else{
					if ($rank == '1'){$diskonSau = 20/100*$biaya->uangMasuk1;}
					if ($rank == '2'){$diskonSau = 20/100*$biaya->uangMasuk2;}
					if ($rank == '3'){$diskonSau = 20/100*$biaya->uangMasuk3;}
				}
			}
		}
		//Potongan pembayaran lunas
		$angsuran = '';
		if ($pembayaran == 1){
			if ($quer->kode != '1204'){
				if($quer->jalur != 'KP'){
					$total = $total - 1000000;
				}
			}
		}else{
			if ($quer->jalur == 'KP'){
				if ($quer->kode == '1206'){
					$totalAll = $total + $biaya->angsuran2 + $biaya->angsuran3 + $biaya->angsuran4;
				}else if($quer->kode == '1208'){
					$totalAll = $total + $biaya->angsuran2 + $biaya->angsuran3 + $biaya->angsuran4 + $biaya->angsuran6 + $biaya->angsuran6 + $biaya->angsuran7 + $biaya->angsuran8;
				}
			}else{
				if ($rank == '1'){$totalAll = ($total - $uangMasuk);}// + $biaya->angsuran1_1;}
				if ($rank == '2'){$totalAll = ($total - $uangMasuk);}// + $biaya->angsuran1_2;}
				if ($rank == '3'){$totalAll = ($total - $uangMasuk);}// + $biaya->angsuran1_3;}

				if ($rank == '1'){
					$angsuran = array(
									'angsuran1'=>$biaya->angsuran1_1,
									'angsuran2'=>$biaya->angsuran2_1,
									'angsuran3'=>$biaya->angsuran3_1 - $diskonSau,
								);
				}
				if ($rank == '2'){
					$angsuran = array(
									'angsuran1'=>$biaya->angsuran1_2,
									'angsuran2'=>$biaya->angsuran2_2,
									'angsuran3'=>$biaya->angsuran3_3 - $diskonSau,
								);
				}
				if ($rank == '3'){
					$angsuran = array(
									'angsuran1'=>$biaya->angsuran1_3,
									'angsuran2'=>$biaya->angsuran2_3,
									'angsuran3'=>$biaya->angsuran3_3 - $diskonSau,
								);
				}

				$sisaAng = $angsuran['angsuran1']+$angsuran['angsuran2']+($angsuran['angsuran3']- $diskonSau);
			}
		}
		$this->smarty->assign('sau', $saudara);
		$this->smarty->assign('saudara', $saudara);
		$this->smarty->assign('uangMasuk', $uangMasuk);
		$this->smarty->assign('diskonSau', $diskonSau);
		$this->smarty->assign('total', $total);
		$this->smarty->assign('totalbayar', $totalAll);
		$this->smarty->assign('biaya', $biaya);
		$this->smarty->assign('angsuran',$angsuran);
		$this->smarty->assign('method',$pembayaran);
		$this->smarty->assign('sisaAng',$sisaAng);
		$this->smarty->assign('prodi',$quer->kode);
		$this->smarty->assign('jalur',$quer->jalur);
		$this->smarty->assign('prodiType',$tipeBayar);
		$this->smarty->display('portal/detailOngkos.html');
	}

	function confirmDaftarUlang(){
		$this->load->model('mintegrasi');

		$kode = $this->input->post('kode');
		$uri = $this->uri->segment(3);
		$opt = $this->input->post('opt');
                $kode_jalur = $this->input->post('kode_jalur');
		$tipePembayaran = $this->input->post("typeTrans");
		$file_name = '';

                $konten = array( "konten" =>
                                "<p>Dear Bagian Keuangan,</p>"
                              . "<br>"
                              . "<p>Peserta Seleksi Mahasiswa Baru '".$this->auth['username']."' Sudah melakukan pembayaran "
                              . "Daftar Ulang Admisi Universitas Paramadina. Silahkan login ke akun Anda untuk melakukan konfirmasi :</p>"
                              . "<br>"
                              . "<br><a href='".$this->host."smb/smbPay/' class='btn' "
                              . "style='border-radius: 6px;font-family: Arial;color: #ffffff;font-size: 13px;padding: 10px 20px 10px 20px;
                                    text-decoration: none;background: #3498db;'>Konfirmasi Daftar Ulang</a></br>"
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
                              . "<br>"
                              . "<br>"
                              . "<br>Jl. Gatot Subroto Kav. 97 Mampang"
                              . "<br>Jakarta 12790 Indonesia"
                              . "<br>Office Ph : +62 21 7918 1188 Ext 213"
                              . "<br>Office Fax : +62 21 799 3375"
                              . "<br>E-mail : smb@paramadina.ac.id"
                          );

		if ($uri == "add" && $opt == "save"){
			// UPLOAD File menggunakan library upload CI
			$config['upload_path'] = './assets/upload/bukti_bayar';
			$config['allowed_types'] = 'gif|jpg|png|pdf';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			// $this->upload->set_allowed_types('*');

			$data['upload_data'] = '';

                        $kodew = $this->db->query("SELECT kode, stsReapplyPaid, SUBSTR(bukaSmb,12, 2) as jalur,
                            SUBSTR(bukaSmb,6,1 ) as jenjang FROM adis_smb_form
                            WHERE kode = '$kode'")->row();
			$jenjang = $kodew->jenjang;

                        switch ($jenjang){
                            CASE "1":
                                $uploadFile = $this->upload->do_upload('bukti');

                                if (!$uploadFile){
                                    echo "<script>alert('Penyimpanan Gagal!! :".$this->upload->display_errors()."');history.go(-1);</script>";
                                }else{

                                    $data = $this->upload->data();
                                    $file_name = $data['file_name'];
                                    $this->mportal->mSimpanDaftarUlang($file_name, $kode);
                                    $bayar = "DU";
//                                        $this->mportal->mEmailKonfirm($kode, $bayar, $konten);
                                    /**** Integrasi data pembayaran daftar ulang ke ASIK ****/

//                                    if($kode_jalur == '01' || $kode_jalur == 'KP' || $kode_jalur == '02'){
//                                            $this->mintegrasi->generate_tagihan($kode, $kode_jalur);
//                                    }
                                    /** end */
                                    echo "<script>alert('Pendaftaran Ulang Berhasil Disimpan!');</script>";
                                }
                            break;
                        }

			redirect('/portal/daftarUlang','refresh');

		}
	}

	// function generateNIM($kode){
			// $val = $this->db->query("SELECT nomor FROM adis_smb_form WHERE kode = '$kode';")->row();
			// $val = $val->nomor;

			// $sql  = "set @_bukaSmb:=(SELECT bukaSmb FROM adis_smb_form WHERE nomor = '$val');";
			// $sql2 = "set @_tahun:=left(@_bukasmb,4);";
			// $sql3 = "set @_tahun_yy:=right(@_tahun,2);";
			// $sql4 = "set @_jenjang:=right(left(@_bukasmb,6),1);";
			// $sql5 = "set @_periode:=left(@_bukasmb,8);";
			// $sql6 = "set @_sesi:=right(left(@_bukasmb,8),1);";
			// $sql7 = "set @_prodi:=right(@_bukasmb,4); ";
			// $sql8 = "set @_nimOrder:=(select max(nimOrder) from adis_smb_form where bukaSmb=@_bukasmb);";
			// $sql9 = "set @_nim:=concat(@_jenjang,@_tahun_yy,@_sesi,right(@_prodi,2),LPAD((@_nimOrder+1),3,0));";
			// $sql10 = "update adis_smb_form set nimOrder = (@_nimOrder+1) where nomor='$val';";

			// $this->db2->query($sql);
			// $this->db2->query($sql2);
			// $this->db2->query($sql3);
			// $this->db2->query($sql4);
			// $this->db2->query($sql5);
			// $this->db2->query($sql6);
			// $this->db2->query($sql7);
			// $this->db2->query($sql8);
			// $this->db2->query($sql9);
			// $this->db2->query($sql10);

			// $qry = "UPDATE adis_smb_form SET nim  = @_nim WHERE nomor='$val'";
			// $this->db2->query($qry);
	// }

	function profil(){
		$kode = $this->auth['kode'];
		$this->mportal->mProfil($kode);
		$this->mportal->mSelectOrtu($kode);
		$this->mportal->mSelectPendidikan($kode);
		$this->mportal->mSelectSaudara($kode);
		$this->mportal->mPrestasi($kode);
		$this->mportal->mOrganisasi($kode);
		$site = "profil";
		$this->smarty->assign("site", $site);
		$this->smarty->display("portal/index.html");
	}

	function editProfil(){
		$this->load->library('encrypt');
		$uri = $this->uri->segment(4);
		$val = $this->input->post('val');
		$opt = $this->input->post('opt');
		$kode = $this->input->post('kode');

		if (!$uri && $opt == 'edit'){
			$this->smarty->assign('val',$val);
			$this->smarty->display('portal/formFoto.html');
		}else if($uri == 'save' && $kode != '' && $opt == 'passW'){

			$user = $this->db->query("SELECT password FROM adis_smb_usr WHERE kode = '$kode'")->row();
			$pass = $this->encrypt->decode($user->password);
			$oldPass = $this->input->post('oldPass');
			$newPass = $this->input->post('newPass');
			if($oldPass != $pass){
				echo "<script>alert('Password Yang Anda Masukkan Salah!');history.go(-1);</script>";
			}else {
				$newPass = $this->encrypt->encode($newPass);
				$this->db->where('kode',$kode);
				$this->db->update('adis_smb_usr', array('password'=>$newPass));
			}

			redirect ('/portal/profil', 'refresh');

		}else if ($uri == 'do' && $kode != '' && $opt == 'foto'){

			$config['upload_path'] = './assets/upload/foto';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']    = '10000';
			// $config['max_width']  = '1000';
			// $config['max_height']  = '1200';
			$config['min_height']  = '400';
			$config['min_width']  = '200';

			$config['file_name'] = $kode.'.jpg';

			$this->load->library('upload', $config);

			$this->upload->initialize($config);

			// $this->upload->set_allowed_types('*');

			$data['upload_data'] = '';

			$uploadFile = $this->upload->do_upload('poto');

			if (!$uploadFile){

				echo "<script>alert('Upload GAGAL!! Error :".$this->upload->display_errors()."');history.go(-1);</script>";

			}else{

			$data = $this->upload->data();
			$file_name = $data['file_name'];
			$this->db->where('kode', $kode);
			$this->db->update('adis_smb_usr_pribadi', array('foto'=>$file_name));

			}

			redirect ('/portal/profil', 'refresh');
		}
	}

	function selectKabKota(){
		$propinsi = $this->input->post("propinsi");

		$prop = $this->db2->get_where('adis_wil', array('parent'=>$propinsi))->result();
		$view = '	{foreach name=lope from=$prop item=row}
						<option value="{$row->kode}">{$row->nama}</option>
					{/foreach}';

		$this->smarty->assign('prop',$prop);
		$this->smarty->display('string:'.$view);
	}

	function selectKodePos(){
		$kab = $this->input->post("kabkota");

		$kab = $this->db2->query("SELECT * FROM adis_kodepos WHERE kabupatenkota = '".$kab."' ORDER BY kodepos ASC;")->result();
		$view = '	{foreach name=lope from=$kab item=row}
						<option value="{$row->kode}">{$row->kodepos}</option>
					{/foreach}';

		$this->smarty->assign('kab',$kab);
		$this->smarty->display('string:'.$view);
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

	function formulirReport(){

		$kode = $this->uri->segment(3);

		$kode = $this->db2->query("SELECT kode, stsEventConfirm FROM adis_smb_form WHERE nomor = '$kode'")->row();

		if ($kode->stsEventConfirm == '0') {
			// What happens when the CAPTCHA was entered incorrectly
			echo '<script>alert("Calon Mahasiswa belum melengkapi Data Diri, Silahkan Kembali!");history.go(-1);</script>';
			// die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
				 // "(reCAPTCHA said: " . $resp->error . ")");
		}else{


			$kode = $kode->kode;
			$this->mportal->selectType();
			$this->mportal->mProfil($kode);
			$this->mportal->mSelectPendidikan($kode);
			$this->mportal->mOrganisasi($kode);
			$this->mportal->mPrestasi($kode);
			$this->mportal->mSelectOrtu($kode);
			$this->mportal->mSelectSaudara($kode);

			$site = "kontenFormulir";
			$this->smarty->assign("site", $site);
			$this->smarty->display("portal/index.html");

		}
	}

        function lampiran($p=""){
            $kode = $this->auth['kode'];
            $this->smarty->assign('host',$this->host);

            if ($p == 1){
                $title = "Lampiran 1";
				$page = "lampiran";
                $lamp = "";
                $header = '';
                $this->smarty->assign('header',$header);
                $this->smarty->assign('lamp',$lamp);
            }else if ($p == 2){
                $title = "Lampiran 2";
				$page = "lampiran2";
                $lamp =   "";
                $this->smarty->assign('lamp',$lamp);

                $header = '';
                $this->smarty->assign('header',$header);
            }else if ($p == 3){
                $title = "Lampiran 3";
				$page = "lampiran3";
                $lamp = "";
                $this->smarty->assign('lamp',$lamp);

                $header = '';

                $this->smarty->assign('header',$header);
            }else if ($p == 4){
                $title = "";
				$page = "lampiran4";
                $lamp = "";
                $this->smarty->assign('lamp',$lamp);

                $header = '';

                $this->smarty->assign('header',$header);
            }else if ($p == 5){
				$this->mportal->mProfil($kode);

				$dataBerkas = $this->db2->query("SELECT * FROM tbl_kelengkapan_berkas WHERE kode_cmb = '$kode' ")->num_rows();
				$masterBerkas = $this->db2->query("SELECT * FROM tbl_master_berkas")->result_array();
				if($dataBerkas > 0 ){
					$infoBerkas = $this->db2->query("SELECT * FROM `tbl_master_berkas` A
						INNER JOIN tbl_kelengkapan_berkas B ON A.id_berkas = B.id_berkas
						WHERE kode_cmb = '$kode';")->result_array();
					$this->smarty->assign('infoBerkas',$infoBerkas);
				}
                $title = "";
				$page = "lampiran5";
                $lamp = "";
                $this->smarty->assign('lamp',$lamp);
                $this->smarty->assign('dataBerkas',$dataBerkas);
                $this->smarty->assign('masterBerkas',$masterBerkas);

                $header = '';

                $this->smarty->assign('header',$header);
            }else if ($p == 'agrreed'){
                $val = $this->uri->segment(4);
                if ($val == 1){
                    $this->db2->where('kode', $kode);
                    $this->db2->update('adis_smb_usr', array('termncondition'=>1));
//                    redirect ('/portal/daftarUlang', 'refresh');
                    return 1;
                }
            }
		$this->smarty->assign('title', $title);
		$this->smarty->assign('page', $page);
		$this->smarty->display("pendaftaran/index.html");
        }

		function listAngsuran(){

            $post = $this->input->post();
            $opt = $post['opt'];
            $pilihan = $post['val'];
            $kodebayar = $post['kodebayar'];
            $periode = $this->auth['periode'];

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
            $this->smarty->display('portal/listAngsuran.html');
        }

		function survey(){
			$qryQuest = $this->db2->query("SELECT * FROM tbl_pertanyaan_survei")->result_array();
			$this->smarty->assign('quest', $qryQuest);

			$qryAns = $this->db2->query("SELECT A.*, B.kriteria_jawaban as pilihan  FROM
					tbl_jawaban_survei A
					LEFT JOIN tbl_kriteria_survey B ON A.jawaban = B.id ")->result_array();
			$this->smarty->assign('answer', $qryAns);

			$qryKriteria = $this->db2->query("SELECT * FROM tbl_kriteria_survey")->result_array();
			$this->smarty->assign('kriteria', $qryKriteria);

			$this->smarty->assign('title', "FORM SURVEY ADMISSION");
			$this->smarty->assign('page', 'survey/form_survey');
			$this->smarty->display("pendaftaran/index.html");
		}
}
