<?php
/* Smarty version 3.1.30, created on 2017-07-12 02:47:47
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\gxqorderDetails.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596571b3ef1169_50476284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0061cdaabfb963bb52bfdf59b24b14a6b352a32' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\gxqorderDetails.html',
      1 => 1499770462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596571b3ef1169_50476284 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh">
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
>
        $(function() {
            $(".left").click(function () {
                history.go(-1);
            })
            $(".zhifu").click(function(){
                $(".heji").css("display","block");
            })
            //总价

            var danprice=$("input[name=price]").val();//单价
            var number=$(".order .list .title5 .span2").html();//数量
            var totalPrice=danprice*number;
            $(".order .heji span.shu").html(totalPrice);
            console.log(danprice+"   "+number+"  sss")
            console.log(number)
        })

    <?php echo '</script'; ?>
>
</head>
<body class="order">
<header style="height: 1.02rem">
    <div class="top" style="height: 1.02rem;padding-top: 0.13rem">
        <h2 style="font-weight: 300">··&nbsp;订单详情&nbsp;··</h2>
        <h5 style="font-weight: 300">DINGDANXAINGQING</h5>
        <div class="left" style="height: 1.02rem">
            <img src="<?php echo IMG_PATH;?>
/gxq/gxqleftjt_03.png" alt="" class="ma">
        </div>
    </div>
</header>
<div class="con">
    <!--订单编号-->
    <div class="num">订单编号:<span>NO.45689745632142</span></div>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nobuy']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <div class="list">
        <div class="left">
            <img src="<?php echo IMG_PATH;?>
/gxq/gxqcg_44.png" alt="">
        </div>
        <p class="title1"><?php echo $_smarty_tpl->tpl_vars['v']->value["courtName"];?>
</p>
        <p class="title2">
            <!--<span>FEINIAOTIYU  </span>LANQIUCHANG-->
        </p>
        <p class="title3">..................................................</p>
        <p class="title4">营业时间＃08:０0－22:０0</p>
        <p class="title5">价格：1小时/￥10<span>*</span><i class="span2" style="color: red;font-style: normal"><?php echo $_smarty_tpl->tpl_vars['v']->value["number"];?>
</i></p>
        <img src="<?php echo IMG_PATH;?>
/gxq/gxqdetails_03.png" alt="" class="ok">
        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
" name="price">
    </div>

    <div class="listlast">
        <p class="title1">
            <span class="left">订单详情</span>
            <span class="right"><s>￥40.00</s></span>
        </p>
        <p class="title1">
            <span class="left">优惠券</span>
            <span class="right">-￥0.8</span>
        </p>
        <p class="title1">
            <span class="left">签到积分</span>
            <span class="right">-￥1.50</span>
        </p>
    </div>
    <div class="heji">
        合计：<span class="shu"></span><span class="rmb">RMB</span>
    </div>
    <div class="zhifu">
        <a href="index.php?m=index&f=index&a=ljzf&price=<?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
" style="display: block">&nbsp;</a>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <div style="height: 2rem"></div>

    <!--历史订单-->
    <div class="history">
        <p class="title1">LISHIDINGDAN</p>
        <p class="title2"></p>
        <div class="title3">
            历史订单
            <div class="dian1"></div>
            <div class="dian2"></div>
        </div>
        <div class="num">订单编号:<span>NO.45689745632142</span></div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['buy']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <div class="list">
            <div class="left">
                <img src="<?php echo IMG_PATH;?>
/gxq/gxqcg_44.png" alt="">
            </div>
            <p class="title1"><?php echo $_smarty_tpl->tpl_vars['v']->value["courtName"];?>
</p>
            <p class="title3">.....................................</p>
            <p class="title4">营业时间＃08:０0－22:０0</p>
            <p class="title5">价格：1小时/￥<?php echo $_smarty_tpl->tpl_vars['v']->value["price"];?>
<span>￥<?php echo $_smarty_tpl->tpl_vars['v']->value["price"];?>
</span></p>
            <img src="<?php echo IMG_PATH;?>
/gxq/gxqzhang_11.png" alt="" class="zuire">
            <img src="<?php echo IMG_PATH;?>
/gxq/gxqzhang_14.png" alt="" class="xiaofei">
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div>
</body>
</html><?php }
}
