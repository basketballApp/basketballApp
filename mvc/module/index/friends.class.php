<?php
class friends extends indexMain{
    function init(){
        $this->smarty->display("yhlist.html");

    }
    function Concern(){
        $mfid=$_POST["mfid"];
        $uid=$_POST["uid"];
        $db=new db("myfriends");
        $result=$db->insert("uid=$uid,mfid=$mfid");
        $result1=$db->select("uid=$uid");
        $this->smarty->assign("result1",$result1);
        $this->smarty->assign("result",$result);
        if( $result){
            echo "ok";
        }
    }
}