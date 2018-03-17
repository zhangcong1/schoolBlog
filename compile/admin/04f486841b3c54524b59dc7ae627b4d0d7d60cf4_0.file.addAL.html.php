<?php
/* Smarty version 3.1.30, created on 2017-11-09 04:40:27
  from "D:\wamp64\www\blog\template\admin\addAL.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a03dc3b67c404_08444878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04f486841b3c54524b59dc7ae627b4d0d7d60cf4' => 
    array (
      0 => 'D:\\wamp64\\www\\blog\\template\\admin\\addAL.html',
      1 => 1510202234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a03dc3b67c404_08444878 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/bootstrap.min.css">

    <title>添加文章等级</title>
    <style>
        body{
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
    <h2>添加文章等级</h2>
    <div class="form-group">
        <label for="alname">文章等级名称</label>
        <input type="text" class="form-control" id="alname" placeholder="请输入文章等级名称" name="alname">
    </div>
    <button type="submit" class="btn btn-primary btn-lg btn-block">添加</button>
</form>
</body>
</html>
<?php }
}
