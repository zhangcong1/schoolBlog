<?php
/* Smarty version 3.1.30, created on 2017-12-10 08:50:19
  from "D:\wamp64\www\blog\template\index\lists.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2cf54bebc300_03532358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd785369494b7d76e8bbdac080ffedbc6eee1fd4a' => 
    array (
      0 => 'D:\\wamp64\\www\\blog\\template\\index\\lists.html',
      1 => 1512895817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2cf54bebc300_03532358 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<link rel="stylesheet" href="<?php echo CSS_URL;?>
/index/lists.css">
<link rel="stylesheet" href="<?php echo ICON_URL;?>
">
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/index/lists.js"><?php echo '</script'; ?>
>
    <!--列表-->
    <div class="con">
        <main>
            <div class="left">
                <div class="head">
                    <div class="headImg1">
                        <img src="<?php echo APP_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['cimage'];?>
" alt="" height="100%">
                    </div>
                    <h2><?php echo $_smarty_tpl->tpl_vars['data']->value["cname"];?>
</h2>
                    <div class="shoulu">收录了67884篇文章 · 1060913人关注</div>
                    <a href="index.php?m=index&f=write" class="tougao">投稿</a>
                    <a href="" class="guanzhu">
                        <span class="iconfont icon-jia-b"></span>
                        关注
                    </a>
                </div>
                <ul class="menu">
                    <li>
                        <a href="javascript:void (0);">
                            <span class="iconfont icon-tuijian"></span>
                            最新评论
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void (0);">
                            <span class="iconfont icon-remen"></span>
                            最新收录
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void (0);">
                            <span class="iconfont icon-remen"></span>
                            热门
                        </a>
                    </li>
                </ul>
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
                            <span>9小时前</span>
                        </div>
                        <a href="index.php?m=index&f=index&a=detail&conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</a>
                        <div class="p">
                            <?php echo $_smarty_tpl->tpl_vars['v']->value["con"];?>

                        </div>
                        <div class="foot">
                            <a href="" class="fenlei"><?php echo $_smarty_tpl->tpl_vars['data']->value["cname"];?>
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
            </div>
            <div class="gonggao">
                <p>专题公告</p>
                <div class="content">
                    <p><?php echo $_smarty_tpl->tpl_vars['data']->value["cinfo"];?>
</p>
                    <p>投稿须知：
                        <br>
                        1.本专题仅收录关于爱情的文章。注意：爱情类小说除非足够精彩然后不是连载，不然不在收录范围。另外关于名人伟人的爱情故事也请改投相关专题
                        <br>
                        2.第一条中爱情类小说的“精彩”，是指文章有小说的基本结构，运用了基本写法，语言流畅，情节动人。诸如Ａ说Ｂ又说这样毫无人物描写、场景描写的文章就请改投其他相关专题。
                        <br>
                        3.请保证文章质量和基本排版，勿出现大量黑体和不相关图片（图片不宜多）
                        <br>
                        4.文章字数尽量在1000字以上，当然特别精彩的文章可忽略这个要求
                    </p>
                    <p>
                        专题主编 枫小梦<br>
                        <a href="http://www.jianshu.com/u/6aa245e48ccc">http://www.jianshu.com/u/6aa245e48ccc</a><br>
                        添加主编微信 conan314 进入谈谈情说说爱官方社群。
                    </p>
                    <p>关注简书官方微信公众号（jianshuio）,及时阅读简书热门好文</p>
                    <p>关注公众号 “简宝玉” （jianshubaoyu），进入简书丰富多彩的专题社群！</p>
                </div>
                <a href="javascript:void(0);" class="extend">展开描述 V</a>
                <div class="share">
                    分享到
                    <a href="">
                        <span class="iconfont icon-weibo"></span>
                    </a>
                    <a href="">
                        <span class="iconfont icon-weixin"></span>
                    </a>
                    <a href="">
                        <span class="iconfont icon-qq"></span>
                    </a>
                </div>
            </div>
        </main>
    </div>
</body>
</html><?php }
}
