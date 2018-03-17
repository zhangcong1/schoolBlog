<?php
//判断访问常量COME是否存在
if (!defined("COME")){
    echo "非法访问";
    exit();
}
//调度  地址栏
class route{
    //目录
    private static $m;
    //文件
    private static $f;
    //方法
    private static $a;
    //获取
    private function getInfo(){
        //目录存在并且目录不为空访问该目录，否则默认访问index目录
        self::$m=isset($_REQUEST['m'])&&!empty($_REQUEST['m'])?$_REQUEST['m']:"index";
        self::$f=isset($_REQUEST['f'])&&!empty($_REQUEST['f'])?$_REQUEST['f']:"index";
        self::$a=isset($_REQUEST['a'])&&!empty($_REQUEST['a'])?$_REQUEST['a']:"init";
    }
    public function set(){
        //先获取参数信息
        $this->getInfo();
        $murl=MODULES_PATH."/".self::$m;
        //是否存在该目录
        if (is_dir($murl)){
            $furl=$murl."/".self::$f.".class.php";
            //目录中是否存在该文件
            if (is_file($furl)){
                include_once $furl;
                //文件中是否存在这个类
                if (class_exists(self::$f)){
                    //实例化对象
                    $obj=new self::$f();
                    $method=self::$a;
                    //类中是否存在该方法
                    if (method_exists($obj,$method)){
                        $obj->$method();
                    }else{
                        echo $furl."文件下的".self::$f."这个类中的".$method."这个方法不存在";
                    }
                }else{
                    echo $furl."文件下的".self::$f."这个类不存在";
                }
            }else{
                echo $murl."目录下的".self::$f."这个文件不存在";
            }
        }else{
            echo $murl."这个目录不存在";
        }
    }
}