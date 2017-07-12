<?php
/* Smarty version 3.1.30, created on 2017-07-12 02:48:08
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\yhone.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596571c84893f8_21053708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56ef797b3b31ad43a3abc9d59d2d2ada1b04226c' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\yhone.html',
      1 => 1499770462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596571c84893f8_21053708 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/yhone.css">
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
            $(".back").click(function () {
                history.go(-1);
            })
        })
    <?php echo '</script'; ?>
>
</head>
<body>
<!--header start-->
<header>
    <div class="header-main">
        <a href="#" class="iconfont icon-fanhui back"></a>
        <div class="header-p">
            <span>··我··</span>
            <span class="he-span">WODE LANQIUHUO</span>
        </div>
    </div>
</header>
<!--header end-->
<!--banner start-->
<div class="banner">
    <a href="#" class="ba-yh">
        <img src="<?php echo IMG_PATH;?>
/yhbanner.png" alt="">
    </a>
    <a href="#" class="tou" style="background-image: url('<?php echo IMG_PATH;?>
/yhtou.png');background-position: center;background-size: contain;">
        <div class="img" style="background-image: url(<?php echo IMG_PATH;?>
/yhgeren2.png');background-position: center;background-size: contain; "></div>
    </a>
    <div class="bedeck">
        <img src="<?php echo IMG_PATH;?>
/yhdian.png" alt="">
    </div>
</div>
<!--banner end-->
<!--own start-->
<div class="own">
    <div class="detail">
        <p class="top">LANQIUDASHENLUN</p>
        <span class="name">篮球大神周杰伦</span>
        <div class="medal">
            <img src="<?php echo IMG_PATH;?>
/yhxunzhang.png" alt="">
            <img src="<?php echo IMG_PATH;?>
/yhxunzhang.png" alt="">
            <img src="<?php echo IMG_PATH;?>
/yhxunzhang.png" alt="">
            <img src="<?php echo IMG_PATH;?>
/yhxunzhang.png" alt="">
            <img src="<?php echo IMG_PATH;?>
/yhxunzhang.png" alt="">
        </div>
        <p class="referral">喜欢篮球又喜欢周杰伦的男子</p>
    </div>
</div>
<!--own end-->
<!--section start-->
<section>
    <div class="section-main">
        <div class="main-one">
            <a href="">
                <img src="<?php echo IMG_PATH;?>
/yhone.png" alt="">
            </a>
            <a href="">
                <img src="<?php echo IMG_PATH;?>
/yhown.png" alt="">
            </a>
        </div>
        <ul class="list">
                <li>
                    <div class="self">
                        <div class="self-tou iconfont icon-naozhong">
                        </div>
                    </div>
                    <div class="seri">
                        <a href="index.php?m=index&f=member&a=own" class="seri-tou">
                            <span  class="title">朋友圈</span>
                            <span class="mintitle">PENGYOUQUAN</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="self">
                        <div class="self-tou iconfont icon-xin">
                        </div>
                    </div>
                    <div class="seri">
                        <a href="index.php?m=index&f=order" class="seri-tou">
                            <span class="title">我的订单</span>
                            <span class="mintitle">LIDAPENGQIUYOU</span>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="self">
                        <div class="self-tou">
                        </div>
                    </div>
                    <div class="seri">
                        <a href="index.php?m=index&f=friends" class="seri-tou">
                            <span class="title">我的好友</span>
                            <span class="mintitle">LIDAPENGQIUYOU</span>
                        </a>
                    </div>
                </li>
            <li>
                <div class="self">
                    <div class="self-tou">
                    </div>
                </div>
                <div class="seri">
                    <a href="index.php?m=index&f=upload&a=upload" class="seri-tou">
                        <span class="title">上传头像</span>
                        <span class="mintitle">LIDAPENGQIUYOU</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="self">
                    <div class="self-tou">
                    </div>
                </div>
                <div class="seri">
                    <a href="index.php?m=index&f=setting" class="seri-tou">
                        <span class="title">更多设置</span>
                        <span class="mintitle">LIDAPENGQIUYOU</span>
                    </a>
                </div>
            </li>
            <li>
                <div class="self">
                    <div class="self-tou">
                    </div>
                </div>
                <div class="seri">
                    <a href="index.php?m=index&f=send" class="seri-tou">
                        <span class="title">发表动态</span>
                        <span class="mintitle">LIDAPENGQIUYOU</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</section>
<!--section end-->
<!--loginout start-->
<footer>
    <div class="loginout">
        <span class="iconfont icon-shouji"></span>
        <a href="index.php?m=index&f=login&a=logout">
            退出登录
            <span class="details">TUICHUDENGLU</span>
        </a>
    </div>
</footer>
<!--loginout end-->
</body>
</html><?php }
}
