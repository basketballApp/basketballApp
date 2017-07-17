<?php
class login extends main{
    function init(){
        if($this->session->get("logined")){
            echo  " <script> location.href ='index.php?m=admin&f=login&a=main'</script>" ;
        }
        $num=mt_rand(50,100);
        $this->session->set("position",$num);
        $this->smarty->assign("position",$num);
        $this->smarty->display("xhyAdminLogin.html");
    } 
    function code(){
        $obj=new code();
        $obj->codeUrl="demo.ttf";
        $obj->height=35;
        $obj->output();
        $this->session->set("code",$obj->current);
    }
    function check(){
        $code=strtolower($_POST["code"]);
        $uname=$_POST["uname"];
        $upass=$_POST["upass"];
        $db=new db("login");
        if($code!=$this->session->get("code")){
            echo "<script>alert('验证码有误');location.href='index.php?m=admin&f=login'</script>";
            exit;
        }
        $result=$db->where("value=1")->select();
        foreach ($result as $v){
            if($uname==$v["uname"]){
                if($upass=$v["upass"]){
                    $this->session->set("login","yes");
                    $this->session->set("uname",$uname);
                    $this->session->set("logined","yes");
                    echo "<script>alert('登陆成功');location.href='index.php?m=admin&f=login&a=main'</script>";
                    exit;
                }
            }
        }
        echo "<script>alert('登陆失败');location.href='xhyAdminLogin.html'</script>";
    }
    function main(){
        if($this->session->get("logined")){
            $this->smarty->display("xhyAdminMain.html");
        }else{
            $this->smarty->display("xhyAdminLogin.html");
        }

    }
    function selectAdd(){
        $value=$_POST["value"];
        $uname=$_POST["uname"];
        $upass=$_POST["upass"];
        $db=new db("login");
        $sql=$db->insert("value=$value,uname=$uname,upass=$upass");
        if($sql){
            echo "<script>alert('添加成功');location.href='index.php?m=admin&f=index&a='</script>";
        }else{
            echo "<script>alert('添加失败');location.href='index.php?m=admin&f=index&a='</script>";
        }
    }
    function del(){
        $db=new db("login");
        $uid=$_POST["uid"];
        $sql=$db->where("uid=$uid")->del();
        if($sql){
            echo "<script>alert('删除成功');location.href='index.php?m=admin&f=index&a='</script>";
        }else{
            echo "<script>alert('删除失败');location.href='index.php?m=admin&f=index&a='</script>";
        }
    }
    function loginout(){
       $this->session->clear();
       echo "<script>alert('退出成功');location.href='index.php?m=admin&f=login'</script>";
    }
}