<?php
/* Smarty version 3.1.30, created on 2017-07-07 13:25:25
  from "F:\wamp\www\basketball\basketballApp\mvc\template\index\yhlist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595f6fa525f788_35745406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2e034feb8508158e0c879eb124bc3b629c1d2a6' => 
    array (
      0 => 'F:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\yhlist.html',
      1 => 1499426723,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f6fa525f788_35745406 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/yhlist.css">
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
            <span>··好友列表··</span>
            <span class="he-span">SOUSU JIEGUOSOUSU</span>
        </div>
        <div class="add">+</div>
    </div>
</header>
<!--header end-->
<!--section start-->
<section>
    <ul>
        <li>
            <div class="self">
                <div class="self-tou">
                    <img src="<?php echo IMG_PATH;?>
/yhnew.png" alt="">
                </div>
            </div>
            <div class="seri">
                <div class="seri-tou">
                    <span class="title">新增好友</span>
                    <span class="mintitle">XINZENGHAOYOU</span>
                    <p class="detail">新加好友扩大交际圈友扩大交际圈...</p>
                </div>
                <div class="num">
                    08
                </div>
            </div>
        </li>
        <li>
            <div class="self">
                <div class="self-tou">
                    <img src="<?php echo IMG_PATH;?>
/yhall.png" alt="">
                </div>
            </div>
            <div class="seri">
                <div class="seri-tou">
                    <span class="title">全部好友</span>
                    <span class="mintitle">XINZENGHAOYOU</span>
                    <p class="detail">新加好友扩大交际圈友扩大交际圈...</p>
                </div>
            </div>
        </li>
        <li>
            <div class="self">
                <div class="self-tou">
                    <img src="<?php echo IMG_PATH;?>
/yhde.png" alt="">
                </div>
            </div>
            <div class="seri">
                <div class="seri-tou">
                    <span class="title">特别好友</span>
                    <span class="mintitle">TEBIEGAUNZHU</span>
                    <p class="detail">新加好友扩大交际圈友扩大交际圈...</p>
                </div>
            </div>
        </li>
    </ul>
</section>
<!--section end-->
<!--all friends start-->
<div class="friends">
    <div class="main">
        <div class="header">
            <p><span>QUANBU</span>HAOYOU</p>
            <h5>全部好友</h5>
            <div class="line"></div>
        </div>
        <div class="search">
            <div class="sear-left">
                <span>当前好友</span>
                <input type="text" placeholder="">
            </div>
            <div class="btn">
                <span class="btnsp">882</span>
                <input type="submit" value="SOU">
            </div>
        </div>
        <h5>A 36</h5>
        <ul class="frili">
            <li class="li">
                <div class="li-left">
                    <div class="li-tou" style="background: url('<?php echo IMG_PATH;?>
/yhgeren1.png') no-repeat;background-size:contain ">

                    </div>
                </div>
                <div class="li-right">
                    <p class="title">KESN<span class="min-title">JUHTGY</span></p>
                    <div class="iconfont xing">
                        &nbsp&#xe6ab; &#xe6ab; &#xe6ab;  &#xe6ab;
                    </div>
                    <p class="ll"></p>
                    <p class="con">每天坚持锻炼身体</p>
                    <div class="video">
                        <a class="vi">
                            <img src="<?php echo IMG_PATH;?>
/yhvid.png" alt="">
                        </a>
                        <span class="ipone iconfont icon-shouji">

                        </span>
                    </div>
                </div>
            </li>
            <li class="li">
                <div class="li-left">
                    <div class="li-tou" style="background: url('<?php echo IMG_PATH;?>
/yhgeren1.png') no-repeat;background-size:contain ">

                    </div>
                </div>
                <div class="li-right">
                    <p class="title">KESN<span class="min-title">JUHTGY</span></p>
                    <div class="iconfont xing">
                        &nbsp&#xe6ab; &#xe6ab; &#xe6ab;  &#xe6ab;
                    </div>
                    <p class="ll"></p>
                    <p class="con">每天坚持锻炼身体</p>
                    <div class="video">
                        <a class="vi">
                            <img src="<?php echo IMG_PATH;?>
/yhvid.png" alt="">
                        </a>
                        <span class="ipone iconfont icon-shouji">

                        </span>
                    </div>
                </div>
            </li>
            <li class="li">
                <div class="li-left">
                    <div class="li-tou" style="background: url('<?php echo IMG_PATH;?>
/yhgeren1.png') no-repeat;background-size:contain ">

                    </div>
                </div>
                <div class="li-right">
                    <p class="title">KESN<span class="min-title">JUHTGY</span></p>
                    <div class="iconfont xing">
                        &nbsp&#xe6ab; &#xe6ab; &#xe6ab;  &#xe6ab;
                    </div>
                    <p class="ll"></p>
                    <p class="con">每天坚持锻炼身体</p>
                    <div class="video">
                        <a class="vi">
                            <img src="<?php echo IMG_PATH;?>
/yhvid.png" alt="">
                        </a>
                        <span class="ipone iconfont icon-shouji">

                        </span>
                    </div>
                </div>
            </li>
        </ul>
        <div class="letter">
           <span class="le active">
            A
           </span>
            <span class="le">
            B
           </span>
            <span class="le">
            C
           </span>
            <span class="le">
            D
           </span>
            <span class="le">
            E
           </span>
            <span class="le">
            F
           </span>
            <span class="le">
            G
           </span>
        </div>
    </div>
</div>
<!--all friends end-->
<!--mask start-->
<div class="mask">
    <div class="mask-main">
        <div class="banner">
            <a href="#" class="ba-yh">
                <img src="<?php echo IMG_PATH;?>
/yhbanner.png" alt="">
            </a>
            <a href="#" class="tou" style="background-image: url('<?php echo IMG_PATH;?>
/yhtou.png');background-position: center;background-size: contain;">
                <div class="img" style="background-image: url('<?php echo IMG_PATH;?>
/yhgeren2.png');background-position: center;background-size: contain; "></div>
            </a>
            <div class="bedeck">
                <img src="<?php echo IMG_PATH;?>
/yhdian.png" alt="">
            </div>
        </div>
        <div class="mask-title">
            <h5>赤脚大仙</h5>
            <p class="p1">CHIJIAO<span class="p1s">DAXIAN</span></p>
            <div class="mui">
                <input class="mui-switch mui-active" type="checkbox" checked="">
            </div>
        </div>
        <div class="smale">
            <div class="lists">
                <div class="img">
                    <img src="../../static/image/yhsmail.png" alt="">
                </div>
                <div class="title">
                    <p>关注</p>
                    <div class="dash"></div>
                    <span>5672</span>
                </div>
            </div>
            <div class="lists">
                <div class="img">
                    <img src="<?php echo IMG_PATH;?>
/yhsmail.png" alt="">
                </div>
                <div class="title">
                    <p>粉丝</p>
                    <div class="dash"></div>
                    <span>5561</span>
                </div>
            </div>
            <div class="lists">
                <div class="img">
                    <img src="<?php echo IMG_PATH;?>
/yhsmail.png" alt="">
                </div>
                <div class="title">
                    <p>动态</p>
                    <div class="dash"></div>
                    <span>5432</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--mask end-->
</body>
</html><?php }
}
