<?php
/* Smarty version 3.1.30, created on 2017-07-30 13:47:12
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\yhlist.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597dc740e80767_57792883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8bc52c4218c3e211ae5c79de667108ba841efd4' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\yhlist.html',
      1 => 1501414221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597dc740e80767_57792883 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh">
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
            $(".frili").delegate(".li","click",function () {
                var mfid=$(this).attr("mfid");
                location.href="index.php?m=index&f=member&a=geren&mfid="+mfid;
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
        <ul class="frili">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <li class="li" mfid="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['mfid'];
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
">
                        <div class="li-left">
                            <div class="li-tou" style="background: url('<?php echo IMG_PATH;?>
/yhgeren1.png') no-repeat;background-size:contain ">

                            </div>
                        </div>
                        <div class="li-right">
                            <p class="title"><?php ob_start();
echo substr($_smarty_tpl->tpl_vars['v']->value["declaration"],0,2);
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>
<span class="min-title"><?php ob_start();
echo substr($_smarty_tpl->tpl_vars['v']->value["declaration"],2);
$_prefixVariable3=ob_get_clean();
echo $_prefixVariable3;?>
</span></p>
                            <p class="ll"></p>
                            <p class="con"><?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value["declaration"];
$_prefixVariable4=ob_get_clean();
echo $_prefixVariable4;?>
</p>
                            <div class="video">
                                <a class="vi" >
                                    <img src="<?php echo IMG_PATH;?>
/yhvid.png" alt="">
                                </a>
                                <span class="ipone iconfont icon-shouji">
                                </span>
                            </div>
                        </div>
                </li>

            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>

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
                    <img src="../../static/index/image/yhsmail.png" alt="">
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
