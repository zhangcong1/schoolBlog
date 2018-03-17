<?php
class pages{
    //默认一页五条数据
    public $num=5;
    //总共有多少数据
    public $total;
    //总共几页
    public $pageNum;
    //
    public $limit;
    //通过调用show方法返回字符串  分页栏
    function show(){
        if (!defined("PORT")){
            //http
            define("PORT",strtolower(strchr($_SERVER["SERVER_PROTOCOL"],"/",true)));
            //localhost   主机地址
            define("HOST",$_SERVER["HTTP_HOST"]);
        }
        //分页的地址   地址栏中所有信息
        define("PAGE_URL",PORT."://".HOST.$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"]);
        //地址栏中所有信息
        $originUrl=PAGE_URL;
        //默认打开第一页
        if (!strpos($originUrl,"page")){
            $originUrl.="&page=0";
        }
        //总页数
        $this->pageNum=ceil($this->total/$this->num);
        //没有page的地址
        $fullurl=substr($originUrl,0,strpos($originUrl,"&page"));
        //当前所在的页数   0,1,2,3
        $page=substr($originUrl,strrpos($originUrl,"=")+1);

        $str="";
        $str.="<a href='{$fullurl}&page=0'>首页</a>";
        $up=$page-1<0?0:$page-1;
        $str.="<a href='{$fullurl}&page={$up}'>上一页</a>";
        $start=$page-3<0?0:$page-3;
        $end=$page+6>$this->pageNum-1?$this->pageNum-1:$page+6;
        for($i=$start;$i<=$end;$i++){
            $nums=$i+1;
            if($i==$page){
                $style="style='color:#fff;background:#00bb29'";
            }else{
                $style="style='color:#000'";
            }
            $str.="<a href='{$fullurl}&page={$i}' {$style}>{$nums}</a>";
        }
        $next=$page+1>$this->pageNum-1?$this->pageNum-1:$page+1;
        $str.="<a href='{$fullurl}&page={$next}'>下一页</a>";
        $last=$this->pageNum-1;
        $str.="<a href='{$fullurl}&page={$last}'>尾页</a>";
        //limit条件
        $num=$page*$this->num;
        $this->limit=$num.",".$this->num;
        return $str;
    }
}