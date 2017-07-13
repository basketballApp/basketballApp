<?php
/* Smarty version 3.1.30, created on 2017-07-13 13:11:05
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\yhsetting.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59675549197f00_42724218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '319d36e524a0b3993adb3fc8a1abcd2a6c9137cb' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\yhsetting.html',
      1 => 1499770462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59675549197f00_42724218 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/yhsetting.css">
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
            <span>··&nbsp;更多设置&nbsp;··</span>
            <span class="he-span">GENGDUO  SHEZHI</span>
        </div>
    </div>
</header>
<!--header end-->
<!--section start-->
<section>
    <ul>
        <li>
            <div class="self">
                <div class="self-tou iconfont icon-naozhong">
                </div>
            </div>
            <div class="seri">
                <div class="seri-tou">
                    <span class="title">夜间模式</span>
                    <span class="mintitle">LIDAPENGQIUYOU</span>
                </div>
                <div class="mui">
                    <input class="mui-switch mui-active" type="checkbox" checked="">
                </div>

            </div>
        </li>
        <li>
            <div class="self">
                <div class="self-tou iconfont icon-xin">
                </div>
            </div>
            <div class="seri">
                <div class="seri-tou">
                    <span class="title">设为特别关注</span>
                    <span class="mintitle">LIDAPENGQIUYOU</span>
                </div>
                <div class="mui">
                    <input class="mui-switch mui-active" type="checkbox" checked="">
                </div>

            </div>
        </li>
        <li>
            <div class="self">
                <div class="self-tou">
                </div>
            </div>
            <div class="seri">
                <div class="seri-tou">
                    <span class="title">设置为黑名单</span>
                    <span class="mintitle">LIDAPENGQIUYOU</span>
                </div>
                <div class="mui">
                    <input class="mui-switch" type="checkbox" checked="">
                </div>

            </div>
        </li>
    </ul>
</section>
<!--section end-->
<!--loginout start-->
<footer>
    <div class="loginout">
        <span class="iconfont icon-delete"></span>
        <a href="">
            删除联系人
            <span class="details">TUICHUDENGLU</span>
        </a>
    </div>
</footer>
<!--loginout end-->
</body>
</html><?php }
}
