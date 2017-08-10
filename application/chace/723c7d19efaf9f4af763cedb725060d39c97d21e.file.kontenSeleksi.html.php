<?php /* Smarty version Smarty-3.1.14, created on 2017-02-16 13:48:14
         compiled from "application/views/laporan/kontenSeleksi.html" */ ?>
<?php /*%%SmartyHeaderCode:7663638005892d5ef111e60-18187094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '723c7d19efaf9f4af763cedb725060d39c97d21e' => 
    array (
      0 => 'application/views/laporan/kontenSeleksi.html',
      1 => 1487227675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7663638005892d5ef111e60-18187094',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5892d5ef14d3f5_59085247',
  'variables' => 
  array (
    'totalReg' => 0,
    'totalRegFrek' => 0,
    'totalPeserta' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5892d5ef14d3f5_59085247')) {function content_5892d5ef14d3f5_59085247($_smarty_tpl) {?><!--Load the AJAX API-->

<script type="text/javascript">

// Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['bar','line','corechart']});
      google.charts.setOnLoadCallback(drawChart);
	  function drawChart() {
        var data = google.visualization.arrayToDataTable(<?php echo $_smarty_tpl->tpl_vars['totalReg']->value;?>
);

        var options = {
          chart: {
            title: 'Jumlah Mahasiswa S1 Paramadina',
            subtitle: 'Grafik laporan penerimaan mahasiswa baru',
			legend: { position: 'bottom' }
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };
		
        var chartBar = new google.charts.Bar(document.getElementById('chart_div'));
		chartBar.draw(data, options);
      }
	  
      google.charts.setOnLoadCallback(drawChartCurve);

      function drawChartCurve() {
        var data = google.visualization.arrayToDataTable(<?php echo $_smarty_tpl->tpl_vars['totalRegFrek']->value;?>
);

        var options = {
          title: 'Frekuensi Pendaftaran SMB Universitas Paramadina',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        <!-- var chartLine = new google.visualization.LineChart(document.getElementById('curve_chart')); -->
        var chartLine = new google.charts.Line(document.getElementById('curve_chart'));

        chartLine.draw(data, options);
      }

</script>
<script type="text/javascript">	  
	  
	google.charts.setOnLoadCallback(drawChartCalonByProdi);
	
	function drawChartCalonByProdi() {
        var data = google.visualization.arrayToDataTable(<?php echo $_smarty_tpl->tpl_vars['totalPeserta']->value;?>
);

        var options = {
          chart: {
            title: 'Jumlah Calon Mahasiswa S1 Paramadina',
            subtitle: 'Chart Penerimaan Mahasiswa Baru',
			legend: { position: 'bottom' }
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };
		
        var chart = new google.charts.Bar(document.getElementById('chart_div_calon'));
		chart.draw(data, options);
      } 
	

    </script>

<div class="row ">
<hr>
	<div class="col-md-12 col-xs-12">
	   <div class="portlet box blue">
		  <div class="portlet-title">
			 <div class="caption">Grafik laporan SMB Universitas Paramadina S1 - Periode Aktif</div>
			 <div class="tools">
				<a href="javascript:;" class="collapse"></a>
			</div>
		  </div>
		   <div class="portlet-body" id="chart_div" style="height: 400px;"></div>
	   </div>
	</div>
	<div class="col-md-12 col-xs-12">
	   <div class="portlet box blue">
		  <div class="portlet-title">
			 <div class="caption">Grafik laporan frekuensi Pendaftar SMB Universitas Paramadina S1 - Periode Aktif</div>
			 <div class="tools">
				<a href="javascript:;" class="collapse"></a>
			</div>
		  </div>
		   <div class="portlet-body" id="curve_chart" style="height: 400px;"></div>
	   </div>
	</div>
	<div class="col-md-12 col-xs-12">
	   <div class="portlet box blue">
		  <div class="portlet-title">
			 <div class="caption">Grafik Peserta SMB Universitas Paramadina - Periode Aktif</div>
			 <div class="tools">
				<a href="javascript:;" class="collapse"></a>
			</div>
		  </div>
		   <div class="portlet-body" id="chart_div_calon" style="height: 600px;"></div>
	   </div>
	</div>
</div><?php }} ?>