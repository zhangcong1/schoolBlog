<?php
/**
 * Created by PhpStorm.
 * User: 张聪
 * Date: 2017/11/18
 * Time: 17:25
 */
class message extends indexMain{
    function init(){
        if (isset($_SESSION["userLogin"])){
            $userLogin=$_SESSION["userLogin"];
        }else{
            echo "err";
            exit();
        }
        $uid1=P("uid1");
        $uid2=P("uid2");
        $conid=P("conid");
        $mcon=P("mcon");
        $state=P("state");
        $dbobj=new db("message");
        $result=$dbobj->insert(array(
            "uid1"=>"$uid1","uid2"=>"$uid2","conid"=>"$conid","mcon"=>"'$mcon'","state"=>"$state"
        ));
        if ($result>0){
            $uname1=$_SESSION["uname"];
            $this->smarty->assign("uname1",$uname1);
            $this->smarty->assign("mcon",$mcon);
            $dbobj=new db("message");
            $data=$dbobj->where("uid1=$uid1 and uid2=$uid2")->find();
            $this->smarty->assign("data",$data);
            $this->smarty->display("mespart.html");
        }
    }
}