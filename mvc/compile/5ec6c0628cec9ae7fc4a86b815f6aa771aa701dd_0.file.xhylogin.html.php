<?php
/* Smarty version 3.1.30, created on 2017-07-07 06:27:03
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\xhylogin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595f0d9719cf29_76621228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ec6c0628cec9ae7fc4a86b815f6aa771aa701dd' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\xhylogin.html',
      1 => 1499401542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595f0d9719cf29_76621228 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <!--<link rel="stylesheet" href="../../static/css/mui.min.css">-->
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/xhylogin.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/animate.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/mui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
    <style>
        body{
            font-family: '微软雅黑';
        }
        header{
            width: 7.5rem;
            height:13.34rem;
            position:absolute;
            left:0;
            top:0;
        }
        header img{
            width: 100%;
            height:100%;
        }
        .back{
            display: block;
            width:0.48rem;
            height:0.48rem;
            font-size: 0.48rem;
            position: absolute;
            left:0.25rem;
            top:0.51rem;
            z-index: 999;
            color:#fff;
        }
        .box{
            width: 100%;
            height:5.03rem;
            position: absolute;
            left:0;
            top: 3.78rem;
            padding: 0 0.5rem;
        }
        form{
            width: 6.52rem;
            height:4rem;
            position: absolute;
            left:0;
            right:0;
            bottom:0;
            margin: auto;
            background: #fff;
            border-radius: 0.7rem;
        }
        .kuang{
            width: 5.61rem;
            height:3.6rem;
            margin: 0 auto;
            margin-top: 0.4rem;
        }
        .kuang .user{
            width: 100%;
            height:0.93rem;
            float: left;
            border: 1px solid #bbbbbc;
        }
        .kuang input{
            background: none;
            border:none;
        }
    </style>
</head>
<body>
<header>
    <a href="#" onclick="history.back()" class="back iconfont icon-fanhui"></a>
    <img src="<?php echo IMG_PATH;?>
/xhylogin.png" alt="">
</header>
<div class="box">
    <form action="index.php?m=index&f=login&a=willlogin" method="post">
        <div class="kuang">
            <div class="user">
                <div class="icon icons iconfont icon-yonghuming1"></div>
                <input type="text" name="uname" placeholder="请输入您的用户名">
                <div class="icon1 namefalse iconfont icon-cuowu4"></div>
                <div class="icon1 icon2 iconfont  nametrue icon-duihao2"></div>
                <div class="false">
                    <div class="warn iconfont icon-cuowu"></div>
                    <span>当前用户不存在</span>
                </div>
            </div>
            <div class="user">
                <div class="icon icons1 iconfont icon-mima"></div>
                <input type="password" name="upass" placeholder="请输入您的密码">
                <div class="icon1 passfalse iconfont icon-cuowu4"></div>
                <div class="icon1 icon2 passtrue iconfont icon-duihao2"></div>
            </div>
            <!--<div class="rad">-->
                <!--<input type="radio">记住密码-->
                <!--<a href="#">忘记密码</a>-->
            <!--</div>-->
            <div class="login" style="margin-top: 0.2rem">
                <div class="login-btn">
                    <input type="submit" value="登录">
                </div>
            </div>
        </div>
    </form>
    <div class="photo">
        <div class="ph-rect">
            <img src="<?php echo IMG_PATH;?>
/xhyphoto.png" alt="">
        </div>
    </div>
</div>
<div class="box box1">
    <form action="">
        <div class="kuang alert">
            <div class="a-top a-true">
                <div class="ic-login">
                    <div class="loginse iconfont icon-duihao2" style="color:#02be0f">
                    </div>
                    <span>登录成功</span>
                </div>
                <p style="color:#000;">来吧兄弟！约场精彩绝伦的球赛吧</p>
            </div>
            <div class="a-top a-false">
                    <div class="ic-login">
                        <div class="loginse loginfal iconfont icon-cuowu4" style="color:#ec5151"></div>
                        <span style="color:#ec5151">登录失败</span>
                    </div>
                    <p style="color:#000;">对不起！网络出错了！请重新登录</p>
            </div>
            <img src="<?php echo IMG_PATH;?>
/xhyloadBoy.png" alt="">
        </div>
    </form>
</div>
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/xhylogin.js"><?php echo '</script'; ?>
>
</html><?php }
}
