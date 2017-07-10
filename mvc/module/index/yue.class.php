<?php
class yue extends indexMain{
    function init(){
        $db=new db("login");
        $result=$db->limit("0,10")->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("yhnearby.html");
    }

}