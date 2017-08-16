<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Keuangan extends CUTI_Controller {
	function __construct(){
		parent::__construct();	
		//setlocale (LC_TIME, 'id_ID');
		setlocale (LC_TIME, 'INDONESIA');
		$this->auth = unserialize(base64_decode($this->session->userdata('cuti_parmad')));
		$this->host	= $this->config->item('base_url');
		
		if(! $this->auth) {header("Location: " . $this->host);}	
		
		$this->db2 = $this->load->database('second', TRUE); 
		
		$modul = "keuangan/";
		$this->smarty->assign('modul',$modul);
		$this->smarty->assign('host',$this->host);
		$this->load->model('madmisi');
		$this->db2->query("SET lc_time_names = 'id_ID'");
		
		$nama = $this->auth['name'];
		$this->smarty->assign('nama',$nama);
		
	}
	
	function tag_paralel($p1 = '', $p2= ''){
		$post = $this->input->post();
		switch ($p1){
			case "select":		
				$site = "Select";	
				$lokasi = "keuangan";
				$pages = "kontenGenTagihan";	
				
				$periode ="SELECT * FROM adis_periode_master WHERE erased = 0  AND jenjangType = 1
					ORDER by kode DESC";
				$periode = $this->db2->query($periode)->result();
				$this->smarty->assign('periode',$periode);
				
				$prodi = $this->db2->query("SELECT * FROM adis_prodi WHERE erased = 0 AND jenjang = 1;")->result();
				$this->smarty->assign('prodi',$prodi);	
				
			break;
			case "table":
				$whereProdi = "";
				if($post['prodi'] != 'all'){
					$whereProdi = " AND RIGHT(A.bukaSmb, 4) = '".$post['prodi']."' ";
				}
				$sqlMhs = "SELECT A.bukaSmb, A.kode, A.nim, F.nama as nama, C.nama as prodi, 
						D.noTagihanParalel, E.lulus_acc
						FROM `adis_smb_form` A
						LEFT JOIN adis_smb_usr B ON A.kode = B.kode
						LEFT JOIN adis_prodi C ON C.kode = RIGHT(A.bukaSmb, 4)
						LEFT JOIN adis_smb_usr_keu D ON D.smbUsr = A.kode
						LEFT JOIN adis_smb_usr_edu E ON E.smbUsr = A.kode 
						LEFT JOIN adis_smb_usr_pribadi F ON F.kode = A.kode
						WHERE LEFT(A.bukaSmb, 8)='".$post['periode']."' $whereProdi
						AND (A.nim != '' AND SUBSTR(A.bukaSmb, 12, 2) = 'KP');";
				$sqlMhs = $this->db->query($sqlMhs)->result_array();
				$this->smarty->assign('mhs', $sqlMhs);
				
				$this->smarty->display('keuangan/kontenGenTagihan.html');
			break;
			case 'detil':
				$this->load->model('mportal');
				
				$kode = $post['kode'];
				$sqlPar = "SELECT A.bukaSmb, A.kode, A.nim, E.nama as nama, C.nama as prodi, D.noTagihanParalel,
					D.metodBayarDaftarUlang, A.reapplyBankTransferAmount, LEFT(A.bukaSmb, 8) as periode
					FROM `adis_smb_form` A
					LEFT JOIN adis_smb_usr B ON A.kode = B.kode
					LEFT JOIN adis_prodi C ON C.kode = RIGHT(A.bukaSmb, 4)
					LEFT JOIN adis_smb_usr_keu D ON D.smbUsr = A.kode
					LEFT JOIN adis_smb_usr_pribadi E ON E.kode = A.kode
					WHERE A.kode = '$kode'";
				$sqlPar = $this->db2->query($sqlPar)->row_array();
				
				$jsonTag = json_decode($sqlPar['noTagihanParalel']);
				$this->mportal->listAngsuran($sqlPar['reapplyBankTransferAmount'], $sqlPar['metodBayarDaftarUlang'], $sqlPar['periode']);
				
				$this->smarty->assign('tagSls', count($jsonTag)-1);
				$this->smarty->assign('sqlPar', $sqlPar);
				// echo "<pre>";
				// print_r($jsonTag);exit;
				$this->smarty->display('keuangan/listAngsuran.html');
				// foreach($jsonTag as $k=>$v){
					
				// }
			break;
			case "periode":
				$periode ="SELECT * FROM adis_periode_master WHERE erased = 0 AND jenjangType = 1 ORDER by kode DESC";
				$periode = $this->db2->query($periode)->result();
				$this->smarty->assign('periode',$periode);
				$this->smarty->assign('kode',$post['kode']);
				$this->smarty->display('keuangan/periodeGenerate.html');
			break;
			case 'angsuran':
				$angsuran = $this->generateTagParalel($post['kode'], $post['periode'], 'view');
				
				$periode ="SELECT * FROM adis_periode_master WHERE kode='".$post['periode']."' ";
				$periode = $this->db2->query($periode)->row_array();
				
				$view = '<label>Tanggal Periode : <b>{$periode.tanggalMulai|date_format:"%d-%m-%Y"} s/d {$periode.tanggalSelesai|date_format:"%d-%m-%Y"}</b></label>
						{if isset($biaya)}
						{foreach from=$biaya item=row}
						<table class="table table-bordered  table-advance ">
							<thead>
								<tr>
									<th>No.</th>
									<th>Periode</th>
									<th>Biaya</th>
									<th>Tanggal</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										{foreach from=$row.tagihanPeriode item=v key=k}
											{$k+1}<br>
										{/foreach}
									</td>
									<td>
										{foreach from=$row.tagihanPeriode item=v}
											{$v}<br>
										{/foreach}
									</td>
									<td>
										{foreach from=$row.nominalCicilan item=v}
											{$v|number_format:0:",":"."}<br>
										{/foreach}
									</td>
									<td>
										{foreach from=$row.tglJatuhTempo  item=v}
											{$v|date_format:"%d-%m-%Y"}<br>
										{/foreach}
									</td>

								</tr>
							</tbody>
						</table>
						{/foreach}
						{else}
							<br>
							<h4 class="alert">Setting tagihan belum tersedia</h4>
						{/if}';
				
				$this->smarty->assign('periode', $periode);
				$this->smarty->assign('biaya', $angsuran);
				$this->smarty->display('string:'.$view);
			break;
			case "generate":
				$angsuran = $this->generateTagParalel($post['kode'], $post['periode'], 'integrasi');
				if($angsuran == 201){
					echo 1;
				}else{					
					echo $angsuran." - Tagihan angsuran paralel gagal di generate, silahkan coba lagi atau hubungi Admin!";
				}
			break;
		}
		
		if ($p2 == ''){
			
			$this->smarty->assign('modul',"keuangan/");
			$this->smarty->assign('lokasi',$lokasi);
			$this->smarty->assign('pages',$pages);
			$this->smarty->assign('site',$site);
			$this->smarty->display('index.html');
		}
	}
	
	function generateTagParalel($kode = '', $periode = '', $method = ''){    
		$this->load->model('mintegrasi');

		$host_asik = "https://asik.paramadina.ac.id/gt/cloning/gtpembayaran/";
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
			WHERE (tahun >= '$tahun' AND jenjangType = 1) AND kode = '$periode';";
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
		$data = null;
		if(isset($arryPeriode)){
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
		}
//		
	   // echo "<pre>";
	   // print_r($data);exit;
	   
	   switch ($method){
		   case 'view':
				return $data;
		   break;
		   case 'integrasi':
				
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
					$tagMhs = $this->db2->query("SELECT noTagihanParalel FROM adis_smb_usr_keu WHERE smbUsr = '$kode'; ")->row_array();
					$tagParalel = json_decode($tagMhs['noTagihanParalel']);
					$tagNew = array_merge($tagParalel, $notagihantemp);
					
					$jsonTagihan = json_encode($tagNew);
					
					$this->db2->query("UPDATE adis_smb_usr_keu "
						. " SET noTagihanParalel = '$jsonTagihan' "
						. " WHERE smbUsr='$kode';");      
				}else{
					print_r($curl_response); 
					echo "\n\n\n";
				}          

				$step = "gen_tagihan";                
				$this->mintegrasi->status_integrasi($kode, $status, $step);
				$this->mintegrasi->log_asik_resp($kode, "Generate Tagihan : ".$curl_response." Parameter : ".$curl_post_data);

				if ($status == '419'){$this->mintegrasi->sendMail($step, $kode, $curl_response);}

				return $status;
		   break;
	   }
	
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */