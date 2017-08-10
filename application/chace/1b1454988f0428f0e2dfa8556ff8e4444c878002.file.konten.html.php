<?php /* Smarty version Smarty-3.1.14, created on 2014-03-04 10:13:23
         compiled from "application\views\konten.html" */ ?>
<?php /*%%SmartyHeaderCode:1293252a21dcc6c6c96-56467675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b1454988f0428f0e2dfa8556ff8e4444c878002' => 
    array (
      0 => 'application\\views\\konten.html',
      1 => 1393902797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1293252a21dcc6c6c96-56467675',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52a21dcc730af9_17428387',
  'variables' => 
  array (
    'aktifiti' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a21dcc730af9_17428387')) {function content_52a21dcc730af9_17428387($_smarty_tpl) {?><div class="row ">
			<div class="col-md-6 col-sm-6">
               <div class="portlet box grey">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-bell"></i>Recent Activities</div>
                     <div class="actions">
                        <div class="btn-group">
                           <a class="btn btn-sm default" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                           Filter By
                           <i class="icon-angle-down"></i>
                           </a>
                           <div class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
                              <label><input type="checkbox" /> Humas</label>
                              <label><input type="checkbox" checked="" /> Akademik</label>
                              <label><input type="checkbox" /> Keuangan</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="portlet-body">
                     <div class="scroller" style="height: 300px;" data-always-visible="1" data-rail-visible="0">
                        <ul class="feeds">
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['aktifiti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						   <li>
                              <div class="col1">
                                 <div class="cont">
                                    <div class="cont-col1">
                                       <div class="label label-sm <?php if ($_smarty_tpl->tpl_vars['row']->value->id_activity=='13.1'){?>label-danger<?php }elseif($_smarty_tpl->tpl_vars['row']->value->id_activity=='13.2'){?>label-info<?php }else{ ?>label-default<?php }?>">                        
                                          <i class="<?php if ($_smarty_tpl->tpl_vars['row']->value->id_activity=='13.1'){?>icon-user<?php }elseif($_smarty_tpl->tpl_vars['row']->value->id_activity=='13.2'){?>icon-envelope<?php }else{ ?>icon-check<?php }?>"></i>
                                       </div>
                                    </div>
                                    <div class="cont-col2">
                                       <div class="desc">
                                          <?php echo $_smarty_tpl->tpl_vars['row']->value->namaAct;?>
 										  
                                          <?php if ($_smarty_tpl->tpl_vars['row']->value->id_activity=='13.3'||$_smarty_tpl->tpl_vars['row']->value->id_activity=='13.9'){?>
                                          <span class="label label-sm label-warning ">
										  Take action
                                          <i class="icon-share-alt"></i>
										  <?php }?>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col2" style="margin-left: -85px;width: 84px;">
                                 <div class="date" style="padding-left: 0;padding-right: 0;width: 80px;">
                                   <?php echo $_smarty_tpl->tpl_vars['row']->value->jam;?>
:<?php echo $_smarty_tpl->tpl_vars['row']->value->menit;?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->tgl;?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value->bulan;?>

                                 </div>
                              </div>
                           </li>
						<?php } ?>
                        </ul>
                     </div>
                     <div class="scroller-footer">
                        <div class="pull-right">
                           <a href="#">See All Records <i class="m-icon-swapright m-icon-gray"></i></a> &nbsp;
                        </div>
                     </div>
                  </div>
               </div>
            </div>			
            <div class="col-md-6 col-sm-6">
               <!-- BEGIN PORTLET-->
               <div class="portlet box blue calendar">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-calendar"></i>Calendar</div>
                  </div>
                  <div class="portlet-body light-grey">
                     <div id="calendar"></div>
                  </div>
               </div>
			 </div>
               <!-- END PORTLET-->
         </div><?php }} ?>