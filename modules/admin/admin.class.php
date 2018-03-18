<?php
/**
 * Created by PhpStorm.
 * User: 张聪
 * Date: 2017/10/21
 * Time: 16:51
 */
class admin extends adminMain {
    function init(){
        if (!isset($_SESSION["login"])){
            echo "<script>alert('请登录');location.href='index.php?m=admin&f=login'</script>";
            exit;
        }
        $this->smarty->assign("aname",$_SESSION["aname"]);
        $this->smarty->display("main.html");
    }
}