<?php
/**
 * Created by PhpStorm.
 * User: 张聪
 * Date: 2017/10/24
 * Time: 12:25
 */
class login extends adminMain{
    function init(){
        $this->smarty->display("adminLogin.html");
    }
    function check(){
        //验证验证码
        $check=strtolower(P("check"));
        /*if ($check!=$_SESSION["code"]){
            echo "<script>alert('验证码错误');location.href='index.php?m=admin&f=login'</script>";
            exit();
        }*/
        //手机短信验证
        /*$phoneCode=P("phoneCode");
        if ($phoneCode!=$_SESSION["phoneCode"]){
            echo "<script>alert('手机验证码错误');location.href='index.php?m=admin&f=login'</script>";
            exit();
        }*/
        //用户验证
        $aname=sql(P("aname"));
        $apass=md5(P("apass"));
        $dbobj=new db("admin");
        $result=$dbobj->where("aname='$aname' and apass='$apass'")->select();
        if (count($result)>0){
            $_SESSION["login"]="ok";
            $_SESSION["aname"]=$aname;
            $_SESSION["level"]=$result[0]["level"];
            echo "<script>alert('登陆成功');location.href='index.php?m=admin&f=admin'</script>";
            exit;
        }else{
            echo "<script>alert('登录失败');location.href='index.php?m=admin&f=login'</script>";
        }
    }
    function checkPhone(){
        //载入ucpass类
        require_once(LIBS_PATH.'/Ucpaas.class.php');
        $phone=$_POST['phone'];
        //初始化必填
        $options['accountsid']='9fd0e8f4ff01a5e06a7968cc9f3b53f2';
        $options['token']='da827ff483fed6b572079d2c01f5f053';


        //初始化 $options必填
        $ucpass = new Ucpaas($options);

        //开发者账号信息查询默认为json或xml
        header("Content-Type:text/html;charset=utf-8");

        //短信验证码（模板短信）,默认以65个汉字（同65个英文）为一条（可容纳字数受您应用名称占用字符影响），超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。
        $appId = "a42b8368dd814b9ea1a3851ea8ea0fa3";
        $to = $phone;
        $templateId = "179268";
        $str="0123456789";
        $newStr="";
        for ($i=0;$i<4;$i++){
            $newStr.=$str[mt_rand(0,strlen($str)-1)];
        }
        $param=$newStr;
        $_SESSION["phoneCode"]=$newStr;
        echo $ucpass->templateSMS($appId,$to,$templateId,$param);
    }
    //图片验证码
    function code(){
        include_once LIBS_PATH."/code.class.php";
        $codeobj=new code();
        $codeobj->width=90;
        $codeobj->codeUrl="demo.ttf";
        $codeobj->out();
    }
    //退出登录
    function loginOut(){
        unset($_SESSION['login']);
        echo "<script>alert('安全退出');location.href='index.php?m=admin&f=login'</script>";
    }
}