<?php
if(!defined("COMING")){
    echo "非法侵入";
    exit;
}
class db{
    private $host;   //地址
    private $user;   //用户名
    private $pass;   //密码
    private $port;   // 端口号
    private $database;    //数据库
    private $db;    //连接的泽源
    function __construct($table){
        $config=require APP_PATH."/config.php";
        $this->host=$config["database"]["host"];
        $this->user=$config["database"]["user"];
        $this->pass=$config["database"]["pass"];
        $this->database=$config["database"]["database"];
        $this->port=$config["database"]["port"];
        $this->db=mysqli_connect($this->host,$this->user,$this->pass,$this->database,$this->port);
        $this->db->query("set names utf8");
        if(!$this->db){
            echo mysqli_connect_error();
            exit();
        }
        $this->opts["field"]="*";
        $this->opts["where"]="";
        $this->opts["order"]="";
        $this->opts["limit"]="";
        $this->opts["val"]="";
        $this->table=$table;
    }
    function select(){
        $sql="select ".$this->opts["field"]." from ".$this->table." ".$this->opts["where"]." ".$this->opts["order"]." ".$this->opts["limit"];
        $result=$this->db->query($sql);
        $array=array();
        while($row=$result->fetch_assoc()){
            $array[]=$row;
        }
        return $array;
    }
    function setField($params="*"){
        $this->opts["field"]=$params;
        return $this;
    }
    function where($params){
        $this->opts["where"]="where ".$params;
        return $this;
    }
    function order($params){
        $this->opts["order"]="order by ".$params;
        return $this;
    }
    function limit($params){
        $this->opts["limit"]="limit ".$params;
        return $this;
    }
    function del($params=""){
        $this->opts["where"]=(!empty($params))?" where ".$params:$this->opts["where"];
        $sql="delete from ".$this->table." ".$this->opts["where"];
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    function update($params=""){
        if(!empty($params)){
            $index=strrpos(strtolower($params),"where");
            if($index>-1){
                if($index==0){
                    $this->opts["where"]=$params;
                }else{
                    $this->opts["where"]=substr($params,$index);
                    $this->opts["field"]=substr($params,0,$index);
                }
            }else{
                $this->opts["field"]=$params;
            }
        }
        $sql="update ".$this->table." set ".$this->opts["field"]." ".$this->opts["where"];
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    function insert($params=""){
        if(!empty($params)){
            $arr=explode(",",$params);
            $key="";
            $val="";
            foreach($arr as $v){
                $r=explode("=",$v);
                $key.=$r[0].",";
                $val.=$r[1].",";
            }
            $this->opts["field"]=substr($key,0,-1);
            $this->opts["val"]=substr($val,0,-1);
        }
        $sql="insert into ".$this->table." (".$this->opts["field"].") values (".$this->opts["val"].")";
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    function setVal($params){
        $this->opts["val"]=$params;
        return $this;
    }
    function join($tables){
        $sql="select ".$this->opts["field"]." from ".$tables." ".$this->opts["where"]." ".$this->opts["order"]." ".$this->opts["limit"];
        $result=$this->db->query($sql);
        $arr=array();
        while($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        return $arr;
    }
}