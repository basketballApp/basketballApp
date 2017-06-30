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
}