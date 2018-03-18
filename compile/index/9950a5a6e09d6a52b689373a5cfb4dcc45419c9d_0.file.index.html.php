<?php
/* Smarty version 3.1.30, created on 2018-03-18 11:21:22
  from "D:\wamp64\www\schoolBlog\template\index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aae4bb2aa2533_47581146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9950a5a6e09d6a52b689373a5cfb4dcc45419c9d' => 
    array (
      0 => 'D:\\wamp64\\www\\schoolBlog\\template\\index\\index.html',
      1 => 1512891950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aae4bb2aa2533_47581146 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<link rel="stylesheet" href="<?php echo CSS_URL;?>
/index/index.css">
<link rel="stylesheet" href="<?php echo ICON_URL;?>
">
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/index/banner/velocity.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/index/banner/shutter.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo JS_URL;?>
/index/banner/shutter.css">
    <!--banner-->
    <section>
        <main>
            <!--banner-->
            <!--<div class="banner">
                <a href="javascript:void (0)" class="back">
                    <span class="iconfont icon-qianjin"></span>
                </a>
                <a href="javascript:void (0)" class="forward">
                    <span class="iconfont icon-qianjin-copy"></span>
                </a>
                <ul class="leftBox">
                    <li>
                        <a href="" class="left">
                            <img src="<?php echo IMG_URL;?>
/banner1.jpg" alt="" width="100%">
                        </a>
                    </li>
                    <li>
                        <a href="" class="left">
                            <img src="<?php echo IMG_URL;?>
/banner2.jpg" alt="" width="100%">
                        </a>
                    </li>
                    <li>
                        <a href="" class="left">
                            <img src="<?php echo IMG_URL;?>
/banner3.jpg" alt="" width="100%">
                        </a>
                    </li>
                    <li>
                        <a href="" class="left">
                            <img src="<?php echo IMG_URL;?>
/banner4.png" alt="" width="100%">
                        </a>
                    </li>
                </ul>
                <ul class="rightBox">
                    <li>
                        <a href="">
                            <img src="<?php echo IMG_URL;?>
/banner1.jpg" alt="" width="100%">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php echo IMG_URL;?>
/banner2.jpg" alt="" width="100%">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php echo IMG_URL;?>
/banner3.jpg" alt="" width="100%">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="<?php echo IMG_URL;?>
/banner4.png" alt="" width="100%">
                        </a>
                    </li>
                </ul>
            </div>-->
            <div class="shutter">
                <div class="shutter-img">
                    <a href="index.php?m=index&f=index&a=detail&conid=6" data-shutter-title="风雪夜归人"><img src="<?php echo IMG_URL;?>
/ban2.jpg" alt="#"></a>
                    <a href="index.php?m=index&f=index&a=detail&conid=6" data-shutter-title="假如我有一双翅膀"><img src="<?php echo IMG_URL;?>
/ban1.jpg" alt="#"></a>
                    <a href="index.php?m=index&f=index&a=detail&conid=6" data-shutter-title="随遇而安，感恩遇见"><img src="<?php echo IMG_URL;?>
/ban3.jpg" alt="#"></a>
                    <a href="index.php?m=index&f=index&a=detail&conid=6" data-shutter-title="对不起，是我没有好好珍惜"><img src="<?php echo IMG_URL;?>
/ban4.jpg" alt="#"></a>
                </div>
                <ul class="shutter-btn">
                    <li class="prev"></li>
                    <li class="next"></li>
                </ul>
                <div class="shutter-desc">
                    <p>假如我有一双翅膀</p>
                </div>
            </div>
            <!--专题-->
            <div class="zhuanti">
                <div class="more">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <a href="index.php?m=index&f=index&a=lists&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
                        <img src="<?php echo APP_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['cimage'];?>
" alt="" width="32px" height="32px">
                        <span><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</span>
                    </a>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <a href="index.php?m=index&f=index&a=classify">更多热门专题  &gt;</a>
                </div>
                <!--发表文章-->
                <ul class="list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data1']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                    <li>
                        <div class="author">
                            <a href="" class="headImg">
                                <img src="<?php echo IMG_URL;?>
/myhead.png" alt="" height="100%">
                            </a>
                            <a href="" class="user"><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</a>
                            <span><?php echo $_smarty_tpl->tpl_vars['v']->value['condate'];?>
</span>
                        </div>
                        <a href="index.php?m=index&f=index&a=detail&conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</a>
                        <div class="p">
                            <?php echo $_smarty_tpl->tpl_vars['v']->value["con"];?>

                        </div>
                        <div class="foot">
                            <a href="" class="fenlei"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a>
                            <a href="" class="lookup">
                                <span class="iconfont icon-liulan"></span>
                                <?php echo $_smarty_tpl->tpl_vars['v']->value["hit"];?>

                            </a>
                            <a href="" class="lookup">
                                <span class="iconfont icon-message"></span>
                                134
                            </a>
                            <span class="lookup">
                                <span class="iconfont icon-xin"></span>
                                481
                            </span>
                            <span class="lookup">
                                <span class="iconfont icon-dashang"></span>
                                81
                            </span>
                        </div>
                        <div class="image">
                            <img src="<?php echo APP_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
" alt="" height="100%">
                        </div>
                    </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
                <a href="javascript:;" class="readMore">阅读更多</a>
            </div>
            <!--热门推荐-->
            <div class="hot">
                <div class="rank">
                    <a href="index.php?m=index&f=hot">
                        <img src="<?php echo IMG_URL;?>
/hot1.png" alt="" width="100%">
                    </a>
                    <a href="index.php?m=index&f=hot">
                        <img src="<?php echo IMG_URL;?>
/hot2.png" alt="" width="100%">
                    </a>
                    <a href="index.php?m=index&f=hot">
                        <img src="<?php echo IMG_URL;?>
/hot3.png" alt="" width="100%">
                    </a>
                    <a href="">
                        <img src="<?php echo IMG_URL;?>
/hot4.png" alt="" width="100%">
                    </a>
                    <a href="">
                        <img src="<?php echo IMG_URL;?>
/hot5.png" alt="" width="100%">
                    </a>
                </div>
                <a href="" class="app">
                    <div class="appIMG">
                        <img src="<?php echo IMG_URL;?>
/app.png" alt="" width="100%">
                    </div>
                    <div class="appTitle">下载简书小说app &gt;</div>
                    <div class="discription">随时随地发现和创建内容</div>
                </a>
                <!--推荐作者-->
                <div class="recommend">
                    <div class="reTitle">
                        <span>推荐作者</span>
                        <a href="">
                            <span class="iconfont icon-huanyihuan"></span>
                            <span>换一换</span>
                        </a>
                    </div>
                    <ul class="reAuthor">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data2']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <li>
                            <div class="reHead">
                                <img src="<?php echo IMG_URL;?>
/3.jpg" alt="" width="100%">
                            </div>
                            <div class="reName">
                                <span><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</span>
                                <a href="">+ 关注</a>
                            </div>
                            <p>写了361.7k字 · 20.3k喜欢</p>
                        </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>
                    <a href="" class="all">查看全部 &gt;</a>
                </div>
            </div>
        </main>
    </section>
    <div class="TOP">
        <span class="iconfont icon-12"></span>
    </div>
</body>
</html><?php }
}
