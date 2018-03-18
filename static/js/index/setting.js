$(function () {
    $(".setLeft>li:eq(0)").click(function () {
        $(".setLeft>li").css("background","white");
        $(this).css("background","#f0f0f0")
        $("form").css("display","none");
        $("form").eq(0).css("display","block");
    })
    $(".setLeft>li:eq(1)").click(function () {
        $(".setLeft>li").css("background","white");
        $(this).css("background","#f0f0f0")
        $("form").css("display","none");
        $("form").eq(1).css("display","block");
    })
})