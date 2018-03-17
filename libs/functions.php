<?php
/**
 * Created by PhpStorm.
 * User: 张聪
 * Date: 2017/10/24
 * Time: 13:34
 */
function P($params){
    return $_POST[$params];
}
function G($params){
    return $_GET[$params];
}
//防止sql注入
function sql($params){
    return addslashes(htmlspecialchars($params));
}
function limit($i){
    $id=$_SESSION["level"];
    $db=new db("level");
    return $results=$db->where("lid={$id} and find_in_set('$i',adminnum)")->select();
}
function tree($pid=0,&$arr){
    $dbobj=new db();
    $sql="select * from category where pid={$pid}";
    $result=$dbobj->db->query($sql);
    $i=0;
    while ($rows=$result->fetch_assoc()){
        $arr[$i]=array(
            "id"=>$rows["cid"],
            "text"=>$rows["cname"]
        );
        tree($rows["cid"],$arr[$i]["children"]);
        $i++;
    }
}