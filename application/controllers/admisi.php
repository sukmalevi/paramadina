<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admisi extends CUTI_Controller{
	function __construct(){
		parent::__construct();	
		//setlocale (LC_TIME, 'id_ID');
		setlocale (LC_TIME, 'INDONESIA');
		$this->auth = unserialize(base64_decode($this->session->userdata('cuti_parmad')));
		$this->host	= $this->config->item('base_url');
		
		if(! $this->auth) {header("Location: " . $this->host);}	
		
		$this->db2 = $this->load->database('second', TRUE); 
		
		$modul = "admisi/";
		$this->smarty->assign('modul',$modul);
		$this->smarty->assign('host',$this->host);
		$this->load->model('madmisi');
		$this->db2->query("SET lc_time_names = 'id_ID'");
		
		$nama = $this->auth['name'];
		$this->smarty->assign('nama',$nama);
		
		
		
		// if ($this->auth['level'] != "99" || $this->auth['level'] != "77"){ redirect('/home','refresh');}
	}
	
	function index() {
		
		}
		
	function admisiBukaSeleksi(){
		$periode = $this->input->post("periode");
		$jalur = $this->input->post('jalur');
		$uri = $this->uri->segment(3);
		
		if (!$periode && !$uri){
			$this->madmisi->mSelectPeriode();
			// $this->madmisi->mSelectProdi();
			// $this->madmisi->mSelectJalur();
			
			$site = "Jadwal";			
			
			$this->smarty->assign('site',$site);
			$this->smarty->assign('lokasi',"Buka ");	
			$this->smarty->display('index.html');
		
		}else if ($periode != "" && $uri == "table"){
			
			$this->madmisi->mBukaSeleksi($periode, $jalur);
			
			$period = $this->db2->query("SELECT nama,kode from adis_periode WHERE kode = '$periode'")->row();
			$route = $this->db2->query("SELECT nama, kode from adis_jalur_smb WHERE kode = '$jalur'")->row();
			
			$this->smarty->assign('periode',$period);
			$this->smarty->assign('jalur',$route);
			$this->smarty->display('admisi/tblBuka.html');
		} 
	
		
			
	}
	
	function selectForm(){
		$method = $this->uri->segment(3);
		switch ($method){
			case 'fPeriode':
				$periode = $this->input->post('kode');
				$target = $this->input->post('target');
				$jenjang = substr($periode, 5, 1);
				
				$prodi ="SELECT * FROM adis_prodi WHERE erased = 0 AND jenjang = '$jenjang'";
				$prodi = $this->db2->query($prodi)->result();	
				$this->smarty->assign('prodi', $prodi);
				
				$jalur ="SELECT * FROM adis_jalur_smb WHERE erased = 0 AND jenjang = '$jenjang'";
				$jalur = $this->db2->query($jalur)->result();					
				$this->smarty->assign('jalur',$jalur);	
				
				$htmlProdi = '{foreach name=lope from=$prodi item=row}
								<option value="{$row->kode}">{$row->nama}</option>
							  {/foreach}';
							 
				$htmlJalur = '{foreach name=lope from=$jalur item=row}
								<option value="{$row->kode}">{$row->nama}</option>
							  {/foreach}';
							  
				$data = ($target == 'prodi' ) ? $htmlProdi : $htmlJalur;
				$this->smarty->display('string:'.$data);
				
			break;
		}
	}
	
	function admisiOptBuka(){
		$uri = $this->uri->segment(3);
		$uri2 = $this->uri->segment(4);
		$opt = $this->input->post("opt");
		$kode = $this->input->post("val");
		
		if ($uri == "add" && $opt =="add"){
			
			$this->madmisi->mAddBuka();
			
			redirect('/admisi/admisiBukaSeleksi','refresh');
		
		}else if ($uri == "edit" && $opt =="edit"){
			
			if (!$uri2){
				$this->madmisi->mSelectPeriode();
				$this->madmisi->mSelectProdi();
				$this->madmisi->mSelectJalur();
				
				$this->madmisi->mDataBuka($kode);
				
				$this->smarty->display('admisi/formBuka.html');	
			}else{
				
				$kode = $this->input->post("kode");
				$this->madmisi->mEditBuka($kode);
				
				redirect('/admisi/admisiBukaSeleksi','refresh');
			}
		
		}else if ($uri == "delete" && $opt =="delete"){
			$id = $this->input->post("id");
			if($id == "aktif"){
				$value = $this->input->post("val");
				$this->db2->where("kode",$value);
				$this->db2->update("adis_buka_smb", array("stsBuka"=>'0'));
				
			}else if($id == "nonaktif"){
				$value = $this->input->post("val");
				$this->db2->where("kode",$value);
				$this->db2->update("adis_buka_smb", array("stsBuka"=>'1'));
				
			}else if($id == "confirm"){
				$value = $this->input->post("value");
				$this->db2->where("kode",$value);
				$this->db2->update("adis_buka_smb", array("erased"=>'1'));
					
				redirect('/admisi/admisiBukaSeleksi','refresh');
			}else{
				$fungsi = "admisiOptBuka";
				$val = $this->input->post("val");
				$this->smarty->assign("value",$val);
				$this->smarty->assign("fungsi",$fungsi);
				$this->smarty->display("admisi/konfirmasiDel.html");
			}
		}
	}
	
	function admisiPeriode(){
		$sql ="SELECT * FROM adis_periode WHERE status = 1 AND erased = 0";
		$sql = $this->db2->query($sql)->result();		
		$site = "Event";			
		$this->smarty->assign('site',$site);	
		$this->smarty->assign('sql',$sql);	
		$this->smarty->assign('lokasi',"Periode ");
		$this->smarty->display('index.html');	
	}
	
	function admisiJalur(){		
		$periode = $this->input->post('periode');
		$function = $this->input->post('fungsi');
		$jenjang = substr($periode, 5, 1);
		
		$sql ="SELECT * FROM adis_jalur_smb WHERE erased = 0 AND jenjang = '$jenjang'";
		$sql = $this->db2->query($sql)->result();
		
		$this->smarty->assign('fungsi',$function);
		$this->smarty->assign('periode',$periode);	
		$this->smarty->assign('jalur',$sql);	
		$this->smarty->display('admisi/selectJalur.html');	
	}
	
	function admisiJadwalSeleksi(){
		$uri = $this->uri->segment(3);
		$uri2 = $this->uri->segment(4);
		$periode = $this->input->post('periode');
		$jalur = $this->input->post('jalur');	
		$opt = $this->input->post('opt');	
		
		$this->madmisi->mSelectPeriode();
		$this->madmisi->mSelectJalur();
		$this->madmisi->mSelectRuang();
		$this->madmisi->mSelectPetugas();
		
		
		if ($uri == "table" && $periode != ""){
			$this->madmisi->mDataEvent($jalur, $periode);
			$this->smarty->display('admisi/tblJadwal.html');	
		}else if ($uri == "add" && $opt == "add"){
			
			$this->madmisi->mAddEvent();
			redirect('/admisi/admisiJadwalSeleksi','refresh');
			
		}else if ($uri == "edit" && $opt == "edit"){			
			$kode = $this->input->post('val');	
		
			if (!$uri2){
				$this->madmisi->mSelectEvent($kode);
				
				$this->smarty->display("admisi/formEvent.html");
				
			}else{
				$this->madmisi->mEditEvent();
				
				redirect('/admisi/admisiJadwalSeleksi','refresh');
			}
		}else if ($uri == "delete" && $opt == "delete"){			
			$id = $this->input->post("id");
			if($id == "aktif"){
				$value = $this->input->post("val");
				$this->db2->where("kode",$value);
				$this->db2->update("adis_event_smb", array("statusJadwal"=>'0'));
				
			}else if($id == "nonaktif"){
				$value = $this->input->post("val");
				$this->db2->where("kode",$value);
				$this->db2->update("adis_event_smb", array("statusJadwal"=>'1'));
				
			}else if($id == "confirm"){
				$value = $this->input->post("value");
				$this->db2->where("kode",$value);
				$this->db2->update("adis_event_smb", array("erased"=>'1'));
					
				redirect('/admisi/admisiJadwalSeleksi','refresh');
			}else{
				$fungsi = "admisiJadwalSeleksi";
				$val = $this->input->post("val");
				$this->smarty->assign("value",$val);
				$this->smarty->assign("fungsi",$fungsi);
				$this->smarty->display("admisi/konfirmasiDel.html");
			}
		}else{
			$sql ="SELECT * FROM adis_periode WHERE status = 1 AND erased = 0";
			$sql = $this->db2->query($sql)->result();		
			$site = "Event";			
			$this->smarty->assign('site',$site);	
			$this->smarty->assign('sql',$sql);	
			$this->smarty->assign('lokasi',"Jadwal Seleksi ");
			$this->smarty->display('index.html');
		}
	}
	
	function absen(){
		$kode = $this->uri->segment(3);
		$kode = rawurldecode($kode);
		$opt = $this->uri->segment(4);
		
		if ($kode != ""){
			$this->madmisi->mAbsen($kode);
			$site = "Absen";			
			$this->smarty->assign('site',$site);	
			$this->smarty->assign('kode',$kode);	
			$this->smarty->assign('lokasi',"Absensi");	
			$this->smarty->display('index.html');
		}
		
	}       
        
	
	function exportPeserta($kode){
            $kode = $this->uri->segment(3);
            $kode = rawurldecode($kode);
            
            if ($kode != ""){
                $sql = $this->madmisi->mPeserta($kode);
                $this->export->to_excel($sql, 'Peserta Ujian SMB'); 
            }
	}
	
	function mahasiswa(){
		$kode = $this->uri->segment(3);
		$prodi = $this->uri->segment(4);
		$opt = $this->uri->segment(5);
		
		$prodi = $this->db2->query("SELECT nama FROM adis_prodi WHERE kode = '$prodi'")->row();
		
		if ($kode != ""){
			$ps  = "";
			//$kodeSmb =  implode(".",array($kode,$prodi));
			$this->madmisi->mMahasiswa($kode, $ps);
			$site = "Mahasiswa";			
			$this->smarty->assign('site',$site);
			$this->smarty->assign('prodi',$prodi);
			$this->smarty->assign('kodeSmb', $kode);
			$this->smarty->assign('lokasi',"Calon Mahasiswa");	
			$this->smarty->display('index.html');
		}
		
	}
	
	function exportToExcel(){
		$kodeSmb = $this->uri->segment(3);
		$prodi = $this->uri->segment(4);
		$sql = $this->madmisi->mMahasiswa($kodeSmb, $prodi);
		$this->export->to_excel($sql, 'Calon_Mahasiswa_Prodi_'.$prodi.''); 
	}
	
	function settingUM(){
		$this->smarty->assign('submodul',"admisi");
		$sql = "SELECT * FROM adis_jalur_smb WHERE erased = 0";
		$sql = $this->db->query($sql)->result();
                
                $periode = "SELECT * FROM adis_periode_master WHERE erased = 0";
		$periode = $this->db2->query($periode)->result();
                $this->smarty->assign('periode', $periode);
		
		$site = "SelectJalur";
		$this->smarty->assign('site',$site);			
		$this->smarty->assign('lokasi',"Master Uang Masuk");
		$this->smarty->assign('jalur', $sql);
		$this->smarty->display('index.html');
	}

	function settingUangMasuk(){
		$uri = $this->uri->segment(3);
		$uri2 = $this->uri->segment(4);
		$opt = $this->input->post('opt');
		$jalur = $this->input->post('jalur');     
                
//                echo "<script>alert(".$opt.");</script>";
                
		$jallur = "SELECT * FROM adis_jalur_smb WHERE erased = 0";
		$jallur = $this->db->query($jallur)->result();
                $this->smarty->assign('jalur', $jallur);
                
                $periode = "SELECT * FROM adis_periode_master WHERE erased = 0";
		$periode = $this->db2->query($periode)->result();
                $this->smarty->assign('periode', $periode);
			
		
		if ($uri == "add" && $opt == "save"){			
			$this->madmisi->mAddPembayaran();			
			redirect('/admisi/settingUM','refresh');
			
		}else if ($uri == "copy" && $opt == "save"){
                    $this->mmaster->mAddPembayaran();
                    redirect('/master/masterUM','refresh');
		}else if ($uri == "edit" && $opt == "edit"){			
			$val = $this->input->post("val");
                        $kodeVal = strstr($val, '-', TRUE);
                        $periode = substr($val, strpos($val, "-") + 1);
			if (!$uri2){			
				if (strpos($val, 'KP') !== FALSE){
					$qry = "SELECT p.*, pr.singkatan as alias_prodi, pr.nama as prodi, p.kode as code
					FROM adis_pembayaran_kelasmalam p
					LEFT JOIN adis_prodi pr ON p.prodiTipe = pr.kode
					WHERE p.kode = '$kodeVal' AND p.periode_kode = '$periode'";
								}else{  
					$qry = "SELECT p.*, p.periode_kode as periode_code, pr.singkatan as alias_prodi, pr.nama as prodi, p.kode as code, c.*, c.kode as kodecil
					FROM adis_pembayaran p
					LEFT JOIN adis_prodi pr ON p.prodiTipe = pr.kode
					LEFT JOIN adis_cicilan c ON c.id_pembayaran = p.kode AND c.periode_kode = p.periode_kode
					WHERE p.kode = '$kodeVal' AND p.periode_kode = '$periode'";                              
								}
					$pembayaran = $this->db2->query($qry)->row_array();
					$values = array();
					$pembeda = array();
					
					$values['code'] = $pembayaran['code'];
					$values['periode_kode'] = $pembayaran['periode_kode'];
					$values['nama'] = $pembayaran['nama'];
					$values['prodi'] = $pembayaran['prodi'];
					$values['prodiTipe'] = $pembayaran['prodiTipe'];
					$values['gradeMasuk'] = $pembayaran['gradeMasuk'];
					$values['uangMasuk'] = $pembayaran['uangMasuk'];
					$values['jumlahSks'] = $pembayaran['jumlahSks'];
					$values['biayaPerSks'] = $pembayaran['biayaPerSks'];
					$values['spp'] = $pembayaran['spp'];
					$values['tempoAngsuran'] = $pembayaran['tempoAngsuran'];
					$values['banyakPilihanUM'] = $pembayaran['banyakPilihanUM'];
					$values['biayaPembeda'] = json_decode($pembayaran['biayaPembeda']);
					$values['tglAwalAngsuran'] = $pembayaran['tglAwalAngsuran'];
					$values['pilihanBiayaUM'] = json_decode($pembayaran['pilihanBiayaUM']);
					
					$pembeda = array();
					foreach($values['pilihanBiayaUM'] as $key=>$val){ // Loop though one array
						$val2 = $values['biayaPembeda'][$key]; // Get the values from the other array
						$result[$key] = array('pilihan'=>$val, 'pembeda'=>$val2); // combine 'em
					}
//                                echo "<pre>";
//                                print_r($result);exit;
					$this->smarty->assign('pembayaran',$pembayaran);	
					$this->smarty->assign('biaya',$values);	
					$this->smarty->assign('pembeda',$result);	
				
					$this->smarty->display('admisi/formEditUMKL.html');
			}else{
				
				$kode = $this->input->post("kode");
				$periode = $this->input->post("periode");
				$this->madmisi->mEditPembayaran($kode,$periode);
				
				
				redirect('/admisi/settingUM','refresh');
			
			}
			
			
		}else if ($uri == "delete" && $opt == "delete"){
			
			$id = $this->input->post("id");
			
			if ($id == "confirm"){
					$kode = $this->input->post("value");
					$this->db2->where("kode",$kode);
					$this->db2->update("adis_pembayaran", array("erased"=>'1',"status"=>'0'));
					
					redirect('/master/mDaftarUlang','refresh');
				}
			else if ($id == "nonaktif"){
					$kode = $this->input->post("val");
					$this->db2->where("kode",$kode);
					$this->db2->update("adis_pembayaran", array("status"=>'0'));
				}
			else if ($id == "aktif"){
					$kode = $this->input->post("val");
					$this->db2->where("kode",$kode);
					$this->db2->update("adis_pembayaran", array("status"=>'1'));
				}
			else {
				$fungsi = "mDaftarUlang";
				$val = $this->input->post("val");
				$this->smarty->assign("value",$val);
				$this->smarty->assign("fungsi",$fungsi);
				$this->smarty->display("master/verifikasiWil.html");
			
			}
			
		}else if($uri == 'table'){
			$periode = $this->input->post('periode');
			$jlr = "SELECT * FROM adis_jalur_smb WHERE erased = 0";
			$jlr = $this->db->query($jlr)->result();
			
			switch ($jalur) {
				case 'KP':
					$sql = $this->db2->query("SELECT p.*, pr.singkatan as prodi
							FROM adis_pembayaran_kelasmalam p
							LEFT JOIN adis_prodi pr ON p.prodiTipe = pr.kode
							WHERE p.erased = 0 AND p.periode_kode = '$periode'
							ORDER BY p.nama, pr.singkatan")->result();

					$this->smarty->assign('sql',$sql);	
					$this->smarty->assign('jlr',$jlr);						
					$this->smarty->display('admisi/kontenPembayaranParalel.html');
				break;
				case '01':
					$sql = $this->db2->query("SELECT p.*, pr.singkatan as prodi
						FROM adis_pembayaran p
						LEFT JOIN adis_prodi pr ON p.prodiTipe = pr.kode
						WHERE p.erased = 0 AND p.pembayaran = 1 
						AND p.jalur = '$jalur' AND p.periode_kode = '$periode' "
                                                . "ORDER BY kode")->result();
					$sql2 = $this->db2->query("SELECT p.*, p.kode as code, pr.singkatan as prodi, c.*
						FROM adis_pembayaran p
						LEFT JOIN adis_prodi pr ON p.prodiTipe = pr.kode
						LEFT JOIN adis_cicilan c ON c.id_pembayaran = p.kode AND p.periode_kode = c.periode_kode 
						WHERE p.erased = 0 AND p.pembayaran = 69
						AND p.jalur = '$jalur' AND p.periode_kode = '$periode' "
                                                . "ORDER BY p.kode")->result();	
						
						$this->smarty->assign('sql',$sql);				
						$this->smarty->assign('sql2',$sql2);
						$this->smarty->assign('jlr',$jlr);
						
						$this->smarty->display('master/kontenPembayaran.html');
				break;

			}
			
					
		
		}else if($uri == 'detil' && $uri2 != ''){
                    $kodeVal = strstr($uri2, '-', TRUE);
                    $periode = substr($uri2, strpos($uri2, "-") + 1);     
                    
                    $qry = "SELECT p.*, pr.singkatan as alias_prodi, pr.nama as prodi, p.kode as code
				FROM adis_pembayaran_kelasmalam p
				LEFT JOIN adis_prodi pr ON p.prodiTipe = pr.kode
				WHERE p.kode = '$kodeVal' AND p.periode_kode = '$periode'";
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
                            . " WHERE kode_pembayaran = '$kodeVal' AND kode_periode = '$periode';")->row_array();
                    $arrTglTempo = json_decode($sqlTglTempo['tgl_jatuh_tempo']);
                    
                    $this->smarty->assign('resTglTempo', $arrTglTempo);
                    
//                    print_r($arrTglTempo);exit;
                    
                    $response[] = $arry;
                    $this->smarty->assign('sql', $response);
                    $this->smarty->assign('pilih', $arryPil);
                    $site = "BiayaKelasMalam";
                    $this->smarty->assign('site',$site);	
                    $this->smarty->assign('lokasi',"Detail Biaya Kelas Malam");
                    $this->smarty->display('index.html');
                }
                else{
		
			$sql = $this->db2->query("SELECT * FROM adis_pembayaran WHERE erased = 0 AND pembayaran = 1 ORDER BY kode")->result();
			$sql2 = $this->db2->query("SELECT * FROM adis_pembayaran WHERE erased = 0 AND pembayaran = 69 ORDER BY kode")->result();
			
			$site = "Pembayaran";
			$this->smarty->assign('site',$site);			
			$this->smarty->assign('sql',$sql);				
			$this->smarty->assign('sql2',$sql2);
			$this->smarty->assign('lokasi',"Master Uang Masuk");
			$this->smarty->display('index.html');
		}
	}
	
	function settingUMS2(){
            $uri = $this->uri->segment(3);            
            $opt = $this->input->post('opt');   
            $kodePembayaran = $this->input->post("val");
                
            $periode = "SELECT * FROM adis_periode_master WHERE erased = 0 AND jenjangType = '2' ORDER BY kode DESC";
            $periode = $this->db2->query($periode)->result();
            $this->smarty->assign('periode', $periode);
            
            $prodi = $this->db2->query("SELECT * FROM adis_prodi WHERE jenjang = '2' AND erased = 0")->result_array();
            $this->smarty->assign('prodi',$prodi);
            
            if($uri == 'table'){
                $periode = $this->input->post('periode');
                
                $sql = $this->db2->query("SELECT p.*, pr.singkatan as prodi
                        FROM adis_pembayaran_s2 p
                        LEFT JOIN adis_prodi pr ON p.prodi = pr.kode
                        WHERE p.kodePeriode = '$periode' "
                        . "ORDER BY kode")->result();
				$this->smarty->assign('sql', $sql);				
                $this->smarty->display('admisi/kontenPembayaranS2.html');
                
            }else if ($uri == "add" && $opt == "save"){			
                $this->madmisi->mPembayaranS2("addNew");	
                redirect('/admisi/settingUMS2','refresh');
            }else if ($uri == "edit" && $kodePembayaran != ""){	
                $sql = $this->db2->query("SELECT p.*
                        FROM adis_pembayaran_s2 p
                        LEFT JOIN adis_prodi pr ON p.prodi = pr.kode
                        WHERE p.kode = '$kodePembayaran' ")->row_array();
				$this->smarty->assign('val', $sql);				
                $this->smarty->display('admisi/formEditPembayaranS2.html');
            }else if ($uri == "edit" && $opt == "save"){			
                $this->madmisi->mPembayaranS2("update");	
                redirect('/admisi/settingUMS2','refresh');
            }else{            
				$this->smarty->assign('submodul',"admisi");
				$sql = "SELECT * FROM adis_jalur_smb WHERE erased = 0";
				$sql = $this->db->query($sql)->result();
				
				$site = "SelectPeriodeS2";
				$this->smarty->assign('site',$site);			
				$this->smarty->assign('lokasi',"Master Uang Masuk");
				$this->smarty->assign('jalur', $sql);
				$this->smarty->display('index.html');
            }
	}
        
        function dueDate(){
            $uri = $this->uri->segment('3');
            $periode = $this->input->post('periode');
            $method = $this->input->post('opt');
            $kode = $this->input->post('val');
            
            $sql ="SELECT * FROM adis_periode_master WHERE status = 1 AND erased = 0";
            $sql = $this->db2->query($sql)->result();
            $this->smarty->assign('periode', $sql);
            
            if ($periode && $uri == ''){  
                $yeah = array();
                $response = array();
                
                $sel = "SELECT * FROM tbl_tgl_tempo_kelasmalam WHERE kode_periode = '$periode'";
                $sel = $this->db2->query($sel)->result_array();
                
                foreach($sel as $k => $val){
                    $yeah['kode'] = $val['kode'];
                    $yeah['tempo'] = $val['tempo'];
                    $yeah['tgl_jatuh_tempo'] = json_decode($val['tgl_jatuh_tempo']);
                    
                }
                $response[] = $yeah;
                $this->smarty->assign('data', $response);
                $this->smarty->display('admisi/tblDueDate.html');
                
            }else if ($method == 'add' && $uri == 'add'){
                $loop = $this->input->post('tmp');
                $arr = array();
                for($i = 1; $i <= $loop; $i++){
                    $arr[] = $this->input->post('tanggal-'.$i);
                }
                $json_tgl = json_encode($arr);
                $this->db2->insert('tbl_tgl_tempo_kelasmalam', array(
                    'kode_periode'=>$periode,
                    'tempo'=>$this->input->post('tempo'),
                    'tgl_jatuh_tempo'=>$json_tgl
                ));
                
                redirect('admisi/dueDate');
                
            }else if ($method == 'save' && $uri == 'edit'){
                $loop = $this->input->post('tmpE');
                $arr = array();
                
                for($i = 1; $i <= $loop; $i++){
                    $arr[] = $this->input->post('tanggal-'.$i);
                }
                
                $json_tgl = json_encode($arr);
                $this->db2->where('kode', $kode);
                $this->db2->update('tbl_tgl_tempo_kelasmalam', array(
                    'tempo'=>$this->input->post('tempo'),
                    'tgl_jatuh_tempo'=>$json_tgl
                ));
                
                redirect('admisi/dueDate');
                
            }else if($method == 'formEdit' && $uri == 'edit'){
                $yeah = array();
                $response = array();
                
                $sel = "SELECT * FROM tbl_tgl_tempo_kelasmalam WHERE kode = '$kode'";
                $sel = $this->db2->query($sel)->row_array();                
                
                $yeah['kode'] = $sel['kode'];
                $yeah['tempo'] = $sel['tempo'];
                $yeah['kode_periode'] = $sel['kode_periode'];
                $yeah['tgl_jatuh_tempo'] = json_decode($sel['tgl_jatuh_tempo']);
                    
                
                $response[] = $yeah;
                $this->smarty->assign('data',$yeah);                
                $this->smarty->display('admisi/formDueDate.html');
                
            }else{            
                $site = "Angsuran";
                $this->smarty->assign('site',$site);
                $this->smarty->assign('lokasi',"Tempo Angsuran");
                $this->smarty->display('index.html');
            }
        }
		
		function golonganParalel(){
            $uri = $this->uri->segment(3);
            $oper = $this->input->post('opt');
            $kode = $this->input->post('val');          
            

            $prodi = $this->db2->query("SELECT * FROM adis_prodi WHERE jenjang = '1' AND erased = 0")->result_array();
            $this->smarty->assign('prodi',$prodi);

            $golongan = $this->db2->query("SELECT * FROM tbl_gol_d3")->result_array();
            $this->smarty->assign('gol',$golongan);
            
            if ($uri == 'add' && $oper == 'post'){
                $this->db2->insert('tbl_sks_gol_d3', array(
                    'id_prodi'=>$this->input->post('prodi'),
                    'id_golongan'=>$this->input->post('golongan'),
                    'jumlah_sks'=>$this->input->post('sks'),
                    'total_sks'=>$this->input->post('totalSks'),
                    'jumlah_semester'=>$this->input->post('semester')
                ));
                
                redirect('/admisi/golonganParalel','refresh');
            }else if($uri == 'edit' && $oper == 'post')
            {
                $this->db2->where('id', $kode);
                $this->db2->update('tbl_sks_gol_d3', array(
                    'id_prodi'=>$this->input->post('prodi'),
                    'id_golongan'=>$this->input->post('golongan'),
                    'jumlah_sks'=>$this->input->post('sks'),
                    'total_sks'=>$this->input->post('totalSks'),
                    'jumlah_semester'=>$this->input->post('semester')
                ));
                redirect('/admisi/golonganParalel','refresh');
            }else if ($oper == 'edit' && $kode != '')
            {
                $sql= "SELECT A.*, B.singkatan, B.nama as prodi, C.id as id_gol, B.kode as id_prodi,"
                        . " C.golongan_d3 FROM tbl_sks_gol_d3 A "
                        . "LEFT JOIN adis_prodi B ON A.id_prodi = B.kode "
                        . "LEFT JOIN tbl_gol_d3 C ON C.id = A.id_golongan "
                        . "WHERE A.id = '$kode' "
                        . "ORDER BY B.nama, C.golongan_d3";
                $sql = $this->db->query($sql)->row_array();	
                $this->smarty->assign('d_gol',$sql);	
                $this->smarty->display('admisi/formGolongan.html');
            }else{
            
                $sql= "SELECT A.*, B.singkatan,B.nama as prodi, C.id as id_gol, B.kode as id_prodi, "
                        . "C.golongan_d3 "
                        . "FROM tbl_sks_gol_d3 A "
                        . "LEFT JOIN adis_prodi B ON A.id_prodi = B.kode "
                        . "LEFT JOIN tbl_gol_d3 C ON C.id = A.id_golongan ORDER BY B.nama, C.golongan_d3";
                $sql = $this->db->query($sql)->result_array();

                $site = "Golongan";			
                $this->smarty->assign('sql',$sql);	
                $this->smarty->assign('site',$site);	
                $this->smarty->assign('lokasi',"Admisi");	
                $this->smarty->display('index.html');
            }
        }
	
}
