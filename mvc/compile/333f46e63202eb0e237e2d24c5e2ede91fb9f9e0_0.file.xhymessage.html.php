<?php
/* Smarty version 3.1.30, created on 2017-07-10 16:33:02
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\xhymessage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5963901e8e3170_92901483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '333f46e63202eb0e237e2d24c5e2ede91fb9f9e0' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\xhymessage.html',
      1 => 1499697095,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5963901e8e3170_92901483 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body>
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
                <p style="color:#000;"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
            </div>
            <!--<div class="a-top a-false">-->
                <!--<div class="ic-login">-->
                    <!--<div class="loginse loginfal iconfont icon-cuowu4" style="color:#ec5151"></div>-->
                    <!--<span style="color:#ec5151">登录失败</span>-->
                <!--</div>-->
                <!--<p style="color:#000;">对不起！网络出错了！请重新登录</p>-->
            <!--</div>-->
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
