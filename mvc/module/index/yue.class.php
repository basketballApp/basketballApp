<?php
class yue extends indexMain{
    function init(){
        $uid=$this->session->get("uid");
        $db=new db("login");
        $result=$db->limit("0,10")->where("not uid=$uid")->select();
        $db1=new db("");
        $results=$db1->join("login,myfriends");
        $this->smarty->assign("result",$result);
        $this->smarty->assign("results",$results);
        $this->smarty->assign("uid",$uid);
        $this->smarty->display("yhnearby.html");
    }

}