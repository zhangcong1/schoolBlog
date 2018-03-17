<?php
/**
 * Created by PhpStorm.
 * User: 张聪
 * Date: 2017/10/18
 * Time: 15:22
 */
class index extends indexMain {
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
        //获取专题分类
        $dbobj=new db("category");
        $data=$dbobj->select();
        $this->smarty->assign("data",$data);
        //推荐作者
        $dbobj=new db("user");
        $data2=$dbobj->where("ulevel=2 or ulevel=3")->select();
        $this->smarty->assign("data2",$data2);
        //文章列表
        $db=new db();
        $data1=$db->select("select content.*,user.uname,category.cname from content join user on content.uid=user.uid join category on content.catid=category.cid where state=3 and content.pid=1 limit 0,4");
        //点击量
        foreach ($data1 as $k=>$v){
            $hits=count($db->select("select hits.conid from hits where hits.conid={$v['conid']}"));
            if(!isset($data1["$k"]["hit"])){
                $data1["$k"]["hit"]=array();
            }
            $data1["$k"]["hit"]=$hits;
        }
        $this->smarty->assign("data1",$data1);

        $this->smarty->display("index.html");
//        $this->smarty->display("head.html");
    }
    function login(){
        $this->smarty->display("login.html");
    }
    function reg(){

        $this->smarty->display("reg.html");
    }
    function detail(){
        if (isset($_SESSION["userLogin"])){
            $userLogin=$_SESSION["userLogin"];
        }else{
            $userLogin=null;
        }

        $conid=G("conid");

        //点击量
        $dbobj=new db("hits");
        $dbobj->insert(array(
            "conid"=>"$conid"
        ));
        $hitnum=count($dbobj->select("select * from hits where conid={$conid}"));
        $this->smarty->assign("hitnum",$hitnum);
        //已发布文章
        $db=new db();
        $data=$db->find("select content.*,user.uname from content join user on content.uid=user.uid where state=3 and conid=$conid");
        $this->smarty->assign("data",$data);
        //登录者id
        $uid=isset($_SESSION["uid"])?$_SESSION["uid"]:0;
        $this->smarty->assign("uid",$uid);
        $uname=isset($_SESSION["uname"])?$_SESSION["uname"]:"";
        $this->smarty->assign("uname",$uname);

        //关注
        $dbobj=new db("attention");
        $uid1=$data["uid"];
        $result=$dbobj->where("uid1=$uid1 and uid2=$uid")->select();
        if ($result){
            $att=1;
        }else{
            $att=0;
        }
        $this->smarty->assign("att",$att);

        //留言
        $dbobj=new db();
        $data1=$dbobj->select("select message.*,user.uname from message join user on message.uid1=user.uid where conid={$conid} and state=0");
        foreach ($data1 as $k=>$v){
            $replays=$db->select("select message.*,user.uname from message,user where state={$v['mid']} and conid=".$conid ." and user.uid=message.uid1");
            if(!isset($data1["$k"]["son"])){
                $data1["$k"]["son"]=array();
            }
            foreach ($replays as $v){
                $data1["$k"]["son"][]=$v;
            }
        }
        /*var_dump($data1);
        exit();*/
        //评论数量
        $mnum=count($data1);
        $this->smarty->assign("mnum",$mnum);
        $this->smarty->assign("data1",$data1);
        //喜欢数量
        $dbobj=new db("good");
        $likenum=count($dbobj->where("conid={$conid}")->select());
        $this->smarty->assign("likenum",$likenum);
        //喜欢
        $like=$dbobj->where("uid={$uid} and conid={$conid}")->select();
        $this->smarty->assign("like",$like);

        $url=PORT.'://'.HOST.$_SERVER["REQUEST_URI"];
        $_SESSION["url"]=$url;
        $this->smarty->assign("userLogin",$userLogin);
        $this->smarty->assign("header",TPL_PATH."/index/head.html");
        $this->smarty->display("detail.html");
//        $this->smarty->display("head.html");
    }
    function classify(){
        if (isset($_SESSION["userLogin"])){
            $userLogin=$_SESSION["userLogin"];
        }else{
            $userLogin=null;
        }
        $this->smarty->assign("userLogin",$userLogin);
        $this->smarty->assign("header",TPL_PATH."/index/head.html");
        $url=PORT.'://'.HOST.$_SERVER["REQUEST_URI"];
        $_SESSION["url"]=$url;
        //获取专题分类
        $dbobj=new db("category");
        $data=$dbobj->select();

        include LIBS_PATH."/pages.class.php";
        $pageobj=new pages();
        $pageobj->num=6;
        $pageobj->total=count($data);
        $this->smarty->assign("pages",$pageobj->show());
        $data=$dbobj->limit($pageobj->limit)->select();

        $this->smarty->assign("data",$data);
        $this->smarty->display("classify.html");
//        $this->smarty->display("head.html");
    }
    function ajax(){
        $num=$_POST["page"]*6;
        $dbobj=new db("category");
        $result=$dbobj->limit("{$num},6")->select();
        echo json_encode($result);
    }

    function ajaxArtical(){
        $num=$_POST["page"]*4;
        $db=new db();
        $data1=$db->select("select content.*,user.uname,category.cname from content join user on content.uid=user.uid join category on content.catid=category.cid where state=3 and content.pid=1 limit $num,4");
        //点击量
        foreach ($data1 as $k=>$v){
            $hits=count($db->select("select hits.conid from hits where hits.conid={$v['conid']}"));
            if(!isset($data1["$k"]["hit"])){
                $data1["$k"]["hit"]=array();
            }
            $data1["$k"]["hit"]=$hits;
        }

        echo json_encode($data1);
    }
    function lists(){
        if (isset($_SESSION["userLogin"])){
            $userLogin=$_SESSION["userLogin"];
        }else{
            $userLogin=null;
        }

        $cid=G("cid");
        $dbobj=new db("category");
        $data=$dbobj->where("cid=$cid")->find();
        $this->smarty->assign("data",$data);

        $db=new db();
        $data1=$db->select("select content.*,user.uname from content join user on content.uid=user.uid where state=3 and catid=$cid");
        $this->smarty->assign("data1",$data1);

        $url=PORT.'://'.HOST.$_SERVER["REQUEST_URI"];
        $_SESSION["url"]=$url;
        $this->smarty->assign("userLogin",$userLogin);
        $this->smarty->assign("header",TPL_PATH."/index/head.html");
        $this->smarty->display("lists.html");
//        $this->smarty->display("head.html");
    }
    function personal(){
        if (isset($_SESSION["userLogin"])){
            $userLogin=$_SESSION["userLogin"];
        }else{
            $userLogin=null;
        }
        $this->smarty->assign("userLogin",$userLogin);
        $this->smarty->assign("uname",$_SESSION["uname"]);
        $this->smarty->assign("header",TPL_PATH."/index/head.html");
        $this->smarty->display("personal.html");
//        $this->smarty->display("head.html");
    }
    function account(){
        if (isset($_SESSION["userLogin"])){
            $userLogin=$_SESSION["userLogin"];
        }else{
            $userLogin=null;
        }
        $this->smarty->assign("userLogin",$userLogin);
        $this->smarty->assign("header",TPL_PATH."/index/head.html");
        $this->smarty->display("account.html");
//        $this->smarty->display("head.html");
    }
    function collection(){
        if (isset($_SESSION["userLogin"])){
            $userLogin=$_SESSION["userLogin"];
        }else{
            $userLogin=null;
        }
        $this->smarty->assign("userLogin",$userLogin);
        $this->smarty->assign("header",TPL_PATH."/index/head.html");
        $this->smarty->display("collection.html");
//        $this->smarty->display("head.html");
    }

    function setting(){
        if (isset($_SESSION["userLogin"])){
            $userLogin=$_SESSION["userLogin"];
        }else{
            $userLogin=null;
        }
        $this->smarty->assign("userLogin",$userLogin);
        $this->smarty->assign("header",TPL_PATH."/index/head.html");
        $this->smarty->display("setting.html");
//        $this->smarty->display("head.html");
    }

    function car(){
        if (isset($_SESSION["userLogin"])){
            $userLogin=$_SESSION["userLogin"];
        }else{
            $userLogin=null;
        }
        $this->smarty->assign("userLogin",$userLogin);
        $this->smarty->display("car.html");
        $this->smarty->display("head.html");
    }
    function guanzhu(){
        if (isset($_SESSION["userLogin"])){
            $userLogin=$_SESSION["userLogin"];
        }else{
            $userLogin=null;
        }
        $this->smarty->assign("userLogin",$userLogin);
        $this->smarty->display("guanzhu.html");
        $this->smarty->display("head.html");
    }
    function artical(){
        if (isset($_SESSION["userLogin"])){
            $userLogin=$_SESSION["userLogin"];
        }else{
            $userLogin=null;
        }
        $this->smarty->assign("userLogin",$userLogin);
        $this->smarty->display("artical.html");
        $this->smarty->display("head.html");
    }
}