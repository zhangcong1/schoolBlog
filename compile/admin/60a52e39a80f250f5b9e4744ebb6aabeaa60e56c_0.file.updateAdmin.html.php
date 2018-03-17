<?php
/* Smarty version 3.1.30, created on 2018-03-17 08:55:56
  from "F:\server\Apache24\htdocs\schoolBlog\template\admin\updateAdmin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aacd81cf14dd6_62012433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60a52e39a80f250f5b9e4744ebb6aabeaa60e56c' => 
    array (
      0 => 'F:\\server\\Apache24\\htdocs\\schoolBlog\\template\\admin\\updateAdmin.html',
      1 => 1521276952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aacd81cf14dd6_62012433 (Smarty_Internal_Template $_smarty_tpl) {
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

    <title>修改管理员</title>
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
        .headPic{
            margin: 0 auto;
            width: 100px;
            height: 100px;
            overflow: hidden;
        }
    </style>
</head>
<body>
<form action="index.php?m=admin&f=adminM&a=updateAdmin&aid=<?php echo $_smarty_tpl->tpl_vars['aid']->value;?>
" method="post">
    <h2>修改管理员信息</h2>
    <div class="form-group">
        <label for="exampleInputEmail1">用户名</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入管理员姓名" name="aname" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['aname'];?>
">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">密码</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="请输入密码" name="apass" value="">
    </div>
    <div class="form-group">
        <label>角色</label>
        <select class="form-control" name="level">
            <option value="0">* 请选择管理员角色</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['arr']->value["level"] == $_smarty_tpl->tpl_vars['v']->value["lid"]) {?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['arr']->value['level'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['v']->value["lname"];?>
</option>
            <?php } else { ?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["lname"];?>
</option>
            <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
    </div>
    <div class="form-group parent">
        <label>头像</label>
        <div class="headPic">
            <img src="<?php echo APP_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['arr']->value['ahead'];?>
" alt="" height="100%">
        </div>
        <label>修改头像</label>
        <input type="hidden" name="ahead" value="">
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">添加</button>
</form>
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/upload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/admin/addAdmin.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
