<?php /* Smarty version Smarty-3.1.14, created on 2017-08-03 12:32:59
         compiled from "application/views/cmb/tblMahasiswa.html" */ ?>
<?php /*%%SmartyHeaderCode:152303144355c826be4b0089-48561927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17bd0b81509ff8750047ea62f39a564ce166a0fb' => 
    array (
      0 => 'application/views/cmb/tblMahasiswa.html',
      1 => 1501738292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '152303144355c826be4b0089-48561927',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55c826be576b17_38739783',
  'variables' => 
  array (
    'sql' => 0,
    'row' => 0,
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c826be576b17_38739783')) {function content_55c826be576b17_38739783($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/admission/public_html/application/libraries/smarty/libs/plugins/modifier.date_format.php';
?><div class="portlet box blue">
    <div class="portlet-title">
    </div>
    <div class="portlet-body flip-scroll">
        <table class="table table-bordered table-striped table-condensed flip-content" id="sample_editable_1"> 
            <thead clas="flip-content" class="bg-default">
                <tr>
                    <th>NIM</th>
                    <th>NAMA MAHASISWA</th>
                    <th>PROGRAM STUDI</th>
                    <th>JALUR</th>
                    <th>TANGGAL LULUS</th>
                    <th>ACTION</th>
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
cmb/profil/<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
">
                            <div class="tile-body">				            
                                <img class="img-responsive" alt="" src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/upload/foto/<?php echo $_smarty_tpl->tpl_vars['row']->value->foto;?>
">
                            </div>
                            <div class="tile-object" style="background-color:#006895">
                                <div class="name"><?php echo $_smarty_tpl->tpl_vars['row']->value->nim;?>
</div>
                            </div>
                        </a>
                       </div>
                      </div>
                    <?php }else{ ?>						
						<!-- <a class="btn default" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cmb/profil/<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->nim;?>
</a> -->
							
                        <a class="accordion-toggle" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cmb/formulir/<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
">
                                <div class="panel-default">
                                        <div class="panel-heading">
                                                <h4 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['row']->value->nim;?>
</h4>
                                        </div>
                                </div>
                        </a>
                    <?php }?>


                    </td>
                    <td>
                    <a class="accordion-toggle" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cmb/formulir/<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
">
                        <div class="panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['row']->value->nama_cm;?>
</h4>
                            </div>
                        </div>
                    </a>
                    </td>
                    <td>
                        <div class="panel-info">
                            <div class="panel-heading">
                                    <h4 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['row']->value->prodi_sing;?>
</h4>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="panel-info">
                            <div class="panel-heading">
                                    <h4 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['row']->value->n_jalur;?>
</h4>
                            </div>
                        </div>
                    </td>
                    <td><div class="panel-info">
                            <div class="panel-heading">
                                    <h4 class="panel-title"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value->tanggal,"%e %b %Y");?>
</h4>
                            </div>
                        </div>
                    </td>
                    <td>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value->stsMundurAfterReapply=='1'){?>
                            <div class="panel-danger">
                                      <div class="panel-heading">
                                             <h4 class="panel-title">
                                                    Mengundurkan Diri
                                             </h4>
                                      </div>
                            </div>
                    <?php }else{ ?>
                        <a class="md btn blue" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
smb/mundurDiri/<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
/mundur/cmb"> Undur Diri</a>
                    <?php }?>
                        <a class="hapus btn red" href="#" id="" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" onclick="deleteMhs('del','<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
')"> Hapus </a>
                    </td>
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
    if (confirm("Apakah Anda Ingin Menghapus Mahasiswa Ini?")) { 
        $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cmb/deleteMhs", {
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
    }
}
//$(".hapus_"+{$row->no_smb}).click(function (){
//    if (confirm("Apakah Anda Ingin Menghapus Mahasiswa Ini?")) { 
//        $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cmb/deleteMhs", {
//            'id': $(this).attr('value'),
//            'method': 'del'
//        }, function(resp) {
//        if (resp == 1){
//            alert("Mahasiswa Berhasil Dihapus.");
//            location.reload();
//        }else{
//            alert(resp);
//        }
//    });
//    }
//});

</script>
<?php }} ?>