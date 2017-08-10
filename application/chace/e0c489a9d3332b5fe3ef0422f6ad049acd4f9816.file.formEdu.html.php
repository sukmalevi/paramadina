<?php /* Smarty version Smarty-3.1.14, created on 2017-03-29 08:23:05
         compiled from "application/views/portal/formEdu.html" */ ?>
<?php /*%%SmartyHeaderCode:868310970535625d68e3242-69515593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0c489a9d3332b5fe3ef0422f6ad049acd4f9816' => 
    array (
      0 => 'application/views/portal/formEdu.html',
      1 => 1490238826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '868310970535625d68e3242-69515593',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_535625d69c4881_29715517',
  'variables' => 
  array (
    'host' => 0,
    'eduList' => 0,
    'row' => 0,
    'kode' => 0,
    'eduData' => 0,
    'eduSMA' => 0,
    'wil' => 0,
    'cmb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535625d69c4881_29715517')) {function content_535625d69c4881_29715517($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/formulir/pendidikan/add" class="formPendidikan form-horizontal" method="post" enctype="multipart/form-data">
    <div class="form-body" style="background-color: #F7F7F7;">
        <h3 class="form-section text-primary" style="margin-bottom: 15px; margin-left: 50px;margin-top: 12px;">Riwayat Pendidikan
        </h3>
        <div class="tblPendidikan tab-pane row" style="margin: 0 10px;">
            <!-- Table untuk menampilkan keluarga -->
            <div class="col-md-12">
				<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
					<thead>
						<tr>
							<th>NISN/NIM</th>
							<th>Jenjang</th>
							<th>Asal Sekolah/PT</th>
							<th>Tahun Lulus</th>
							<th>Jurusan/Prodi</th>
							<th>Nilai UN/IPK</th>
							<th>Hapus</th>
						</tr>
					</thead>
					<tbody>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eduList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<tr>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value->nisn_nim;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value->sekolahNama;?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->sekolahTipe;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value->sekolah;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value->tahunLulus;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value->jurusan;?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value->nilai;?>
</td>
							<td><a class="delete" data-toggle="modal" href="#verifikasi" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kodeEdu;?>
" name="delete">Delete</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
            </div>
        </div>
		<hr>
        <div id="formEd col-md-12">
            <div class="row col-md-12">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3" style="text-align:left;">Asal Sekolah/PT
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <input name="kode" value="<?php echo $_smarty_tpl->tpl_vars['kode']->value;?>
" hidden>
                            <input name="id" value="tambah" hidden>
                            <input type="text" class="form-control" name="namaSekolah" id="nama" value="<?php echo $_smarty_tpl->tpl_vars['eduData']->value->sekolah;?>
" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3" style="text-align:left;">Jurusan/Prodi
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="jurusan" value="<?php echo $_smarty_tpl->tpl_vars['eduData']->value->jurusan;?>
" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row col-md-12">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3" style="text-align:left;">NISN/NIM
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nisn" value="<?php echo $_smarty_tpl->tpl_vars['eduData']->value->nisn_nim;?>
" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3" style="text-align:left;">Tahun Lulus
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="tahunLulus" value="<?php echo $_smarty_tpl->tpl_vars['eduData']->value->tahunLulus;?>
" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row col-md-12">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3" style="text-align:left;">Jenis Pendidikan
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <select class="form-control" name="pendType" id="pendType" required>
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eduSMA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                                <?php } ?>
                            </select>
                            <br>
                            <input type="radio" name="sekType" value="09.1" required> Negeri
                            <br>
                            <input type="radio" name="sekType" value="09.2" required> Swasta
                        </div> 
                    </div>    
				</div>
                <div class="col-md-6">     
                    <div class="form-group">
                        <label class="control-label col-md-3" style="text-align:left;">Nilai UN/IPK
                            <span class="required">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nilai" required>
                        </div>
                    </div>
                </div>  
			</div>
			<div class="row col-md-12"><div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label col-md-3" style="text-align:left;">Propinsi
                        </label>
                        <div class="col-md-9">
                            <select class="form-control" name="prop" id="prop">
                                <option value="">--Pilih Propinsi--</option>
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wil']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->kode;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama;?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" style="text-align:left;">Kabupaten/Kota
                        </label>
                        <div class="col-md-9">
                            <select class="form-control" name="kab" id="kab">
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" style="text-align:left;">Kabupaten/Kota
                        </label>
                        <div class="col-md-9">
                            <select class="form-control" name="kpos" id="kpos">
                            </select>
                        </div>
                    </div>
                </div>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['cmb']->value->jalur=='JP'){?>
			<hr>
			<div class="row col-md-12">
				<div class="col-md-12">
					<h5>Referensi Guru</h5>
					<div class="form-group">
						<label class="control-label col-md-2" style="text-align:left;">Nama guru
							<span class="required">*</span>
						</label>
						<div class="col-md-5">
							<input type="text" class="form-control" name="guru" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2" style="text-align:left;">Jabatan guru
							<span class="required">*</span>
						</label>
						<div class="col-md-5">
							<input type="text" class="form-control" name="jabatan" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2" style="text-align:left;">No HP/Telp
							<span class="required">*</span>
						</label>
						<div class="col-md-5">
							<input type="text" class="form-control" name="hp" required>
						</div>
					</div> 
				</div>
            </div>
			<hr>
			<div class="row col-md-12">		
				<div class="col-md-12">
					<h5>Dokumen pendukung</h5>
					
					<div class="panel panel-info">
					  <div class="panel-heading">
						 <h3 class="panel-title">Catatan upload dokumen</h3>
					  </div>
					  <div class="panel-body">
						 <ul>
							<li>Ukuran file yang diizinkan adalah maksimal <strong>5 MB</strong>.</li>
							<li>Tipe file yang diizinkan (<strong>JPG, GIF, PNG, JPEG, PDF</strong>).</li>
							<li>Ijazah diwajibkan bagi Anda yang sudah lulus setahun sebelumnya.</li>
							<li>Rapor yang diupload adalah rapor selama kelas 1 sampai kelas 3 SMA.</li>
							<li>Berkas diatas dibutuhkan untuk tahapan seleksi berkas jalur prestasi, harap Anda mencantumkan dengan format yang diminta.</li>
						 </ul>
					  </div>
					</div>
					<div class="form-group">
						  <label class="control-label col-md-2" style="text-align:left;">Upload Ijazah</label>
						  <div class="col-md-9">
							 <div class="fileupload fileupload-new" data-provides="fileupload">
								<div class="input-group">
								   <span class="input-group-btn">
								   <span class="uneditable-input">
								   <i class="icon-file fileupload-exists"></i> 
								   <span class="fileupload-preview"></span>
								   </span>
								   </span>
								   <span class="btn default btn-file">
								   <span class="fileupload-new"><i class="icon-paper-clip"></i> Pilih file</span>
								   <span class="fileupload-exists"><i class="icon-undo"></i></span>
								   <input name="ijazah" type="file" class="default" />
								   </span>
								   <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i></a>
								</div>
							 </div>
						  </div>
					</div>			
					<div class="form-group">
					  <label class="control-label col-md-2" style="text-align:left;">Rapor 1
					  <span class="required">*</span></label>
					  <div class="col-md-9">
						 <div class="fileupload fileupload-new" data-provides="fileupload">
							<div class="input-group">
							   <span class="input-group-btn">
							   <span class="uneditable-input">
							   <i class="icon-file fileupload-exists"></i> 
							   <span class="fileupload-preview"></span>
							   </span>
							   </span>
							   <span class="btn default btn-file">
							   <span class="fileupload-new"><i class="icon-paper-clip"></i> Pilih file</span>
							   <span class="fileupload-exists"><i class="icon-undo"></i></span>
							   <input name="rapor1" type="file" class="default" required/>
							   </span>
							   <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i></a>
							</div>
						 </div>
					  </div>
					</div>		
					<div class="form-group">
					  <label class="control-label col-md-2" style="text-align:left;">Rapor 2</label>
					  <div class="col-md-9">
						 <div class="fileupload fileupload-new" data-provides="fileupload">
							<div class="input-group">
							   <span class="input-group-btn">
							   <span class="uneditable-input">
							   <i class="icon-file fileupload-exists"></i> 
							   <span class="fileupload-preview"></span>
							   </span>
							   </span>
							   <span class="btn default btn-file">
							   <span class="fileupload-new"><i class="icon-paper-clip"></i> Pilih file</span>
							   <span class="fileupload-exists"><i class="icon-undo"></i></span>
							   <input name="rapor2" type="file" class="default" />
							   </span>
							   <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i></a>
							</div>
						 </div>
						 
					  </div>
					</div>		
					   <div class="form-group">
						  <label class="control-label col-md-2" style="text-align:left;">Rapor 3</label>
						  <div class="col-md-9">
							 <div class="fileupload fileupload-new" data-provides="fileupload">
								<div class="input-group">
								   <span class="input-group-btn">
								   <span class="uneditable-input">
								   <i class="icon-file fileupload-exists"></i> 
								   <span class="fileupload-preview"></span>
								   </span>
								   </span>
								   <span class="btn default btn-file">
								   <span class="fileupload-new"><i class="icon-paper-clip"></i> Pilih file</span>
								   <span class="fileupload-exists"><i class="icon-undo"></i></span>
								   <input name="rapor3" type="file" class="default" />
								   </span>
								   <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i></a>
								</div>
							 </div>
							 
						  </div>
					   </div>	
					   <div class="form-group">
						  <label class="control-label col-md-2" style="text-align:left;">Rapor 4</label>
						  <div class="col-md-9">
							 <div class="fileupload fileupload-new" data-provides="fileupload">
								<div class="input-group">
								   <span class="input-group-btn">
								   <span class="uneditable-input">
								   <i class="icon-file fileupload-exists"></i> 
								   <span class="fileupload-preview"></span>
								   </span>
								   </span>
								   <span class="btn default btn-file">
								   <span class="fileupload-new"><i class="icon-paper-clip"></i> Pilih file</span>
								   <span class="fileupload-exists"><i class="icon-undo"></i></span>
								   <input name="rapor4" type="file" class="default" />
								   </span>
								   <a href="#" class="btn red fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i></a>
								</div>
							 </div>
							 
						  </div>
				   </div>
				 </div>
			</div>
			<?php }?>
        </div>
		<hr>
    </div>
	<div class="form-actions fluid">
		<button type="submit" class="tambah btn blue">Simpan <i class="icon-ok"></i></button>
	</div>
</form>

<script>

jQuery(document).ready(function() {	
	FormComponents.init();
	Index.initCalendar();
	var statusEdu = "<?php echo $_smarty_tpl->tpl_vars['cmb']->value->statusPend;?>
";
	if (statusEdu == 0){
		toastr.info('Silahkan Perbaharui riwayat Pendidikan Anda');
	}
});



$("#prop").change(function(){
    kabkota();
	kodepos();
});

$("#kab").change(function(){
    
	kodepos();
});

function kabkota(){
	$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/selectKabKota",{
					'propinsi':$('#prop').val()				
				},function(resp){
                $('select#kab').html(resp);
            });
	
	kodepos();
}



function kodepos(){
	$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/selectKodePos",{
					'kabkota':$('#kab').val()				
				},function(resp){
                $('select#kpos').html(resp);
            });
}


</script><?php }} ?>