<?php
/* Smarty version 3.1.30, created on 2017-07-11 12:35:45
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\xhysplash.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5964aa0151fe35_65980252',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b87c90ac6071236cdbb13de7a63849a310281f2' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\xhysplash.html',
      1 => 1499769341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5964aa0151fe35_65980252 (Smarty_Internal_Template $_smarty_tpl) {
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
    <!--<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css">-->
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/animate.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/xhysplash.css">
    <!--<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/mui.min.js"><?php echo '</script'; ?>
>-->
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
<div class="box">
    <ul class="bannerbox">
        <li>
            <a href="#">
                <img src="<?php echo IMG_PATH;?>
/xhysplate1.png">
            </a>
        </li>
        <li>
            <a href="#">
                <img src="<?php echo IMG_PATH;?>
/xhysplate2.png">
            </a>
        </li>
        <li>
            <a href="#">
                <img src="<?php echo IMG_PATH;?>
/xhysplate3.png">
            </a>
        </li>
    </ul>
    <ul class="btnbox">
        <li class="active"></li>
        <li></li>
        <li></li>
    </ul>
</div>
<a class="start animated tada" href="index.php?m=index&f=login">就差你了,老铁</a>
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/xhysplash.js"><?php echo '</script'; ?>
>
</html><?php }
}
