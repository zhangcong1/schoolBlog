<?php
/* Smarty version 3.1.30, created on 2018-03-17 06:15:24
  from "F:\server\Apache24\htdocs\schoolBlog\template\admin\addRank.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aacb27cdbbd25_06949847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6a19ee3d060732217487fed0e83dbe589274513' => 
    array (
      0 => 'F:\\server\\Apache24\\htdocs\\schoolBlog\\template\\admin\\addRank.html',
      1 => 1521267321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aacb27cdbbd25_06949847 (Smarty_Internal_Template $_smarty_tpl) {
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

    <title>添加管理员等级</title>
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
<form action="index.php?m=admin&f=adminM&a=addAdmin" method="post">
    <h2>添加管理员等级</h2>
    <div class="form-group">
        <label for="exampleInputEmail1">管理员等级</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="请输入管理员等级" name="admin">
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">添加</button>
</form>
</body>
</html><?php }
}
