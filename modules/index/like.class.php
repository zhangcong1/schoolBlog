<?php
/**
 * Created by PhpStorm.
 * User: 张聪
 * Date: 2017/11/20
 * Time: 19:43
 */
class like extends indexMain{
    function init(){
        $uid1=P("uid1");
        $conid=P("conid");
        if ($uid1==0){
            echo "err";
        }else{
            $dbobj=new db("good");
            $dbobj->insert(array(
                "uid"=>"$uid1","conid"=>"$conid"
            ));
            $count=count($dbobj->where("conid={$conid}")->select());
            echo $count;
        }
    }
    function cancel(){
        $uid1=P("uid1");
        $conid=P("conid");
        if ($uid1==0){
            echo "err";
        }else{
            $dbobj=new db("good");
            $dbobj->where("uid={$uid1}")->delete();
            $count=count($dbobj->where("conid={$conid}")->select());
            echo $count;
        }
    }
}