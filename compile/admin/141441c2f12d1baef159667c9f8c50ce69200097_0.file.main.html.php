<?php
/* Smarty version 3.1.30, created on 2018-03-17 05:57:24
  from "F:\server\Apache24\htdocs\schoolBlog\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aacae44793c62_35988881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '141441c2f12d1baef159667c9f8c50ce69200097' => 
    array (
      0 => 'F:\\server\\Apache24\\htdocs\\schoolBlog\\template\\admin\\main.html',
      1 => 1521266242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aacae44793c62_35988881 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
 <head>
  <title>山西农业大学后台管理系统</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link href="<?php echo BUI_URL;?>
/css/dpl-min.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo BUI_URL;?>
/css/bui-min.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo BUI_URL;?>
/css/main-min.css" rel="stylesheet" type="text/css" />
 </head>
 <body>

  <div class="header">
    
      <div class="dl-title">
          <span class="lp-title-port">山西农业大学</span><span class="dl-title-text">后台管理页面</span>
        <!--</a>-->
      </div>

    <div class="dl-log">欢迎<span class="dl-log-user" style="color: #4cae4c;font-size: 16px;padding: 0 10px"><?php echo $_smarty_tpl->tpl_vars['aname']->value;?>
</span>来到后台管理<a href="index.php?m=admin&f=login&a=loginOut" title="退出系统" class="dl-log-quit">[退出]</a>
    </div>
  </div>
   <div class="content">
    <div class="dl-main-nav">
      <div class="dl-inform"><div class="dl-inform-title">贴心小秘书<s class="dl-inform-icon dl-up"></s></div></div>
      <ul id="J_Nav"  class="nav-list ks-clear">
        <li class="nav-item dl-selected"><div class="nav-item-inner nav-home">管理员</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-order">用户管理</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-inventory">内容管理</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-supplier">详情页</div></li>
        <li class="nav-item"><div class="nav-item-inner nav-marketing">图表</div></li>
      </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
   </div>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo BUI_URL;?>
/js/jquery-1.8.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo BUI_URL;?>
/js/bui.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo BUI_URL;?>
/js/config.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo BUI_URL;?>
/js/common/main.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/admin/main.js"><?php echo '</script'; ?>
>
 </body>
</html>
<?php }
}
