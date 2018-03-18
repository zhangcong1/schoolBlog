<?php
/**
 * Created by PhpStorm.
 * User: 张聪
 * Date: 2017/10/18
 * Time: 16:25
 */
defined("COME") or exit("非法");
class smarty{
    public $templateUrl;
    public $compileUrl;
    public $cacheUrl;
    public $arr=array();
    public $cache=false;

    public function setTemplateUrl($dirname="template"){
        $this->templateUrl=$dirname;
        $tplurl=APP_PATH."/".$this->templateUrl;
        $this->templateUrl=$tplurl;
        if(!is_dir($tplurl)){
            mkdir($tplurl);
        }
    }
    public function setCompileUrl($dirname="compile"){
        $this->compileUrl=$dirname;
        $comurl=APP_PATH."/".$this->compileUrl;
        $this->compileUrl=$comurl;
        if(!is_dir($comurl)){
            mkdir($comurl);
        }
    }
    public function setCacheUrl($dirname="cache"){
        $this->cacheUrl=$dirname;
        $cacheurl=APP_PATH."/".$this->cacheUrl;
        $this->compileUrl=$cacheurl;
        if(!is_dir($cacheurl)){
            mkdir($cacheurl);
        }
    }
    public function assign($str,$val){
        $this->arr[$str]=$val;
    }
    public function display($url){
        $fullpath=$this->templateUrl."/".$url;
        $str=file_get_contents($fullpath);
        $newstr=preg_replace("/\{([^\}\s]+)\}/",'<?php echo $this->arr["$1"]?>',$str);
        $comfullpath=$this->compileUrl."/".md5($url).".php";
        file_put_contents($comfullpath,$newstr);
        $cachefullpath=$this->cacheUrl."/".md5($url).".html";
        if (is_file($cachefullpath)){
            include "$cachefullpath";
        }else{
            ob_start();
            include "$comfullpath";
            if ($this->cache){
                $cacheStr=ob_get_contents();
                file_put_contents($cachefullpath,$cacheStr);
            }
        }
    }
}