<?php
class send extends indexMain{
    function init(){
        $this->smarty->display("qzznews.html");
    }
    function sends(){
        $content=$_POST["content"];
        $uid=$this->session->get("uid");
        $db=new db("dynamic");
        $result=$db->insert("content='{$content}',uid={$uid}");
       if($result){
           echo "ok";
       }
    }
}