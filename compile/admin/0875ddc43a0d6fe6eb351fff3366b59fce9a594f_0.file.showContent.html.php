<?php
/* Smarty version 3.1.30, created on 2018-03-18 11:36:32
  from "D:\wamp64\www\schoolBlog\template\admin\showContent.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aae4f407f8e54_64522225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0875ddc43a0d6fe6eb351fff3366b59fce9a594f' => 
    array (
      0 => 'D:\\wamp64\\www\\schoolBlog\\template\\admin\\showContent.html',
      1 => 1510968566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aae4f407f8e54_64522225 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>查看内容</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
            vertical-align: middle;
        }
        a:hover{
            text-decoration: none;
        }
        body{
            padding: 20px;
            /*height: 600px;*/
            background: #ffffff;
            /*box-shadow: 0 0 20px 5px rgba(0,0,0,0.3);*/
        }
        th{
            text-align: center;
            background: -webkit-linear-gradient(top,#73cfdc,#6aafb9);
        }
        .table>tbody>tr>td{
            text-align: center;
            width: auto;
            vertical-align: middle;
        }
        .table>tbody>tr>td>img{
            width: 80%;
        }
        .top{
            margin: 10px;
        }
        .top>a{
            display: block;
            width: 100%;
            height: 100%;
            color: white;
        }
    </style>
</head>
<body>
<button type="button" class="btn btn-primary top">
    <a href="index.php?m=admin&f=content&a=saveCon">保存文章</a>
</button>
<button type="button" class="btn btn-primary top">
    <a href="index.php?m=admin&f=content&a=checkCon">待审核文章</a>
</button>
<button type="button" class="btn btn-primary top">
    <a href="index.php?m=admin&f=content">发布文章</a>
</button>
<button type="button" class="btn btn-primary top">
    <a href="index.php?m=admin&f=content&a=disableCon">禁用文章</a>
</button>
<table class="container table table-striped table-bordered">
    <tr>
        <th>标题</th>
        <th>作者</th>
        <th>文章等级</th>
        <th>缩略图</th>
        <th>日期</th>
        <th>所属分类</th>
        <th>价格</th>
        <th>状态</th>
        <th>推荐位</th>
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
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["climit"];?>
</td>
        <td style="width: 150px"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
" alt=""></td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["condate"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["price"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["state"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["pname"];?>
</td>
        <td>
            <a href="">
                <button type="button" class="btn btn-success">编辑</button>
            </a>
            <a href="">
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
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    /*$(".top").eq(0).click(function () {
        $(this).ajax({
            url:"index.php?m=admin&f=content&saveCon"
        })
    })*/
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
