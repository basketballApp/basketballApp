<?php
class main{
    function __construct()
    {
        $smarty = new Smarty();
        $smarty->setTemplateDir("template/admin");
        $smarty->setCompileDir("compile");
        $this->smarty=$smarty;
        $this->session=new session();
    }
    function jump($message,$url){
        echo "<script>alert('{$message}');location.href='{$url}';</script>";
    }
}