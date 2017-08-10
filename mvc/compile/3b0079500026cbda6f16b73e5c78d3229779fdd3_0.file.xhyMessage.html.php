<?php
/* Smarty version 3.1.30, created on 2017-07-22 15:06:24
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\xhyMessage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59734dd0e77877_99414075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b0079500026cbda6f16b73e5c78d3229779fdd3' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\xhyMessage.html',
      1 => 1500728762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59734dd0e77877_99414075 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/xhylogin.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/animate.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/mui.min.js"><?php echo '</script'; ?>
>
</head>
<body m="<?php echo $_smarty_tpl->tpl_vars['m']->value;?>
" f="<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
" a="<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
" uname="<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
">
<header>
    <a href="#" onclick="history.back()" class="back iconfont icon-fanhui"></a>
    <img src="<?php echo IMG_PATH;?>
/xhylogin.png" alt="">
</header>
<div class="box box1">
    <form action="">
        <div class="kuang alert">
            <div class="a-top a-true">
                <div class="ic-login">
                    <div class="loginse iconfont icon-duihao2" style="color:#02be0f">
                    </div>
                    <span><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</span>
                </div>
                <p style="color:#000;"><?php echo $_smarty_tpl->tpl_vars['message1']->value;?>
</p>
            </div>
            <img src="<?php echo IMG_PATH;?>
/xhyloadBoy.png" alt="">
        </div>
    </form>
</div>
</body>
</html>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/xhymessage.js"><?php echo '</script'; ?>
><?php }
}
