<?php /* Smarty version Smarty-3.1.14, created on 2013-11-04 04:24:57
         compiled from "application\views\cuti\leftbar.html" */ ?>
<?php /*%%SmartyHeaderCode:16580522826b56cdb53-92314341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2da0d93b444c6f5398afe089d5459ec15e963018' => 
    array (
      0 => 'application\\views\\cuti\\leftbar.html',
      1 => 1383539094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16580522826b56cdb53-92314341',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522826b5743ea9_12266079',
  'variables' => 
  array (
    'host' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522826b5743ea9_12266079')) {function content_522826b5743ea9_12266079($_smarty_tpl) {?><div class="leftbar leftbar-close clearfix">
		<div class="left-nav clearfix">
			<div class="responsive-leftbar">
				<i class="icon-list"></i>
			</div>
			<div class="left-secondary-nav tab-content">
				<div class="tab-pane active" id="forms">
					<ul id="nav" class="accordion-nav">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cuti/tblPengajuanCuti"><i class="icon-list-alt"></i> Pengajuan Cuti</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cuti/tabelCuti"><i class="icon-list-alt"></i> Riwayat Cuti</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
cuti/formCuti"><i class="icon-list-alt"></i> Form Cuti</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div><?php }} ?>