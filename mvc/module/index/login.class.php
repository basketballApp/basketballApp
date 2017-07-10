<?php
class login extends indexMain{
    function init(){
        $this->smarty->display("xhyspAfter.html");
    }
    function reg(){
            $uname=$_POST["uname"];
            if(empty($uname)){
                echo "用户不能为空";
                exit;
            }
            $db=new db("login");
            $result=$db->where("uname='{$uname}'")->select();
            if(count($result)>0){
                echo "用户名存在";
                exit;
            }
            $upass=$_POST["upass"];
            if(empty($upass)){
                echo "密码不能为空";
                exit;
            }
            $upass1=$_POST["upass1"];
            if(empty($upass)){
                echo "确认密码不能为空";
                exit;
            }
            if($upass!=$upass1){
                echo "两次密码不一致";
                exit;
            }
            $upass=md5($upass);

            if($db->insert("uname='{$uname}',upass='{$upass}'")){
                echo "<script>location.href='index.php?m=index&f=login&a=willLogin'</script>";
                exit;
            }
    }
    function selogin(){
        $this->smarty->display("xhylogin.html");
    }
    function sereg(){
        $this->smarty->display("xhyreg.html");
    }
    function willLogin(){
        $uname=$_POST["uname"];
        if(empty($uname)){
            echo "用户不能为空";
            exit;
        }
        $upass=$_POST["upass"];
        if(empty($upass)){
            echo "密码不能为空";
            exit;
        }
        $db=new db("login");
        $result=$db->select();
        foreach ($result as $v){
            if($v["uname"]==$uname){
                if($v["upass"]==md5($upass)){$this->session->set("indexLogin","yes");
                    $this->session->set("uname",$v["uname"]);
                    $this->session->set("uid",$v["uid"]);
                    echo "<script>location.href='index.php?m=index&f=index&a=qzzindex'</script>";
                    exit();
                }
            }
        }
        echo "用户名或密码有误";
    }
    function logout(){
        $this->session->clear();
        echo "<script>location.href='index.php?m=index&f=login&a=willLogin'</script>";
    }
}