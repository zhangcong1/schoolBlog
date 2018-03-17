<?php
/**
 * Created by PhpStorm.
 * User: 张聪
 * Date: 2017/11/18
 * Time: 15:19
 */
class hot extends indexMain{
    function init(){
        if (isset($_SESSION["userLogin"])){
            $userLogin=$_SESSION["userLogin"];
        }else{
            $userLogin=null;
        }
        $this->smarty->assign("userLogin",$userLogin);
        $this->smarty->assign("header",TPL_PATH."/index/head.html");
        $url=PORT.'://'.HOST.$_SERVER["REQUEST_URI"];
        $_SESSION["url"]=$url;

        //推荐作者
        $dbobj=new db("user");
        $data2=$dbobj->where("ulevel=2 or ulevel=3")->select();
        $this->smarty->assign("data2",$data2);
        //文章列表
        $db=new db();
        $data1=$db->select("select content.*,user.uname,category.cname from content join user on content.uid=user.uid join category on content.catid=category.cid where state=3 and date_sub(curdate(), INTERVAL 7 DAY) <= date(`condate`)");
        $this->smarty->assign("data1",$data1);
        $this->smarty->display("hot.html");
    }
}