<?php
class index extends main{
    function init(){
        $obj=new db("category");
        //1.查询数据
        $result=$obj->setField("lists.title,message.con")->where("lists.id=message.lid")->join("lists,message");

       /* $str="";
        foreach($result as $v){
            $str.="<dt>";
            $str.="<dl>".$v['title']."</dl>";
            $str.="<dd>".$v['con']."</dd>";
            $str.="</dt>";
        }*/

        /*$smarty = new Smarty();
        $smarty->setTemplateDir("template");
        $smarty->setCompileDir("compile");*/
        $this->smarty->assign('result',$result);
        $this->smarty->display("index.html");

        //2.指定视图
        //3.在相应的视图里面放入相应的数据
        //include TPL_PATH."/index.html";
    }
}