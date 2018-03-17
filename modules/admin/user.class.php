<?php
/**
 * Created by PhpStorm.
 * User: 张聪
 * Date: 2017/10/27
 * Time: 16:29
 */
class user extends adminMain{
    function init(){
        $dbobj=new db("user");
        $arr=$dbobj->select();
        include LIBS_PATH."/pages.class.php";
        $pageobj=new pages();
        $pageobj->num=4;
        $pageobj->total=count($arr);
        $this->smarty->assign("pages",$pageobj->show());
        $result=$dbobj->select("select user.*,role.rname from user join role on user.ulevel=role.rid limit $pageobj->limit");
        $this->smarty->assign("result",$result);
        $this->smarty->display("showUser.html");
    }
    function add(){
        $this->smarty->display("addUser.html");
    }
    function addUser(){
        $uname=sql(P("uname"));
        $upass=md5(P("upass"));
        $unick=P("unick");
        $uphone=P("uphone");
        $ulevel=P("ulevel");
        $uhead=P("uhead");
        $dbobj=new db("user");
        $result=$dbobj->insert(array(
            "uname"=>"'$uname'",
            "upass"=>"'$upass'",
            "unick"=>"'$unick'",
            "uphone"=>"'$uphone'",
            "ulevel"=>"'$ulevel'",
            "uhead"=>"'$uhead'"
        ));
        if ($result>0){
            echo "<script>alert('添加成功');location.href='index.php?m=admin&f=user&a=add'</script>";
        }else{
            echo "<script>alert('添加失败');location.href='index.php?m=admin&f=user&a=add'</script>";
        }
    }
    function delete(){
        $uid=G("uid");
        $dbobj=new db("user");
        $result=$dbobj->where("uid=$uid")->delete();
        if ($result>0){
            echo "<script>alert('删除成功');location.href='index.php?m=admin&f=user'</script>";
        }else{
            echo "<script>alert('删除失败');location.href='index.php?m=admin&f=user'</script>";
        }
    }
    function update(){
        $uid=G("uid");
        $dbobj=new db("user");
        $result=$dbobj->where("uid={$uid}")->find();
        $this->smarty->assign("result",$result);
        $this->smarty->assign("uid",$uid);
        $this->smarty->display("updateUser.html");
    }
    function updateUser(){
        $uid=G("uid");
        $uname=sql(P("uname"));
        $ulevel=P("ulevel");
        $uhead=P("uhead");
        $dbobj=new db("user");
        if (md5(P("upass"))){
            $upass=md5(P("upass"));
            $result=$dbobj->where("uid=$uid")->update("uname='$uname',upass='$upass',ulevel=$ulevel,uhead='$uhead'");
        }else{
            $result=$dbobj->where("uid=$uid")->update("uname='$uname',ulevel=$ulevel,uhead='$uhead'");
        }
        if ($result>0){
            echo "<script>alert('修改成功');location.href='index.php?m=admin&f=user'</script>";
        }else{
            echo "<script>alert('修改失败');location.href='index.php?m=admin&f=user'</script>";
        }
    }
    //内容
    function addContent(){
        $this->smarty->display("addContent.html");
    }
    function showContent(){
        $this->smarty->display("showContent.html");
    }
    //用户角色
    function addRole(){
        $result=limit(1);
        if (count($result)>0){
            $dbobj=new db("articalLevel");
            $data=$dbobj->select();
            $this->smarty->assign("data",$data);
            $this->smarty->display("addRole.html");
        }else{
            echo "<script>alert('没有权限');location.href='index.php?m=admin&f=user&a=showRole'</script>";
        }
    }
    function showRole(){
        $dbobj=new db("role");
        $data=$dbobj->select("select role.*,articalLevel.* from role join articalLevel on role.conlevel=articalLevel.alid");
        $this->smarty->assign("data",$data);
        $this->smarty->display("showRole.html");
    }
    function addRoleCon(){
        $rname=P("rname");
        $connum=P("connum");
        $conlevel=P("conlevel");
        $dbobj=new db("role");
        $result=$dbobj->insert(array(
            "rname"=>"'$rname'","connum"=>"$connum","conlevel"=>"$conlevel"
        ));
        if ($result>0){
            echo "<script>alert('插入成功');location.href='index.php?m=admin&f=user&a=addRole'</script>";
        }else{
            echo "<script>alert('插入失败');location.href='index.php?m=admin&f=user&a=addRole'</script>";
        }
    }
    function selectRole(){
        $dbobj=new db("role");
        $result=$dbobj->select("select role.*,articalLevel.alname from role join articalLevel on role.conlevel=articalLevel.alid");
        $arr["rows"]=$result;
        $arr["results"]=count($result);
        echo json_encode($arr);
    }
    function addEditRole(){
        $type=G("type");
        $rid=P("rid");
        $rname=sql(P("rname"));
        $connum=sql(P("connum"));
        $conlevel=sql(P("conlevel"));
        $dbobj=new db("role");
        if ($type=="add"){
            $results=limit(1);
            if (count($results)>0){
                $result=$dbobj->insert(array("rname"=>"'$rname'","connum"=>"$connum","conlevel"=>"$conlevel"));
                if ($result>0){
                    echo $dbobj->db->insert_id;
                }
            }else{
                echo "error";
            }
        }elseif ($type=="edit"){
            $results=limit(3);
            if (count($results)>0){
                $result=$dbobj->where("rid=$rid")->update("rname='$rname',connum=$connum,conlevel=$conlevel");
                if ($result>0){
                    echo "edit";
                }
            }else{
                echo "error";
            }
        }
    }
    function deleteRole(){
        $str=P("str");
        $dbobj=new db("role");
        $result=$dbobj->where("rid in {$str}")->delete();
        if ($result>0){
            echo "ok";
        }
    }
    //文章等级
    function showAL(){
        $dbobj=new db("articalLevel");
        $data=$dbobj->select();
        $this->smarty->assign("data",$data);
        $this->smarty->display("showAL.html");
    }
    function addAl(){
        $this->smarty->display("addAL.html");
    }
    function selectAL(){
        $dbobj=new db("articalLevel");
        $result=$dbobj->select();
        $arr=array();
        $arr["rows"]=$result;
        $arr["results"]=count($result);
        echo json_encode($arr);
    }
    function editAL(){
        $type=G("type");
        $alid=P("alid");
        $alname=sql(P("alname"));
        $dbobj=new db("articalLevel");
        if ($type=="add"){
            $result=$dbobj->insert(array("alname"=>"'$alname'"));
            if ($result>0){
                echo $dbobj->db->insert_id;
            }
        }elseif ($type=="edit"){
            $result=$dbobj->where("alid=$alid")->update("alname='$alname'");
            if ($result>0){
                echo "edit";
            }
        }
    }
    function deleteAL(){
        $str=P("str");
        $dbobj=new db("articalLevel");
        $result=$dbobj->where("alid in {$str}")->delete();
        if ($result>0){
            echo "ok";
        }
    }
    //分类管理
    function addCategory(){
        $this->smarty->display("addCategory.html");
    }
    function showCategory(){
        $this->smarty->display("showCategory.html");
    }
    //订单管理
    function addOrder(){
        $this->smarty->display("addOrder.html");
    }
    function showOrder(){
        $this->smarty->display("showOrder.html");
    }
    //推荐位管理
    function addPosition(){
        $this->smarty->display("addPosition.html");
    }
    function showPosition(){
        $this->smarty->display("showPosition.html");
    }
    //商家账户管理
    function addAccount(){
        $this->smarty->display("addAccount.html");
    }
    function showAccount(){
        $this->smarty->display("showAccount.html");
    }
    //留言管理
    function addWords(){
        $this->smarty->display("addWords.html");
    }
    function showWords(){
        $this->smarty->display("showWords.html");
    }
}