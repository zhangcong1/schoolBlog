<?php
/* Smarty version 3.1.30, created on 2017-11-09 04:35:14
  from "D:\wamp64\www\blog\template\admin\showAdmin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a03db02c19499_81591739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51f7975d021c86930d85ae111717c151f65cc382' => 
    array (
      0 => 'D:\\wamp64\\www\\blog\\template\\admin\\showAdmin.html',
      1 => 1509670333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a03db02c19499_81591739 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<!--<html>
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
    &lt;!&ndash; 初始隐藏 dialog内容 &ndash;&gt;
    <div id="content" class="hide">
        <form class="form-horizontal">
            <div class="row">
                <div class="control-group span8">
                    <label class="control-label"><s>*</s>管理员姓名：</label>
                    <div class="controls">
                        <input name="aname" type="text" data-rules="{ required:true }" class="input-normal control-text">
                        <input type="hidden" name="aid">
                    </div>
                </div>
                <div class="control-group span8">
                    <label class="control-label"><s>*</s>密码：</label>
                    <div class="controls">
                        <input name="apass" type="text" data-rules="{ required:true }" class="input-normal control-text">
                    </div>
                </div>
                <div class="control-group span8">
                    <label class="control-label">选择角色：</label>
                    <div class="controls">
                        <select name="level" class="input-normal">
                            <option value="">请选择</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['lid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["lname"];?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
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

    &lt;!&ndash; script start &ndash;&gt;
    
    <?php echo '<script'; ?>
 type="text/javascript">
        BUI.use(['bui/grid','bui/data'],function(Grid,Data){
            var Grid = Grid,
                Store = Data.Store,
                enumObj = {"1" : "选项一","2" : "选项二","3" : "选项三"},
                columns = [
                    {title : '管理员姓名',dataIndex :'aname'}, //editor中的定义等用于 BUI.Form.Field.Text的定义
                    {title : '管理员角色', dataIndex :'lname'},
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
                        title : '管理员',
                        width : 600,
                        success:function () {
                            var edtor = this;
                            form = edtor.get("form");
                            editType = editing.get('editType');

                            form.valid();
                            if (form.isValid()){
                                form.ajaxSubmit({
                                    url:"index.php?m=admin&f=adminM&a=insertAdmin&type="+editType,
                                    type:"post",
                                    dataType:"text",
                                    success:function (e) {
                                        if (e!="edit"){
                                            form.setFieldValue("lname",e);
                                        }
                                        edtor.accept();
                                    }
                                })
                            }
                        }
                    }
                }),
                store = new Store({
                    url:"index.php?m=admin&f=adminM&a=selectAdmin",
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
                var newData = {};
                editing.add(newData,'aname'); //添加记录后，直接编辑
            }
            //删除选中的记录
            function delFunction(){
                var selections = grid.getSelection();
//                console.log(selections);
                var str="";
                selections.map(function (obj) {
                    return str+=obj.aid+",";
                })
                str="("+str.slice(0,-1)+")";
                $.ajax({
                    url:"index.php?m=admin&f=adminM&a=deleteAdmin",
                    data:{"str":str},
                    type:"post",
                    dataType:"text",
                    success:function (e) {
                        if (e=="ok"){
                            store.remove(selections);
                        }else {
                            alert("没有权限");
                            location.href="index.php?m=admin&f=adminM";
                        }
                    }
                })
            }
        });
    <?php echo '</script'; ?>
>
    
    &lt;!&ndash; script end &ndash;&gt;
</div>
</body>
</html>-->
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
        <th>用户名</th>
        <th>角色</th>
        <th>添加时间</th>
        <th>头像</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["aname"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["lname"];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['v']->value["date"];?>
</td>
            <td><img src="<?php echo HTTP_URL;?>
/<?php echo $_smarty_tpl->tpl_vars['v']->value['ahead'];?>
" alt="" width="50%"></td>
            <td>
                <a href="index.php?m=admin&f=adminM&a=edit&aid=<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
">
                    <button type="button" class="btn btn-success edit" attr="<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
">编辑</button>
                </a>
                <a href="javascript:void (0)">
                    <button type="button" class="btn btn-danger del" attr="<?php echo $_smarty_tpl->tpl_vars['v']->value['aid'];?>
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
<div class="page"><?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
</div>
<?php echo '<script'; ?>
 src="<?php echo JS_URL;?>
/jquery-3.2.1.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(".del").click(function () {
        let that=this;
        var aid=$(this).attr("attr");
        $.ajax({
            url:"index.php?m=admin&f=adminM&a=delete",
            data:{aid},
            type:"post",
            dataType:"text",
            success:function (e) {
                if (e=="ok"){
                    $(that).parent().parent().parent().remove()
                }else {
                    alert("没有权限");
                    location.href="index.php?m=admin&f=adminM"
                }
            }
        })
    })
    $(".edit").click(function () {
        var aid=$(this).attr("attr");
    })
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
