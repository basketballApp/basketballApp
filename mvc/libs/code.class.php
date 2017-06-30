<?php
class code{
    /*
     * 验证码的内容
     * 验证码的长度
     * 验证码的大小
     * 验证码的颜色
     * 验证码的位置
     * */
    public $width=150;
    public $height=40;
    public $type="png";
    public $code="23456780abcdefhgkmnABCDEFGHJKMN";
    public $codeLen=4;
    public $codeUrl="";
    private $image;
    public $current="";
    public $size=array("min"=>15,"max"=>25);
    public $angle=array("min"=>-15,"max"=>15);
    public $lineNum=10;
    public $pixNum=100;

    //1.创建画布
    function createCanvas(){
        $this->image=imagecreatetruecolor($this->width,$this->height);
        imagefill($this->image,0,0,$this->getColor("back"));
    }

    //2.创建内容
    function createCon(){
        $this->getText();
        for ($i=0;$i<$this->codeLen;$i++){
            $size=mt_rand($this->size["min"],$this->size["max"]);
            $angle=mt_rand($this->angle["min"],$this->angle["max"]);
            $x=$i*($this->width/$this->codeLen)+mt_rand(-10,10);
            if($i==0){
                $x=$x<0?0:$x;
            }
            $box=imagettfbbox($size,$angle,$this->codeUrl,$this->current[$i]);
            $height=$box[1]-$box[5]+mt_rand(-10,10);
            $y=$height<0?0:$box[1]-$box[5];
            imagettftext($this->image,$size,$angle,$x,$y,$this->getColor("abd"),$this->codeUrl,$this->current[$i]);
        }
    }
    // 创建除随机的文字
    function getText(){
        $str="";
        for($i=0;$i<$this->codeLen;$i++){
            $num=mt_rand(0,strlen($this->code)-1);
            $str.=$this->code[$num];
        }
        $this->current=$str;
        return $str;
    }
    //创建干扰的线
    function createLine(){
        for ($i=0;$i<$this->lineNum;$i++){
            imageline($this->image,mt_rand(0,$this->width/2),mt_rand(0,$this->height/2),mt_rand($this->width/2,$this->width),mt_rand($this->height/2,$this->height),$this->getColor("back"));
        }
    }
    //创建干扰的点
    function createPix(){
        for($i=0;$i<$this->pixNum;$i++){
            imagesetpixel($this->image,mt_rand(0,$this->width),mt_rand(0,$this->height),$this->getColor("asd"));
        }
    }
    function getColor($type="back"){
        $r=$type=="back"?mt_rand(0,120):mt_rand(120,255);
        $g=$type=="back"?mt_rand(0,120):mt_rand(120,255);
        $b=$type=="back"?mt_rand(0,120):mt_rand(120,255);
        return imagecolorallocate($this->image,$r,$g,$b);
    }
    function output(){
        header("content-type:image/".$this->type);
        //1.创建画布
        $this->createCanvas();
        //2.创建文字
        $this->createCon();
        //3.创建干扰的线
        $this->createLine();
        //4.创建干扰的点
        $this->createPix();
        $type="image".$this->type;
        $type($this->image);
        $this->current=strtolower($this->current);
        imagedestroy($this->image);
    }
}
/*$obj=new code();
$obj->codeUrl="../demo.ttf";
$obj->output();*/

