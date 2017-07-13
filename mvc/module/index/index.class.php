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

        //  附近球场
        $db1=new db("nearcourt");
        $result2=$db1->limit("0,3")->select();
        $this->smarty->assign("result2",$result2);
        $this->smarty->display("qzzindex.html");
    }
//    朋友圈
    function pengyouquan(){
        $db=new db("friendcircle");
        $result=$db->limit("0,2")->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("yhown.html");
    }

    function friendPengyouquan(){
        $pid=$_GET["pid"];
        $db=new db("friendcircle");
        $result=$db->limit("0,2")->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("yhowns.html");
    }

    //订单详情
    function courtDetails(){
               $db=new db("courtOrder");
        $result=$db->limit("0,1")->where("isbuy=0")->select();
        $this->smarty->assign("nobuy",$result);

        $db1=new db("courtOrder");
        $result1=$db1->limit("0,1")->where("isbuy=1")->select();
        $this->smarty->assign("buy",$result1);
        $this->smarty->display("gxqorderDetails.html");
    }
    //立即支付
    function ljzf(){
        $this->smarty->display("gxqzffs.html");
    }

    //立即预定
    function addOrder(){

        $cid=$_GET["cid"];
        $db=new db("nearcourt");
        $result=$db->limit("0,2")->select();
        $this->smarty->assign("xiangqing",$result);
        $this->smarty->display("gxqSearchResult.html");
    }

    //场馆详情
    function searchCourtDetail(){
        $cid=$_GET["cid"];
        $db=new db("nearcourt");
        $result=$db->where("cid=".$cid)->select();
        $this->smarty->assign("xiangqing",$result);
        $this->smarty->display("gxqSearchResult.html");
    }
    //立即订购
    function shengchengOrder(){
        $price=$_POST["price"];
        $this->smarty->assign("price",$price);

        $courtId=$_POST["courtId"];
        $courtName=$_POST["courtName"];
        $price=$_POST["price"];
        $db=new db("courtorder");
        $db->insert("courtId={$courtId},courtName='{$courtName}',price={$price}");
        echo $db->insert_id;
    }
}