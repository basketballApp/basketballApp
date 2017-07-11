<?php
/* Smarty version 3.1.30, created on 2017-07-11 03:35:30
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\xhyreg2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59642b6271c394_25361592',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1c470eec06bf3783e2260dbd2ffa9b3ae004f31' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\xhyreg2.html',
      1 => 1499736929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59642b6271c394_25361592 (Smarty_Internal_Template $_smarty_tpl) {
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
/xhyreg2.css">
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
</head>
<body>
<header>
    <a href="#" onclick="history.back()" class="back iconfont icon-fanhui"></a>
    <img src="<?php echo IMG_PATH;?>
/xhyregbg.png" alt="">
</header>
<div class="box">
    <form method="post" action="index.php?m=index&f=login&a=reg2&uname=<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
">
        <div class="kuang">
            <div class="user">
                <div class="icon icons iconfont icon-yonghuming1"></div>
                <input type="text" name="yname" placeholder="请选择中文英文、符号作为您的昵称">
                <div class="icon1 uname namefalse iconfont icon-cuowu4" id="icon1"></div>
                <div class="icon1 uname icon2 iconfont  nametrue icon-duihao2 " id="icon1"></div>
                <div class="false">
                    <div class="warn iconfont icon-cuowu"></div>
                    <span>当前用户不存在</span>
                </div>
            </div>
            <div class="user">
                <div class="icon icons1 iconfont icon-mima"></div>
                <input type="password" name="height" placeholder="请选择您的身高">
                <div class="icon1 passfalse iconfont icon-cuowu4" id="icon2"></div>
                <div class="icon1 icon2 passtrue iconfont icon-duihao2" id="icon2"></div>
            </div>
            <div class="user">
                <div class="icon icons1 iconfont icon-mima"></div>
                <input type="password" name="weight" placeholder="请填写您的体重">
                <div class="icon1 passfalse iconfont icon-cuowu4"></div>
                <div class="icon1 icon2 passtrue iconfont icon-duihao2"></div>
            </div>
            <div class="user">
                <div class="icon icons1 iconfont icon-mima"></div>
                <textarea name="declaration" id="" cols="30" rows="10" placeholder="请填写您的宣言"></textarea>
                <div class="icon1 passfalse iconfont icon-cuowu4"></div>
                <div class="icon1 icon2 passtrue iconfont icon-duihao2"></div>
            </div>
            <div class="login">
                <div class="login-btn">
                    <input type="submit" value="下一步">
                </div>
            </div>
        </div>
    </form>
    <div class="photo">
        <div class="ph-rect">
            <span class="ph-left">02</span>
            <span class="ph-right">
                <p class="up">基础信息完善</p>
                <p class="down">JICHUXINXI WANSHAN</p>
            </span>
        </div>
        <div class="step">
            <img src="<?php echo IMG_PATH;?>
/xhyroll.png" alt="" class="passroll">
            <div class="s-line"></div>
            <img src="<?php echo IMG_PATH;?>
/xhyroll.png" alt="" class="passroll">
            <div class="s-line"></div>
            <div class="s-roll">
                <div class="sm-roll">
                    <div class="sx-roll"></div>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/xhyreg2.js"><?php echo '</script'; ?>
>
</html><?php }
}
