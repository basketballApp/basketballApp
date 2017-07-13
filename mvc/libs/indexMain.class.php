<?php

class indexMain{
    function __construct(){
          $smarty=new Smarty();
          $smarty->setCompileDir("compile");
          $smarty->setTemplateDir("template/index");
          $this->smarty=$smarty;
          $this->session=new session();
    }

   
}