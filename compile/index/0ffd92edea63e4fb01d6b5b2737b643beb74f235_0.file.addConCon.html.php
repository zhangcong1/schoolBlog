<?php
/* Smarty version 3.1.30, created on 2017-11-18 02:14:50
  from "D:\wamp64\www\blog\template\index\addConCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0f979a3322d4_93289960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ffd92edea63e4fb01d6b5b2737b643beb74f235' => 
    array (
      0 => 'D:\\wamp64\\www\\blog\\template\\index\\addConCon.html',
      1 => 1510971287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0f979a3322d4_93289960 (Smarty_Internal_Template $_smarty_tpl) {
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
                <input type="text" class="form-control" id="title" placeholder="请输入文章标题" name="ctitle">
            </div>
            <div class="form-group">
                <label for="editor">添加文章内容</label>
                <?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:100%;height:200px" name="con"><?php echo '</script'; ?>
>
                <?php echo '<script'; ?>
 type="text/javascript">
                var ue = UE.getEditor('editor');
                <?php echo '</script'; ?>
>
            </div>
        </div>
        <div class="rightCon">
            <div class="form-group parent">
                <label>缩略图</label>
                <input type="hidden" name="thumb" value="">
            </div>
            <div class="form-group">
                <label for="price">文章价格</label>
                <input type="text" class="form-control" id="price" placeholder="请输入文章价格" name="price">
            </div>
            <div class="form-group">
                <label for="inlineCheckbox1">推荐位</label><br>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <label class="checkbox-inline">
                    <input type="checkbox" id="inlineCheckbox1" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
" name="pid[]"><?php echo $_smarty_tpl->tpl_vars['v']->value["pname"];?>

                </label>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>
        <p>
            <button type="submit" class="btn btn-primary btn-lg" style="position: absolute;left: 300px;bottom: 50px;padding: 6px 50px" formaction="index.php?m=index&f=write&a=insertCon&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
&type=1">保存</button>
            <button type="submit" class="btn btn-primary btn-lg" style="position: absolute;right: 300px;bottom: 50px;padding: 6px 50px" formaction="index.php?m=index&f=write&a=insertCon&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
&type=2">发布</button>
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
    <?php echo '</script'; ?>
>
    
</body>
</html><?php }
}
