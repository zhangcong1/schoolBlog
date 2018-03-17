<?php
/* Smarty version 3.1.30, created on 2017-11-08 04:00:43
  from "D:\wamp64\www\blog\template\index\account.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a02816b263063_39906818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '747a378166aeb9987f8800e04866ed3fb5e636ab' => 
    array (
      0 => 'D:\\wamp64\\www\\blog\\template\\index\\account.html',
      1 => 1510113637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a02816b263063_39906818 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<link rel="stylesheet" href="<?php echo CSS_URL;?>
/index/account.css">
<link rel="stylesheet" href="<?php echo ICON_URL;?>
">
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/account.js"><?php echo '</script'; ?>
>
    <!--账户-->
    <div class="account">
        <main>
            <ul class="user">
                <li>
                    <a href="" class="uhead"></a>
                    <div class="info">
                        <a href="">暖色调</a>
                        <br>
                        <span>未绑定手机</span>
                    </div>
                </li>
                <li>
                    <div class="yu">账户余额
                        <span>0</span>
                        <span>.00元</span>
                    </div>
                    <div class="action">
                        <a href="" class="chongzhi">充值</a>
                        <a href="" class="tixian">提现</a>
                        <span> * 当前余额不足</span>
                    </div>
                </li>
                <li>
                    <p>每次提现最小额度为￥100.00</p>
                    <p>每次提现收取 5% 手续费</p>
                    <p>提现会在 3-5 个工作日内到账</p>
                    <p>提现会在 3-5 个工作日内到账</p>
                    <p>提现会在 3-5 个工作日内到账</p>
                </li>
            </ul>
            <ul class="dingdan">
                <li>
                    <div class="time">时间</div>
                    <div class="type">类型</div>
                    <div class="details">详情</div>
                    <div class="money">金额</div>
                    <div class="state">状态</div>
                    <div class="operation">操作</div>
                </li>
                <li>
                    <div class="time">2017-10-27 11:47</div>
                    <div class="type">赞赏</div>
                    <div class="details">向<a href="">简书极品宝贝</a>的文章<a href="">《宝贝聊天室 | 双十一的正确剁手姿势》</a>送了两颗糖</div>
                    <div class="money">-￥2.00</div>
                    <div class="state">未支付</div>
                    <div class="operation">
                        <a href="">去支付</a>
                    </div>
                </li>
            </ul>
        </main>
    </div>
</body>
</html><?php }
}
