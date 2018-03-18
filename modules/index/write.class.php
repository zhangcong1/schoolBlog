<?php
/**
 * Created by PhpStorm.
 * User: 张聪
 * Date: 2017/11/9
 * Time: 16:12
 */
class write extends indexMain{
    function init(){
        if (isset($_SESSION["userLogin"])){
            include LIBS_PATH."/tree.class.php";
            $tree=new tree();
            $tree->getTree(0,0,">","category");
            $this->smarty->assign("tree",$tree->str);
            $this->smarty->display("write.html");
        }else{
            echo "<script>alert('请先登录');location.href='index.php?m=index&f=index&a=login'</script>";
        }
    }
    function addCon(){
        $cid=G("cid");
        $uid=$_SESSION["uid"];
        $dbobj=new db("content");

        $data=$dbobj->where("uid=$uid and catid=$cid and state=1")->select();
        $this->smarty->assign("data",$data);

        $data1=$dbobj->where("uid=$uid and catid=$cid and state=3")->select();
        $this->smarty->assign("data1",$data1);

        $this->smarty->assign("cid",$cid);
        $this->smarty->display("addCon.html");
    }
    function addConCon(){
        $cid=G("cid");
        $this->smarty->assign("cid",$cid);
        $dbobj=new db("position");
        $data=$dbobj->select();
        $this->smarty->assign("data",$data);
        $this->smarty->display("addConCon.html");
    }

    function insertCon(){
        $type=G("type");
        $cid=G("cid");
        $ctitle=sql(P("ctitle"));
        $con=addcslashes(P("con"),"s");
        $thumb=P("thumb");
        $price=empty(sql(P("price")))?0:sql(P("price"));
        $pid=isset($_POST["pid"])?implode(",",$_POST["pid"]):"";
        $uid=$_SESSION["uid"];
        $dbobj=new db("content");
        $result=$dbobj->insert(array(
            "ctitle"=>"'$ctitle'",
            "con"=>"'$con'",
            "uid"=>"$uid",
            "thumb"=>"'$thumb'",
            "catid"=>"$cid",
            "price"=>"$price",
            "state"=>"$type",
            "pid"=>"'$pid'"
        ));
        if ($result>0){
            if ($type==1){
                echo "<script>alert('保存成功');location.href='index.php?m=index&f=write&a=addConCon&cid=$cid'</script>";
            }elseif ($type==2){
                echo "<script>alert('请等待审核');location.href='index.php?m=index&f=write&a=addConCon&cid=$cid'</script>";
            }
        }
    }

    //编辑文章
    function editCon(){
        $conid=G("conid");
        $this->smarty->assign("conid",$conid);
        $dbobj=new db("content");
        $result=$dbobj->where("conid=$conid")->find();
        $this->smarty->assign("result",$result);

        $cid=G("cid");
        $this->smarty->assign("cid",$cid);
        //推荐位
        $dbobj=new db("position");
        $data=$dbobj->select();
        $this->smarty->assign("data",$data);
        $this->smarty->display("editCon.html");
    }
    function updateCon(){
        $cid=G("cid");
        $conid=G("conid");
        $ctitle=P("ctitle");
        $con=P("con");
        $thumb=empty(P("thumb"))?"":P("thumb");
        $price=empty(sql(P("price")))?0:sql(P("price"));
        $pid=isset($_POST["pid"])?implode(",",$_POST["pid"]):"";
        $dbobj=new db("content");
        if ($thumb){
            $result=$dbobj->where("conid=$conid")->update("ctitle='$ctitle',con='$con',thumb='$thumb',price=$price,pid='$pid'");
        }else{
            $result=$dbobj->where("conid=$conid")->update("ctitle='$ctitle',con='$con',price=$price,pid='$pid'");
        }

        if ($result>0){
            echo "<script>alert('修改成功');location.href='index.php?m=index&f=write&a=addCon&cid=".$cid."'</script>";
        }
    }
}