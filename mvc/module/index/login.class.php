<?php
class login extends indexMain{
    function reg(){
            $mname=$_POST["mname"];
            if(empty($mname)){
                echo "用户不能为空";
                exit;
            }
            $db=new db("member");
            $result=$db->where("mname='{$mname}'")->select();
            if(count($result)>0){
                echo "用户名存在";
                exit;
            }
            $mpass=$_POST["mpass"];
            if(empty($mpass)){
                echo "密码不能为空";
                exit;
            }
            $mpass1=$_POST["mpass1"];
            if(empty($mpass)){
                echo "确认密码不能为空";
                exit;
            }
            if($mpass!=$mpass1){
                echo "两次密码不一致";
                exit;
            }
            $mpass=md5($mpass);

            if($db->insert("mname='{$mname}',mpass='{$mpass}'")){
                echo "ok";
                exit;
            }
    }
    function willLogin(){
        $mname=$_POST["mname"];
        if(empty($mname)){
            echo "用户不能为空";
            exit;
        }
        $mpass=$_POST["mpass"];
        if(empty($mpass)){
            echo "密码不能为空";
            exit;
        }
        $db=new db("member");
        $result=$db->select();
        foreach ($result as $v){
            if($v["mname"]==$mname){
                if($v["mpass"]==md5($mpass)){$this->session->set("indexLogin","yes");
                    $this->session->set("mname",$v["mname"]);
                    $this->session->set("mid",$v["mid"]);
                    echo "ok,即将跳转....";
                    exit();
                }
            }
        }

        echo "用户名或密码有误";

    }
    function logout(){
        $this->session->clear();
        echo "ok";
    }
}