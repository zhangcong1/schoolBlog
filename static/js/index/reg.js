$(function () {
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
    $.validator.addMethod("tel",function (value,element) {
        var tel=/^(134|135|136|137|138|139|150|151|152|158|159|184|187)\d{8}$/;
        return tel.test(value) || this.optional(element);
    })
    $.validator.addMethod("uname",function (value,element) {
        var uname=/^[\u4E00-\u9FA5 a-z A-Z][\u4E00-\u9FA5 \w]{1,8}$/;
        return uname.test(value) || this.optional(element);
    },"以字母开头,2-9位")
    $("form").validate({
        rules:{
            uname:{
                required:true,
                // rangelength:[2,8],
                uname:true,
                remote:{
                    url:"index.php?m=index&f=login&a=checkUser",
                    type:"post"
                }
            },
            upass:{
                required:true,
                rangelength:[6,12],
                equalTo:"#upass1"
            },
            upass1:{
                required:true,
                equalTo:"#upass"
            },
            uphone:{
                required:true,
                tel:true
            }
        },
        messages:{
            uname:{
                required:"用户名不能为空",
                // rangelength:"用户名必须2-8位",
                remote:"用户名已存在"
            },
            upass:{
                required:"密码不能为空",
                rangelength:"密码6到12位",
                equalTo:"两次密码必须一致"
            },
            upass1:{
                required:"必须验证密码",
                equalTo:"两次密码必须一致"
            },
            uphone:{
                required:"必须进行手机验证",
                tel:"请输入正确手机号"
            }
        }
    })
})