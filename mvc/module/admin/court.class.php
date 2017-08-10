<?php
    class court extends  main{
        function  init(){
            $this->smarty->display("addcourt.html");
        }
        function addOneCourtYe(){
            $this->smarty->display("addOneCourt.html");
        }
        //添加球场
        function addOneCourt(){
            //球场名称 英文名称  球场描述  地址  营业时间  支持项目  优惠  价格  被关注  喜欢的人数
            $cname=$_POST["cname"];
            $cyname=$_POST["cyname"];
            $cdesc=$_POST["cdesc"];
            $addr=$_POST["addr"];
            $yytime=$_POST["yytime"];
            $provide=$_POST["provide"];
            $privilege=$_POST["privilege"];
            $price=$_POST["price"];
            $courtimg=$_POST["courtimg"];
            if(empty($cname) ||empty($cyname) ||empty($cdesc) || empty($addr)){
                echo "<script>alert('信息不完善,请完善');</script>";
                exit;
            }
            $db=new db("nearcourt");
            $db->insert("cname='{$cname}',cyname='{$cyname}',cdesc='{$cdesc}',addr='{$addr}',yytime='{$yytime}',provide='{$provide}',privilege='{$privilege}',price={$price},courtimg='{$courtimg}'");
            echo 1;
        }
        //查询全部球场
        function allCourt(){
            $db=new db("nearcourt");
            $result=$db->select();
            $this->smarty->assign("allcourt",$result);
            $this->smarty->display("xhyBallMan.html");
        }
        //修改球场信息
        function updateCourt(){
            //球场名称 英文名称  球场描述  地址  营业时间  支持项目  优惠  价格  被关注  喜欢的人数
            $cid=$_POST["cid"];
            $attr=$_POST["attr"];
            $value=$_POST["value"];
            $db=new db("nearcourt");
            $result=$db->update("{$attr}='{$value}' where cid={$cid}");
            if($result>0){
                echo 1;
            }
        }
        function delcourt(){
            $cid=$_GET["cid"];
            $db=new db("nearcourt");
            $result=$db->del("cid={$cid}");
            if($result>0){
                echo "<script>alert('删除成功');location.href='index.php?m=admin&f=court&a=allCourt'</script>";
            }
        }

        //编辑球场图片
        function editCourtImg(){
            //对应cid  图片地址
            $cid=$_GET["cid"];
            $courtimg=$_GET["courtimg"];

            $db=new db("nearcourt");
            $result=$db->update("courtimg='{$courtimg}' where cid={$cid}");
            if($result>0){
                echo "<script>alert('编辑图像成功');location.href='index.php?m=admin&f=court&a=allCourt'</script>";

            }
        }
    }