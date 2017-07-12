<?php
/* Smarty version 3.1.30, created on 2017-07-12 02:48:20
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\qzznews.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596571d4877e70_42491509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a85176aae985fa51e7697b32f580ff885e585f9' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\qzznews.html',
      1 => 1499770462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596571d4877e70_42491509 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/qzznews.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/mui.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/send.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function() {
            $(".l").click(function () {
                history.go(-1);
            })
        })
    <?php echo '</script'; ?>
>
</head>
<body>
<!--头部开始-->
    <header>
    <div class="header-main">
        <div class="l iconfont icon-fanhui1"></div>
        <div class="m">
            <div class="china">··&nbsp;发表动态&nbsp;··</div>
            <div class="eng">FABIAO   DONGTAI</div>
        </div>
    </div>
</header>
<!--头部结束-->
<!--内容开始-->
    <div class="content">
        <div class="text">
            <textarea name="" id="" cols="30" rows="5" style="border: none;color: #545454;font-size: 0.24rem" placeholder="这一刻的想法..."></textarea>
            <div class="add">+</div>
            <div class="position">
                <div class="icon iconfont icon-weizhi-copy"></div>
                <span>所在位置</span>
            </div>
        </div>
        <input type="button" class="button" value="发表">
    </div>
<!--内容结束-->
</body>
</html><?php }
}
