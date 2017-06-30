<?php
/*
 * php 去写一个自己的编程语言
 * php 字符串替换  preg_replace()
 * */
class Smarty{
    public $compileDir="compile";
    public $templateDir="template";

    function setCompileDir($dir){
        $this->compileDir=$dir;
        if(!$this->compileDir){
            mkdir($this->compileDir);
        }
    }
    function setTemplateDir($dir){
        $this->templateDir=$dir;
        if(!$this->compileDir){
            mkdir($this->templateDir);
        }
    }
    function assign($attr,$val){
        $this->arr[$attr]=$val;
    }

    function display($file){
        $compilefile=$this->compileDir."/demo.php";
        $url=$this->templateDir."/".$file;
        $con=file_get_contents($url);
        $str=preg_replace("/\{([^\}\s]+)\}/",'<?php echo $this->arr["$1"] ?>',$con);
        file_put_contents($compilefile,$str);
        include $compilefile;
    }

}