<?php
    error_reporting(0);
class uploadVPhp
{
    public $type = "video/mp4";
    public $size;
    public $root="uploadVideo";
    public $fullpath="";
    function __constructor()
    {
        $this->size = 1024 * 1024 * 10;
    }
    //1.接收数据
    private function accept($attr = "file")
    {
        $this->data = $_FILES[$attr];
    }

    //验证
    private function check()
    {
        if (is_uploaded_file($this->data["tmp_name"])) {
            if (strrchr($this->type,$this->data["type"])) {
                return true;
            }
        }
        return false;
    }

    private function customUrl()
    {
        if(!is_dir($this->root)){
            mkdir($this->root);
        }
        $path=$this->root."/".date("y-m-d");
        if(!is_dir($path)){
            mkdir($path);
        }
        $name=md5(time().mt_rand(1,1000)).$this->data["name"];
        $this->fullpath=$path."/".$name;
    }
    private function moveupload(){
        move_uploaded_file($this->data["tmp_name"],$this->fullpath);
    }
    public function move(){
        $this->accept();
        if($this->check()){
            $this->customUrl();
            $this->moveupload();
            echo $this->fullpath;
        }else{
            echo "error";
        }
    }

}

