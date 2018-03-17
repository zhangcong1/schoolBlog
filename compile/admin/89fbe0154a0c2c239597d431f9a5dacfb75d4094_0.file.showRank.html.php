<?php
/* Smarty version 3.1.30, created on 2017-11-09 04:35:16
  from "D:\wamp64\www\blog\template\admin\showRank.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a03db04732393_88774427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89fbe0154a0c2c239597d431f9a5dacfb75d4094' => 
    array (
      0 => 'D:\\wamp64\\www\\blog\\template\\admin\\showRank.html',
      1 => 1510127989,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a03db04732393_88774427 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>表格使用弹出框编辑</title>

    <link href="http://g.alicdn.com/bui/bui/1.1.21/css/bs3/dpl.css" rel="stylesheet">
    <link href="http://g.alicdn.com/bui/bui/1.1.21/css/bs3/bui.css" rel="stylesheet">

</head>
<body>
<div class="demo-content">
    <div class="row">
        <div class="span16">
            <div id="grid">

            </div>
        </div>
    </div>
    <!-- 初始隐藏 dialog内容 -->
    <div id="content" class="hide">
        <form class="form-horizontal" method="post">
            <div class="row">
                <div class="control-group span8">
                    <label class="control-label"><s>*</s>管理员角色：</label>
                    <div class="controls">
                        <input name="lname" type="text" data-rules="{ required:true }" class="input-normal control-text">
                        <input type="hidden" name="lid">
                    </div>
                </div>
                <div class="control-group span12">
                    <label class="control-label">留言权限：</label>
                    <div class="controls bui-form-field-select" data-select="{ multipleSelect:true,items : [{ text:'增加',value:'1' },{ text:'删除',value:'2' },{ text:'修改',value:'3' },{ text:'查询',value:'4' }] }">
                        <input type="hidden" name="messagenum">
                    </div>
                </div>
                <div class="control-group span12">
                    <label class="control-label">内容权限：</label>
                    <div class="controls bui-form-field-select" data-select="{ multipleSelect:true,items : [{ text:'增加',value:'1' },{ text:'删除',value:'2' },{ text:'修改',value:'3' },{ text:'查询',value:'4' }]}">
                        <input type="hidden" name="connum">
                    </div>
                </div>
                <div class="control-group span12">
                    <label class="control-label">管理员权限：</label>
                    <div class="controls bui-form-field-select" data-select="{ multipleSelect:true,items : [{ text:'增加',value:'1' },{ text:'删除',value:'2' },{ text:'修改',value:'3' },{ text:'查询',value:'4' }]}">
                        <input type="hidden" name="adminnum">
                    </div>
                </div>
            </div>
        </form>
    </div>


    <?php echo '<script'; ?>
 src="http://g.tbcdn.cn/fi/bui/jquery-1.8.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://g.alicdn.com/bui/seajs/2.3.0/sea.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://g.alicdn.com/bui/bui/1.1.21/config.js"><?php echo '</script'; ?>
>

    <!-- script start -->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/admin/showRank.js"><?php echo '</script'; ?>
>
    <!-- script end -->
</div>
</body>
</html>

<!--<html lang="en">
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
            /*vertical-align: middle;*/
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
    </style>
</head>
<body>
<table class="container table table-striped table-bordered">
    <tr>
        <th>管理员id</th>
        <th>管理员角色</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["lid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["lname"];?>
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
    var num=0;
    var flag=true;
    $(window).scroll(function () {
        //滚动的高度
        var st=$(window).scrollTop();
        //文档的高度
        var dh=$(document).outerHeight();
        //浏览器高度
        var wh=$(window).height();
        if (dh-st<=wh){
            if (!flag){
                return;
            }
            num++;
            flag=false;
            $.ajax({
                url:"index.php?m=admin&f=adminM&a=ajax",
                type:"post",
                dataType:"json",
                data:{ "page":num },
                success:function (e) {
                    for (i=0;i<e.length;i++){
                        $str="<tr><td>"+e[i].lid+"</td><td>"+e[i].lname+"</td><td><a href=''><button type='button' class='btn btn-success'>编辑</button></a>&nbsp;<a href=''><button type='button' class='btn btn-danger'>删除</button></a></td></tr>"
                        $("tbody").append($str);
                    }
                    flag=true;
                }
            })
        }
    })
<?php echo '</script'; ?>
>
</body>
</html>-->
<?php }
}
