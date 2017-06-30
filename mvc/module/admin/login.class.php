<?php
//nodejs  处理流 自动化  单元测试 新闻系统
class login extends main{
    function init(){
        $num=mt_rand(50,100);
        $this->session->set("position",$num);
        $this->smarty->display("position");
        $this->smarty->display("index.html");
    }
    function code(){
        $obj=new code();
        $obj->codeUrl="demo.ttf";
        $obj->height=35;
        $obj->output();
        $this->session->set("code",$obj->current);
    }
    function check(){
        $code=$_POST["code"];
        if($code!=$this->session->get("code")){
            echo "<script>alert('验证码有误');location.href='index.html'</script>";
            exit;
        }
        $uname=$_POST["uname"];
        $upass=$_POST["upass"];
        $db=new db("user");
        $result=$db->select();
        foreach ($result as $v){
            if($uname==$v["uname"]){
                if($upass=$v["upass"]){
                    $this->session->set("login","yes");
                    $this->session->set("uname",$uname);
                    echo "<script>alert('登陆成功');location.href='index.html?m=admin&f=login&a=main'</script>";
                    exit;
                }
            }
        }
        echo "<script>alert('登陆失败');location.href='index.html'</script>";
    }
    function main(){
        $this->smarty->display("main.html");
    }
}