BUI.use(['bui/grid','bui/data'],function(Grid,Data){
    var Grid = Grid,
        Store = Data.Store,
        enumObj = {"1" : "添加","2" : "删除","3" : "修改","4" : "查询"},
        columns = [
            {title : '管理员ID',dataIndex :'lid'}, //editor中的定义等用于 BUI.Form.Field.Text的定义
            {title : '管理员角色', dataIndex :'lname'},
            {title : '留言权限',dataIndex : 'messagenum',renderer : Grid.Format.multipleItemsRenderer(enumObj)},
            {title : '内容权限',dataIndex : 'connum',renderer : Grid.Format.multipleItemsRenderer(enumObj)},
            {title : '管理员权限',dataIndex : 'adminnum',renderer : Grid.Format.multipleItemsRenderer(enumObj)},
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
                title : '添加管理员角色',
                width : 600,
                success:function () {
                    var edtor = this;
                    form = edtor.get("form");
                    editType = editing.get('editType');

                    form.valid();
                    if (form.isValid()){
                        form.ajaxSubmit({
                            url:'index.php?m=admin&f=adminM&a=editRank&type='+editType,
                            type:"post",
                            data:form.serializeToObject(),
                            dataType:"text",
                            success:function (e) {
                                if (e!="edit"){
                                    form.setFieldValue("lid",e);
                                }
                                edtor.accept();
                            }
                        })
                    }
                }

            }
        }),
        store = new Store({
            url:"index.php?m=admin&f=adminM&a=selectRank",
            autoLoad:true,
            pageSize:1
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
            store : store,
            bbar:{
                // pagingBar:表明包含分页栏
                pagingBar:true
            }
        });

    grid.render();

    //添加记录
    function addFunction(){
        var newData = {lname : ""};
        editing.add(newData,'lid',0); //添加记录后，直接编辑
    }
    //删除选中的记录
    function delFunction(){
        var selections = grid.getSelection();
        var str="";
        selections.map(function (obj) {
            return str+=obj.lid+",";
        })
        str="("+str.slice(0,-1)+")";

        $.ajax({
            url:"index.php?m=admin&f=adminM&a=deleteRank",
            data:{"str":str},
            type:"post",
            dataType:"text",
            success:function (e) {
                if (e=="ok"){
                    store.remove(selections);
                }else{
                    alert("没有权限");
                    location.href="index.php?m=admin&f=adminM&a=showRank"
                }
            }
        })
    }
});