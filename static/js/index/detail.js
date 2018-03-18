$(function () {
    //关注
    $(".guanzhu1").click(function () {
        let that = this;
        $.ajax({
            url:"index.php?m=index&f=attention",
            data:{uid1:$(".hide1").val(),uid2:$(".hide2").val()},
            type:"post",
            success:function (e) {
                if (e=="err"){
                    alert("请登录");
                }else if (e=="ok"){
                    $(that).css("display","none").next(".guanzhu2").css("display","block")

                }
            }
        })
    })
    /*$(".guanzhu1").hover(function () {
        $(this).css({background:"#dfdfdf"}).html("取消关注")
    },function () {
        $(this).css({background:"transparent"}).html("已关注")
    })*/
    $(".guanzhu2").click(function () {
        let that = this;
        $.ajax({
            url:"index.php?m=index&f=attention&a=delAttention",
            data:{uid1:$(".hide1").val(),uid2:$(".hide2").val()},
            type:"post",
            success:function (e) {
                if (e=="err"){
                    alert("请登录");
                }else if (e=="ok"){
                    $(that).css("display","none").prev(".guanzhu1").css("display","block")

                }
            }
        })
    })
    //评论
    $("#textarea").focus(function () {
        $(this).nextAll("input[type='button']").slideDown(200);
        $(this).nextAll(".cancel").slideDown(200).next("p").slideDown(200);
    })
    $(".cancel").eq(0).click(function () {
        $(this).prevAll("input[type='button']").slideUp(200);
        $(this).slideUp(200).next("p").slideUp(200);
    })
    var num=200;
    $("#textarea").keyup(function () {
        let length=num-$(this).val().length;
        if (length<0){
            length=0;
        }
        $(".cancel2+p>span").html(length);
    })
    $(".liuyan>ul").on("keyup","#textarea1",function () {
        var length=num-$(this).val().length;
        if (length<0){
            length=0;
        }
        $(this).nextAll("p").find("span").html(length);
    })
    $("input[type='button']").click(function () {
        let val = $("#textarea").val();
        if (val!=""){
            $.ajax({
                url:"index.php?m=index&f=message",
                data:{uid1:$(".hide2").val(),uid2:$(".hide1").val(),conid:$(".hide3").val(),mcon:val,state:0},
                type:"post",
                success:function (e) {
                    if (e=="err"){
                        alert("请登录");
                        location.href="index.php?m=index&f=index&a=login";
                    }else{
                        $("#textarea").val("");
                        let num=$(".Ltop>span").html();
                        num++;
                        $(".Ltop>span").html(num);
                        $("<li>").html(e).appendTo($(".liuyan>ul"));
                        let ot=$(".liuyan>ul>li:nth-last-child(1)").offset().top;
                        $(window).scrollTop(ot);
                    }
                }
            })
        }
    })
    //回复
    /*$(".Lgood>a:nth-of-type(2)").click(function () {
        $(this).parent().next(".huifu").find(".commentArea").toggle(200);
    })*/
    $(".liuyan>ul").on("click",".replaybtn",function () {
        $(this).parent().next(".huifu").find(".commentArea").toggle(200);
    })
    $(".liuyan>ul").on("click",".addNew",function () {
        $(this).next(".commentArea").toggle(200);
    })
    $(".liuyan>ul").on("click",".cancel1",function () {
        $(this).parent().slideUp(200);
    })
    $(".liuyan>ul").on("click",".replayBtn",function () {
        let val = $(this).parent().find("#textarea1").val();
        let uname = $(".commentArea").attr("attr");
        let that=this;
        if (val!=""){
            $.ajax({
                url:"index.php?m=index&f=message",
                data:{uid1:$(".hide2").val(),uid2:$(".hide1").val(),conid:$(".hide3").val(),mcon:val,state:$(that).attr("mid")},
                type:"post",
                success:function (e) {
                    if (e=="err"){
                        alert("请登录");
                        location.href="index.php?m=index&f=index&a=login";
                    }else{
                        $("<li>").html(`
                            <p><a href="">${uname}</a>:
                            <span>${val}</span>
                            </p>
                            <span>2017.12.16 12:16</span>
                            <a href="">
                                <span class="iconfont icon-liuyan"></span>
                                回复</a>
                        `).prependTo($(that).parent().parent())
                        $(that).parent().val("").hide();
                        $(that).parent().prev(".addNew").show();
                    }
                }
            })
        }
    })
    //回复
    $(".liuyan>ul").on("click",".reAgain",function () {
        let uname=$(this).attr("author");
        $(this).parent().parent().find(".commentArea").toggle(200).find("#textarea1").val("@"+uname+":");
    });
    /*$(".liuyan>ul").on("click",".replayBtn",function () {
        let val = $(this).parent().parent().find("#textarea1").val();
        let uname = $(".commentArea").attr("attr");
        let that=this;
        if (val!=""){
            $.ajax({
                url:"index.php?m=index&f=message&reAgain",
                data:{uid1:$(".hide2").val(),uid2:$(".hide1").val(),conid:$(".hide3").val(),mcon:val,state:$(that).attr("mid")},
                type:"post",
                success:function (e) {
                    if (e=="err"){
                        alert("请登录");
                        location.href="index.php?m=index&f=index&a=login";
                    }else{
                        $("<li>").html(`
                            <p><a href="">${uname}</a>:
                            <span>${val}</span>
                            </p>
                            <span>2017.12.16 12:16</span>
                            <a href="">
                                <span class="iconfont icon-liuyan"></span>
                                回复</a>
                        `).prependTo($(that).parent().parent())
                        $(that).parent().val("").hide();
                        $(that).parent().prev(".addNew").show();
                    }
                }
            })
        }
    })*/
    //喜欢
    $(".like>a").eq(0).click(function () {
        $.ajax({
            url:"index.php?m=index&f=like",
            data:{uid1:$(".hide2").val(),conid:$(".hide3").val()},
            type:"post",
            success:function (e) {
                if (e=="err"){
                    alert("请登录");
                    location.href="index.php?m=index&f=index&a=login";
                }else{
                    $(".like").hide();
                    $(".like1").show().find("a").eq(1).html(e);
                }
            }
        })
    })
    $(".like1>a").eq(0).click(function () {
        $.ajax({
            url:"index.php?m=index&f=like&a=cancel",
            data:{uid1:$(".hide2").val(),conid:$(".hide3").val()},
            type:"post",
            success:function (e) {
                if (e=="err"){
                    alert("请登录");
                    location.href="index.php?m=index&f=index&a=login";
                }else{
                    $(".like1").hide();
                    $(".like").show().find("a").eq(1).html(e);
                }
            }
        })
    })
    $(".like>a").eq(1).click(function () {
        alert("点喜欢才可以哟！")
    })
    $(".like1>a").eq(1).click(function () {
        alert("点喜欢才可以哟！")
    })
})