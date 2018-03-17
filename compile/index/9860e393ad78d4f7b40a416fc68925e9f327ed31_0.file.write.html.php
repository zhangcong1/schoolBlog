<?php
/* Smarty version 3.1.30, created on 2017-11-14 05:34:09
  from "D:\wamp64\www\blog\template\index\write.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0a80513212a8_57930996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9860e393ad78d4f7b40a416fc68925e9f327ed31' => 
    array (
      0 => 'D:\\wamp64\\www\\blog\\template\\index\\write.html',
      1 => 1510637646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0a80513212a8_57930996 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/index/write.css">
    <link rel="stylesheet" href="<?php echo ICON_URL;?>
">
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo UEDITOR_URL;?>
/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo UEDITOR_URL;?>
/ueditor.all.min.js"> <?php echo '</script'; ?>
>
    &lt;!&ndash;建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败&ndash;&gt;
    &lt;!&ndash;这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文&ndash;&gt;
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo UEDITOR_URL;?>
/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
    <title>写文章</title>
</head>
<body>
    <div class="left">
        <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

        <a href="" class="back">回首页</a>
        文章所属分类
        <select name="" id="">
            <option value="">历史</option>
            <option value="">沟通</option>
            <option value="">经济</option>
            <option value="">文化</option>
        </select>
    </div>
    <form action="">
        <div class="middle">
            <a href="" class="new"><span class="iconfont icon-jia-b"></span>文章标题</a>
            <input type="text" placeholder="请添加文章标题">
            <a href="" class="new"><span class="iconfont icon-jia-b"></span>文章价格</a>
            <input type="text" placeholder="请输入文章价格">
            <a href="" class="new"><span class="iconfont icon-jia-b"></span>文章权限</a>
            <input type="text" placeholder="请">
            <input type="submit" value="发布文章">
        </div>
    </form>
    <?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:calc(100% - 590px);height:520px;float: left" name="scon"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
    var ue = UE.getEditor('editor');
    <?php echo '</script'; ?>
>
</body>
</html>-->
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
/index/write.css">
    <title>写文章</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-xs-4 left">
                <a href="index.php" class="back">返回首页</a>
                <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

            </div>
            <div class="col-md-9 col-xs-8">
                <iframe src="" frameborder="0" name="right" srcdoc="<p>请选择专题发布或保存您的文章</p>"></iframe>
            </div>
        </div>
    </div>
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(".parent").click(function () {
            $(this).next("ul").toggle(200)
        })
        $(".left>ul>li").click(function () {
            $(".left>ul>li").css("background","transparent")
            $(this).css("background","#646464")
        })
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}
