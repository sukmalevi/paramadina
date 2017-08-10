<?php /* Smarty version Smarty-3.1.14, created on 2016-04-27 08:36:53
         compiled from "application/views/smb/formPenilaian.html" */ ?>
<?php /*%%SmartyHeaderCode:5429692165360804aa05417-25779914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ad26713243d6138b69efacaf6a37b2846a3f866' => 
    array (
      0 => 'application/views/smb/formPenilaian.html',
      1 => 1461681131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5429692165360804aa05417-25779914',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5360804abdb982_17169316',
  'variables' => 
  array (
    'hasil' => 0,
    'opt' => 0,
    'hadirUjian' => 0,
    'hadirWwc' => 0,
    'hasilAkhir' => 0,
    'lulusAcc' => 0,
    'golD3' => 0,
    'earlyBird' => 0,
    'alumni' => 0,
    'kelcivitas' => 0,
    'keldlb' => 0,
    'recomended' => 0,
    'lulusTidak' => 0,
    'host' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5360804abdb982_17169316')) {function content_5360804abdb982_17169316($_smarty_tpl) {?><div class="portlet-body form">
    <form class="formSeleksi form-horizontal" role="form" method="post" action="#">
    	<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['hasil']->value->kode_smb;?>
" name="kode" hidden>
        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['hasil']->value->kode_jalur;?>
" name="kode_jalur" hidden>
        <div class="form-body">
            <div class="form-group">
                <label class="col-md-3">Hadi TPA</label>
                <div class="col-md-9">
                    <div class="radio-list">
                        <?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
                            <label class="radio-inline">
                                <input type="radio" name="tpaAda" id="tpaAda" value="1" <?php if ($_smarty_tpl->tpl_vars['hadirUjian']->value=='1'){?>checked<?php }?> disabled>Hadir
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="tpaAda" id="tpaAda" value="0" <?php if ($_smarty_tpl->tpl_vars['hadirUjian']->value=='0'){?>checked<?php }?> disabled>Tidak Hadir 
                            </label>
                        <?php }else{ ?>
                            <label class="radio-inline">
                                <input type="radio" name="tpaAda" id="tpaAda" value="1" <?php if ($_smarty_tpl->tpl_vars['hadirUjian']->value=='1'){?>checked<?php }?>>Hadir
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="tpaAda" id="tpaAda" value="0" <?php if ($_smarty_tpl->tpl_vars['hadirUjian']->value=='0'){?>checked<?php }?>>Tidak Hadir
                            </label>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3">Hadir Wawancara</label>
                <div class="col-md-9">
                    <div class="radio-list">
                        <?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
                        <label class="radio-inline">
                            <input type="radio" name="wwAda" id="wwAda" value="1" <?php if ($_smarty_tpl->tpl_vars['hadirWwc']->value=='1'){?>checked<?php }?> disabled>Hadir
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="wwAda" id="wwAda" value="0" <?php if ($_smarty_tpl->tpl_vars['hadirWwc']->value=='0'){?>checked<?php }?> disabled>Tidak Hadir
                        </label>
                        <?php }else{ ?>
                        <label class="radio-inline">
                            <input type="radio" name="wwAda" id="wwAda" value="1" <?php if ($_smarty_tpl->tpl_vars['hadirWwc']->value=='1'){?>checked<?php }?>>Hadir
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="wwAda" id="wwAda" value="0" <?php if ($_smarty_tpl->tpl_vars['hadirWwc']->value=='0'){?>checked<?php }?>>Tidak Hadir
                        </label>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 ">Nilai TPA</label>
                <div class="col-md-9">
                    <?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
                    <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['hasil']->value->hasilUsm;?>
" disabled><?php }else{ ?>
                    <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['hasil']->value->hasilUsm;?>
" name="tpa"><?php }?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3">Nilai Wawancara</label>
                <div class="col-md-9">
                    <?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
                    <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['hasil']->value->hasilWwc;?>
" disabled><?php }else{ ?>
                    <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['hasil']->value->hasilWwc;?>
" name="wawancara">
                    <?php }?>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['hasil']->value->kode_jalur!='KP'){?>
            <div class="form-group">
                <label class="col-md-3">Grade</label>
                <div class="col-md-9">
                    <?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
                    <select class="form-control" disabled>
                        <option>-</option>
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['hasilAkhir']->value=='1'){?>selected<?php }?>>Ke-1</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['hasilAkhir']->value=='2'){?>selected<?php }?>>Ke-2</option>
                        <option value="3" <?php if ($_smarty_tpl->tpl_vars['hasilAkhir']->value=='3'){?>selected<?php }?>>Ke-3</option>
                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['hasilAkhir']->value=='0'){?>selected<?php }?>>Tidak Ada</option>
                    </select>
                    <?php }else{ ?>
                    <select class="form-control" name="grade">
                        <option>-</option>
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['hasilAkhir']->value=='1'){?>selected<?php }?>>Ke-1</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['hasilAkhir']->value=='2'){?>selected<?php }?>>Ke-2</option>
                        <option value="3" <?php if ($_smarty_tpl->tpl_vars['hasilAkhir']->value=='3'){?>selected<?php }?>>Ke-3</option>
                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['hasilAkhir']->value=='0'){?>selected<?php }?>>Tidak Ada</option>
                    </select>
                    <?php }?>
                </div>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['hasil']->value->kode_jalur=='02'){?>
            <div class="form-group">
                <label class="col-md-3">Jumlah SKS Diterima</label>
                <div class="col-md-9">
                    <?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
                    <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['hasil']->value->sks_acc;?>
" disabled><?php }else{ ?>
                    <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['hasil']->value->sks_acc;?>
" name="sks">
                    <?php }?>
                </div>
            </div>
            <?php }?>
            
            <?php if ($_smarty_tpl->tpl_vars['hasil']->value->kode_jalur=='KP'){?>
            <div class="form-group">
                <label class="col-md-3">Jenjang Pendidikan</label>
                <div class="col-md-9">
                    <div class="radio-list">
                        <?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
                        <label class="radio-inline">
                            <input type="radio" name="jenjang" id="jenjang" value="SMA" <?php if ($_smarty_tpl->tpl_vars['lulusAcc']->value=='SMA'){?>checked<?php }?> disabled>SMA
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="jenjang" id="jenjang" value="D3" <?php if ($_smarty_tpl->tpl_vars['lulusAcc']->value=='D3'){?>checked<?php }?> disabled>D3
                        </label>
                        <?php }else{ ?>
                        
                        <label class="radio-inline">
                            <input type="radio" name="jenjang" id="jenjang" value="SMA" <?php if ($_smarty_tpl->tpl_vars['lulusAcc']->value=='SMA'){?>checked<?php }?>>SMA
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="jenjang" id="jenjang" value="D3" <?php if ($_smarty_tpl->tpl_vars['lulusAcc']->value=='D3'){?>checked<?php }?>>D3
                        </label>
                        <?php }?>
                    </div>
                </div>
            </div>
            
<!--            <div class="form-group">
                <label class="col-md-3">Jenis Lulusan</label>
                <div class="col-md-9">
                    <?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
                    <select class="form-control" disabled>
                        <option>-</option>
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['golD3']->value=='1'){?>selected<?php }?>>D3 Sejenis</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['golD3']->value=='2'){?>selected<?php }?>>D3 Serumpun</option>
                        <option value="3" <?php if ($_smarty_tpl->tpl_vars['golD3']->value=='3'){?>selected<?php }?>>D3 Berbeda</option>
                        <option value="4" <?php if ($_smarty_tpl->tpl_vars['golD3']->value=='4'){?>selected<?php }?>>SMA</option>
                    </select>
                    <?php }else{ ?>
                    <select class="form-control" name="golonganD3">
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['golD3']->value=='1'){?>selected<?php }?>>D3 Sejenis</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['golD3']->value=='2'){?>selected<?php }?>>D3 Serumpun</option>
                        <option value="3" <?php if ($_smarty_tpl->tpl_vars['golD3']->value=='3'){?>selected<?php }?>>D3 Berbeda</option>
                        <option value="4" <?php if ($_smarty_tpl->tpl_vars['golD3']->value=='4'){?>selected<?php }?>>SMA</option>
                    </select>
                    <?php }?>
                </div>
            </div>-->
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['hasil']->value->kode_jalur=='10'){?>
            <div class="form-group">
                <label class="col-md-3"><i>Early Bird</i></label>
                <div class="col-md-9">
                    <div class="radio-list">
                        <?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
                        <label class="radio-inline">
                            <input type="radio" name="earlybird" id="earlybird" value="99" <?php if ($_smarty_tpl->tpl_vars['earlyBird']->value=='99'){?>checked<?php }?> disabled>Ya
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="earlybird" id="earlybird" value="0" <?php if ($_smarty_tpl->tpl_vars['earlyBird']->value=='0'){?>checked<?php }?> disabled>Tidak
                        </label>
                        <?php }else{ ?>
                        <label class="radio-inline">
                            <input type="radio" name="earlybird" id="earlybird" value="99" <?php if ($_smarty_tpl->tpl_vars['earlyBird']->value=='99'){?>checked<?php }?>>Ya
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="earlybird" id="earlybird" value="0" <?php if ($_smarty_tpl->tpl_vars['earlyBird']->value=='0'){?>checked<?php }?>>Tidak
                        </label>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3">Alumni S1 Paramadina</label>
                <div class="col-md-9">
                    <div class="radio-list">
                        <?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
                        <label class="radio-inline">
                            <input type="radio" name="alumni" id="jenjang" value="1" <?php if ($_smarty_tpl->tpl_vars['alumni']->value=='1'){?>checked<?php }?> disabled>Ya
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="alumni" id="jenjang" value="0" <?php if ($_smarty_tpl->tpl_vars['alumni']->value=='0'){?>checked<?php }?> disabled>Tidak
                        </label>
                        <?php }else{ ?>
                        
                        <label class="radio-inline">
                            <input type="radio" name="alumni" id="jenjang" value="1" <?php if ($_smarty_tpl->tpl_vars['alumni']->value=='1'){?>checked<?php }?>>Ya
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="alumni" id="jenjang" value="0" <?php if ($_smarty_tpl->tpl_vars['alumni']->value=='0'){?>checked<?php }?>>Tidak
                        </label>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3">Keluarga Inti Civitas Akademika</label>
                <div class="col-md-9">
                    <div class="radio-list">
                        <?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
                        <label class="radio-inline">
                            <input type="radio" name="kelcivitas" id="jenjang" value="1" <?php if ($_smarty_tpl->tpl_vars['kelcivitas']->value=='1'){?>checked<?php }?> disabled>Ya
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="kelcivitas" id="jenjang" value="0" <?php if ($_smarty_tpl->tpl_vars['kelcivitas']->value=='0'){?>checked<?php }?> disabled>Tidak
                        </label>
                        <?php }else{ ?>
                        
                        <label class="radio-inline">
                            <input type="radio" name="kelcivitas" id="jenjang" value="1" <?php if ($_smarty_tpl->tpl_vars['kelcivitas']->value=='1'){?>checked<?php }?>>Ya
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="kelcivitas" id="jenjang" value="0" <?php if ($_smarty_tpl->tpl_vars['kelcivitas']->value=='0'){?>checked<?php }?>>Tidak
                        </label>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3">Keluarga Inti DLB</label>
                <div class="col-md-9">
                    <div class="radio-list">
                        <?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
                        <label class="radio-inline">
                            <input type="radio" name="keldlb" id="jenjang" value="1" <?php if ($_smarty_tpl->tpl_vars['keldlb']->value=='1'){?>checked<?php }?> disabled>Ya
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="keldlb" id="jenjang" value="0" <?php if ($_smarty_tpl->tpl_vars['keldlb']->value=='0'){?>checked<?php }?> disabled>Tidak
                        </label>
                        <?php }else{ ?>
                        
                        <label class="radio-inline">
                            <input type="radio" name="keldlb" id="jenjang" value="1" <?php if ($_smarty_tpl->tpl_vars['keldlb']->value=='1'){?>checked<?php }?>>Ya
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="keldlb" id="jenjang" value="0" <?php if ($_smarty_tpl->tpl_vars['keldlb']->value=='0'){?>checked<?php }?>>Tidak
                        </label>
                        <?php }?>
                    </div>
                </div>
            </div>
            <?php }?>
            
            <div class="form-group">
                <label class="col-md-3">Recomended</label>
                <div class="col-md-9">
                    <div class="radio-list">
                        <?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
                        <label class="radio-inline">
                            <input type="radio" name="recoYa" id="recoYa" value="1" <?php if ($_smarty_tpl->tpl_vars['recomended']->value=='1'){?>checked<?php }?> disabled>Ya
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="recoYa" id="recoYa" value="0" <?php if ($_smarty_tpl->tpl_vars['recomended']->value=='0'){?>checked<?php }?> disabled>Tidak
                        </label>
                        <?php }else{ ?>
                        <label class="radio-inline">
                            <input type="radio" name="recoYa" id="recoYa" value="1" <?php if ($_smarty_tpl->tpl_vars['recomended']->value=='1'){?>checked<?php }?>>Ya
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="recoYa" id="recoYa" value="0" <?php if ($_smarty_tpl->tpl_vars['recomended']->value=='0'){?>checked<?php }?>>Tidak
                        </label>
                        <?php }?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3">Lulus</label>
                <div class="col-md-9">
                    <div class="radio-list">
                        <?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
                        <label class="radio-inline">
                            <input type="radio" name="luYa" id="luYa" value="1" <?php if ($_smarty_tpl->tpl_vars['lulusTidak']->value=='1'){?>checked<?php }?> disabled>Ya
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="luYa" id="luYa" value="0" <?php if ($_smarty_tpl->tpl_vars['lulusTidak']->value=='0'){?>checked<?php }?> disabled>Tidak
                        </label>
                        <?php }else{ ?>
                        <label class="radio-inline">
                            <input type="radio" name="luYa" id="luYa" value="1" <?php if ($_smarty_tpl->tpl_vars['lulusTidak']->value=='1'){?>checked<?php }?>>Ya
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="luYa" id="luYa" value="0" <?php if ($_smarty_tpl->tpl_vars['lulusTidak']->value=='0'){?>checked<?php }?>>Tidak
                        </label>
                        <?php }?>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-md-3">Keterangan</label>
                <div class="col-md-9">
                    <?php if ($_smarty_tpl->tpl_vars['opt']->value=="view"){?>
                    <textarea class="form-control" rows="2" disabled><?php echo $_smarty_tpl->tpl_vars['hasil']->value->ket;?>
</textarea>
                    <?php }else{ ?>
                    <textarea class="form-control" rows="2" name="ket"><?php echo $_smarty_tpl->tpl_vars['hasil']->value->ket;?>
</textarea>
                    <?php }?>
                </div>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['opt']->value!="view"){?>
        <div class="form-actions fluid">
            <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn green" id="postData">Submit</button>
                <!--<button type="cancel" class="btnHide btn default">Cancel</button>-->
            </div>
        </div>
        <?php }?>
    </form>
</div>

<script>

$(".formSeleksi").submit( function() {	
		$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/konfirmHasilSeleksi/save",$(this).serialize(),function(resp){
		val = "<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
";
			$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/smbSeleksiForm/form",{
				'val': val,
				'opt': "view"
					},function(resp){
					$('#formPenilaian'+val).html(resp);
				}); 
		});
		return false;
		
	});
	

</script><?php }} ?>