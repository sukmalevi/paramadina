<?php /* Smarty version Smarty-3.1.14, created on 2016-10-19 08:55:20
         compiled from "application/views/smb/calonmahasiswa/main.html" */ ?>
<?php /*%%SmartyHeaderCode:13628861125806d2888b2ce6-42040667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e2fae418b8ad2a151e5de4ee3c32167766f2ea8' => 
    array (
      0 => 'application/views/smb/calonmahasiswa/main.html',
      1 => 1475739224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13628861125806d2888b2ce6-42040667',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lokasi' => 0,
    'id_where' => 0,
    'id_where2' => 0,
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5806d28892c846_10604685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5806d28892c846_10604685')) {function content_5806d28892c846_10604685($_smarty_tpl) {?><div class="row">
	<div class="col-md-12">
	   <!-- BEGIN PAGE TITLE & BREADCRUMB-->
	   <h3 class="page-title hidden-print">
		  <?php echo $_smarty_tpl->tpl_vars['lokasi']->value;?>
 <small> Admission Paramadina</small>
	   </h3>
	   <hr class="hidden-print">
	</div>
 </div>
<!-- END PAGE HEADER-->
<div class="clearfix"></div>
<div class="col-md-12">
        <!--DataTables example-->
        <div id="table-grid">
          <div class="row">
                <div class="col s12 m12">
					<?php if (isset($_smarty_tpl->tpl_vars['id_where']->value)){?><?php $_smarty_tpl->tpl_vars["p1"] = new Smarty_variable($_smarty_tpl->tpl_vars['id_where']->value, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["p1"] = new Smarty_variable('', null, 0);?><?php }?>
                    <?php if (isset($_smarty_tpl->tpl_vars['id_where2']->value)){?><?php $_smarty_tpl->tpl_vars["p2"] = new Smarty_variable($_smarty_tpl->tpl_vars['id_where2']->value, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars["p2"] = new Smarty_variable('', null, 0);?><?php }?>
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('smb/template/grid.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('tipe_grid'=>$_tmp1,'tinggi'=>'55px'), 0);?>

                </div>
          </div>
        </div> 
        <br>
        <div class="divider"></div> 
</div><?php }} ?>