<?php /* Smarty version Smarty-3.1.14, created on 2016-09-02 14:08:05
         compiled from "application/views/cmb/tblCalonPeserta.html" */ ?>
<?php /*%%SmartyHeaderCode:187154579655c825f9b08e29-85274716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af4cff035d2de4a124453cd330a12db8db339829' => 
    array (
      0 => 'application/views/cmb/tblCalonPeserta.html',
      1 => 1472800067,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187154579655c825f9b08e29-85274716',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_55c825f9c23b68_72601365',
  'variables' => 
  array (
    'sql' => 0,
    'row' => 0,
    'host' => 0,
    'levelID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c825f9c23b68_72601365')) {function content_55c825f9c23b68_72601365($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/admission/public_html/application/libraries/smarty/libs/plugins/modifier.date_format.php';
?><div class="portlet box blue">
    <div class="portlet-title">
    </div>
    <div class="portlet-body flip-scroll">
        <table class="table table-bordered table-striped table-condensed flip-content" id="sample_editable_1"> 
            <thead clas="flip-content">
                <tr>
                    <th>NO. REG</th>
                    <th>NAMA CMB</th>
                    <th>PROGRAM STUDI</th>
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
cmb/profil/<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
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
						<a class="btn default" href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cmb/profil/<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
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
                    <td><div class="panel-info">
                            <div class="panel-heading">
							<h4 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['row']->value->prodi_sing;?>
</h4>
                            </div>
                        </div>
					</td>
                    <td><div class="panel-info">
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
						<?php if ($_smarty_tpl->tpl_vars['row']->value->comfirm_keu=='1'){?>
							<a class="keu btn green" href="<?php if ($_smarty_tpl->tpl_vars['levelID']->value=='99'||$_smarty_tpl->tpl_vars['levelID']->value=='77'||$_smarty_tpl->tpl_vars['levelID']->value=='101'){?><?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cmb/detailPayment/<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
<?php }else{ ?>#<?php }?>"> CONFIRMED <i class=" icon-ok"></i> </a>
						<?php }elseif($_smarty_tpl->tpl_vars['row']->value->stsReapplyPaid=='1'){?>
							<a name="keu" class="keu btn default" 
								href="<?php if ($_smarty_tpl->tpl_vars['levelID']->value=='99'||$_smarty_tpl->tpl_vars['levelID']->value=='77'||$_smarty_tpl->tpl_vars['levelID']->value=='101'){?><?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cmb/detailPayment/<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
<?php }else{ ?>#<?php }?>"
							> Approve KEU <i class=" icon-chevron-right"></i> </a>
						<?php }else{ ?>
							<a name="keu" class="keu btn blue-dark" 
								href="<?php if ($_smarty_tpl->tpl_vars['levelID']->value=='99'||$_smarty_tpl->tpl_vars['levelID']->value=='77'||$_smarty_tpl->tpl_vars['levelID']->value=='55'||$_smarty_tpl->tpl_vars['levelID']->value=='33'||$_smarty_tpl->tpl_vars['levelID']->value=='101'){?>
								<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cmb/payment/<?php echo $_smarty_tpl->tpl_vars['row']->value->no_smb;?>
<?php }else{ ?>#<?php }?>"
							>Daftar Ulang <i class=" icon-chevron-right"></i> </a>
						<?php }?>
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
</script>
<?php }} ?>