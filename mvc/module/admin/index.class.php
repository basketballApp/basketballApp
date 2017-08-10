<?php
    class index extends main{
        function init(){

            $this->smarty->display("login.html");
        }
        function addYou(){
            $this->smarty->display("addYou.html");
        }
        function shouye(){
//            $this->smarty->display("addCourt.html");
            $this->smarty->display("index.html");
        }
        function upload(){
            $up=new upload();
            $up->move();
        }

    }