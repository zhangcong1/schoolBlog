<?php
/* Smarty version 3.1.30, created on 2017-11-18 02:34:27
  from "D:\wamp64\www\blog\template\index\addCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0f9c33313128_94862137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3055a0e23176557f4148f477404f64411de9633e' => 
    array (
      0 => 'D:\\wamp64\\www\\blog\\template\\index\\addCon.html',
      1 => 1510972463,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0f9c33313128_94862137 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            list-style: none;
            text-decoration: none;
        }
       /* html,body{
            width: 100%;
            height: 100%;
        }*/
        .new{
            display: block;
            width: 160px;
            height: 60px;
            font-size: 24px;
            color: #333333;
            border: 1px solid #ec7259;
            border-radius: 100px;
            text-align: center;
            line-height: 60px;
            text-decoration: none;
            margin: 30px 20px;
        }
        .save{
            float: left;
            padding: 0 20px;
            box-sizing: border-box;
            width: 50%;
            height: 100%;
            border-right: 1px solid #dfdfdf;
        }
        table{
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }
        tr{
            height: 25px;
        }
    </style>
</head>
<body>
    <a href="index.php?m=index&f=write&a=addConCon&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
" class="new">新建文章</a>
    <div class="save">
        <h2>已保存文章</h2>
        <table>
            <tr>
                <th>文章标题</th>
                <th>保存日期</th>
                <th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["condate"];?>
</td>
                <td>
                    <a href="index.php?m=index&f=write&a=editCon&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
&conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">编辑</a>
                </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
    </div>
    <div class="save">
        <h2>已发布文章</h2>
        <table>
            <tr>
                <th>文章标题</th>
                <th>保存日期</th>
                <th>操作</th>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data1']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value["condate"];?>
</td>
                <td>
                    <a href="index.php?m=index&f=write&a=editCon&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
&conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
">编辑</a>
                </td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
    </div>
</body>
</html><?php }
}
