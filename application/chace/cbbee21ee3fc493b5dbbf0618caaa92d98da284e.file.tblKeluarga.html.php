<?php /* Smarty version Smarty-3.1.14, created on 2014-10-30 16:14:59
         compiled from "application/views/smb/tblKeluarga.html" */ ?>
<?php /*%%SmartyHeaderCode:53449365154520193cb9922-84775761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbbee21ee3fc493b5dbbf0618caaa92d98da284e' => 
    array (
      0 => 'application/views/smb/tblKeluarga.html',
      1 => 1399609020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53449365154520193cb9922-84775761',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'saudara' => 0,
    'row' => 0,
    'cmb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_54520193dbf6c0_55102672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54520193dbf6c0_55102672')) {function content_54520193dbf6c0_55102672($_smarty_tpl) {?> <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['saudara']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <div class="row portfolio-block" style="height: 105px;background-color: #FFF;">
        <div class="col-md-1" style="padding: 10px 0;">
            <div class="portfolio-info"><br><br>
                <a href="#" class="btn bigicn-only" style="padding:0;">
                    <span><?php echo $_smarty_tpl->tpl_vars['row']->value->singProdi;?>
</span>
                </a>

            </div>
        </div>
        <div class="col-md-3">
            <div class="portfolio-info">
                <div class="portfolio-text-info" style=";padding-left: 10px;">
                    <h4><?php echo $_smarty_tpl->tpl_vars['row']->value->namaSaudara;?>
</h4>
                    <p><?php echo $_smarty_tpl->tpl_vars['row']->value->gender;?>
, <?php echo $_smarty_tpl->tpl_vars['row']->value->tanggalLahir;?>
</p>
                    <p>Anak Ke-<?php echo $_smarty_tpl->tpl_vars['row']->value->nomor;?>
</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="portfolio-info">
                <h4><?php echo $_smarty_tpl->tpl_vars['row']->value->prodi;?>
</h4>
                <p>NIM : <?php echo $_smarty_tpl->tpl_vars['row']->value->nim;?>
</p>
                <p>Angkatan : <?php echo $_smarty_tpl->tpl_vars['row']->value->angkatan;?>
, <?php if ($_smarty_tpl->tpl_vars['row']->value->lulus=='1'){?>Alumni<?php }else{ ?>Aktif<?php }?></p>
            </div>
        </div>
        <div class="col-md-2">
            <div class="portfolio-info">
                <h4>Perusahaan</h4>
                <p><?php echo $_smarty_tpl->tpl_vars['row']->value->kerja;?>
</p>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="row portfolio-block" style="height: 105px;background-color: #FFF;">
        <?php if ($_smarty_tpl->tpl_vars['cmb']->value->confirmSaudara=='0'){?>
        <div class="col-md-3" style="padding: 10px 0;">
            <div class="portfolio-info"><br><br>
                <a href="#" class="btn default confirm" name="confirm" value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->kode_smb;?>
">
                    <span style="color:green;">CONFIRM</span>
                </a>
            </div>
        </div>
        <div class="col-md-3" style="padding: 10px 0;">
            <div class="portfolio-info"><br><br>
                <a href="#" class="btn default tolak" name="tolak" value="<?php echo $_smarty_tpl->tpl_vars['cmb']->value->kode_smb;?>
">
                    <span style="color:red;">TOLAK</span>
                </a>
            </div>
        </div>
        <?php }elseif($_smarty_tpl->tpl_vars['cmb']->value->confirmSaudara=='7'){?>
        <div class="col-md-5" style="padding: 10px 0;">
            <div class="portfolio-info"><br><br>
                    <span style="color:blue;">SAUDARA DISETUJUI</span>
            </div>
        </div>
        <?php }elseif($_smarty_tpl->tpl_vars['cmb']->value->confirmSaudara=='9'){?>
        <div class="col-md-5" style="padding: 10px 0;">
            <div class="portfolio-info"><br><br>
                    <span style="color:red;">SAUDARA DITOLAK</span>
            </div>
        </div>
        <?php }?>
    </div><?php }} ?>