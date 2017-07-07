<?php
class member extends indexMain{
   function init(){
      $this->smarty->display("yhone.html");
   }
   function own(){
      $this->smarty->display("yhown.html");
   }
}