<?php /* Smarty version Smarty-3.1.14, created on 2014-04-17 13:39:37
         compiled from "1512226536c1b11e51866f097d3d78b03b41ec48" */ ?>
<?php /*%%SmartyHeaderCode:27441534f7729bf6ff5-99086933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1512226536c1b11e51866f097d3d78b03b41ec48' => 
    array (
      0 => '1512226536c1b11e51866f097d3d78b03b41ec48',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '27441534f7729bf6ff5-99086933',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_534f7729c48273_16060137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_534f7729c48273_16060137')) {function content_534f7729c48273_16060137($_smarty_tpl) {?><script>
					
					do();
					function do() {
						if (confirm('Lengkapi Data Orang Tua atau Wali')) {
							id = 'formKeluarga';
							
							$.post('portal/formulir/keluarga', {'id':id},function(resp){
								$('#konten').html(resp);
							});
							document.getElementById('profil').style.height='42px' ;
							document.getElementById('imgP').style.display='none' ;
							return false;
				   }}</script><?php }} ?>