<?php
class member extends indexMain{
   function init(){
      $this->smarty->display("yhone.html");
   }
   function own(){
      $uid=$this->session->get("uid");
      $db=new db();
      $result=$db->limit("0,4")->where("dynamic.uid=$uid")->join("dynamic,login");
      $this->smarty->assign("result",$result);
      $this->smarty->display("yhown.html");
   }
    function geren(){
        $mfid=$_GET["mfid"];
        $db=new db("dynamic");
        $result=$db->limit("0,4")->where("uid=$mfid")->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("yhowns.html");
    }
}