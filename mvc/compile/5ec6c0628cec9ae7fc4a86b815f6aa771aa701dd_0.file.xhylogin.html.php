<?php
/* Smarty version 3.1.30, created on 2017-07-11 08:28:03
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\xhylogin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59646ff349b604_14982978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ec6c0628cec9ae7fc4a86b815f6aa771aa701dd' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\xhylogin.html',
      1 => 1499754481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59646ff349b604_14982978 (Smarty_Internal_Template $_smarty_tpl) {
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
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/messages_zh.js"><?php echo '</script'; ?>
>
</head>
<body>
<header>
    <a href="#" onclick="history.back()" class="back iconfont icon-fanhui"></a>
    <img src="<?php echo IMG_PATH;?>
/xhylogin.png" alt="">
</header>
<div class="box">
    <form action="index.php?m=index&f=login&a=willlogin" method="post" id="login-form">
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
            <div class="login">
                <div class="login-btn">
                    <input type="submit" value="登录">
                </div>
            </div>
        </div>
    </form>
    <div class="photo">
        <div class="circle yuan1"></div>
        <div class="circle yuan2"></div>
        <div class="ph-rect">
            <img src="<?php echo IMG_PATH;?>
/xhyphoto.png" alt="">
        </div>
    </div>
</div>
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/xhylogin.js"><?php echo '</script'; ?>
>
</html><?php }
}
