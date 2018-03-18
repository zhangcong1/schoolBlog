<?php
/* Smarty version 3.1.30, created on 2018-03-18 11:36:15
  from "D:\wamp64\www\schoolBlog\template\admin\addUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aae4f2f5e1769_44130081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee10c04eee9ec660e7f27b8331bca0b09b025ec6' => 
    array (
      0 => 'D:\\wamp64\\www\\schoolBlog\\template\\admin\\addUser.html',
      1 => 1509354098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aae4f2f5e1769_44130081 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo UEDITOR_URL;?>
/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo UEDITOR_URL;?>
/ueditor.all.min.js"> <?php echo '</script'; ?>
>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo UEDITOR_URL;?>
/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>

    <title>添加用户</title>
    <style>
        body{
            padding: 40px;
            min-height: 600px;
            background: #ffffff;
            box-shadow: 0 0 20px 5px rgba(0,0,0,0.3);
        }
        form{
            width: 100%;
            height: auto;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
<form action="index.php?m=admin&f=user&a=addUser" method="post">
    <h2>添加用户</h2>
    <div class="form-group">
        <label for="exampleInputEmail1">用户名</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入用户名" name="uname">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">密码</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="请输入密码" name="upass">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail2">昵称</label>
        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="请输入昵称" name="unick">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail4">用户手机号</label>
        <input type="text" class="form-control" id="exampleInputEmail4" placeholder="请输入用户手机" name="uphone">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail3">用户等级</label>
        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="请输入用户等级" name="ulevel">
    </div>
    <div class="form-group">
        <label>上传头像</label>
        <?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:100%;height:200px" name="uhead"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
        var ue = UE.getEditor('editor');
        <?php echo '</script'; ?>
>
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
