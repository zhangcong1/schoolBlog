<?php
/**
 * Created by PhpStorm.
 * User: 张聪
 * Date: 2017/10/28
 * Time: 1:25
 */
class login extends indexMain{
    function init(){
        $uname=sql(P("uname"));
        $upass=md5(P("upass"));
        $check=strtolower(P("check"));
        if ($check!=$_SESSION["code"]){
            $this->smarty->assign("errorInfo","验证码错误");
            $this->smarty->assign("uppage","index.php?m=index&f=index&a=login");
            $this->smarty->display("error.html");
            exit();
        }
        $dbobj=new db("user");
        $result=$dbobj->where("uname='$uname' and upass='$upass'")->select();
        if (count($result)>0){
            $_SESSION["userLogin"]="ok";
            $_SESSION["uname"]=$uname;
            $_SESSION["uid"]=$result[0]["uid"];
            $this->smarty->assign("errorInfo","登录成功");
            $this->smarty->assign("uppage",$_SESSION["url"]);
            $this->smarty->display("success.html");
            exit();
        }else{
            $this->smarty->assign("errorInfo","登录失败");
            $this->smarty->assign("uppage","index.php?m=index&f=index&a=login");
            $this->smarty->display("error.html");
            exit();
        }
    }
    function reg(){
        $uname=sql(P("uname"));
        if (!preg_match("/^[\x{4E00}-\x{9FA5} a-z A-Z][\x{4E00}-\x{9FA5} \w]{1,8}$/u",$uname)){
            $this->smarty->assign("errorInfo","用户名错误");
            $this->smarty->assign("uppage","index.php?m=index&f=index&a=reg");
            $this->smarty->display("error.html");
            exit();
        }
        $upass=md5(P("upass"));
        $upass1=md5(P("upass1"));
        if (!preg_match("/\w{6,12}/",$upass) || !preg_match("/\w{6,12}/",$upass1) || $upass!=$upass1){
            $this->smarty->assign("errorInfo","密码错误");
            $this->smarty->assign("uppage","index.php?m=index&f=index&a=reg");
            $this->smarty->display("error.html");
            exit();
        }
        $uphone=sql(P("uphone"));
        if (!preg_match("/^(134|135|136|137|138|139|150|151|152|158|159|184|187)\d{8}$/",$uphone)){
            $this->smarty->assign("errorInfo","手机号错误");
            $this->smarty->assign("uppage","index.php?m=index&f=index&a=reg");
            $this->smarty->display("error.html");
            exit();
        }
        $phoneCode=sql(P("phoneCode"));
        $dbobj=new db("user");
        $result=$dbobj->insert(array(
            "uname"=>"'$uname'",
            "upass"=>"'$upass'",
            "unick"=>"''",
            "uhead"=>"''",
            "ulevel"=>"1",
            "uphone"=>"'$uphone'"
        ));
        if ($result>0){
            $this->smarty->assign("errorInfo","注册成功");
            $this->smarty->assign("uppage","index.php?m=index&f=index&a=login");
            $this->smarty->display("success.html");
            exit();
        }else{
            $this->smarty->assign("errorInfo","注册失败");
            $this->smarty->assign("uppage","index.php?m=index&f=index&a=reg");
            $this->smarty->display("error.html");
            exit();
        }
    }
    //验证用户名是否存在
    function checkUser(){
        $uname=sql(P("uname"));
        $dbobj=new db("user");
        $result=$dbobj->where("uname='$uname'")->find();
        if (count($result)>0){
            echo "false";
        }else{
            echo "true";
        }
    }
    //退出登录
    function loginOut(){
        foreach ($_SESSION as $key => $value){
            unset($_SESSION[$key]);
        }
        echo "<script>alert('安全退出');location.href='index.php'</script>";
    }
}