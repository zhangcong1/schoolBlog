<?php
/* Smarty version 3.1.30, created on 2017-11-21 03:05:31
  from "D:\wamp64\www\blog\template\index\mespart.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1397fb736368_68105971',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4c1f2863d938d0daae80aff4db18bdcf0e8e896' => 
    array (
      0 => 'D:\\wamp64\\www\\blog\\template\\index\\mespart.html',
      1 => 1511227217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1397fb736368_68105971 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="Lauthor">
    <a href="">
        <img src="<?php echo IMG_URL;?>
/3.jpg" alt="" width="100%">
    </a>
    <div class="Linfo">
        <a href=""><?php echo $_smarty_tpl->tpl_vars['uname1']->value;?>
</a>
        <br>
        <span>1楼</span>
        <span><?php echo $_smarty_tpl->tpl_vars['data']->value["mdate"];?>
</span>
    </div>
</div>
<p><?php echo $_smarty_tpl->tpl_vars['mcon']->value;?>
</p>
<div class="Lgood">
    <a href="">
        <span class="iconfont icon-dianzan"></span>
        15人点赞</a>
    <a href="javascript:;" class="replaybtn">
        <span class="iconfont icon-liuyan"></span>
        回复</a>
</div>
<ul class="huifu">
    <div class="addNew">
        <a href="javascript:;">
            <span class="iconfont icon-pencil"></span>
            添加新评论
        </a>
    </div>
    <form class="commentArea">
        <textarea name="" id="textarea1" cols="30" rows="10" placeholder="写下你的评论..."></textarea>
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['conid'];?>
" class="hide3">
        <input type="button" value="发送" class="replayBtn" mid="<?php echo $_smarty_tpl->tpl_vars['data']->value['mid'];?>
">
        <div class="cancel cancel1">取消</div>
        <p>您还可以输入<span>200</span>字</p>
    </form>
</ul><?php }
}
