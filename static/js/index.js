$(function () {

    //banner
    /*let next=0;
    let t=setInterval(fn,2000);
    function fn() {
        next++;
        if (next==$(".leftBox>li").length){
            next=0;
        }
        $(".leftBox>li").eq(next).prevAll().fadeOut("slow").addBack().eq(next).fadeIn("slow");
    }
    $(window).blur(function () {
        clearInterval(t);
    })
    $(window).focus(function () {
        t=setInterval(fn,2000);
    })
    let now1,next1=0
    let t1=setInterval(fn1,2000);
    function fn1() {
        next1++;
        $(".rightBox").animate({translateY:"-50%"});
    }*/


    $('.shutter').shutter({
        shutterW: 960, // 容器宽度
        shutterH: 358, // 容器高度
        isAutoPlay: true, // 是否自动播放
        playInterval: 3000, // 自动播放时间
        curDisplay: 3, // 当前显示页
        fullPage: false // 是否全屏展示
    });
    //置顶
    // var ele=document.body;
    $(window).scroll(function () {
        /*if(document.body.scrollTop){
            ele=document.body;
        }else{
            ele=document.documentElement;
        }*/
        if(document.body.scrollTop>0){
            $('.TOP').css({'display':'block'});
        }else{
            $('.TOP').css({'display':'none'});
        }
        $('.TOP').click(function(){
            document.body.scrollTop=0;
        })
    })
    var num=0;
    $(".readMore").click(function () {
        num++;
        $.ajax({
            url:"index.php?m=index&f=index&a=ajaxArtical",
            type:"post",
            dataType:"json",
            data:{ "page":num },
            success:function (e) {
                for (i=0;i<e.length;i++){
                    $str=`<li>
                        <div class="author">
                            <a href="" class="headImg">
                                <img src="http://localhost/blog/static/img/myhead.png" alt="" height="100%">
                            </a>
                            <a href="" class="user">${e[i].uname}</a>
                            <span>${e[i].condate}</span>
                        </div>
                        <a href="index.php?m=index&f=index&a=detail&conid=${e[0].conid}" class="title">${e[i].ctitle}</a>
                        <div class="p">
                            ${e[i].con}
                        </div>
                        <div class="foot">
                            <a href="" class="fenlei">${e[i].cname}</a>
                            <a href="" class="lookup">
                                <span class="iconfont icon-liulan"></span>
                                ${e[i].hit}
                            </a>
                            <a href="" class="lookup">
                                <span class="iconfont icon-message"></span>
                                134
                            </a>
                            <span class="lookup">
                                <span class="iconfont icon-xin"></span>
                                481
                            </span>
                            <span class="lookup">
                                <span class="iconfont icon-dashang"></span>
                                81
                            </span>
                        </div>
                        <div class="image">
                            <img src="${e[i].thumb}" alt="" height="100%">
                        </div>
                    </li>`
                    $(".list").append($str);
                }
                flag1=true;
            }
        })
    })
})