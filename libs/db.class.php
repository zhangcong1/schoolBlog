<?php
if (!defined("COME")){
    echo "非法访问";
    exit();
}
class db{
    private $host;       //地址
    private $port;       //端口号
    private $user;       //用户名
    private $password;   //密码
    private $database;   //数据库名
    public $db;          //连接数据库
    function __construct($table=""){
        //指定全局变量
        global $configs;
//        $configs=require APP_PATH."/config.php";
        $this->host=$configs["database"]["host"];
        $this->port=$configs["database"]["port"];
        $this->user=$configs["database"]["user"];
        $this->password=$configs["database"]["password"];
        $this->database=$configs["database"]["database"];

        $this->table=$table;
        $this->opt['field']="*";
        $this->opt['where']=$this->opt['order']=$this->opt['limit']='';

        $this->mysql();
    }
    //连接数据库
    public function mysql(){
        $this->db=new mysqli($this->host,$this->user,$this->password,$this->database,$this->port);
        if (mysqli_connect_error()){
            echo "数据库连接错误";
            exit();
        }
        $this->db->query('set names utf8');
    }
    //查询多条数据
    public function select($sql=""){
        $sql=!empty($sql)?$sql:"select {$this->opt['field']} from {$this->table}"."{$this->opt['where']}"."{$this->opt['order']}"."{$this->opt['limit']}";
        $result=$this->db->query($sql);
        $arr=array();
        while ($rows=$result->fetch_assoc()){
            $arr[]=$rows;
        }
        return $arr;
    }
    //查询单条数据
    public function find($sql=""){
        $sql=!empty($sql)?$sql:"select {$this->opt['field']} from {$this->table}"."{$this->opt['where']}"."{$this->opt['order']}"."{$this->opt['limit']}";
        $result=$this->db->query($sql);
        $row=$result->fetch_assoc();
        return $row;
    }
    //执行自定义的sql语句
    public function exec($sql){
        $result=$this->db->query($sql);
        return $result;
    }
    public function selectTable($table){
        $this->table=$table;
        return $this;
    }
    public function selectField($field){
        $this->opt['field']=$field;
        return $this;
    }
    public function where($where){
        $this->opt["where"]=" where ".$where;
        return $this;
    }
    public function order($order){
        $this->opt["order"]=" order by ".$order;
        return $this;
    }
    public function limit($limit){
        $this->opt["limit"]=" limit ".$limit;
        return $this;
    }
    //删除
    public function delete(){
        $sql="delete from {$this->table}{$this->opt["where"]}";
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    //增
    public function insert($arr){
        $attr='';
        $val='';
        foreach ($arr as $k=>$v){
            $attr.=$k.",";
            $val.=$v.",";
        }
        $attr=substr($attr,0,-1);
        $val=substr($val,0,-1);
        $sql="insert into {$this->table} ({$attr}) values ({$val})";
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    //更新
    public function update($sql){
        $sql="update {$this->table} set {$sql}{$this->opt['where']}";
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    //关联查询
}
