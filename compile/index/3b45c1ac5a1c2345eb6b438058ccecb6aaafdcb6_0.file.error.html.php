<?php
/* Smarty version 3.1.30, created on 2017-11-08 09:22:15
  from "D:\wamp64\www\blog\template\index\error.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a02ccc733e5f6_31924417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b45c1ac5a1c2345eb6b438058ccecb6aaafdcb6' => 
    array (
      0 => 'D:\\wamp64\\www\\blog\\template\\index\\error.html',
      1 => 1510131259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a02ccc733e5f6_31924417 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>提示信息</title>

    <link href="http://g.alicdn.com/bui/bui/1.1.21/css/bs3/dpl.css" rel="stylesheet">
    <link href="http://g.alicdn.com/bui/bui/1.1.21/css/bs3/bui.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="demo-content">
    <div class="doc-content">
        <div class="row" style="position: absolute;left: 50%;top: 200px;transform: translateX(-50%)">
            <div class="span10">
                <div class="tips tips-large tips-warning">
                    <span class="x-icon x-icon-error">×</span>
                    <div class="tips-content">
                        <h2><?php echo $_smarty_tpl->tpl_vars['errorInfo']->value;?>
</h2>
                        <p class="auxiliary-text">
                            请等待<span id="second">3</span>秒，自动跳转
                        </p>
                        <p>
                            <a class="direct-lnk" title="返回上一页" href=<?php echo $_smarty_tpl->tpl_vars['uppage']->value;?>
>返回上一页</a>
                            <a class="direct-lnk" title="返回首页" href="index.php">返回首页</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- script end -->
</div>

<?php echo '<script'; ?>
>
    let num=3;
    $("#second").css({ "font-size":"20px","color":"green" })
    setInterval(function () {
        num--;
        if (num<=0){
            location.href="<?php echo $_smarty_tpl->tpl_vars['uppage']->value;?>
"
        }
        $("#second").html(num);
    },1000)
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
