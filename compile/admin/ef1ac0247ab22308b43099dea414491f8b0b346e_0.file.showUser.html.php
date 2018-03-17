<?php
/* Smarty version 3.1.30, created on 2017-11-09 07:53:17
  from "D:\wamp64\www\blog\template\admin\showUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a04096d5a01b9_92643438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef1ac0247ab22308b43099dea414491f8b0b346e' => 
    array (
      0 => 'D:\\wamp64\\www\\blog\\template\\admin\\showUser.html',
      1 => 1510213990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a04096d5a01b9_92643438 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>查看用户</title>
    <style>
        body{
            padding: 30px;
            height: 100%;
            background: #ffffff;
            /*box-shadow: 0 0 20px 5px rgba(0,0,0,0.3);*/
        }
        th{
            text-align: center;
            background: -webkit-linear-gradient(top,#73cfdc,#6aafb9);
        }
        .table>tbody>tr>td{
            text-align: center;
            width: 16.67%;
            vertical-align: middle;
        }
        td p{
            margin: 0;
        }
        td img{
            width: 50%;
        }
        .page{
            width: 100%;
            height: 40px;
            text-align: center;
            vertical-align: middle;
        }
        .page>a{
            display: inline-block;
            width: 40px;
            height: 40px;
            border: 1px solid #dfdfdf;
            border-radius: 10px;
            font-size: 18px;
            color: #333333;
            text-align: center;
            line-height: 40px;
            margin-top: 20px;
            margin-right: 10px;
            font-weight: 500;
        }
        .page>a:hover{
            background: #00bb29;
            text-decoration: none;
        }
        .page>a:nth-last-of-type(1),.page>a:nth-of-type(1){
            width: 60px;
        }
        .page>a:nth-last-of-type(2),.page>a:nth-of-type(2){
            width: 80px;
        }
    </style>
</head>
<body>
<table class="container table table-striped table-bordered">
    <tr>
        <th>用户名</th>
        <th>昵称</th>
        <th>等级</th>
        <th>手机</th>
        <th>头像</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["unick"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["rname"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uphone"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uhead"];?>
</td>
        <td>
            <a href="index.php?m=admin&f=user&a=update&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">
                <button type="button" class="btn btn-success">编辑</button>
            </a>
            <a href="index.php?m=admin&f=user&a=delete&uid=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
">
                <button type="button" class="btn btn-danger">删除</button>
            </a>
        </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<div class="page"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
</body>
</html><?php }
}
