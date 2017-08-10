<?php
class login extends indexMain{
    function init(){
        $this->smarty->assign("login",$this->session->get("indexLogin"));
        $this->smarty->assign("uname",$this->session->get("uname"));
        if($this->session->get("uname")){
            echo "<script>location.href='index.php?m=index&f=index&a=qzzindex'</script>";
//            $this->smarty->display("qzzindex.html");
        }else{
            $this->smarty->display("xhyspAfter.html");
        }

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
                $message="注册成功";
                $message1="赶紧的老铁，要开始比赛了，就差你了";
                $m="index";
                $f="login";
                $a="sereg2";
                $this->smarty->assign("message",$message);
                $this->smarty->assign("message1",$message1);
                $this->smarty->assign("m",$m);
                $this->smarty->assign("f",$f);
                $this->smarty->assign("a",$a);
                $this->smarty->assign("uname",$uname);
                $this->smarty->display("xhyMessage.html");
//                echo "<script>location.href='index.php?m=index&f=login&a=sereg2&uname={$uname}'</script>";
                exit;
            }else{
                $message="注册失败";
                $message1="亲爱的老铁，请重新注册";
                $m="index";
                $f="login";
                $a="sereg";
                $this->smarty->assign("m",$m);
                $this->smarty->assign("f",$f);
                $this->smarty->assign("a",$a);
                $this->smarty->assign("uname",$uname);
                $this->smarty->assign("message",$message);
                $this->smarty->assign("message1",$message1);
                $this->smarty->display("xhyMessage.html");
//                echo "<script>location.href='index.php?m=index&f=login&a=sereg'</script>";
            }
    }
    function reg2(){
//        $this->smarty->display("xhyreg2.html");
        $uname=$_GET["uname"];
        $yname=$_POST["yname"];
        $height=$_POST["height"];
        $weight=$_POST["weight"];
        $declaration=$_POST["declaration"];
        if(empty($yname)){
            echo "用户不能为空";
            exit;
        }
        if(empty($height)){
            echo "身高不能为空";
            exit;
        }
        if(empty($weight)){
            echo "体重不能为空";
            exit;
        }
        if(empty($declaration)){
            echo "交友宣言不能为空";
            exit;
        }
        $db=new db("login");
        if($db->where("uname='{$uname}'")->update("yname='{$yname}',height={$height},weight={$weight},declaration='{$declaration}'")){
            echo "<script>location.href='index.php?m=index&f=login&a=sereg3&uname={$uname}'</script>";
            exit;
        }
    }
    function reg3(){
//        $this->smarty->display("xhyreg2.html");
    }
    function selogin(){
        $this->smarty->display("xhylogin.html");
    }
    function sereg(){
        $this->smarty->display("xhyreg.html");
    }
    function sereg2(){
        $uname=$_GET["uname"];
        $this->smarty->assign("uname",$uname);
        $this->smarty->display("xhyreg2.html");
    }
    function sereg3(){
        $uname=$_GET["uname"];
        $this->smarty->assign("uname",$uname);
        $this->smarty->display("qzzdetails.html");
    }
    function serphselect(){
        $uname=$_GET["uname"];
        $this->smarty->assign("uname",$uname);
        $this->smarty->display("xhyphotoSelect.html");
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
                if($v["upass"]==md5($upass)){
                    $this->session->set("indexLogin","yes");
                    $this->session->set("uname",$v["uname"]);
                    $this->session->set("uid",$v["uid"]);
                    $message="登录成功";
                    $message1="来吧兄弟！约场精彩绝伦的球赛吧";
                    $m="index";
                    $f="index";
                    $a="qzzindex";
                    $uname="";
                    $this->smarty->assign("m",$m);
                    $this->smarty->assign("f",$f);
                    $this->smarty->assign("a",$a);
                    $this->smarty->assign("uname",$uname);
                    $this->smarty->assign("message",$message);
                    $this->smarty->assign("message1",$message1);
                    $this->smarty->display("xhyMessage.html");
//                    echo "<script>location.href='index.php?m=index&f=index'</script>";
                    exit();
                }
            }
        }
        $message="登录失败";
        $message1="对不起！请重新登录";
        $m="index";
        $f="login";
        $a="selogin";
        $uname="";
        $this->smarty->assign("m",$m);
        $this->smarty->assign("f",$f);
        $this->smarty->assign("a",$a);
        $this->smarty->assign("uname",$uname);
        $this->smarty->assign("message",$message);
        $this->smarty->assign("message1",$message1);
        $this->smarty->display("xhyMessage.html");
//        echo "<script>location.href='index.php?m=index&f=login&a=selogin'</script>";
        exit();
    }
    function logout(){
        $this->session->clear();
        echo "<script>location.href='index.php?m=index&f=login'</script>";
    }
}