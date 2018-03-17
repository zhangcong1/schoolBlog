<?php
/**
 * Created by PhpStorm.
 * User: 张聪
 * Date: 2017/10/25
 * Time: 10:17
 */
class adminM extends adminMain{
    function init(){
        $dbobj=new db("admin");
        $arr=$dbobj->select("select admin.*,level.lname from admin join level on admin.level=level.lid");
        $this->smarty->assign("arr",$arr);
        $db=new db("level");
        $data=$db->select();
        $this->smarty->assign("data",$data);
        //分页
        include LIBS_PATH."/pages.class.php";
        $pageobj=new pages();
        $pageobj->num=6;
        $pageobj->total=count($arr);
        $this->smarty->assign("pages",$pageobj->show());
        $result=$dbobj->select("select admin.*,level.lname from admin join level on admin.level=level.lid limit $pageobj->limit");

        $this->smarty->assign("result",$result);
        $this->smarty->display("showAdmin.html");
    }
    function upload(){
        $upObj = new upload();
        $upObj->rootPath = "upload";
        $upObj->move();
    }
    function add(){
        $results=limit(1);
        if (count($results)>0){
            $db=new db("level");
            $data=$db->select();
            $this->smarty->assign("data",$data);
            $this->smarty->display("addAdmin.html");
        }else{
            echo "<script>alert('没有权限');location.href='index.php?m=admin&f=adminM'</script>";
        }
    }
    function addAdmin(){
        $admin=sql(P("admin"));
        $pass=md5(P("pass"));
        $level=P("level");
        $ahead=P("ahead");
        $dbobj=new db("admin");
        $result=$dbobj->insert(array(
            "aname"=>"'$admin'",
            "apass"=>"'$pass'",
            "level"=>"$level",
            "ahead"=>"'$ahead'"
        ));
        if ($result>0){
            echo "<script>alert('添加成功');location.href='index.php?m=admin&f=adminM&a=add'</script>";
        }else{
            echo "<script>alert('添加失败');location.href='index.php?m=admin&f=adminM&a=add'</script>";
        }
    }
    function delete(){
        $results=limit(2);
        if (count($results)>0){
            $aid=P("aid");
            $dbobj=new db("admin");
            $result=$dbobj->where("aid=$aid")->delete();
            if ($result>0){
                echo "ok";
            }else{
                echo "<script>alert('删除失败');location.href='index.php?m=admin&f=adminM'</script>";
            }
        }else{
            echo "error";
        }
    }
    function edit(){
        $results=limit(3);
        if (count($results)>0){
            $aid=G("aid");
            $dbobj=new db("admin");
            $arr=$dbobj->where("aid=$aid")->find();
            $this->smarty->assign("aid",$aid);
            $this->smarty->assign("arr",$arr);
            $db=new db("level");
            $data=$db->select();
            $this->smarty->assign("data",$data);
            $this->smarty->display("updateAdmin.html");
        }else{
            echo "<script>alert('没有权限');location.href='index.php?m=admin&f=adminM'</script>";
        }
    }
    function updateAdmin(){
        $aid=G("aid");
        $aname=P("aname");
        $level=P("level");
        $ahead=P("ahead");
        $dbobj=new db("admin");
        if (md5(P("apass"))){
            $apass=md5(P("apass"));
            $result=$dbobj->where("aid=$aid")->update("aname='$aname',apass='$apass',level=$level,ahead='$ahead'");
        }else{
            $result=$dbobj->where("aid=$aid")->update("aname='$aname',level=$level,ahead='$ahead'");
        }
        if ($result>0){
            echo "<script>alert('修改成功');location.href='index.php?m=admin&f=adminM'</script>";
        }else{
            echo "<script>alert('修改失败');location.href='index.php?m=admin&f=adminM'</script>";
        }
    }

    //管理员等级
    function showRank(){
        include LIBS_PATH."/pages.class.php";
        $pageobj=new pages();

        $dbobj=new db("level");
        $arr=$dbobj->select();
        $pageobj->num=12;
        $pageobj->total=count($arr);
        $this->smarty->assign("pages",$pageobj->show());
        $result=$dbobj->limit($pageobj->limit)->select();

        $this->smarty->assign("result",$result);
        $this->smarty->display("showRank.html");
    }
    function ajax(){
        sleep(2);
        $num=$_POST["page"]*12;
        $dbobj=new db("level");
        $result=$dbobj->limit("{$num},12")->select();
        echo json_encode($result);
    }
    function addRank(){
        $this->smarty->display("addRank.html");
    }
    function selectRank(){
        $dbobj=new db("level");
        $result=$dbobj->select();
        $arr["rows"]=$result;
        $arr["results"]=count($result);
        echo json_encode($arr);
    }
    function insertRank(){
        $lname=sql(P("lname"));

        $dbobj=new db("level");
        $result=$dbobj->insert(array("lname"=>"'$lname'"));
        if ($result>0){
            echo $dbobj->db->insert_id;
        }
    }
    function editRank(){
        $type=G("type");
        $lid=P("lid");
        $lname=sql(P("lname"));
        $messagenum=sql(P("messagenum"));
        $connum=sql(P("connum"));
        $adminnum=sql(P("adminnum"));
        $dbobj=new db("level");
        if ($type=="add"){
            $results=limit(1);
            if (count($results)){
                $result=$dbobj->insert(array("lname"=>"'$lname'","messagenum"=>"'$messagenum'","connum"=>"'$connum'","adminnum"=>"'$adminnum'"));
                if ($result>0){
                    echo $dbobj->db->insert_id;
                }
            }else{
                echo "<script>alert('没有权限');location.href='index.php?m=admin&f=adminM&a=showRank'</script>";
            }
        }elseif ($type=="edit"){
            $results=limit(3);
            if (count($results)>0){
                $result=$dbobj->where("lid=$lid")->update("lname='$lname',messagenum='$messagenum',connum='$connum',adminnum='$adminnum'");
                if ($result>0){
                    echo "edit";
                }
            }else {
                echo "<script>alert('没有权限');location.href='index.php?m=admin&f=adminM&a=showRank'</script>";
            }
        }
    }
    function deleteRank(){
        $results=limit(2);
        if (count($results)>0){
            $str=P("str");
            $dbobj=new db("level");
            $result=$dbobj->where("lid in {$str}")->delete();
            if ($result>0){
                echo "ok";
            }
        }else{
            echo "error";
        }
    }

    //BUI管理员部分
    function selectAdmin(){
        $dbobj=new db("admin");
        $result=$dbobj->select("select admin.*,level.lname from admin join level on admin.level=level.lid");
        $arr=array();
        $arr["rows"]=$result;
        $arr["results"]=count($result);
        echo json_encode($arr);
    }
    function insertAdmin(){
        $aid=P("aid");
        $aname=sql(P("aname"));
        $apass=md5(P("apass"));
        $level=sql(P("level"));
        $type=G("type");
        $db=new db("level");
        $result=$db->where("lid={$level}")->find();
        $lname=$result["lname"];
        $dbobj=new db("admin");
        if ($type=="edit"){
            $results=limit(3);
            if (count($results)>0){
                $result=$dbobj->where("aid=$aid")->update("aname='$aname',apass='$apass',level='$level'");
                if ($result>0){
                    echo "edit";
                }
            }else{
                echo "<script>alert('没有权限');location.href='index.php?m=admin&f=adminM'</script>";
            }
        }elseif ($type=="add"){
            $results=limit(1);
            if (count($results)>0){
                $result=$dbobj->insert(array("aname"=>"'$aname'","apass"=>"'$apass'","level"=>"$level","ahead"=>"''"));
                if ($result>0){
                    echo "$lname";
                }
            }else{
                echo "<script>alert('没有权限');location.href='index.php?m=admin&f=adminM&a=showRank'</script>";
            }
        }
    }
    function deleteAdmin(){
        $results=limit(2);
        if (count($results)>0){
            $str=P("str");
            $dbobj=new db("admin");
            $result=$dbobj->where("aid in {$str}")->delete();
            if ($result>0){
                echo "ok";
            }
        }else{
            echo "error";
        }
    }
}