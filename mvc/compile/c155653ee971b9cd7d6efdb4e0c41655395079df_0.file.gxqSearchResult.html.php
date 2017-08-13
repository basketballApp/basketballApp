<?php
/* Smarty version 3.1.30, created on 2017-08-13 03:47:27
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\gxqSearchResult.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598fafafe298b2_84977384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c155653ee971b9cd7d6efdb4e0c41655395079df' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\gxqSearchResult.html',
      1 => 1502588846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_598fafafe298b2_84977384 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh" ng-app="myApp">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/gxqstadium.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/angular.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/search.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/courtzan.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function(){
            $(".backbox .back").click(function () {
                $(".tan").css("display","none")
            })
            $(".ma").click(function(){
                history.go(-1)
            })
            //立即预定
            $(".order").click(function(){

                var courtName=$("p.title1").html();
                var courtId=$("input[name=cid]").attr("cid");
                var price=$("input[name=price]").attr("price");
                var courtName=$("p.title1").html();
//                location.href="index.php?m=index&f=index&a=shengchengOrder&price="+price+"&courtId="+courtId+"&courtName="+courtName;
                $.ajax({
                    url:"index.php?m=index&f=index&a=shengchengOrder&price="+price+"&courtId="+courtId+"&courtName="+courtName,
                    type:"post",
                    data:{
                        courtId:courtId,courtName:courtName,price:price
                    },
                    success:function(e){
                         alert('成功预订')
                         location.href="index.php?m=index&f=index&a=courtDetails";
                    }
                })
            })
        })
    <?php echo '</script'; ?>
>
</head>
<body class="searchSearchResult" ng-controller="myCtrl">
<header style="height: 2.30rem">
    <div class="top">
        <h2>搜索结果</h2>
        <h5>SOUSUOJIEGUO</h5>
        <div class="left">
            <img src="<?php echo IMG_PATH;?>
/gxq/gxqleftjt_03.png" alt="" class="ma">
        </div>
        <div class="right">

        </div>
    </div>
    <div class="search">
        <div class="dian1"></div>
        <div class="dian2"></div>
        <div class="toptitle">搜索</div>
        <input type="text" class="bottomtitle" ng-model="search">
        <!--<input  placeholder="FUJINQIUCHANG&nbsp;NEARBY" ng-model="search" type="text">-->
        <div class="bottomxian"></div>
        <div class="logo">
             <img src="<?php echo IMG_PATH;?>
/gxq/gxqcg_09.png" alt="" class="sousuo">
        </div>
    </div>
</header>
<div class="category">
    <div class="top">
        <div class="cate">
            <p>X咖啡创意西餐厅</p>
        </div>
        <div class="cate cate2">
            <p>X咖啡创意西餐厅</p>
        </div>
    </div>
    <div class="top" style="padding:0 0.15rem">
        <div class="cate3">
            <p>飞鸟篮球馆</p>
        </div>
        <div class="cate4">工商学院篮球馆</div>
        <div class="cate3" style="margin-right: 0;">
            <p>CD体育馆</p>
        </div>
    </div>
    <div class="top">
        <div class="cate">
            <p>X咖啡创意西餐厅</p>
        </div>
        <div class="cate cate2">
            <p>X咖啡创意西餐厅</p>
        </div>
    </div>
</div>
<div class="lunbobox">
    <ul class="top">
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<!--附近球场-->
<div class="near">
    <img src="<?php echo IMG_PATH;?>
/gxq/gxq112.png" alt="" class="pic">
    <div class="rightCon">
        <p class="p1">附近球场</p>
        <img src="<?php echo IMG_PATH;?>
/gxq/gxqcg_22.png" alt="" class="huo">
        <img src="<?php echo IMG_PATH;?>
/gxq/gxqcg_22.png" alt="" class="huo">
        <img src="<?php echo IMG_PATH;?>
/gxq/gxqcg_22.png" alt="" class="huo">
        <p class="p2"><span>FUJINQIUCHANG</span>NEARBY</p>
    </div>
</div>
<div class="nearCon">
    <div class="left">
        <img src="<?php echo IMG_PATH;?>
/gxq/gxqcg_26.png" alt="">
    </div>
    <div class="right">
        <div class="top">
            <div class="tuijian">
                <img src="<?php echo IMG_PATH;?>
/gxq/gxqcg_28.png" alt="">
            </div>
            <div class="tuijianpic2">
                <img src="<?php echo IMG_PATH;?>
/gxq/gxqcg_30.png" alt="">
            </div>
        </div>
        <ul class="bottom">
            <li><a href=""><img src="<?php echo IMG_PATH;?>
/gxq/gxqcg_33.png" alt=""></a></li>
            <li><a href=""><img src="<?php echo IMG_PATH;?>
/gxq/gxqcg_35.png" alt=""></a></li>
            <li><a href=""><img src="<?php echo IMG_PATH;?>
/gxq/gxqcg_37.png" alt=""></a></li>
        </ul>
    </div>
</div>
<!--篮球场-->
<div class="gxqchang">
    <div class="list" >
        <div class="left">
            <img src="<?php echo IMG_PATH;?>
/gxq/gxqcg_44.png" alt="">
        </div>
        <div class="right comment">
            <p class="p1"><a href="index.php?m=index&f=index&a=addOrder&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"></a></p>
            <p class="p2"></p>
            <p class="p3">....................</p>
            <ul class="caozuo par-main">
                <li class="fzan div">
                    <img src="<?php echo IMG_PATH;?>
/gxq/gxqcg_47.png" alt="" class="like zimg">
                    <span class="shu"></span>
                </li>
                <li class="scan div" >
                    <img src="<?php echo IMG_PATH;?>
/gxq/gxqcg_53.png" alt="" class="like wimg">
                    <span class="shu"></span>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--弹出框-->
<div class="tan">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['xiangqing']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <div class="con">
        <p class="p1">场馆详情</p>
        <p class="p2">CHANGGUANXIANGQING</p>
        <div class="con1">
            <div class="lunbotu">
                <img src="<?php echo IMG_PATH;?>
/gxq/gxq112.png" alt="">
                <div class="backbox">
                    <img src="<?php echo IMG_PATH;?>
/gxq/gxqlogo_03.png" alt="" class="back">
                    <!--<img src="<?php echo IMG_PATH;?>
/gxq/gxqlogo_05.png" alt="" class="shoucang">-->
                </div>
                <div class="mask">
                    <input type="hidden" cid="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
" name="cid">
                    <input type="hidden" price="<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
" name="price">
                    <p class="title1"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</p>
                    <p class="title2"><?php echo $_smarty_tpl->tpl_vars['v']->value["cyname"];?>
</p>
                    <p class="title3"><?php echo $_smarty_tpl->tpl_vars['v']->value["privilege"];?>
</p>
                    <!--<ul class="headBox">-->
                        <!--<li><img src="<?php echo IMG_PATH;?>
/gxq/gxq112.png" alt=""></li>-->
                        <!--<li><img src="<?php echo IMG_PATH;?>
/gxq/gxq112.png" alt=""></li>-->
                        <!--<li><img src="<?php echo IMG_PATH;?>
/gxq/gxq112.png" alt=""></li>-->
                        <!--<li><img src="<?php echo IMG_PATH;?>
/gxq/gxq112.png" alt=""></li>-->
                    <!--</ul>-->
                </div>
                <ul class="lunbobox">
                    <li></li>
                    <li></li>
                    <li class="active"></li>
                    <li></li>
                </ul>
            </div>
            <div class="details">
                <p class="addr">详细地址：<?php echo $_smarty_tpl->tpl_vars['v']->value["addr"];?>
</p>
                <p class="bottomp2">.......................................................................</p>
                <p class="addr">支持<?php echo $_smarty_tpl->tpl_vars['v']->value["provide"];?>
</p>
                <p class="addr">营业时间＃<?php echo $_smarty_tpl->tpl_vars['v']->value["yytime"];?>
</p>
            </div>
            <ul class="xiangmu">
                <li>
                    <div class="logo"><img src="<?php echo IMG_PATH;?>
/gxq/gxqlogo_14.png" alt=""></div>
                    <p class="tingche">免费停车位</p>
                </li>
                <li>
                    <div class="logo"><img src="<?php echo IMG_PATH;?>
/gxq/gxqlogo_16.png" alt=""></div>
                    <p class="tingche">免费休息区</p>
                </li>
                <li>
                    <div class="logo"><img src="<?php echo IMG_PATH;?>
/gxq/gxqlogo_18.png" alt=""></div>
                    <p class="tingche">饮料售卖</p>
                </li>
            </ul>
            <div class="orderbox">
                <div class="order">立即预定</div>
            </div>

        </div>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div>
</body>
</html><?php }
}
