<?php
/* Smarty version 3.1.30, created on 2017-11-18 07:29:02
  from "D:\wamp64\www\blog\template\index\hot.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fe13ecbe614_94601512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ffa679268f1edf8669983eedd2be06308534878' => 
    array (
      0 => 'D:\\wamp64\\www\\blog\\template\\index\\hot.html',
      1 => 1510990140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0fe13ecbe614_94601512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<link rel="stylesheet" href="<?php echo CSS_URL;?>
/index/hot.css">
<link rel="stylesheet" href="<?php echo ICON_URL;?>
">
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/index.js"><?php echo '</script'; ?>
>
<!--banner-->
<section>
    <main>
        <!--专题-->
        <div class="zhuanti">
            <div class="hotImg">
                <img src="<?php echo IMG_URL;?>
/7hot.png" alt="" width="100%">
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
                            8801
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
            <a href="" class="readMore">阅读更多</a>
        </div>
        <!--热门推荐-->
        <div class="hot">
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
