<?php
/* Smarty version 3.1.30, created on 2018-03-17 05:32:27
  from "F:\server\Apache24\htdocs\schoolBlog\template\admin\showAL.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aaca86b9e93c6_60574407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7bafb646a7259a3d5652cef154ccc9afc12e9be' => 
    array (
      0 => 'F:\\server\\Apache24\\htdocs\\schoolBlog\\template\\admin\\showAL.html',
      1 => 1510205007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aaca86b9e93c6_60574407 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>表格使用弹出框编辑</title>

    <link href="http://g.alicdn.com/bui/bui/1.1.21/css/bs3/dpl.css" rel="stylesheet">
    <link href="http://g.alicdn.com/bui/bui/1.1.21/css/bs3/bui.css" rel="stylesheet">
    <style>
        body{
            padding: 20px;
        }
    </style>
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
        <form class="form-horizontal">
            <div class="row">
                <div class="control-group span8">
                    <label class="control-label"><s>*</s>文章等级名称：</label>
                    <div class="controls">
                        <input name="alname" type="text" data-rules="{ required:true }" class="input-normal control-text">
                        <input type="hidden" name="alid">
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
 type="text/javascript">
        BUI.use(['bui/grid','bui/data'],function(Grid,Data){
            var Grid = Grid,
                Store = Data.Store,
                enumObj = {"1" : "选项一","2" : "选项二","3" : "选项三"},
                columns = [
                    {title : 'id',dataIndex :'alid'}, //editor中的定义等用于 BUI.Form.Field.Text的定义
                    {title : '文章等级名称', dataIndex :'alname'},
                    {title : '操作',renderer : function(){
                        return '<span class="grid-command btn-edit">编辑</span>'
                    }}
                ],
                data = [];

            var isAddRemote = false,
                editing = new Grid.Plugins.DialogEditing({
                    contentId : 'content', //设置隐藏的Dialog内容
                    triggerCls : 'btn-edit', //触发显示Dialog的样式
                    editor : {
                        title : '自定义',
                        width : 600,
                        success:function () {
                            var edtor = this;
                            form = edtor.get("form");
                            editType = editing.get('editType');

                            form.valid();
                            if (form.isValid()){
                                form.ajaxSubmit({
                                    url:'index.php?m=admin&f=user&a=editAL&type='+editType,
                                    type:"post",
                                    data:form.serializeToObject(),
                                    dataType:"text",
                                    success:function (e) {
                                        if (e!="edit"){
                                            form.setFieldValue("alid",e);
                                        }
                                        edtor.accept();
                                    }
                                })
                            }
                        }
                    }
                }),
                store = new Store({
                    url:"index.php?m=admin&f=user&a=selectAL",
                    autoLoad:true
                }),
                grid = new Grid.Grid({
                    render:'#grid',
                    columns : columns,
                    width : 700,
                    forceFit : true,
                    tbar:{ //添加、删除
                        items : [{
                            btnCls : 'button button-small',
                            text : '<i class="icon-plus"></i>添加',
                            listeners : {
                                'click' : addFunction
                            }
                        },
                            {
                                btnCls : 'button button-small',
                                text : '<i class="icon-remove"></i>删除',
                                listeners : {
                                    'click' : delFunction
                                }
                            }]
                    },
                    plugins : [editing,Grid.Plugins.CheckSelection],
                    store : store
                });

            grid.render();

            //添加记录
            function addFunction(){
                var newData = {alname : ""};
                editing.add(newData,'alid',0); //添加记录后，直接编辑
            }
            //删除选中的记录
            function delFunction(){
                var selections = grid.getSelection();
                var str="";
                selections.map(function (obj) {
                    return str+=obj.alid+",";
                })
                str="("+str.slice(0,-1)+")";

                $.ajax({
                    url:"index.php?m=admin&f=user&a=deleteAL",
                    data:{"str":str},
                    type:"post",
                    dataType:"text",
                    success:function (e) {
                        if (e=="ok"){
                            store.remove(selections);
                        }
                    }
                })
            }
        });
    <?php echo '</script'; ?>
>
    
    <!-- script end -->
</div>
</body>
</html>
<!--
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo CSS_URL;?>
/bootstrap.min.css">
    <title>查看文章等级</title>
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
            /*width: 20%;*/
            vertical-align: middle;
        }
    </style>
</head>
<body>
<table class="container table table-striped table-bordered">
    <tr>
        <th>id</th>
        <th>文章等级名称</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["alid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["alname"];?>
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
</body>
</html>-->
<?php }
}
