<?php
/* Smarty version 3.1.30, created on 2017-12-10 08:47:25
  from "D:\wamp64\www\blog\template\index\classify.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2cf49dedee14_03767645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35a0fceaac8b285a11394afe7bffe34fef0ef7da' => 
    array (
      0 => 'D:\\wamp64\\www\\blog\\template\\index\\classify.html',
      1 => 1512895641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2cf49dedee14_03767645 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<link rel="stylesheet" href="<?php echo CSS_URL;?>
/index/classify.css">
<link rel="stylesheet" href="<?php echo ICON_URL;?>
">
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/index/classify.js"><?php echo '</script'; ?>
>
    <!--全部专题-->
    <section class="zhuanti">
        <main>
            <div class="headImg">
                <img src="<?php echo IMG_URL;?>
/zhuanti.png" alt="" width="100%">
                <a href="">
                    <span class="iconfont icon-wenhao"></span>
                    如何创建并玩转专题
                </a>
            </div>
            <ul class="menu">
                <li>
                    <a href="javascript:void (0);">
                        <span class="iconfont icon-tuijian"></span>
                        推荐
                    </a>
                </li>
                <li>
                    <a href="javascript:void (0);">
                        <span class="iconfont icon-remen"></span>
                        热门
                    </a>
                </li>
                <li>
                    <a href="javascript:void (0);">
                        <span class="iconfont icon-chengshi"></span>
                        城市
                    </a>
                </li>
                <li>
                    <a href="javascript:void (0);">
                        <span class="iconfont icon-boshimao-copy"></span>
                        校园
                    </a>
                </li>
            </ul>
            <ul class="lists">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li>
                    <div class="content">
                        <a href="index.php?m=index&f=index&a=lists&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" class="conHead">
                            <img src="<?php echo APP_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['cimage'];?>
" alt="" height="100%">
                        </a>
                        <a href="index.php?m=index&f=index&a=lists&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
                            <h4><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</h4>
                            <p><?php echo $_smarty_tpl->tpl_vars['v']->value["cinfo"];?>
</p>
                        </a>
                        <a href="index.php?m=index&f=index&a=lists&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" class="guanzhu">
                            <!--<span class="iconfont icon-jia-b"></span>-->
                            <span>点击进入</span>
                        </a>
                        <a href="javascript:;" class="guanzhu1">
                            <span class="iconfont icon-duigou"></span>
                            <span>已关注</span>
                        </a>
                        <div class="count">
                            <a href="">67855篇文章</a>
                            <span> · 1060.6K人关注</span>
                        </div>
                    </div>
                </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </ul>
        </main>
    </section>
</body>
</html><?php }
}
