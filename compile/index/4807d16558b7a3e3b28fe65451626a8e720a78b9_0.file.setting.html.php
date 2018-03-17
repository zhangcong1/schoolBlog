<?php
/* Smarty version 3.1.30, created on 2017-12-10 09:13:03
  from "D:\wamp64\www\blog\template\index\setting.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2cfa9fe4bd60_16083878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4807d16558b7a3e3b28fe65451626a8e720a78b9' => 
    array (
      0 => 'D:\\wamp64\\www\\blog\\template\\index\\setting.html',
      1 => 1512897179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2cfa9fe4bd60_16083878 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<link rel="stylesheet" href="<?php echo CSS_URL;?>
/index/setting.css">
<link rel="stylesheet" href="<?php echo ICON_URL;?>
">
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/index/setting.js"><?php echo '</script'; ?>
>
    <!--设置-->
    <section class="setting">
        <main>
            <ul class="setLeft">
                <li>
                    <a href="javascript:void (0);">
                        <div class="seticon">
                            <span class="iconfont icon-iconshezhi01"></span>
                        </div>
                        基础设置
                    </a>
                </li>
                <li>
                    <a href="javascript:void (0);">
                        <div class="seticon">
                            <span class="iconfont icon-iconshezhi01"></span>
                        </div>
                        个人资料
                    </a>
                </li>
                <li>
                    <a href="javascript:void (0);">
                        <div class="seticon">
                            <span class="iconfont icon-iconshezhi01"></span>
                        </div>
                        账号管理
                    </a>
                </li>
            </ul>
            <div class="setRight">
                <form action="">
                    <div class="uhead">
                        <img src="<?php echo IMG_URL;?>
/myhead.png" alt="" height="100%">
                    </div>
                    <div style="display: inline-block;position: relative">
                        <a href="" class="change">更改头像</a>
                        <input type="file" style="position: absolute;left: 40px;top: 0;width: 100%;height: 100%;opacity: 0">
                    </div>
                    <div class="nick">
                        <span>昵称</span>
                        <input type="text" value="暖色调">
                    </div>
                    <div class="nick">
                        <span>手机</span>
                        159****2153
                        <!--<input type="text" value="15935412153">-->
                        <a href="">修改</a>
                    </div>
                    <div class="nick">
                        <span>注册时间</span>
                        <!--<input type="text" value="">-->
                        2017/10/25
                        <a href="">注销账户</a>
                    </div>
                    <input type="submit" value="保存">
                </form>
                <form action="">
                    <div class="nick">
                        <span>性别</span>
                        <input type="radio" name="sex"><b>男</b>
                        <input type="radio" name="sex"><b>女</b>
                        <input type="radio" name="sex"><b>保密</b>
                    </div>
                    <div class="nick">
                        <span>个人简介</span>
                        <textarea name="" id="" cols="30" rows="10" placeholder="填写你的个人简介..."></textarea>
                    </div>
                    <input type="submit" value="保存">
                </form>
            </div>
        </main>
    </section>
</body>
</html><?php }
}
