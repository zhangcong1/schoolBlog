<?php
/* Smarty version 3.1.30, created on 2018-03-18 11:34:42
  from "D:\wamp64\www\schoolBlog\template\admin\adminLogin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aae4ed2826ce6_46805167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cda67e209a35e428604925ce3359de8ecef543a6' => 
    array (
      0 => 'D:\\wamp64\\www\\schoolBlog\\template\\admin\\adminLogin.html',
      1 => 1521372879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aae4ed2826ce6_46805167 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="shortcut icon" href="<?php echo IMG_URL;?>
/bitbug_favicon.ico">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/admin/adminLogin.js"><?php echo '</script'; ?>
>
    <title>网站后台管理</title>
    <style>
        @media screen and (min-width: 1366px) {
            .bac {
                height: 500px;
            }
        }
        form{
            transform: scale(0.9);
        }
    </style>
</head>
<body>
    <div class="bac">
        <div class="logo">
            <img src="<?php echo IMG_URL;?>
/logo.png" alt="">
        </div>
        <form action="index.php?m=admin&f=login&a=check" method="post">
            <div class="h3">
                <h3>网站后台管理系统</h3>
            </div>
            <div class="login">
                <span class="iconfont icon-user"></span>
                <input type="text" class="user" placeholder="请输入用户名" name="aname" autocomplete="off" id="aname">
                <label  class="error err" for="aname"></label>
            </div>
            <div class="login">
                <span class="iconfont icon-mima"></span>
                <input type="password" class="pass" placeholder="请输入密码" name="apass" autocomplete="off" id="apass">
                <label  class="error err" for="apass"></label>
            </div>
            <div class="login">
                <span class="iconfont icon-shouji"></span>
                <input type="text" class="phone" placeholder="请输入手机号" name="phone" autocomplete="off" id="phone">
                <a href="javascript:void (0);" class="send">发送验证码</a>
                <label  class="error err" for="phone"></label>
            </div>
            <div class="login">
                <span class="iconfont icon-shoujiyanzhengma"></span>
                <input type="text" class="phoneMa" placeholder="手机验证码" name="phoneCode" autocomplete="off" id="phoneMa">
                <label  class="error err" for="phoneMa"></label>
            </div>
            <div class="checkma">
                <input type="text" class="check" name="check" placeholder="验证码"autocomplete="off" id="check">
                <div class="ma">
                    <img src="index.php?m=admin&f=login&a=code" alt="" width="100%" onclick="this.src='index.php?m=admin&f=login&a=code'">
                </div>
                <label  class="error err" for="check"></label>
            </div>
            <div class="submit">
                <input type="submit" value="登录">
            </div>
        </form>
    </div>
</body>
</html><?php }
}
