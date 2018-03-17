$(function () {
    //专题
    $(".menu>li").eq(0).addClass("border").find("a").css("color","#646464");
    $(".menu>li>a").click(function () {
        $(".menu>li").removeClass("border").find("a").css("color","#969696");
        $(this).css("color","#646464").parent().addClass("border");
    })
    //展开
    let flag=true;
    $(".extend").click(function () {
        if (flag){
            flag=!flag;
            $(".content").css("height","auto");
            $(this).html("收起描述");
        }else {
            flag=!flag;
            $(".content").css("height","360px");
            $(this).html("展开描述");
        }
    })
})