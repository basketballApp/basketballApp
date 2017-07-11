<?php
/* Smarty version 3.1.30, created on 2017-07-11 04:09:15
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\xhyreg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5964334bc76975_47159300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd21318b0f4553a9b1da941c81e56c422c1777a0f' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\xhyreg.html',
      1 => 1499738949,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5964334bc76975_47159300 (Smarty_Internal_Template $_smarty_tpl) {
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
/xhyreg.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/animate.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/mui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
</head>
<body>
<header>
    <a href="#" onclick="location.href='index.php?m=index&f=login'" class="back iconfont icon-fanhui"></a>
    <img src="<?php echo IMG_PATH;?>
/xhyregbg.png" alt="">
</header>
<div class="box">
    <form method="post" action="index.php?m=index&f=login&a=reg">
        <div class="kuang">
            <div class="user">
                <div class="icon icons iconfont icon-yonghuming1"></div>
                <input type="text" name="uname" placeholder="请输入5-8位数字或字母用户名">
                <div class="icon1 uname namefalse iconfont icon-cuowu4" id="icon1"></div>
                <div class="icon1 uname icon2 iconfont  nametrue icon-duihao2 " id="icon1"></div>
                <div class="false">
                    <div class="warn iconfont icon-cuowu"></div>
                    <span>当前用户不存在</span>
                </div>
            </div>
            <div class="user">
                <div class="icon icons1 iconfont icon-mima"></div>
                <input type="password" name="upass" placeholder="请输入您的5-8位数字或字母密码">
                <div class="icon1 passfalse iconfont icon-cuowu4" id="icon2"></div>
                <div class="icon1 icon2 passtrue iconfont icon-duihao2" id="icon2"></div>
            </div>
            <div class="user">
                <div class="icon icons1 iconfont icon-mima"></div>
                <input type="password" name="upass1" placeholder="请再次确认您的密码">
                <div class="icon1 passfalse iconfont icon-cuowu4"></div>
                <div class="icon1 icon2 passtrue iconfont icon-duihao2"></div>
            </div>
            <div class="login">
                <div class="login-btn">
                    <input type="submit" value="注册">
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
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/xhyreg.js"><?php echo '</script'; ?>
>
</html><?php }
}
