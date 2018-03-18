$(function () {
    $("form").validate({
        rules:{
            aname:{
                required:true
            },
            apass:{
                required:true
            },
            phone:{
                required:true
            },
            phoneCode:{
                required:true
            },
            check:{
                required:true
            }
        },
        messages:{
            aname:{
                required:"X 请输入用户名"
            },
            apass:{
                required:"X 请输入密码"
            },
            phone:{
                required:"X 请输入手机号"
            },
            phoneCode:{
                required:"X 输入验证码"
            },
            check:{
                required:"X 输入验证码"
            }
        }
    })
    $(".send").click(function () {
        $(this).css({background:"#4cae4c"}).html("发送成功");
        let phone = $(".phone").val();
        $.ajax({
            url:"index.php?m=admin&f=login&a=checkPhone",
            data:{"phone":phone},
            type:"post",
            success:function (e) {
                if (e){
                    let i=60;
                    let t=setInterval(fn,1000);
                    function fn() {
                        i--;
                        if (i==0){
                            $(".send").css({background:"#3194d0"}).html("发送验证码");
                            clearInterval(t);
                            return ;
                        }
                        $(".send").css({background:"#4cae4c"}).html(`${i}s后重新发送`);
                    }
                }else {
                    alert("发送失败")
                }
            }
        })
    })
})