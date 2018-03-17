<?php
/* Smarty version 3.1.30, created on 2018-03-17 03:27:38
  from "F:\server\Apache24\htdocs\schoolBlog\template\index\reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aac8b2a360ed9_14562690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b611e072f3051c30bd13958efee2b390da936f32' => 
    array (
      0 => 'F:\\server\\Apache24\\htdocs\\schoolBlog\\template\\index\\reg.html',
      1 => 1512559504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aac8b2a360ed9_14562690 (Smarty_Internal_Template $_smarty_tpl) {
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
/index/reg.css">
    <link rel="stylesheet" href="<?php echo ICON_URL;?>
">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/index/reg.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
    <title>注册</title>
</head>
<body>
<h1>时光流影</h1>
<form action="index.php?m=index&f=login&a=reg" method="post">
    <div class="reg">
        <a href="index.php?m=index&f=index&a=login">登录</a>
        <a href="">·</a>
        <a href="index.php?m=index&f=index&a=reg">注册</a>
    </div>
    <div class="login">
        <span class="iconfont icon-user"></span>
        <input type="text" class="" id="user" placeholder="用户名" name="uname" autocomplete="off">
        <label  class="error err" for="user"></label>
    </div>
    <div class="login">
        <span class="iconfont icon-mima"></span>
        <input type="password" class="pass" placeholder="密码" name="upass" autocomplete="off" id="upass">
        <label  class="error err" for="upass"></label>
    </div>
    <div class="login">
        <span class="iconfont icon-mima"></span>
        <input type="password" class="pass1" placeholder="确认密码" name="upass1" autocomplete="off" id="upass1">
        <label  class="error err" for="upass1"></label>
    </div>
    <div class="login">
        <span class="iconfont icon-shouji"></span>
        <input type="text" class="phone" placeholder="请输入手机号" name="uphone" autocomplete="off" id="uphone">
        <label  class="error err" for="uphone"></label>
        <a href="javascript:void (0);" class="send">发送验证码</a>
    </div>
    <div class="login">
        <span class="iconfont icon-shoujiyanzhengma"></span>
        <input type="text" class="phoneMa" placeholder="手机验证码" name="phoneCode" autocomplete="off">
    </div>
    <div class="submit">
        <input type="submit" value="注册">
    </div>
    <p class="sign">点击 “注册” 即表示您同意并愿意遵守简书
        <br>
        <a href="">用户协议</a>
        和
        <a href="">隐私政策</a>
    </p>
    <div class="more">
        <div class="moreSign">
            社交账号直接注册
        </div>
        <ul>
            <li>
                <a href="">
                    <span class="iconfont icon-weibo"></span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="iconfont icon-weixin"></span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="iconfont icon-qq"></span>
                </a>
            </li>
        </ul>
    </div>
</form>
</body>
</html><?php }
}
