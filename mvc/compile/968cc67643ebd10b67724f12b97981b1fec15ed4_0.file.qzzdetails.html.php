<?php
/* Smarty version 3.1.30, created on 2017-07-22 05:52:48
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\qzzdetails.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5972cc10913e16_88096119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '968cc67643ebd10b67724f12b97981b1fec15ed4' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\qzzdetails.html',
      1 => 1500695566,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5972cc10913e16_88096119 (Smarty_Internal_Template $_smarty_tpl) {
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
/qzzdetails.css">
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
/upload.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function() {
            $(".left").click(function () {
                history.go(-1);
            })
        })
    <?php echo '</script'; ?>
>
</head>
<body>
    <!--头部开始-->
    <header style="height:1.02rem">
            <div class="top" style="height: 1.02rem;position: relative;">
                <div class="left" style="height: 0.44rem;width:0.44rem;position: fixed;top:0.26rem;left:0.26rem;">
                    <img src="<?php echo IMG_PATH;?>
/gxq/gxqleftjt_03.png" alt="" class="ma" style="width:100%;height: 100%;float: left">
                </div>
            </div>
    </header>
    <!--头部结束-->
    <!--流程-->
    <div class="photo">
        <div class="step">
            <img src="<?php echo IMG_PATH;?>
/xhyroll.png" alt="" class="passroll">
            <div class="s-line"></div>
            <img src="<?php echo IMG_PATH;?>
/xhyroll.png" alt="" class="passroll">
            <div class="s-line"></div>
            <img src="<?php echo IMG_PATH;?>
/xhyroll.png" alt="" class="passroll">
        </div>
        <div class="ph-rect">
            <span class="ph-left">03</span>
            <span class="ph-right">
                <p class="up" STYLE="font-weight: 700">上传个人头像</p>
                <p class="down">PROFILE PICTURES</p>
            </span>
        </div>
    </div>
    <!--结束-->
    <!--上传开始-->
    <div class="upload">
        <div class="title">
            <h3>选择您的头像</h3>
            <h5>XUANZETOUXIANGSHANGCHUAN</h5>
        </div>
        <div class="pictures">
            <img src="<?php echo IMG_PATH;?>
/qzz/qzzpictures.png" alt="">
        </div>
        <div class="setting">
            <div  class="load button add"></div>
            <div  class="photos button up"></div>
        <input type="text" name="src">
    </div>
    <!--上传结束-->
</body>
<?php echo '<script'; ?>
>
    $(function() {
            var url = "";
            var parent = document.querySelector(".setting");
//        var container=document.querySelector(".upload");
            var obj = new upload();
            obj.createView({
                parent: parent,
                selectBtn: $(".add"),
                uploadBtn:$(".up")
            });
            obj.up("index.php?m=index&f=index&a=upload", function (data) {
                document.querySelector("input[name=src]").value = data;
                url=data;
                $.ajax({
                    url: 'index.php?m=index&f=index&a=upload',
                    type: "post",
                    data: {
                        url: url
                    },
                    success: function (data) {
                        if (data) {
                            location.href="index.php?m=index&f=index&a=publishDynamic";
                        }
                    }
                })
            })
        })
//    $(".load").click(function () {
//        location.href="index.php?m=index&f=login&a=serphselect&uname=<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
";
//    })
<?php echo '</script'; ?>
>
</html><?php }
}
