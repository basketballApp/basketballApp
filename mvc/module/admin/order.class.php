<?php
    class order extends main{
        function init(){

        }
        //查看全部订单
        function showorder(){
            $db=new db("courtorder");
            $result=$db->order("courtId")->select();
            $this->smarty->assign("allorder",$result);
            $this->smarty->display("xhyBallOrder.html");
        }
        //根据订单的id删除订单
        function delOneOrder(){
            //获取订单的id
            $oid=$_GET["oid"];
            $db=new db("courtorder");
            $result=$db->del("oid={$oid}");
            $this->smarty->display("showorder.html");
        }
        //新增订单
        function addOneOrder(){

        }
        //修改订单
        function updateOneOrder(){
            //id  修改的字段   字段的值
            $oid=$_POST["oid"];
            $attr=$_POST["attr"];
            $value=$_POST["value"];

            //修改
            $db=new db("courtorder");
            $result=$db->update("{$attr}='{$value}' where oid={$oid}");
            if($result>0){
                echo 1;
            }
        }
    }