<?php
class yue extends indexMain{
    function init(){
        $uid=$this->session->get("uid");
        $db=new db("login");
        $result=$db->limit("0,10")->where("not uid=$uid")->select();
        $this->smarty->assign("result",$result);
        $db1=new db("myfriends");
        $results=$db1->where("uid=$uid")->setField("mfid")->select();
        $arr=array();
       for ($i=0;$i<count($results);$i++){
//           $this->smarty->assign("results",$results[$i]);
          foreach ($results[$i] as $k=>$v){
              $arr[]=$v;
          }
       }
        $this->smarty->assign("arr",$arr);
//        var_dump($arr);
        $this->smarty->assign("uid",$uid);
        $this->smarty->display("yhnearby.html");
    }

}