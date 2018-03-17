<?php
/* Smarty version 3.1.30, created on 2017-11-09 07:55:50
  from "D:\wamp64\www\blog\template\admin\showCategory.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a040a06b9ad89_58870575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa0e3971e7fbdd506f9b63380be703fabf5d31f3' => 
    array (
      0 => 'D:\\wamp64\\www\\blog\\template\\admin\\showCategory.html',
      1 => 1510151910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a040a06b9ad89_58870575 (Smarty_Internal_Template $_smarty_tpl) {
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
<body>
<div style="margin:20px 250px;">
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="edit()">编辑</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="save()">保存</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="cancel()">取消</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" onclick="del()">删除</a>
</div>
<table id="tg" class="easyui-treegrid" title="查看分类" style="width:700px;height:250px"
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
