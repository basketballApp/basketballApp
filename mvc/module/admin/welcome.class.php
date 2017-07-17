<?php
class welcome extends main{
    function init(){
        $this->smarty->display("xhywelcome.html");
    }
    function users(){
        $this->smarty->display("xhyAddUser.html");
    }
    function Showuser(){
        $db=new db("login");
        $sql=$db->limit("0,10")->select();
        $this->smarty->assign("result",$sql);
        $this->smarty->display("xhyShowUser.html");
    }
}