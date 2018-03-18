<?php
/* Smarty version 3.1.30, created on 2018-03-18 11:36:27
  from "D:\wamp64\www\schoolBlog\template\admin\showCategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aae4f3b99e147_87314007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8acd3a579c7f9fe4c38379877f4a2fb395382572' => 
    array (
      0 => 'D:\\wamp64\\www\\schoolBlog\\template\\admin\\showCategory.html',
      1 => 1521268830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aae4f3b99e147_87314007 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editable TreeGrid - jQuery EasyUI Demo</title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>
/admin/easyui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>
/admin/icon.css">
</head>
<style>
    html,body{
        width: 100vw;
        height: 100vh;
    }
</style>
<body>
<div style="margin:20px 40px;">
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="edit()">编辑</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="save()">保存</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="cancel()">取消</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="del()">删除</a>
</div>
<table id="tg" class="easyui-treegrid" title="查看分类" style="width:1000px;height:400px;margin-left: 80px"
       data-options="
				iconCls: 'icon-ok',
				rownumbers: true,
				animate: true,
				collapsible: true,
				fitColumns: true,
				url: 'index.php?m=admin&f=category&a=showCatData',
				method: 'get',
				idField: 'id',
				treeField: 'cname',
				showFooter: true
			">
    <thead>
    <tr>
        <th data-options="field:'cname',width:60,editor:'text'">分类名称</th>
        <th data-options="field:'cinfo',width:180,align:'left',editor:'text'">分类简介</th>
    </tr>
    </thead>
</table>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/admin/jquery.easyui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/admin/showCat.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
