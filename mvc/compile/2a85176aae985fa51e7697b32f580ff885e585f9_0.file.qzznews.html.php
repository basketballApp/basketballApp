<?php
/* Smarty version 3.1.30, created on 2017-07-30 12:59:35
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\qzznews.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597dbc17d136b0_82010015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a85176aae985fa51e7697b32f580ff885e585f9' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\qzznews.html',
      1 => 1501412374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597dbc17d136b0_82010015 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
    <!--<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/send.js"><?php echo '</script'; ?>
>-->
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/uploadVideo.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function() {
            $(".l").click(function () {
                history.go(-1);
            })
            var flag=true;
                $(".add").click(function () {
                    if(flag) {
                        console.log(flag)
                        flag = false;
                        var videoUrl = "";
                        var con = "";
                        var title = $("textarea").val();
                        var parent = document.querySelector(".uploadbox");
                        var obj = new uploadV();
                        obj.createView({
                            parent: parent
                        });
                        obj.up("index.php?m=index&f=index&a=uploadVideo", function (data) {
                            console.log(data)

                            document.querySelector("input[name=shipin]").value = data;
                            videoUrl = data;
                            con = $("textarea").val();
                            $.ajax({
                                url: 'index.php?m=index&f=index&a=publishDynamicCon',
                                type: "post",
                                data: {
                                    url: videoUrl, con: con
                                },
                                success: function (data) {
                                    if (data) {
                                        $(".uploadbox").css("display","none");
                                        location.href="index.php?m=index&f=index&a=publishDynamic";
                                    }

                                }
                            })
                        });

                    }
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

    </div>
    <input type="hidden" name="shipin" value="">
    <div class="uploadbox"></div>

</div>
<!--内容结束-->
</body>
</html><?php }
}
