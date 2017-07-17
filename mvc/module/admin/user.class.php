<?php
class user extends main{
     function __construct(){
         parent::__construct();
         $this->db=new db("login");
     }

    function add(){
          if($this->session->get("rid")!=1){
              $this->jump("没有权限","index.php?m=admin&f=login&a=main");
              exit;
          }
          $this->db->table="role";
          $result=$this->db->select();
          $this->smarty->assign("roles",$result);
          $this->smarty->display("addUser.html");
      }
      function addCon(){
          $uname=$_POST["uname"];
          $upass=md5($_POST["upass"]);
          $value=$_POST["value"];
          $result=$this->db->where("uname='{$uname}'")->select();
          if(count($result)>0){
              $this->jump("用户名存在","index.php?m=admin&f=login&a=main");
              exit;
          }
          if($this->db->insert("uname='{$uname}',upass='{$upass}',value='{$value}'")>0){
              $this->jump("添加成功","index.php?m=admin&f=welcome&a=users");
          }
      }
}