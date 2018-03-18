$(function () {
    //搜索部分
    $(".search>input").click(function () {
        $(this).css("width","180px").next(".sou").css("background","#969696").find("span").css("color","white");
        $(".hots").css("display","block");
    })
    $(".search>input").blur(function () {
        $(this).css("width","100px").next(".sou").css("background","none").find("span").css("color","#969696");
        $(".hots").css("display","none");
    })
})