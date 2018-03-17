<?php
/* Smarty version 3.1.30, created on 2018-03-17 07:08:15
  from "F:\server\Apache24\htdocs\schoolBlog\template\index\detail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aacbedf8859f7_74993230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd5fe5f62a45798402339aa8f6808c1e1daa7fc1' => 
    array (
      0 => 'F:\\server\\Apache24\\htdocs\\schoolBlog\\template\\index\\detail.html',
      1 => 1511238657,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aacbedf8859f7_74993230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<link rel="stylesheet" href="<?php echo CSS_URL;?>
/index/detail.css">
<link rel="stylesheet" href="<?php echo ICON_URL;?>
">
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/index/detail.js"><?php echo '</script'; ?>
>
    <!--详情-->
    <section class="detail">
        <div class="main1">
            <!--文章标题-->
            <h1><?php echo $_smarty_tpl->tpl_vars['data']->value["ctitle"];?>
</h1>
            <!--作者信息-->
            <div class="author">
                <a href="" class="authorHead">
                    <img src="<?php echo IMG_URL;?>
/myhead.png" alt="" width="100%">
                </a>
                <div class="info">
                    <a href="" class="name"><?php echo $_smarty_tpl->tpl_vars['data']->value["uname"];?>
</a>
                    <a href="" class="guanzhu">+ 关注</a>
                    <div class="authorInfo">
                        <span><?php echo $_smarty_tpl->tpl_vars['data']->value["condate"];?>
</span>
                        <span>字数  2102</span>
                        <span>阅读  <?php echo $_smarty_tpl->tpl_vars['hitnum']->value;?>
</span>
                        <span>评论  <?php echo $_smarty_tpl->tpl_vars['mnum']->value;?>
</span>
                        <span>喜欢  1214</span>
                    </div>
                </div>
            </div>
            <!--文章图片-->
            <div class="articalImg">
                <img src="<?php echo APP_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['thumb'];?>
" alt="" height="100%">
            </div>
            <!--文章内容-->
            <p><?php echo $_smarty_tpl->tpl_vars['data']->value["con"];?>
</p>
            <!--版权-->
            <div class="copy">
                <span class="iconfont "></span>
                <span>掌控时间：幸福生活的艺术</span>
                <span>© 著作权归作者所有</span>
                <a href="">举报文章</a>
            </div>
            <!--作者详细信息-->
            <div class="authorBox">
                <div class="top">
                    <a href="" class="authorHead">
                        <img src="<?php echo IMG_URL;?>
/myhead.png" alt="" width="100%">
                    </a>
                    <div class="info">
                        <a href="" class="name"><?php echo $_smarty_tpl->tpl_vars['data']->value["uname"];?>
</a>
                        <input type="hidden" class="hide1" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['uid'];?>
">
                        <input type="hidden" class="hide2" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
                        <?php if ($_smarty_tpl->tpl_vars['att']->value == 0) {?>
                        <a href="javascript:;" class="guanzhu1">
                            <span class="iconfont icon-jia-b"></span>
                            <span>关注</span>
                        </a>
                        <a href="javascript:;" class="guanzhu2" style="display: none">
                            <span class="iconfont icon-duigou"></span>
                            <span>已关注</span>
                        </a>
                        <?php } else { ?>
                        <a href="javascript:;" class="guanzhu1" style="display: none">
                            <span class="iconfont icon-jia-b"></span>
                            <span>关注</span>
                        </a>
                        <a href="javascript:;" class="guanzhu2">
                            <span class="iconfont icon-duigou"></span>
                            <span>已关注</span>
                        </a>
                        <?php }?>
                        <div class="authorInfo">
                            <span>写了 283304 字，被 22029 人关注，获得了 18625 个喜欢</span>
                        </div>
                    </div>
                </div>
                <div class="lianxi">简书签约作者。 微信：tyh520zxc 微信公众号：田宝谈写作。 田宝谈写作总目录：http://www.jianshu.com</div>
            </div>
            <div class="support">
                <p>写的好就赏吧，鼓励我给您推出更好的文！</p>
                <a href="">赞赏支持</a>
                <div class="supporter">
                    <ul>
                        <li>
                            <a href="">
                                <img src="<?php echo IMG_URL;?>
/1.jpg" alt="" height="100%">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img src="<?php echo IMG_URL;?>
/3.jpg" alt="" width="100%">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="love">
                <?php if ($_smarty_tpl->tpl_vars['like']->value) {?>
                <div class="like" style="display: none">
                    <a href="javascript:;">
                        <span class="iconfont icon-xin1"></span>
                        喜欢
                    </a>
                    <div class="feige"></div>
                    <a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['likenum']->value;?>
</a>
                </div>
                <div class="like1">
                    <a href="javascript:;">
                        <span class="iconfont icon-xin1"></span>
                        喜欢
                    </a>
                    <div class="feige"></div>
                    <a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['likenum']->value;?>
</a>
                </div>
                <?php } else { ?>
                <div class="like">
                    <a href="javascript:;">
                        <span class="iconfont icon-xin1"></span>
                        喜欢
                    </a>
                    <div class="feige"></div>
                    <a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['likenum']->value;?>
</a>
                </div>
                <div class="like1" style="display: none">
                    <a href="javascript:;">
                        <span class="iconfont icon-xin1"></span>
                        喜欢
                    </a>
                    <div class="feige"></div>
                    <a href="javascript:;"><?php echo $_smarty_tpl->tpl_vars['likenum']->value;?>
</a>
                </div>
                <?php }?>
                <ul class="share">
                    <li>
                        <a href="">
                            <span class="iconfont icon-weixin"></span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="iconfont icon-weibo"></span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="iconfont icon-qq"></span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            更多分享
                        </a>
                    </li>
                </ul>
            </div>
            <!--评论部分-->
            <div class="comment">
                <form class="commentArea" attr="<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
">
                    <a href="" class="ahead">
                        <img src="<?php echo IMG_URL;?>
/myhead.png" alt="" width="100%">
                    </a>
                    <textarea name="" id="textarea" cols="30" rows="10" placeholder="写下你的评论..."></textarea>
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['conid'];?>
" class="hide3">
                    <input type="button" value="发送">
                    <div class="cancel cancel2">取消</div>
                    <p>您还可以输入<span>200</span>字</p>
                </form>
                <div class="liuyan">
                    <div class="Ltop">
                        <span><?php echo $_smarty_tpl->tpl_vars['mnum']->value;?>
</span>条评论
                    </div>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data1']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                        <li>
                            <div class="Lauthor">
                                <a href="">
                                    <img src="<?php echo IMG_URL;?>
/3.jpg" alt="" width="100%">
                                </a>
                                <div class="Linfo">
                                    <a href=""><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</a>
                                    <br>
                                    <span>1楼</span>
                                    <span><?php echo $_smarty_tpl->tpl_vars['v']->value["mdate"];?>
</span>
                                </div>
                            </div>
                            <p><?php echo $_smarty_tpl->tpl_vars['v']->value["mcon"];?>
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
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value["son"], 'val');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
?>
                                <li>
                                    <p><a href=""><?php echo $_smarty_tpl->tpl_vars['val']->value["uname"];?>
</a>:
                                        <span><?php echo $_smarty_tpl->tpl_vars['val']->value["mcon"];?>
</span>
                                    </p>
                                    <span><?php echo $_smarty_tpl->tpl_vars['val']->value["mdate"];?>
</span>
                                    <a href="javascript:;" class="reAgain" author="<?php echo $_smarty_tpl->tpl_vars['val']->value['uname'];?>
">
                                        <span class="iconfont icon-liuyan"></span>
                                        回复</a>

                                </li>
                                <?php if ($_smarty_tpl->tpl_vars['val']->value["uname"]) {?>
                                <div class="addNew" style="display: block">
                                    <a href="javascript:;">
                                        <span class="iconfont icon-pencil"></span>
                                        添加新评论
                                    </a>
                                </div>
                                <?php }?>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                <form class="commentArea">
                                    <textarea name="" id="textarea1" cols="30" rows="10" placeholder="写下你的评论..."></textarea>
                                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['conid'];?>
" class="hide3">
                                    <input type="button" value="发送" class="replayBtn" mid="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">
                                    <div class="cancel cancel1">取消</div>
                                    <p>您还可以输入<span>200</span>字</p>
                                </form>
                            </ul>
                        </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="footer">

    </section>
</body>
</html><?php }
}
