<?php
/* Smarty version 3.1.30, created on 2017-11-18 01:08:08
  from "D:\wamp64\www\blog\template\admin\showState.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0f87f837ca12_73263809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f36cb6885dbc9f00a55b0a4d3f86da81a4d67370' => 
    array (
      0 => 'D:\\wamp64\\www\\blog\\template\\admin\\showState.html',
      1 => 1510967281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0f87f837ca12_73263809 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <label class="control-label"><s>*</s>文章状态：</label>
                    <div class="controls">
                        <input name="stname" type="text" data-rules="{ required:true }" class="input-normal control-text">
                        <input type="hidden" name="stid">
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
                    {title : 'id',dataIndex :'stid'}, //editor中的定义等用于 BUI.Form.Field.Text的定义
                    {title : '文章状态', dataIndex :'stname'},
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
                    url:"index.php?m=admin&f=content&a=selectState",
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
<?php }
}
