$(function () {
    //专题
    $(".menu>li").eq(0).addClass("border").find("a").css("color","#646464");
    $(".menu>li>a").click(function () {
        $(".menu>li").removeClass("border").find("a").css("color","#969696");
        $(this).css("color","#646464").parent().addClass("border");
    })
    //关注
    /*let flag=true;
    $(".guanzhu").click(function () {
        if (flag){
            flag=!flag;
            $(this).css({"background":"none","border":" 1px solid hsla(0,0%,59%,.6)","color":"#8c8c8c"}).find("span:eq(1)").html("已关注").addBack().find("span:eq(0)").addClass("icon-duigou").removeClass("icon-jia-b")
            $(this).hover(function () {
                $(this).css({"background":"#efefef","border":" 1px solid hsla(0,0%,59%,.6)","color":"#8c8c8c"}).find("span:eq(1)").html("取消关注").addBack().find("span:eq(0)").removeClass("icon-duigou").addClass("icon-cha")
            },function () {
                $(this).css({"background":"none","border":" 1px solid hsla(0,0%,59%,.6)","color":"#8c8c8c"}).find("span:eq(1)").html("已关注").addBack().find("span:eq(0)").addClass("icon-duigou").removeClass("icon-cha")
            })
        }else {
            flag=!flag;
            $(this).css({"background":"#4acc2e","border":"none","color":"#fff"}).find("span:eq(1)").html("关注").addBack().find("span:eq(0)").removeClass("icon-duigou").addClass("icon-jia-b")
            $(this).hover(function () {
                $(this).css({"background":"#44c129","border":"none","color":"#fff"}).find("span:eq(1)").html("关注")
            },function () {
                $(this).css({"background":"#4acc2e","border":"none","color":"#fff"}).find("span:eq(1)").html("关注")
            })
        }
    })*/
    $(".guanzhu").click(function () {
        $(this).css("display","none").next(".guanzhu1").css("display","block");
        $.ajax({
            url:"index.php?m=index&f=attention&a=attentZT",

        })
    })
    /*$(".guanzhu1").hover(function () {
        $(this).css({background:"#dfdfdf"}).html("取消关注")
    },function () {
        $(this).css({background:"transparent"}).html("已关注")
    })*/
    /*$(".guanzhu1").click(function () {
        $(this).css("display","none").prev(".guanzhu").css("display","block")
    })*/
    //
    var num=0;
    var flag1=true;
    $(window).scroll(function () {
        //滚动的高度
        var st=$(window).scrollTop();
        //文档的高度
        var dh=$(document).outerHeight();
        //浏览器高度
        var wh=$(window).height();
        if (dh-st<=wh){
            if (!flag1){
                return;
            }
            num++;
            flag1=false;
            $.ajax({
                url:"index.php?m=index&f=index&a=ajax",
                type:"post",
                dataType:"json",
                data:{ "page":num },
                success:function (e) {
                    for (i=0;i<e.length;i++){
                        $str="<li><div class='content'><a href='' class='conHead'><img src='"+e[0].cimage+"' alt='' height='100%'></a><a href='index.php?m=index&f=index&a=lists'><h4>"+e[i].cname+"</h4><p>"+e[i].cinfo+"</p></a><a href='javascript:;' class='guanzhu'><span class='iconfont icon-jia-b'></span><span>关注</span></a><div class='count'><a href=''>67855篇文章</a><span> · 1060.6K人关注</span></div></div></li>"
                        $(".lists").append($str);
                    }
                    flag1=true;
                }
            })
        }
    })
})