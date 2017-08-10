<?php
class friends extends indexMain{
    function init(){
        $uid=$this->session->get("uid");
        $db=new db();
        $result=$db->where("myfriends.uid=$uid and myfriends.mfid=login.uid ")->join("login,myfriends");
        $result1=$db->where("myfriends.uid=$uid and myfriends.mfid=login.uid ")->join("login,myfriends");
        $this->smarty->assign("result1",$result1);
        $this->smarty->assign("result",$result);
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
    //del好友
    function del(){
        $uid=$this->session->get("uid");
        echo $uid;
        exit;
        $db=new db("myfriends");
        $result=$db->where("mfid=$uid ")->del("myfriends");
        $this->smarty->assign("result",$result);
        $this->smarty->display("yhlist.html");
    }
}