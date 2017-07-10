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
        $this->smarty->display("qzzindex.html");
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