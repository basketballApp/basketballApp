<?php
/* Smarty version 3.1.30, created on 2017-07-30 12:43:16
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\gxqzffs.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597db8441899f8_85098443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a63b417c6828bf59e9e74207569a970fe37be61' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\gxqzffs.html',
      1 => 1501411394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597db8441899f8_85098443 (Smarty_Internal_Template $_smarty_tpl) {
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
        $(function(){
            $(".titlebox").click(function(){
                $(".mask").css("display","block")
            })
            $(".mask").click(function(){
//                $(".mask").css("display","none")
                $(".kuang").css("display","block")
            })
            $(".select .back").click(function(){
                history.go(-1)
            })
            $(".select").click(function(){
                $(".kuang").css("display","none")
            })
            $(".ma").click(function(){
                history.go(-1)
            })
            $(".xiayibu").click(function(){
                $(".mask").css("display","block")
                $(".lijibox").css("display","block")
            })
            $(".lijiBtn").click(function(){
                $(".mask").css("display","block")
                $(".lijibox").css("display","none")
            })
        })
    <?php echo '</script'; ?>
>
</head>
<body class="stadium">
    <header>
        <div class="top">
            <div class="left">
                <img src="<?php echo IMG_PATH;?>
/gxq/gxqleftjt_03.png" alt="" class="ma">
            </div>
        </div>
        <div class="middle">
            <h5>XUANZEZHIFUFANGS</h5>
            <h3>XUANZEZHIFUFAN</h3>
            <h2>选择支付方式</h2>
            <div class="fen"></div>
        </div>
    </header>
    <div class="method">
        <div class="zhifu">
            <p class="titlebox" style="text-align: center">第三方支付</p>
            <p class="titlebox2" style="text-align: center">DISANFANGZHISFU</p>
        </div>
        <div class="zfb-wx">
            <div class="zfb"><img src="<?php echo IMG_PATH;?>
/gxq/gxqmethod_03.png" alt=""></div>
            <div class="wx"><img src="<?php echo IMG_PATH;?>
/gxq/gxqmethod_05.png" alt=""></div>
        </div>
        <div style="height: 0.2rem"></div>
        <p class="circle">......................................................................................................</p>
        <div class="zf-other zhifu">
            <p class="titlebox">其它支付方式</p>
            <p class="titlebox2">QITAZHIFUFANGSHI</p>
        </div>
        <div class="huodaofukuan zhifu">
            <div class="zhifu-lvtiao"></div>
            <p class="titlebox">货到付款</p>
            <p class="titlebox2">QITAZHIFUFANGSHI</p>
        </div>
        <div class="yinhangka zhifu">
            <div class="zhifu-yellow"></div>
            <p class="titlebox">银行卡</p>
            <p class="titlebox2">YINHANGKA</p>
        </div>
        <div class="zhye">
            <p class="titlebox">账户余额</p>
            <p class="titlebox2">ZHANGHUYUE</p>
        </div>
        <div class="xiayibu">
            <p class="titlebox">下一步</p>
            <p class="titlebox2">XIAYIBU</p>
        </div>
    </div>

    <!--支付成功弹框-->
    <div class="kuang">
        <p class="title1">恭喜您！支付成功</p>
        <p class="title2">GONGXININ ZHIFUCHENGGONG</p>
        <div class="select">
            <div class="con">
                <div class="back"></div>
            </div>
        </div>
    </div>
    <div class="mask">
        <!--立即支付弹框-->
        <div class="lijibox">
            <div class="money">30.50</div>
            <div class="yinhang">
                <img src="<?php echo IMG_PATH;?>
/gxq/jianghang_06.png" alt="" class="logo">
                <div class="yh2">
                    <p class="title1">中国建设银行</p>
                    <p class="title1" style="clear: both">0321 **** **** 8875</p>
                </div>
            </div>
            <div class="lijiBtn"></div>
        </div>
    </div>

</body>
</html><?php }
}
