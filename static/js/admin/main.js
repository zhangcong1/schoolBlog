BUI.use('common/main',function(){
    var config = [{
        id:'menu',
        homePage : 'code',
        menu:[{
            text:'管理员管理',
            items:[
                {
                    id:'code',text:'查看管理员',href:'index.php?m=admin&f=adminM',closeable : false
                },
                {
                    id:'main-menu',text:'添加管理员',href:'index.php?m=admin&f=adminM&a=add'
                },
            ]
        },{
            text:'管理员角色',
            items:[
                {
                    id:'operation',text:'查看角色',href:'index.php?m=admin&f=adminM&a=showRank'
                },
                {
                    id:'quick',text:'添加角色',href:'index.php?m=admin&f=adminM&a=addRank'
                }
            ]
        }]
    },{
        id:'form',
        menu:[{
            text:'用户管理',
            items:[
                {
                    id:'code',text:'查看用户',href:'index.php?m=admin&f=user'
                },
                {
                    id:'example',text:'添加用户',href:'index.php?m=admin&f=user&a=add'
                }
            ]
        },{
            text:'用户角色',
            items:[
                {
                    id:'success',text:'查看用户角色',href:'index.php?m=admin&f=user&a=showRole'
                },
                {
                    id:'fail',text:'添加用户角色',href:'index.php?m=admin&f=user&a=addRole'
                }

            ]
        },{
            text:'文章等级',
            items:[
                {
                    id:'success',text:'查看文章等级',href:'index.php?m=admin&f=user&a=showAL'
                },
                {
                    id:'fail',text:'添加文章等级',href:'index.php?m=admin&f=user&a=addAL'
                }

            ]
        }]
    },{
        id:'search',
        menu:[{
            text:'分类管理',
            items:[
                {
                    id:'code',text:'查看分类',href:'index.php?m=admin&f=category&a=showCat'
                },
                {
                    id:'example',text:'添加分类',href:'index.php?m=admin&f=category&a=addCat'
                }
            ]
        },{
            text : '内容管理',
            items : [
                {
                    id : 'tab',text : '查看内容',href : 'index.php?m=admin&f=content'
                }
            ]
        },{
            text : '文章状态管理',
            items : [
                {
                    id : 'tab',text : '查看文章状态',href : 'index.php?m=admin&f=content&a=state'
                }
            ]
        },{
            text : '留言管理',
            items : [
                {
                    id : 'tab',text : '查看留言',href : 'index.php?m=admin&f=message'
                }
            ]
        }]
    },{
        id:'detail',
        menu:[{
            text:'详情页面',
            items:[
                {
                    id:'code',text:'详情页面代码',href:'detail/code.html'
                },
                {
                    id:'example',text:'详情页面示例',href:'detail/example.html'
                },
                {
                    id:'introduce',text:'详情页面简介',href:'detail/introduce.html'
                }
            ]
        }]
    },{
        id : 'chart',
        menu : [{
            text : '图表',
            items:[
                {
                    id:'code',text:'引入代码',href:'chart/code.html'
                },
                {
                    id:'line',text:'折线图',href:'chart/line.html'
                },
                {
                    id:'area',text:'区域图',href:'chart/area.html'
                },
                {
                    id:'column',text:'柱状图',href:'chart/column.html'
                },
                {
                    id:'pie',text:'饼图',href:'chart/pie.html'
                },
                {
                    id:'radar',text:'雷达图',href:'chart/radar.html'
                }
            ]
        }]
    }];
    new PageUtil.MainPage({
        modulesConfig : config
    });
});