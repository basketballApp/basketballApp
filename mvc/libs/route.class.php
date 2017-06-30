<?php
class route{
    private static $m;  // m-> 模板
    private static $f;  // f-> 文件
    private static $a;  // a-> 动作

    function getInfo(){  //$_REQUEST  post get 都能获取到
        self::$m=isset($_REQUEST["m"])&&!empty($_REQUEST["m"])?$_REQUEST["m"]:"index";
        self::$f=isset($_REQUEST["m"])&&!empty($_REQUEST["f"])?$_REQUEST["f"]:"index";
        self::$a=isset($_REQUEST["m"])&&!empty($_REQUEST["a"])?$_REQUEST["a"]:"init";
        $this->getPath();
    }
    private function getPath(){
        $m=MODULE_PATH."/".self::$m;
        if(is_dir($m)){
            $f=$m."/".self::$f.".class.php";
            if(is_file($f)){
                include $f;
                if(class_exists(self::$f)){
                    $obj=new self::$f();
                    if(method_exists($obj,self::$a)){
                        $method=self::$a;
                        $obj->$method();
                    }else{
                        echo self::$a."不存在";
                    }
                }else{
                    echo self::$f."类不存在";
                }
            }else{
                echo $f."不存在";
            }
        }else{
            echo $m."不存在";
        }
    }
}