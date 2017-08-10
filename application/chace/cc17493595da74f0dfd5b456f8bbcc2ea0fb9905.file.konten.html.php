<?php /* Smarty version Smarty-3.1.14, created on 2016-12-09 15:52:04
         compiled from "application/views/konten.html" */ ?>
<?php /*%%SmartyHeaderCode:1223157680535623e38c3810-05681645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc17493595da74f0dfd5b456f8bbcc2ea0fb9905' => 
    array (
      0 => 'application/views/konten.html',
      1 => 1481273483,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1223157680535623e38c3810-05681645',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_535623e3922777_95243894',
  'variables' => 
  array (
    'periode' => 0,
    'totalReg' => 0,
    'totalPeserta' => 0,
    'newReg' => 0,
    'newPay' => 0,
    'newRereg' => 0,
    'newStudent' => 0,
    'aktifiti' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535623e3922777_95243894')) {function content_535623e3922777_95243894($_smarty_tpl) {?><!--Load the AJAX API-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
<?php if ($_smarty_tpl->tpl_vars['periode']->value['kode']!=''&&$_smarty_tpl->tpl_vars['periode']->value['jenjangType']=='1'){?> 

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['bar']});

      // Set a callback to run when the Google Visualization API is loaded.
	  
    
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChartCalon);
	  
      function drawChart() {
        var data = google.visualization.arrayToDataTable(<?php echo $_smarty_tpl->tpl_vars['totalReg']->value;?>
);

        var options = {
          chart: {
            title: 'Jumlah Mahasiswa S1 Paramadina',
            subtitle: 'Chart Mahasiswa Baru',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };
        var chart = new google.charts.Bar(document.getElementById('chart_div'));
		chart.draw(data, options);
      }
	  
      function drawChartCalon() {
        var data = google.visualization.arrayToDataTable(<?php echo $_smarty_tpl->tpl_vars['totalPeserta']->value;?>
);

        var options = {
          chart: {
            title: 'Jumlah Calon Mahasiswa S1 Paramadina',
            subtitle: 'Chart Penerimaan Mahasiswa Baru',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };
        var chart = new google.charts.Bar(document.getElementById('chart_div_calon'));
		chart.draw(data, options);
      } 


<?php }?>
</script>
<?php if ($_smarty_tpl->tpl_vars['periode']->value){?>
<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
       <div class="dashboard-stat blue">
          <div class="visual">
             <i class="icon-asterisk"></i>
          </div>
          <div class="details">
             <div class="number">
                <?php if ($_smarty_tpl->tpl_vars['newReg']->value){?><?php echo $_smarty_tpl->tpl_vars['newReg']->value['newReg'];?>
<?php }?>
             </div>
             <div class="desc">                           
                New Registration
             </div>
          </div>
          <a href="#" class="more">
          View more <i class="m-icon-swapright m-icon-white"></i>
          </a>                 
       </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
       <div class="dashboard-stat purple">
          <div class="visual">
             <i class="icon-money"></i>
          </div>
          <div class="details">
             <div class="number"><?php echo $_smarty_tpl->tpl_vars['newPay']->value['newPay'];?>
</div>
             <div class="desc">New Payment</div>
          </div>
          <a href="#" class="more">
          View more <i class="m-icon-swapright m-icon-white"></i>
          </a>                 
       </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
       <div class="dashboard-stat red">
          <div class="visual">
             <i class="icon-book"></i>
          </div>
          <div class="details">
             <div class="number"><?php echo $_smarty_tpl->tpl_vars['newRereg']->value['newRereg'];?>
</div>
             <div class="desc">New Reregistration</div>
          </div>
          <a href="#" class="more">
          View more <i class="m-icon-swapright m-icon-white"></i>
          </a>                 
       </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
       <div class="dashboard-stat dark">
          <div class="visual">
             <i class="icon-male"></i>
          </div>
          <div class="details">
             <div class="number"><?php echo $_smarty_tpl->tpl_vars['newStudent']->value['newStudent'];?>
</div>
             <div class="desc">Total Student</div>
          </div>
          <a href="#" class="more">
          View more <i class="m-icon-swapright m-icon-white"></i>
          </a>                 
       </div>
    </div>
	
 </div>
 
<div class="row ">
	<div class="col-md-12 col-xs-12">
	   <div class="portlet box green">
		  <div class="portlet-title">
			 <div class="caption">Grafik Peserta SMB Universitas Paramadina S1 - Periode Aktif</div>
		  </div>
		   <div class="portlet-body" id="chart_div_calon" style="height: 400px;"></div>
	   </div>
	</div>
</div>
<div class="row ">
	<div class="col-md-12 col-xs-12">
	   <div class="portlet box grey">
		  <div class="portlet-title">
			 <div class="caption">Grafik Mahasiswa Universitas Paramadina S1 - Periode Aktif</div>
		  </div>
		   <div class="portlet-body" id="chart_div" style="height: 400px;"></div>
	   </div>
	</div>
</div>
<div class="row ">		
	<div class="col-md-8 col-sm-12">
	   <div class="portlet box blue calendar">
		  <div class="portlet-title">
			 <div class="caption"><i class="icon-calendar"></i> Jadwal Ujian SMB</div>
		  </div>
		  <div class="portlet-body light-grey">
			 <div id="calendar"></div>
		  </div>
	   </div>
	</div>
	<div class="col-md-4 col-sm-12">
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
								   <font color="blue"><?php echo $_smarty_tpl->tpl_vars['row']->value->id_cmb;?>
</font>-<?php echo $_smarty_tpl->tpl_vars['row']->value->namaAct;?>
 										  
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
 </div>
 <?php }else{ ?>
 
 
<div class="row ">
	<div class="col-md-12 col-xs-12">
		<h3 align="center">Tidak ada periode yang aktif!</h3>
	</div>
</div>
 <?php }?><?php }} ?>