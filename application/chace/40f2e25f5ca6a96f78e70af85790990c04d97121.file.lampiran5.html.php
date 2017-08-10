<?php /* Smarty version Smarty-3.1.14, created on 2016-02-09 10:17:03
         compiled from "application/views/portal/lampiran5.html" */ ?>
<?php /*%%SmartyHeaderCode:133706320056b95a2f9303b6-17775125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40f2e25f5ca6a96f78e70af85790990c04d97121' => 
    array (
      0 => 'application/views/portal/lampiran5.html',
      1 => 1453870864,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133706320056b95a2f9303b6-17775125',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'host' => 0,
    'title' => 0,
    'prof' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_56b95a2f9e67f0_17913828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b95a2f9e67f0_17913828')) {function content_56b95a2f9e67f0_17913828($_smarty_tpl) {?><div class="row">
  <div class="col-md-12 article-block">    
    <hr style='margin-top: -10px; margin-bottom: 10px;'>      
        <div class='col-md-3'>
            <img src="<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
assets/img/logoupm.png">
        </div>
        <div class='col-md-6'>
            <h4 style='text-align: center;'><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h4>
            <h4 style='text-align: center;margin-top: -10px''>SURAT PERNYATAAN MAHASISWA 2016</h4>
            <h5 style='text-align: center;'>No Pendaftarn SMB : </h5>
            <h5 style='text-align: center;text-decoration: underline;'><?php echo $_smarty_tpl->tpl_vars['prof']->value->no_smb;?>
</h5>
        </div>
        <div class='col-md-3'>
            <h5>No.001/HM/XII/UPM/15</h5> 
            <h5 style='margin-top: -10px'>Issue/Revisi: A0 </h5> 
            <h5 style='margin-top: -10px'>Tgl Berlaku mulai: 1 Desember 2015</h5>
        </div>          
        
        <div class='clearfix'></div>
        <hr style='margin-top: 10px;'> 
        <h4></h4>
        <div class="well" style="padding-bottom: 50px">
            <address>
            <h4>
                Saya, <font style="text-decoration: underline;"><b><?php echo $_smarty_tpl->tpl_vars['prof']->value->nama_cm;?>
</b></font>, menyatakan bahwa telah membaca, memahami dan menyetujui, kebijakan, ketentuan  dan peraturan yang berlaku meliputi
            </h4>
            <blockquote class="hero">
                <p style="font-size: 15px">1. PROSEDUR DAFTAR ULANG (Lampiran 1)</p>
                <p style="font-size: 15px">2. TATA ATURAN. Kewajiban, Larangan dan Sanksi(Lampiran 2)</p>
                <p style="font-size: 15px">3. INFORMASI BIAYA KULIAH (Lampiran 3)</p>
                <p style="font-size: 15px">4. KETENTUAN PENGEMBALIAN BIAYA PERKULIAHAN MAHASISWA Tahun Ajaran 2016-2017 (Lampiran 4)</p>
            </blockquote>
            <h4>sebagai prasyarat untuk mengikuti pendidikan di Universitas Paramadina. Saya memahami bahwa kebijakan, ketentuan dan peraturan tersebut dapat diperbaharui dari waktu ke waktu untuk tercapainya tujuan pendidikan yang lebih baik.</h4>
            <br><br>
            <h4><input type="checkbox" name="okekah" id="cekbox" value="setuju">
            Dengan ini Saya menyatakan bersedia menjadi mahasiswa Universitas Paramadina
            dan bersedia mengikuti tata tertib serta aturan yang berlaku.
            </h4>
            </address>
            <a class='btn green pull-left' href='#' onclick="confirm()">Daftar Ulang</a> 
        
        </div>
        <a class='btn blue pull-left' href='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/lampiran/1' style="margin-right: 5px"> <i class=' icon-file'></i> Lampiran 1</a> 
        <a class='btn blue pull-left' href='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/lampiran/2' style="margin-right: 5px"> <i class=' icon-file'></i> Lampiran 2</a> 
        <a class='btn blue pull-left' href='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/lampiran/3' style="margin-right: 5px"> <i class=' icon-file'></i> Lampiran 3</a> 
        <a class='btn blue pull-left' href='<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/lampiran/4' style="margin-right: 5px"> <i class=' icon-file'></i> Lampiran 4</a> 
        <br><br>
        <hr>
        <h4>Panitia Penerimaan Baru Mahasiswa 2016</h4>
        <h5>Telepon: +62-21-7918-1188 ext 200/888, leo.ericton@paramadina.ac.id, http://paramadina.ac.id</h5>
        <h5>PIN BB 28249c59   |   Line ID ParamadinaUniversity    |    @paramadina    |    facebook.com/paramadina   |  SMS : 0815 918 1188</h5>
     
  </div>
  <!--end col-md-9-->
</div>
<script>
    function confirm(){        
        if ($('#cekbox').is(':checked')){
            $.post( 'agrreed/1', function( resp ) {
                location.replace("<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
portal/daftarUlang");
            });
        }else{
            alert("Silahkan centang untuk melanjutkan tahap beikutnya.");
        }
    }
</script><?php }} ?>