<?php
class upload{
    public $size;
    private $data;
    public $fileName = "file";
    private $type = "image/jpeg,image/png,image/gif";
    private $fullPath;
    public $rootPath = "photo";
    function __construct()
    {
        $this->size = 1024*1024*70;
    }
    public function move (){
        /*接收数据*/
        $this->accept();
        /*检查数据*/
        if($this->check()){
            /*检查成功*/
            /*创建文件夹*/
            $this->createDir();
            /*上传文件*/
            $this->upFile();
            echo $this->fullPath;
        }else{
            echo "上传失败";
        };
    }
    private function accept (){
        $this->data = $_FILES[$this->fileName];
    }
    private function check () {
        if(is_uploaded_file($this->data["tmp_name"])){
            if(strchr($this->type,$this->data["type"]) && $this->data["size"] < $this->size){
                return true;
            }
        }
        return false;
    }
    private function createDir(){
        /*设置根目录*/
        /*if(!is_dir(root)){
            mkdir(root,true);
        }*/
        /*设置时间目录*/
        $time = Date("y-m-d");
        if(!is_dir($this->rootPath."/".$time)){
            mkdir($this->rootPath."/".$time,0777,true);
        }
        /*设置文件名*/
        $name = time().rand(0,10000).$this->data["name"];
        $this->fullPath = $this->rootPath."/".$time."/".$name;
    }
    private  function upFile(){
        move_uploaded_file($this->data["tmp_name"],$this->fullPath);
    }
}