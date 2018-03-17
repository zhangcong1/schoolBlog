<?php
/* Smarty version 3.1.30, created on 2017-11-09 06:28:15
  from "D:\wamp64\www\blog\template\admin\adminLogin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a03f57f067fa9_75888085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73fe1e217fbaffe9889783ec600bfe06a0a4fbc8' => 
    array (
      0 => 'D:\\wamp64\\www\\blog\\template\\admin\\adminLogin.html',
      1 => 1508920069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a03f57f067fa9_75888085 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/admin/adminLogin.css">
    <link rel="stylesheet" href="<?php echo ICON_URL;?>
">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/admin/adminLogin.js"><?php echo '</script'; ?>
>
    <title>Document</title>
</head>
<body>
    <div class="logo"></div>
    <form action="index.php?m=admin&f=login&a=check" method="post">
        <div class="h3">
            <h3>网站后台管理系统</h3>
        </div>
        <div class="login">
            <span class="iconfont icon-user"></span>
            <input type="text" class="user" placeholder="请输入用户名" name="aname" autocomplete="off">
        </div>
        <div class="login">
            <span class="iconfont icon-mima"></span>
            <input type="password" class="pass" placeholder="请输入密码" name="apass" autocomplete="off">
        </div>
        <div class="login">
            <span class="iconfont icon-shouji"></span>
            <input type="text" class="phone" placeholder="请输入手机号" name="phone" autocomplete="off">
            <a href="javascript:void (0);" class="send">发送验证码</a>
        </div>
        <div class="login">
            <span class="iconfont icon-shoujiyanzhengma"></span>
            <input type="text" class="phoneMa" placeholder="手机验证码" name="phoneCode" autocomplete="off">
        </div>
        <div class="checkma">
            <input type="text" class="check" name="check" placeholder="验证码"autocomplete="off">
            <div class="ma">
                <img src="index.php?m=admin&f=login&a=code" alt="" width="100%" onclick="this.src='index.php?m=admin&f=login&a=code'">
            </div>
        </div>
        <div class="submit">
            <input type="submit" value="登录">
        </div>
    </form>
</body>
</html><?php }
}
