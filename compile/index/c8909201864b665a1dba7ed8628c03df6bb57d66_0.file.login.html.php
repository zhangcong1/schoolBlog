<?php
/* Smarty version 3.1.30, created on 2018-03-17 09:12:08
  from "F:\server\Apache24\htdocs\schoolBlog\template\index\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aacdbe88ac369_45675161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8909201864b665a1dba7ed8628c03df6bb57d66' => 
    array (
      0 => 'F:\\server\\Apache24\\htdocs\\schoolBlog\\template\\index\\login.html',
      1 => 1521277924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aacdbe88ac369_45675161 (Smarty_Internal_Template $_smarty_tpl) {
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
/index/login.css">
    <link rel="stylesheet" href="<?php echo ICON_URL;?>
">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
    <title>Document</title>
</head>
<body>
    <h1><a href="index.php"></a></h1>
    <form action="index.php?m=index&f=login" method="post">
        <div class="reg">
            <a href="index.php?m=index&f=index&a=login">登录</a>
            <a href="">·</a>
            <a href="index.php?m=index&f=index&a=reg">注册</a>
        </div>
        <div class="login">
            <span class="iconfont icon-user"></span>
            <input type="text" class="user" placeholder="用户名" name="uname" autocomplete="off" id="uname">
            <label  class="error err" for="uname"></label>
        </div>
        <div class="login">
            <span class="iconfont icon-mima"></span>
            <input type="password" class="pass" placeholder=密码 name="upass" autocomplete="off" id="upass">
            <label  class="error err" for="upass"></label>
        </div>
        <div class="checkma">
            <input type="text" class="check" name="check" placeholder="验证码" id="check">
            <div class="ma">
                <img src="index.php?m=admin&f=login&a=code" alt="" width="100%" onclick="this.src='index.php?m=admin&f=login&a=code'">
            </div>
        </div>
        <div class="submit">
            <input type="submit" value="登录">
        </div>
        <div class="more">
            <div class="moreSign">
                社交账号登录
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
                <li>
                    <a href="">
                        <span>其他</span>
                    </a>
                </li>
            </ul>
        </div>
    </form>
    
    <?php echo '<script'; ?>
>
        $("form").validate({
            rules:{
                uname:{
                    required:true,
                },
                upass:{
                    required:true,
                }
            },
            messages:{
                uname:{
                    required:"请输入用户名",
                },
                upass:{
                    required:"请输入密码",
                }
            }
        })
    <?php echo '</script'; ?>
>
    
</body>
</html><?php }
}
