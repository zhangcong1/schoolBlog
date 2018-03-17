<?php
/**
 * Created by PhpStorm.
 * User: 张聪
 * Date: 2017/10/21
 * Time: 20:10
 */
class code{
    //属性   方法
    public $width=100;
    public $height=40;
    public $codestr="3456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
    public $codeLen=4;
    public $codeSize=array("min"=>20,"max"=>30);
    public $codeAngle=array("min"=>-15,"max"=>-15);
    public $lineNum=array("min"=>3,"max"=>6);
    public $pixNum=array("min"=>30,"max"=>60);
    public $type="png";
    public $printCode="";
    public $codeUrl="";
    //设置画布
    private function setcanvas(){
        //创建资源
        $this->image=imagecreatetruecolor($this->width,$this->height);
        imagefill($this->image,0,0,$this->setColor());
    }
    //设置随机的颜色
    private function setColor($type="background"){
        $r=$type=="background"?mt_rand(130,255):mt_rand(0,120);
        $g=$type=="background"?mt_rand(130,255):mt_rand(0,120);
        $b=$type=="background"?mt_rand(130,255):mt_rand(0,120);
        return imagecolorallocate($this->image,$r,$g,$b);
    }
    //设置内容
    private function setCon(){
        $this->setText();
        for ($i=0;$i<$this->codeLen;$i++){
            $fontsize=mt_rand($this->codeSize["min"],$this->codeSize["max"]);
            $fontangle=mt_rand($this->codeAngle["min"],$this->codeAngle["max"]);
            $space=$this->width/$this->codeLen;
            $arr=imagettfbbox($fontsize,$fontangle,$this->codeUrl,$this->printCode[$i]);
            $x=$i*$space+mt_rand(-5,5);
            $y=$this->height-($arr[1]-$arr[5])+mt_rand(-5,5);
            imagettftext($this->image,$fontsize,$fontangle,$x,$y,$this->setColor("a"),$this->codeUrl,$this->printCode[$i]);
        }
    }
    //设置文字
    private function setText(){
        $str="";
        for ($i=0;$i<$this->codeLen;$i++){
            $str.=$this->codestr[mt_rand(0,strlen($this->codestr)-1)];
        }
        $this->printCode=$str;
    }
    //设置线条
    private function setLine(){
        $lineNum=mt_rand($this->lineNum["min"],$this->lineNum["max"]);
        for ($i=0;$i<$lineNum;$i++){
            $startX=mt_rand(0,$this->width/2);
            $endX=mt_rand($this->width/2,$this->width);
            $startY=mt_rand(0,$this->height);
            $endY=mt_rand(0,$this->height);
            imageline($this->image,$startX,$startY,$endX,$endY,$this->setColor("a"));
        }
    }
    //设置点
    private function setPix(){
        $pixNum=mt_rand($this->pixNum["min"],$this->pixNum["max"]);
        for ($i=0;$i<$pixNum;$i++){
            $x=mt_rand(0,$this->width);
            $y=mt_rand(0,$this->height);
            imagesetpixel($this->image,$x,$y,$this->setColor("a"));
        }
    }
    //输出
    public function out(){
        header("content-type:image/".$this->type);
        $this->setcanvas();
        $this->setCon();
        $this->setLine();
        $this->setPix();
        //输出imagepng（） imagejpeg（）
        $type="image".$this->type;
        $type($this->image);
        $_SESSION["code"]=strtolower($this->printCode);
        imagedestroy($this->image);
    }
}