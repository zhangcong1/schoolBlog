<?php
/**
 * Created by PhpStorm.
 * User: 张聪
 * Date: 2017/11/3
 * Time: 9:46
 */
class category extends adminMain{
    function addCat(){
        $this->smarty->display("category.html");
    }
    function insertCat(){
        $pid=P("pid")?sql(P("pid")):sql(0);
        $cname=sql(P("cname"));
        $cinfo=sql(P("cinfo"));
        $cimage=P("cimage");
        $dbobj=new db("category");
        $result=$dbobj->insert(array(
            "pid"=>"$pid","cname"=>"'$cname'","cimage"=>"'$cimage'","cinfo"=>"'$cinfo'"
        ));
        if ($result>0){
            echo "<script>alert('添加成功');location.href='index.php?m=admin&f=category&a=addCat'</script>";
        }else{
            echo "<script>alert('添加失败');location.href='index.php?m=admin&f=category&a=addCat'</script>";
        }
    }
    function treeCat(){
        tree(0,$arr);
        $arr=array(array("id"=>0,"text"=>" 一级分类","children"=>$arr));
        echo json_encode($arr);
    }
    function showCat(){
        $this->smarty->display("showCategory.html");
    }
    function showCatData(){
        $dbobj=new db("category");
        $arr=array();
        $result=$dbobj->select();
        $arr["total"]=count($result);
        $arr["rows"]=array(
            array(
                "id"=>0,
                "cname"=>"一级分类"
            )
        );
        foreach ($result as $v){
            $v["id"]=$v["cid"];
            $v["_parentId"]=$v["pid"];
            $arr["rows"][]=$v;
        }
        $arr["footer"]=array(
            array(
                "cname"=>"总分类:","cinfo"=>count($result),"iconCls"=>"icon-sum"
            )
        );
        echo json_encode($arr);
    }
    function edit(){
        $cid=P("cid");
        $field=P("field");
        $val=P("val");
        $dbobj=new db("category");
        $result=$dbobj->where("cid=$cid")->update("$field='$val'");
        if ($result>0){
            echo 'ok';
        }
    }
    function del(){
        $cid=P("cid");
        $dbobj=new db("category");
        $result=$dbobj->where("cid=$cid")->delete();
        if ($result>0){
            echo "ok";
        }
    }
}