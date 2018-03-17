<?php
/**
 * Created by PhpStorm.
 * User: 张聪
 * Date: 2017/11/14
 * Time: 16:11
 */
class content extends adminMain {
    //发布文章
    function init(){
        $dbobj=new db("content");
        $data=$dbobj->select("select content.*,user.uname,category.cname,position.pname from content join user on content.uid=user.uid join category on content.catid=category.cid join position on content.pid=position.pid where state=3");
        $this->smarty->assign("data",$data);
        $this->smarty->display("showContent.html");
    }
    //保存文章
    function saveCon(){
        $dbobj=new db("content");
        $data=$dbobj->select("select content.*,user.uname,category.cname,position.pname from content join user on content.uid=user.uid join category on content.catid=category.cid join position on content.pid=position.pid where state=1");
        $this->smarty->assign("data",$data);
        $this->smarty->display("showContent.html");
    }
    //待审核文章
    function checkCon(){
        $dbobj=new db("content");
        $data=$dbobj->select("select content.*,user.uname,category.cname,position.pname from content join user on content.uid=user.uid join category on content.catid=category.cid join position on content.pid=position.pid where state=2");
        $this->smarty->assign("data",$data);
        $this->smarty->display("showContent.html");
    }
    //禁用文章
    function disableCon(){
        $dbobj=new db("content");
        $data=$dbobj->select("select content.*,user.uname,category.cname,position.pname from content join user on content.uid=user.uid join category on content.catid=category.cid join position on content.pid=position.pid where state=4");
        $this->smarty->assign("data",$data);
        $this->smarty->display("showContent.html");
    }
    //文章状态
    function state(){
        $this->smarty->display("showState.html");
    }
    function selectState(){
        $dbobj=new db("state");
        $result=$dbobj->select();
        $arr["rows"]=$result;
        $arr["results"]=count($result);
        echo json_encode($arr);
    }
}