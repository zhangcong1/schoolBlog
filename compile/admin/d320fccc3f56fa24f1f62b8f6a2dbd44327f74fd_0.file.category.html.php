<?php
/* Smarty version 3.1.30, created on 2017-11-16 16:11:33
  from "D:\wamp64\www\blog\template\admin\category.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0db8b583c5c2_59534478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd320fccc3f56fa24f1f62b8f6a2dbd44327f74fd' => 
    array (
      0 => 'D:\\wamp64\\www\\blog\\template\\admin\\category.html',
      1 => 1510848687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0db8b583c5c2_59534478 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Basic Form - jQuery EasyUI Demo</title>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>
/admin/easyui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>
/admin/icon.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>
/admin/demo.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo JS_URL;?>
/admin/jquery.easyui.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<div style="margin:20px 0;"></div>
<div class="easyui-panel" title="添加分类" style="width:100%;max-width:400px;padding:30px 60px;">
    <form id="ff" method="post">
        <div style="margin-bottom:20px">
            <input class="easyui-combotree" data-options="url:'index.php?m=admin&f=category&a=treeCat',method:'get',label:'所属分类:',required:true" style="width:100%" name="pid">
        </div>
        <div style="margin-bottom:20px">
            <input class="easyui-textbox" name="cname" style="width:100%" data-options="label:'分类名称:',required:true">
        </div>
        <div style="margin-bottom:20px" class="parent">
            <label>头像</label>
            <input type="hidden" name="cimage" value="" class="hidden">
        </div>
        <div style="margin-bottom:20px">
            <input class="easyui-textbox" name="cinfo" style="width:100%;height:60px" data-options="label:'分类描述:',multiline:true">
        </div>
    </form>
    <div style="text-align:center;padding:5px 0">
        <a href="javascript:void(0)" class="easyui-linkbutton" onclick="submitForm()" style="width:80px">添加</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" onclick="clearForm()" style="width:80px">重置</a>
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/upload.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    function submitForm(){
        $("#ff").attr("action","index.php?m=admin&f=category&a=insertCat")
        if ($("#ff").form("validate")){
            $('#ff').submit();
        }
    }
    function clearForm(){
        $('#ff').form('clear');
    }
    let uploads=new upload();
    uploads.multipleFlag = true;
    uploads.createView({parent:document.querySelector('.parent')});
    let arr=[];
    uploads.up("index.php?m=admin&f=adminM&a=upload",function (e) {
        arr.push(e);
        console.log(arr.join(';'));
        document.querySelector('.hidden').setAttribute('value',arr.join(';'));
    });
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
