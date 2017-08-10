<?php
class index extends indexMain{
    function init(){
        $this->smarty->assign("login",$this->session->get("indexLogin"));
        $this->smarty->assign("uname",$this->session->get("uname"));
        if($this->session->get("uname")){
            $this->smarty->display("qzzindex.html");
        }else{
            $this->smarty->display("xhysplash.html");
        }
    }
    function qzzindex(){
        $db=new db("login");
        $uid=$this->session->get("uid");
        $result=$db->limit("0,2")->select();
        $this->smarty->assign("result",$result);
        //视频
        $dbs=new db();
        $results=$dbs->limit("0,2")->where("not dynamic.uid=$uid and dynamic.uid=login.uid")->join("dynamic,login");
        $this->smarty->assign("con",$results);
        $db1=new db(" dynamic");
        $result1=$db1->where("not uid=$uid")->limit("0,3")->select();
        $this->smarty->assign("result1",$result1);
        //  附近球场
        $db1=new db("nearcourt");
        $result2=$db1->limit("0,3")->select();
        $this->smarty->assign("result2",$result2);
        $this->smarty->display("qzzindex.html");
    }
    //    朋友圈
    function pengyouquan(){
        $db=new db("friendcircle");
        $result=$db->limit("0,2")->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("yhown.html");
    }
    function friendPengyouquan(){
        $pid=$_GET["pid"];
        $db=new db("friendcircle");
        $result=$db->limit("0,2")->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("yhowns.html");
    }

    //订单详情
    function courtDetails(){
        $db=new db("courtOrder");
        $result=$db->limit("0,1")->where("isbuy=0")->select();
        $this->smarty->assign("nobuy",$result);

        $db1=new db("courtOrder");
        $result1=$db1->limit("0,1")->where("isbuy=1")->select();
        $this->smarty->assign("buy",$result1);
        $this->smarty->display("gxqorderDetails.html");
    }
    //立即支付
    function ljzf(){
        $this->smarty->display("gxqzffs.html");
    }

    //立即预定
    function addOrder(){
        $cid=$_GET["cid"];
        $db=new db("nearcourt");
        $result=$db->limit("0,2")->select();
        $this->smarty->assign("xiangqing",$result);
        $this->smarty->display("gxqSearchResult.html");
        echo json_encode($result);
    }

    //场馆详情
    function searchCourtDetail(){
        $cid=$_GET["cid"];
        $db=new db("nearcourt");
        $result=$db->where("cid=".$cid)->select();
        $this->smarty->assign("xiangqing",$result);
        $this->smarty->display("gxqSearchResult.html");
    }
    //立即订购
    function shengchengOrder(){
        $price=$_POST["price"];
        $this->smarty->assign("price",$price);

        $courtId=$_POST["courtId"];
        $courtName=$_POST["courtName"];
        $price=$_POST["price"];
        $db=new db("courtorder");
        $db->insert("courtId={$courtId},courtName='{$courtName}',price={$price}");
        echo $db->insert_id;
    }

    //发表动态页面
    function publishDynamic(){
        $this->smarty->display("qzznews.html");
    }
    //发表动态页面
    function publishDynamicCon(){
        $uid=$this->session->get("uid");
        $videoUrl=$_POST["url"];
        $con=$_POST["con"];
        $db=new db("dynamic");
        $reuslt=$db->insert("dvideo='{$videoUrl}',dcon='{$con}',uid='{$uid}'");
        if($reuslt>0){
            echo 1;
        }else{
            echo 2;
        }
    }
    //上传
    function upload(){
        $up=new uploadphp();
        $up->move();
    }
    //上传视频
    function uploadVideo(){
        $up=new uploadVPhp();
        $up->move();
    }
    //相册
    function selectPhoto(){
        $this->smarty->display("xhyphotoSelect.html");
    }
    //留言
    function message(){
        $this->smarty->display("xhyMessage.html");
    }

    function peopleVideo(){
        $db=new db("dynamic");
        $result=$db->limit("0,4")->select();
        echo "<pre>";
//        var_dump($result);exit;
        $this->smarty->assign("con",$result);
        $this->smarty->display("allVideo.html");
    }
    //赞
    function support()
    {
        $did = $_POST["did"];
        $belove = $_POST["belove"]+1;
        $belove1=$_POST["belove"]-1 ;
        $uid = $this->session->get("uid");
        $db2 = new db("dynamic");
        //修改喜欢人数id
        $str = "";
        $oldlove = $db2->setField("loveId")->where("did={$did}")->select();
        $str .= implode(",", $oldlove[0]);
        if (empty($str)) {
            $str .= $uid;
            $result = $db2->where("did={$did}")->update("loveId='{$str}',belove={$belove}");
            //修改
            $this->smarty->assign("result", $result);
            if ($result > 0) {
                echo "ok";
            }
            exit();
        } else {
            $arr = explode(",",$str);
            if (in_array("{$uid}",$arr)) {
                foreach( $arr as $key => $value ){
                    if($value==$uid){
                        unset($arr[$key]);
                    }
                }
                $str = implode(',',$arr);
                $result = $db2->where("did={$did}")->update("loveId='{$str}',belove={$belove1}");
                //修改
                $this->smarty->assign("result", $result);
                if ($result > 0) {
                    echo "ok1";
                }
                exit;
            }
            $str .= "," . $uid;
            $result = $db2->where("did={$did}")->update("loveId='{$str}',belove={$belove}");
            //修改
            $this->smarty->assign("result", $result);
            if ($result > 0) {
                echo "ok";
            }
        }
    }
    //收藏
    function collect()
    {
        $did = $_POST["did"];
        $collect = $_POST["collect"] + 1;
        $collect1 = $_POST["collect"] - 1;
        $uid = $this->session->get("uid");
        $db2 = new db("dynamic");
        //修改喜欢人数id
        $watch = $db2->setField("watchId")->where("did={$did}")->select();
        $str = "";
        $str .= implode(",", $watch[0]);
        if (empty($str)) {
            $str= $uid;
            $result = $db2->where("did={$did}")->update("watchId='{$str}',collect={$collect}");
            //修改
            $this->smarty->assign("result", $result);
            if ($str) {
                echo "ok";
            }
        } else {
            $arr = explode(",",$str);
            if (in_array("{$uid}",$arr)) {
                foreach( $arr as $key => $value ){
                    if($value==$uid){
                        unset($arr[$key]);
                    }
                }
                $str = implode(',',$arr);
                $result = $db2->where("did={$did}")->update("watchId='{$str}',collect={$collect1}");
                //修改
                $this->smarty->assign("result", $result);
                if ($result > 0) {
                    echo "ok1";
                }
                exit;
            }
            $str .= "," . $uid;
            $result = $db2->where("did={$did}")->update("watchId='{$str}',collect={$collect}");
            //修改
            $this->smarty->assign("result", $result);
            if ($result > 0) {
                echo "ok";
            }
        }
    }
    //我的历史记录订单
    function myhistoryOrder(){
        $db=new db("courtorder");
        $result=$db->where("isBuy=1")->limit("0,6")->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("gxqorderDetails2.html");
    }
    //球场赞
    function courtzan(){
        $cid = $_POST["cid"];
        $belove = $_POST["belove"] + 1;
        $belove1 = $_POST["belove"] - 1;
        $uid = $this->session->get("uid");
        $db2 = new db("nearcourt");
        //修改喜欢人数id
        $watch = $db2->setField("beloveId")->where("cid={$cid}")->select();
        $str = "";
        $str .= implode(",", $watch[0]);
        if (empty($str)) {
            $str= $uid;
            $result = $db2->where("cid={$cid}")->update("beloveId='{$str}',belove={$belove}");
            //修改
            $this->smarty->assign("result", $result);
            if ($str) {
                echo "ok";
            }
        } else {
            $arr = explode(",",$str);
            if (in_array("{$uid}",$arr)) {
                foreach( $arr as $key => $value ){
                    if($value==$uid){
                        unset($arr[$key]);
                    }
                }
                $str = implode(',',$arr);
                $result = $db2->where("cid={$cid}")->update("beloveId='{$str}',belove={$belove1}");
                //修改
                $this->smarty->assign("result", $result);
                if ($result > 0) {
                    echo "ok1";
                }
                exit;
            }
            $str .= "," . $uid;
//            echo $str;
            $result = $db2->where("cid={$cid}")->update("beloveId='{$str}',belove={$belove}");
            //修改
            $this->smarty->assign("result", $result);
            if ($result > 0) {
                echo "ok";
            }
        }
    }
    //球场关注
    function courtwatch(){
        $cid = $_POST["cid"];
        $cwatch = $_POST["cwatch"] + 1;
        $cwatch1 = $_POST["cwatch"] - 1;
        $uid = $this->session->get("uid");
        $db2 = new db("nearcourt");
        //修改喜欢人数id
        $watch = $db2->setField("catchId")->where("cid={$cid}")->select();
        $str = "";
        $str .= implode(",", $watch[0]);
        if (empty($str)) {
            $str= $uid;
            $result = $db2->where("cid={$cid}")->update("catchId='{$str}',cwatch={$cwatch}");
            //修改
            $this->smarty->assign("result", $result);
            if ($str) {
                echo "ok";
            }
        } else {
            $arr = explode(",",$str);
            if (in_array("{$uid}",$arr)) {
                foreach( $arr as $key => $value ){
                    if($value==$uid){
                        unset($arr[$key]);
                    }
                }
                $str = implode(',',$arr);
                $result = $db2->where("cid={$cid}")->update("catchId='{$str}',cwatch={$cwatch1}");
                //修改
                $this->smarty->assign("result", $result);
                if ($result > 0) {
                    echo "ok1";
                }
                exit;
            }
            $str .= "," . $uid;
//            echo $str;
            $result = $db2->where("cid={$cid}")->update("catchId='{$str}',cwatch={$cwatch}");
            //修改
            $this->smarty->assign("result", $result);
            if ($result > 0) {
                echo "ok";
            }
        }
    }
    //search
}