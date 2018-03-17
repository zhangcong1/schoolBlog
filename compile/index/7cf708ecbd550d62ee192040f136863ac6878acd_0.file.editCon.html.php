<?php
/* Smarty version 3.1.30, created on 2017-11-18 03:43:15
  from "D:\wamp64\www\blog\template\index\editCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0fac5349e286_46229466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cf708ecbd550d62ee192040f136863ac6878acd' => 
    array (
      0 => 'D:\\wamp64\\www\\blog\\template\\index\\editCon.html',
      1 => 1510976511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0fac5349e286_46229466 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo UEDITOR_URL;?>
/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo UEDITOR_URL;?>
/ueditor.all.min.js"> <?php echo '</script'; ?>
>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="<?php echo UEDITOR_URL;?>
/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
    <style>
        body{
            padding: 20px;
        }
        .leftCon{
            width: 60%;
            height: 100%;
            padding-right: 30px;
            border-right: 1px solid #dfdfdf;
            float: left;
            box-sizing: border-box;
        }
        .rightCon{
            width: 40%;
            height: 100%;
            float: left;
            box-sizing: border-box;
            padding-left: 30px;
        }
        #editor{
            height: 400px;
            overflow: scroll;
        }
    </style>
</head>
<body>
<form action="" method="post">
    <div class="leftCon">
        <div class="form-group">
            <label for="title">添加文章标题</label>
            <input type="text" class="form-control" id="title" placeholder="请输入文章标题" name="ctitle" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['ctitle'];?>
">
        </div>
        <div class="form-group">
            <label for="editor">添加文章内容</label>
            <?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:100%;height:200px" name="con"><?php echo '</script'; ?>
>
            <textarea name="" id="conarea" cols="30" rows="10" hidden><?php echo $_smarty_tpl->tpl_vars['result']->value['con'];?>
</textarea>
        </div>
    </div>
            <div class="rightCon">
                <div class="thumbs" style="width:100px;height:100px;overflow:hidden">
                   <img src="<?php echo APP_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['result']->value['thumb'];?>
" height="100%">
                </div>
                <div class="form-group parent">
                <label>更改缩略图</label>
                <input type="hidden" name="thumb" value="">
                </div>
                <div class="form-group">
                <label for="price">文章价格</label>
                <input type="text" class="form-control" id="price" placeholder="请输入文章价格" name="price" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['price'];?>
">
                </div>
                <div class="form-group">
                <label for="inlineCheckbox1">推荐位</label><br>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <label class="checkbox-inline">
                <?php if ($_smarty_tpl->tpl_vars['result']->value["pid"] == $_smarty_tpl->tpl_vars['v']->value["pid"]) {?>
                <input type="checkbox" id="inlineCheckbox1" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
" name="pid[]" checked="checked" ><?php echo $_smarty_tpl->tpl_vars['v']->value["pname"];?>

            <?php } else { ?>
            <input type="checkbox" id="inlineCheckbox1" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
" name="pid[]"><?php echo $_smarty_tpl->tpl_vars['v']->value["pname"];?>

            <?php }?>
                </label>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
            </div>
    <p>
        <button type="submit" class="btn btn-primary btn-lg" style="position: absolute;left: 400px;bottom: 50px;padding: 6px 50px" formaction="index.php?m=index&f=write&a=updateCon&conid=<?php echo $_smarty_tpl->tpl_vars['conid']->value;?>
&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
">保存</button>
    </p>
</form>
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/upload.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    let uploads=new upload();
    uploads.multipleFlag = true;
    uploads.selectBtnStyle=`
            width:300px;
            height:40px;
            background: rgba(153,93,31,0.5);
            border-radius: 5px;`
    uploads.upBtnStyle=`
            width:300px;
            height:40px;
            background:#cccccc;
            border-radius: 5px;
            border:none;
        `
    uploads.preViewStyle=`
            width:298px;
            height:auto;
            border: 1px solid #cccccc;
            padding: 5px;
            overflow:hidden;
        `
    uploads.imgBoxStyle=`
            width: 150px;
            height: 150px;
            border: 1px solid #777777;
            float:left;
            border-radius: 5px;
            margin: 5px 70px;
        `
    uploads.createView({parent:document.querySelector('.form-group.parent')});
    let arr=[];
    uploads.up("index.php?m=admin&f=adminM&a=upload",function (e) {
        arr.push(e);
        console.log(arr.join(';'));
        document.querySelector('input[type=hidden]').setAttribute('value',arr.join(';'));
    });
    //百度编辑器
    var ue = UE.getEditor('editor');

    ue.addListener('ready', function() {
        UE.getEditor('editor').setContent($("#conarea").val());
    } );
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
