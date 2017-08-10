<?php /* Smarty version Smarty-3.1.14, created on 2013-09-05 07:25:42
         compiled from "application\views\master\tbl_departemen.html" */ ?>
<?php /*%%SmartyHeaderCode:4338522831dc183a23-54607474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3f43bbc76e622853332dfea2008834f7496d1f8' => 
    array (
      0 => 'application\\views\\master\\tbl_departemen.html',
      1 => 1378365938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4338522831dc183a23-54607474',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_522831dc29fe26_30426913',
  'variables' => 
  array (
    'host' => 0,
    'depart' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522831dc29fe26_30426913')) {function content_522831dc29fe26_30426913($_smarty_tpl) {?>
<script>
		  
            $(function () {
                $('#data-table').dataTable({
                    "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>"
                   });
            });
            $(function () {
                $('.tbl-simple').dataTable({
                    "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>"
                });
            });
			
			$(function () {
			$(".tbl-paper-theme").tablecloth({
          theme: "paper"
		   });
			});
			
		$(function () {
			$(".tbl-dark-theme").tablecloth({
          theme: "dark"
		   });
		});
			$(function () {
                $('.tbl-paper-theme,.tbl-dark-theme').dataTable({
                    "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>"
                });
	

            });
</script>	


					<div class="primary-head">
						<h3 class="page-header">Master Departemen</h3>
					</div>
					<div class="content-widgets light-gray">
						<div class="widget-head bondi-blue">
							<h3>Daftar Departemen Univ. Paramadina
								<a href="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
home/proyekForm/tambah" id="tambah" style="float:right"><i class="icon-plus "></i></a>
							</h3>
						</div>
						<div class="widget-container" >	
							<table class="responsive table table-striped table-bordered" id="data-table" >
							<thead>
							<tr>
								<th>
									 ID
								</th>
								<th>
									 Nama Departemen
								</th>
								<td class="action" ></td>
							</tr>
							</thead>
							<tbody>
							<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['depart']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
							<tr>
								<td>
									 <?php echo $_smarty_tpl->tpl_vars['row']->value->acadept_uid;?>

								</td>								
								<td>
									 <?php echo $_smarty_tpl->tpl_vars['row']->value->description;?>

								</td>								
								<td class="center">
									 <div class="btn-group">
										<button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span>
										</button>
										<ul class="dropdown-menu">
											<li>
											<a href="#" name="edit" id="edit">Edit</a>
											</li>
											<li>
											<a href="#" value="hapus">Hapus</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>	
							<?php } ?>
							</tbody>
							</table>
						</div>
					</div>

	<script type="text/javascript">
	
		$(document).ready(function(){
		id_proyek = $('#id_proyek').text();
			$('#edit').click(function(){
				$.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
home/proyekForm", {'id':id_proyek});
				});
			});
	
		$("#tambah").off();
		$("#tambah").on("click",function(e){
            $.post("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
home/proyekForm/tambah",{},function(resp){
                $('#isi').html(resp);			
            });
        });
	
	</script><?php }} ?>