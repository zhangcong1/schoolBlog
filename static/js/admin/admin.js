$(function () {
    $(".list>li").click(function () {
        $(".list1").not($(this).next(".list1")).slideUp("slow");
        $(".list>li").css({"background":"transparent"})
        $(this).css({"background":"#00a2d4"});
        $(this).next(".list1").slideToggle("slow");
    })
    //
    $(".button").click(function () {
        $("aside").css({width:50});
        $("header").css("width","calc(100% - 50px)")
        $(".con").css("width","calc(100% - 100px)")
    })
})