<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/3/17
 * Time: 15:12
 */
class message extends adminMain{
    function init(){
        $db=new db("message");
        $result=$db->select("select message.*,user.uname,content.ctitle from message join user on message.uid1=user.uid join content on message.conid=content.conid");
        $this->smarty->assign("data",$result);
        $this->smarty->display("showMessage.html");
    }
    function delete(){
        $results=limit(2);
        if (count($results)>0){
            $mid=P("mid");
            $dbobj=new db("message");
            $result=$dbobj->where("mid={$mid}")->delete();
            if ($result>0){
                echo "ok";
            }
        }else{
            echo "error";
        }
    }
}