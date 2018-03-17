
        function formatProgress(value){
            if (value){
                var s = '<div style="width:100%;border:1px solid #ccc">' +
                    '<div style="width:' + value + '%;background:#cc0000;color:#fff">' + value + '%' + '</div>'
                '</div>';
                return s;
            } else {
                return '';
            }
        }
    var editingId;
    function edit(){
        if (editingId != undefined){
            $('#tg').treegrid('select', editingId);
            return;
        }
        var row = $('#tg').treegrid('getSelected');
        if (row){
            editingId = row.id
            $('#tg').treegrid('beginEdit', editingId);
        }
    }
    function save(){
        if (editingId != undefined){
            var t = $('#tg');
            t.treegrid('endEdit', editingId);
            editingId = undefined;
            var persons = 0;
            var rows = t.treegrid('getChildren');
            for(var i=0; i<rows.length; i++){
                var p = parseInt(rows[i].persons);
                if (!isNaN(p)){
                    persons += p;
                }
            }
            var frow = t.treegrid('getFooterRows')[0];
            frow.persons = persons;
            t.treegrid('reloadFooter');
        }
    }
    function cancel(){
        if (editingId != undefined){
            $('#tg').treegrid('cancelEdit', editingId);
            editingId = undefined;
        }
    }
    function del() {
        var row = $('#tg').treegrid('getSelected');
        if (row){
            editingId = row.id
            $('#tg').treegrid('beginEdit', editingId);
        }
        if (editingId != undefined){
            $('#tg').treegrid('remove', editingId);
            $.ajax({
                url:"index.php?m=admin&f=category&a=del",
                data:{cid:editingId},
                type:"post",
                success:function (e) {
                    if (e=="ok"){
                        alert("删除成功");
                        var t = $('#tg');
                        var persons = 0;
                        var rows = t.treegrid('getChildren');
                        for(var i=0; i<rows.length; i++){
                            var p = parseInt(rows[i].persons);
                            if (!isNaN(p)){
                                persons += p;
                            }
                        }
                        var frow = t.treegrid('getFooterRows')[0];
                        frow.persons = persons;
                        t.treegrid('reloadFooter');
                    }else {
                        alert("删除失败");
                    }
                }
            })
            editingId = undefined;

        }
    }
    $('#tg').treegrid('onAfterEdit',function (a,b) {
        console.log(a);
        console.log(b);
        var obj={};
        for (let i in b){
            obj.field=i;
            obj.val=b[i];
        }
        //后台执行的地址，传递那条数据，要修改的值
        $.ajax({
            url:"index.php?m=admin&f=category&a=edit",
            data:{cid:editingId,obj},
            type:"post",
            success:function (e) {
                if (e=="ok"){
                    alert("修改成功");
                }else {
                    alert("没有修改")
                }
            }
        })
    })
