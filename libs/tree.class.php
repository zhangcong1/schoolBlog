<?php
/**
 * Created by PhpStorm.
 * User: 张聪
 * Date: 2017/11/9
 * Time: 17:04
 */
class tree{
    public $str;
    function getTree($pid,$step,$flag,$table){
        $db=new db();
        $sql="select * from $table where pid=$pid";
        $step++;
        $flag=str_repeat($flag,$step);
        $result=$db->db->query($sql);
        $this->str.="<ul>";
        while ($rows=$result->fetch_assoc()){
            $cid=$rows["cid"];
            $sql1="select * from $table where pid=".$rows["cid"];
            $result1=$db->db->query($sql1);
            if ($result1->num_rows>0){
                $this->str.="<li class='parent'>{$flag}{$rows['cname']}</li>";
            }else{
                $this->str.="<li><a href='index.php?m=index&f=write&a=addCon&cid=$cid' target='right'>{$flag}{$rows['cname']}</a></li>";
            }
            $this->getTree($rows["cid"],$step,">",$table);
        }
        $this->str.="</ul>";
    }
}