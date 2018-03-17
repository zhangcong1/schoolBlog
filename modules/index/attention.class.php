<?php
/**
 * Created by PhpStorm.
 * User: 张聪
 * Date: 2017/11/18
 * Time: 13:07
 */
class attention extends indexMain{
    function init(){
        $uid1=P("uid1");
        $uid2=P("uid2");
        if ($uid2==0){
            echo "err";
        }else{
            $dbobj=new db("attention");
            $result=$dbobj->insert(array(
                "uid1"=>"$uid1","uid2"=>"$uid2"
            ));
            if ($result>0){
                echo "ok";
            }
        }
    }
    function delAttention(){
        $uid1=P("uid1");
        $uid2=P("uid2");
        if ($uid2==0){
            echo "err";
        }else{
            $dbobj=new db("attention");
            $result=$dbobj->where("uid1=$uid1 and uid2=$uid2")->delete();
            if ($result>0){
                echo "ok";
            }
        }

    }
}