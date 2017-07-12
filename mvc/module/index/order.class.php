<?php
class order extends indexMain{
    function init(){
        $this->smarty->display("gxqorderDetails.html");
    }
}