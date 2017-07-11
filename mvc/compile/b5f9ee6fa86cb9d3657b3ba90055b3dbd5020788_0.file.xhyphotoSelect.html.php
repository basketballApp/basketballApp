<?php
/* Smarty version 3.1.30, created on 2017-07-11 04:05:33
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\xhyphotoSelect.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5964326d917c60_96635245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5f9ee6fa86cb9d3657b3ba90055b3dbd5020788' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\xhyphotoSelect.html',
      1 => 1499738732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5964326d917c60_96635245 (Smarty_Internal_Template $_smarty_tpl) {
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
/xhyphotoSelect.css">
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
<!--header start-->
<header>
    <a href="#" onclick="history.back()" class="back iconfont icon-fanhui"></a>
    相册
</header>
<!--header end-->

<!--photo select start-->
<div class="photo-box">
    <div class="photo">
        <img src="<?php echo IMG_PATH;?>
/xhyphoto1.png" alt="">
    </div>
    <div class="photo">

    </div>
    <div class="photo">

    </div>
    <div class="photo photo1">

    </div>
    <div class="photo">

    </div>
    <div class="photo">

    </div>
    <div class="photo">
        <img src="<?php echo IMG_PATH;?>
/xhyphoto2.png" alt="">
    </div>
    <div class="photo photo1">

    </div>
    <div class="photo">

    </div>
    <div class="photo">
        <img src="<?php echo IMG_PATH;?>
/xhyphoto3.png" alt="">
    </div>
    <div class="photo">

    </div>
    <div class="photo photo1">

    </div>
    <div class="photo">
        <img src="<?php echo IMG_PATH;?>
/xhyphoto4.png" alt="">
    </div>
    <div class="photo">

    </div>
    <div class="photo">

    </div>
    <div class="photo photo1">
        <img src="<?php echo IMG_PATH;?>
/xhyphoto5.png" alt="">
    </div>
</div>
<!--photo select end-->
<!--footer start-->
<footer>
    <input type="button" class="cancel" value="取消">
    <input type="button" class="select" value="选取">
</footer>
<!--footer end-->
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/xhyphotoSelect.js"><?php echo '</script'; ?>
>
</html>
<?php }
}
