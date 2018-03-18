<?php
/* Smarty version 3.1.30, created on 2018-03-18 11:36:18
  from "D:\wamp64\www\schoolBlog\template\admin\addRole.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aae4f320d72f1_52239112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5413378994f1aa03bd607dc7ce7e7c34b3b4ed4' => 
    array (
      0 => 'D:\\wamp64\\www\\schoolBlog\\template\\admin\\addRole.html',
      1 => 1521277488,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aae4f320d72f1_52239112 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/bootstrap.min.css">

    <title>添加用户角色</title>
    <style>
        body{
            width: 100vw;
            height: 100vh;
            padding: 40px;
            min-height: 600px;
            background: #ffffff;
            box-shadow: 0 0 20px 5px rgba(0,0,0,0.3);
        }
        form{
            width: 500px;
            height: auto;
            margin: 0 auto;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
<form action="index.php?m=admin&f=user&a=addRoleCon" method="post">
    <h2>添加用户角色</h2>
    <div class="form-group">
        <label for="rname">用户角色</label>
        <input type="text" class="form-control" id="rname" placeholder="请输入用户角色" name="rname">
    </div>
    <div class="form-group">
        <label for="connum">发布文章数量</label>
        <input type="text" class="form-control" id="connum" placeholder="请输入发布文章数量" name="connum">
    </div>
    <div class="form-group">
        <label>查看文章级别</label><br>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <label for="<?php echo $_smarty_tpl->tpl_vars['v']->value['alid'];?>
" style="margin: 5px"><?php echo $_smarty_tpl->tpl_vars['v']->value["alname"];?>
: </label><input type="radio" name="conlevel" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['alid'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['v']->value['alid'];?>
" style="margin: 5px">
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">添加</button>
</form>
</body>
</html><?php }
}
