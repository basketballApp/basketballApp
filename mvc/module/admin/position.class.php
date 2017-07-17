<?php
class position extends main{
    function add(){
        $this->smarty->display("xhyAddPos.html");
    }
    function show(){
        $db=new db("position");
        $sql=$db->limit("0,10")->select();
        $this->smarty->assign("result",$sql);
        $this->smarty->display("xhyShowPos.html");
    }
    function addCon(){
        $posname=$_POST["posname"];
        $db=new db("position");
        if($db->insert("posname='{$posname}'")>0){
           echo "<script>alert('添加成功');location.href='index.php?m=admin&f=position&a=add'</script>";
        }
    }
    function del(){
        $pid=$_GET["pid"];
        $db=new db("position");
        if($db->del("pid='{$pid}'")>0){
            echo "<script>alert('删除成功');location.href='index.php?m=admin&f=position&a=show'</script>";
        }
    }
}