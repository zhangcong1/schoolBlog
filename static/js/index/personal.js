$(function () {
    //专题
    $(".menu>li").eq(0).addClass("border").find("a").css("color","#646464");
    $(".menu>li>a").click(function () {
        $(".menu>li").removeClass("border").find("a").css("color","#969696");
        $(this).css("color","#646464").parent().addClass("border");
    })
    $(".menu>li:eq(0)>a").click(function () {
        $(".list").css("display","none");
        $(".lists").css("display","block")
    })
    $(".menu>li:eq(1)>a").click(function () {
        $(".list").css("display","block");
        $(".lists").css("display","none")
    })
    $(".menu>li:eq(2)>a").click(function () {
        $(".list").css("display","none");
        $(".lists").css("display","block")
    })
    $(".menu>li:eq(3)>a").click(function () {
        $(".list").css("display","block");
        $(".lists").css("display","none")
    })
    //关注
    $(".guanzhu").hover(function () {
        $(this).css("background","#f1eeee").find("span:eq(0)").attr("class","iconfont icon-cha").addBack().find("span:eq(1)").html("取消关注");
    },function () {
        $(this).css("background","transparent").find("span:eq(0)").attr("class","iconfont icon-duigou").addBack().find("span:eq(1)").html("已关注");
    })
    let flag=false;
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
    })
})