<?php
/* Smarty version 3.1.30, created on 2017-07-30 12:28:15
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\gxqorderDetails2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597db4bfd57051_16705051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '402435202a07298efa99faa3480b268e5ad30da4' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\gxqorderDetails2.html',
      1 => 1501410494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597db4bfd57051_16705051 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/gxqstadium.css">
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
            $(".left").click(function () {
                history.go(-1);
            })
            $(".zhifu").click(function(){
                $(".heji").css("display","block");
            })
        })
    <?php echo '</script'; ?>
>
</head>
<body class="order">
<header style="height: 1.02rem">
    <div class="top" style="height: 1.02rem;padding-top: 0.13rem">
        <h2 style="font-weight: 300">··&nbsp;订单详情&nbsp;··</h2>
        <h5 style="font-weight: 300">DINGDANXAINGQING</h5>
        <div class="left" style="height: 1.02rem">
            <img src="<?php echo IMG_PATH;?>
/gxq/gxqleftjt_03.png" alt="" class="ma">
        </div>
    </div>
</header>
<div class="con">
     <div class="history">
        <p class="title1">LISHIDINGDAN</p>
        <p class="title2"></p>
        <div class="title3">
            历史订单
            <div class="dian1"></div>
            <div class="dian2"></div>
        </div>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <div class="list">
            <div class="left">
                <img src="<?php echo IMG_PATH;?>
/gxq/gxqcg_44.png" alt="">
            </div>
            <p class="title1"><?php echo $_smarty_tpl->tpl_vars['v']->value["courtName"];?>
</p>
            <p class="title3">.....................................</p>
            <p class="title4">营业时间＃08:０0－22:０0</p>
            <p class="title5">价格：1小时/10￥<span>￥<?php echo $_smarty_tpl->tpl_vars['v']->value["price"];?>
</span></p>
            <img src="<?php echo IMG_PATH;?>
/gxq/gxqzhang_11.png" alt="" class="zuire">
            <img src="<?php echo IMG_PATH;?>
/gxq/gxqzhang_14.png" alt="" class="xiaofei">
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div>
</body>
</html><?php }
}
