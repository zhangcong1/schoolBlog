<?php
/* Smarty version 3.1.30, created on 2018-03-17 08:40:46
  from "F:\server\Apache24\htdocs\schoolBlog\template\admin\showMessage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aacd48ec94217_05343050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7e31f2cc7bef2b4a24b5eec3162c537db1bc25e' => 
    array (
      0 => 'F:\\server\\Apache24\\htdocs\\schoolBlog\\template\\admin\\showMessage.html',
      1 => 1521275973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aacd48ec94217_05343050 (Smarty_Internal_Template $_smarty_tpl) {
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
    <title>添加管理员</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            list-style: none;
            text-decoration: none;
            vertical-align: middle;
        }
        body{
            padding: 20px;
            height: auto;
            background: #ffffff;
            /*box-shadow: 0 0 20px 5px rgba(0,0,0,0.3);*/
        }
        th{
            text-align: center;
            background: -webkit-linear-gradient(top,#73cfdc,#6aafb9);
        }
        .table>tbody>tr>td{
            text-align: center;
            width: 20%;
            vertical-align: middle;
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
<table class="container table table-striped table-bordered" style="margin-bottom: 0">
    <tr>
        <th>留言者</th>
        <th>留言文章</th>
        <th>留言内容</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["mcon"];?>
</td>
        <td>
            <a href="javascript:void (0)">
                <button type="button" class="btn btn-danger del" attr="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">删除</button>
            </a>
        </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<!--<div class="page"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>-->
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(".del").click(function () {
        let that=this;
        var mid=$(this).attr("attr");
        $.ajax({
            url:"index.php?m=admin&f=message&a=delete",
            data:{mid},
            type:"post",
            dataType:"text",
            success:function (e) {
                alert(e);
                if (e=="ok"){
                    $(that).parent().parent().parent().remove()
                }else {
                    alert("没有权限");
                    location.href="index.php?m=admin&f=message"
                }
            }
        })
    })
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
