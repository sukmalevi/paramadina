<?php /* Smarty version Smarty-3.1.14, created on 2016-03-31 08:20:47
         compiled from "application/views/smb/tblCalonPeserta.html" */ ?>
<?php /*%%SmartyHeaderCode:13233248635356257edd8d40-09691954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ec52493967409c7866c760e339a9ba857f910cf' => 
    array (
      0 => 'application/views/smb/tblCalonPeserta.html',
      1 => 1459387186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13233248635356257edd8d40-09691954',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5356257eeb0c39_09772907',
  'variables' => 
  array (
    'host' => 0,
    'periode' => 0,
    'sql' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5356257eeb0c39_09772907')) {function content_5356257eeb0c39_09772907($_smarty_tpl) {?><div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption"><i class="icon-list"></i> DAFTAR PESERTA CALON MAHASISWA BARU</div>
        <div class="tools">
            <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/exportToExcel/calonSmb/<?php echo $_smarty_tpl->tpl_vars['periode']->value;?>
" class="btn default btn-xs black" style="margin-bottom: 12px;"><i class="icon-download-alt"></i></a>
            <a href="javascript:;" class="collapse"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
        </div>
    </div>
    <div class="portlet-body flip-scroll">
        <table class="table table-bordered table-striped table-condensed flip-content" id="sample_editable_1"> 
            <thead clas="flip-content">
                <tr>
                    <th>NO. PENDAFTARAN</th>
                    <th>NAMA CMB</th>
                    <th>PRODI</th>
                    <th>JALUR</th>
                    <th>TANGGAL DAFTAR</th>
                    <th>STATUS</th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sql']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                <tr>
                    <td>
                     <?php if ($_smarty_tpl->tpl_vars['row']->value->foto!=''){?>	
                    	<div class="tiles">
                            <div class="tile image">
                                <a  style="color:black" class="accordion-toggle" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/profil/<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
">
                                <div class="tile-body">				            
                                    <img class="img-responsive" alt="" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/upload/foto/<?php echo $_smarty_tpl->tpl_vars['row']->value->foto;?>
">
                                </div>
                                <div class="tile-object" style="background-color:#006895">
                                    <div class="name"><?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
</div>
                                </div>
                                </a>
                            </div>
                        </div>
                    <?php }else{ ?>
                    	<div class="panel-success">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a  style="color:black" class="accordion-toggle" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/profil/<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
</a>
                                </h4>
                            </div>
                        </div>
                    <?php }?>
                    </td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/formulir/<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
">
                            <h4 ><?php echo $_smarty_tpl->tpl_vars['row']->value->nama_cm;?>
</h4>
                        </a> 
                        <a  class="btn red"  href="#" onclick="deleteMhs('del','<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
')">DELETE CMB</a>
                    </td>
                    <td><h4 ><?php echo $_smarty_tpl->tpl_vars['row']->value->progdi_inisial;?>
</h4></td>
                    <td><h4><?php echo $_smarty_tpl->tpl_vars['row']->value->n_jalur;?>
</h4></td>
                    <td><h4 ><?php echo $_smarty_tpl->tpl_vars['row']->value->hari;?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value->tanggal;?>
</h4></td>
                    <td>
                        <table>
                            <?php if ($_smarty_tpl->tpl_vars['row']->value->stsMundurBeforeReapply=='0'){?> <?php if ($_smarty_tpl->tpl_vars['row']->value->stsMundurAfterReapply=='1'){?>
                            <tr>
                                <td>
                                    <span class="label label-sm label-danger label">Mundur sesudah Daftar Ulang</span>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <?php }else{ ?>
                    <tr>
                        <td>Mendaftar</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['row']->value->stsApplyPaid=='0'){?>

                            <span class="label label-sm label-danger label-mini"><i class="icon-remove-sign"></i></span>
                            <?php }else{ ?>
                            <span class="label label-sm label-success label-mini"><i class="icon-ok-sign"></i></span>
                            <?php }?>
                        </td>
                    </tr>
                    <tr>
                        <td>Melengkapi Form Pendaftaran</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['row']->value->stsApplyPaidConfirm=='0'){?>
                            <span class="label label-sm label-danger label-mini"><i class="icon-remove-sign"></i></span>
                            <?php }else{ ?>
                            <span class="label label-sm label-success label-mini"><i class="icon-ok-sign"></i></span>
                            <?php }?></td>
                    </tr>
                    <tr>
                        <td>Memilih Jadwal Seleksi</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['row']->value->stsEventConfirm=='0'){?>
                            <span class="label label-sm label-danger label-mini"><i class="icon-remove-sign"></i></span>
                            <?php }else{ ?>
                            <span class="label label-sm label-success label-mini"><i class="icon-ok-sign"></i></span>
                            <?php }?></td>
                    </tr>
                    <tr>
                        <td>Mengikuti Seleksi</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['row']->value->stsEventUsmPresent=='0'){?>
                            <span class="label label-sm label-danger label-mini"><i class="icon-remove-sign"></i></span>
                            <?php }else{ ?>
                            <span class="label label-sm label-success label-mini"><i class="icon-ok-sign"></i></span>
                            <?php }?></td>
                    </tr>
                    <tr>
                        <td>Menerima Hasil Seleksi</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['row']->value->stsResultConfirm=='0'){?>
                            <span class="label label-sm label-danger label-mini"><i class="icon-remove-sign"></i></span>
                            <?php }else{ ?>
                            <span class="label label-sm label-success label-mini"><i class="icon-ok-sign"></i></span>
                            <?php }?></td>
                    </tr>
                    <tr>
                        <td>Membayar Biaya Daftar Ulang</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['row']->value->stsReapplyPaid=='0'){?>
                            <span class="label label-sm label-danger label-mini"><i class="icon-remove-sign"></i></span>
                            <?php }else{ ?>
                            <span class="label label-sm label-success label-mini"><i class="icon-ok-sign"></i></span>
                            <?php }?></td>
                    </tr>
                    <tr>
                        <td>Menunggu dan mendapat NIM</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['row']->value->stsReapplyPaidConfirm=='0'){?>
                            <span class="label label-sm label-danger label-mini"><i class="icon-remove-sign"></i></span>
                            <?php }else{ ?>
                            <span class="label label-sm label-success label-mini"><i class="icon-ok-sign"></i></span>
                            <?php }?></td>
                    </tr>
                    <?php }?> <?php }else{ ?>
                    <tr>
                        <td>
                            <span class="label label-sm label-danger label">Mundur sebelum Daftar Ulang</span>
                        </td>
                        </td>
                        <?php }?>
                        </table>
                        </td>
                    </tr>
                    <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<script>
jQuery(document).ready(function() {
    TableEditable.init();
}); 

function deleteMhs(method, p1){
    if (confirm("Apakah Anda Ingin Menghapus Calon Mahasiswa Ini?")) { 
        $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/deleteMhs", {
            'id': p1,
            'method': method
        }, function(resp) {
        if (resp == 1){
            alert("Mahasiswa Berhasil Dihapus.");
            location.reload();
        }else{
            alert(resp);
        }
    });
    }else{
        return true;
    }
}

</script>
<?php }} ?>