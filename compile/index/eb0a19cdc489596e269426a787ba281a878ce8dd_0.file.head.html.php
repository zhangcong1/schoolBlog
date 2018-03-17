<?php
/* Smarty version 3.1.30, created on 2018-03-17 02:10:40
  from "F:\server\Apache24\htdocs\schoolBlog\template\index\head.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aac792017eb78_81582326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb0a19cdc489596e269426a787ba281a878ce8dd' => 
    array (
      0 => 'F:\\server\\Apache24\\htdocs\\schoolBlog\\template\\index\\head.html',
      1 => 1510215312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aac792017eb78_81582326 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/index/head.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/index/head.js"><?php echo '</script'; ?>
>
    <title>首页</title>
</head>
<body>
<header>
    <a href=""><img src="<?php echo IMG_URL;?>
/logo.png" alt="" width="130px"></a>
    <main>
        <ul class="nav">
            <li><a href="index.php">首页</a></li>
            <li><a href="">下载APP</a></li>
        </ul>
        <div class="search">
            <input type="text" placeholder="搜索">
            <a href="" class="sou">
                <span class="iconfont icon-fangdajing"></span>
            </a>
            <div class="hots">
                <div class="hotSearch">
                    热门搜索
                    <a href="">
                        <span class="iconfont icon-huanyihuan"></span>
                        换一批
                    </a>
                </div>
                <ul>
                    <li>
                        <a href="">vpn</a>
                    </li>
                    <li>
                        <a href="">golang</a>
                    </li>
                    <li>
                        <a href="">音乐</a>
                    </li>
                    <li>
                        <a href="">简书</a>
                    </li>
                    <li>
                        <a href="">运动会加油稿</a>
                    </li>
                    <li>
                        <a href="">故事</a>
                    </li>
                    <li>
                        <a href="">kotlin</a>
                    </li>
                    <li>
                        <a href="">连载</a>
                    </li>
                    <li>
                        <a href="">创业</a>
                    </li>
                    <li>
                        <a href="">历史</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="right">
            <a href="">Aa</a>
            <?php if ($_smarty_tpl->tpl_vars['userLogin']->value) {?>
            <div class="userBox">
                <a href="userhead">
                    <img src="<?php echo IMG_URL;?>
/myhead.png" alt="" height="100%">
                    <div class="sanjiao"></div>
                </a>
                <ul>
                    <li>
                        <a href="index.php?m=index&f=index&a=personal">
                            <span class="iconfont icon-gerenzhongxinzhuyegerenziliao"></span>
                            我的主页
                        </a>
                    </li>
                    <li>
                        <a href="index.php?m=index&f=index&a=collection">
                            <span class="iconfont icon-shoucang"></span>
                            收藏的文章
                        </a>
                    </li>
                    <li>
                        <a href="index.php?m=index&f=index&a=car">
                            <span class="iconfont icon-20151209tubiaolianxizhuanhuan22"></span>
                            我的购物车
                        </a>
                    </li>
                    <li>
                        <a href="index.php?m=index&f=index&a=account">
                            <span class="iconfont icon-qianbao"></span>
                            我的钱包
                        </a>
                    </li>
                    <li>
                        <a href="index.php?m=index&f=index&a=setting">
                            <span class="iconfont icon-iconshezhi01"></span>
                            设置
                        </a>
                    </li>
                    <li>
                        <a href="index.php?m=index&f=login&a=loginOut">
                            <span class="iconfont icon-tuichu"></span>
                            退出
                        </a>
                    </li>
                </ul>
            </div>
            <?php } else { ?>
            <a href="index.php?m=index&f=index&a=login">登录</a>
            <a href="index.php?m=index&f=index&a=reg">注册</a>
            <?php }?>
            <a href="index.php?m=index&f=write">
                <span class="iconfont icon-plumage"></span>
                写文章</a>
        </div>
    </main>
</header>
<!--头部-->
<div class="header"></div><?php }
}
