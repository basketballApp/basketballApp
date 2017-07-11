<?php
class index extends indexMain {
    function init(){
        $this->smarty->assign("login",$this->session->get("indexLogin"));
        $this->smarty->assign("uname",$this->session->get("uname"));
        if($this->session->get("uname")){
            $this->smarty->display("qzzindex.html");
        }else{
            $this->smarty->display("xhysplash.html");
        }
    }
    function qzzindex(){
        $db=new db("nearpeople");
        $result=$db->limit("0,2")->select();
        $this->smarty->assign("result",$result);

//        附近球场
        $db1=new db("nearcourt");
        $result2=$db1->limit("0,3")->select();
        $this->smarty->assign("result2",$result2);
        $this->smarty->display("qzzindex.html");
    }
//    朋友圈
    function pengyouquan(){
        $pid=$_GET["pid"];
        $db=new db("friendcircle");
        $result=$db->limit("0,2")->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("yhown.html");
    }
    function courtDetails(){
        $this->smarty->display("gxqorderDetails.html");
    }
    function ljzf(){
        $this->smarty->display("gxqzffs.html");
    }
    function addOrder(){
        $cid=$_GET["cid"];
        $db=new db("nearcourt");
        $result=$db->where("cid=".$cid)->select();
        $this->smarty->assign("xiangqing",$result);
        $this->smarty->display("gxqSearchResult.html");
    }
    function searchCourtDetail(){
        $cid=$_GET["cid"];
        $db=new db("nearcourt");
        $result=$db->where("cid=".$cid)->select();
        $this->smarty->assign("xiangqing",$result);
        $this->smarty->display("gxqSearchResult.html");
    }
//    function code(){
//        $obj=new code();
//        $obj->codeUrl="demo.ttf";
//        $obj->width=120;
//        $obj->height=30;
//        $obj->output();
//        $this->session->set("code",$obj->current);
//    }
}