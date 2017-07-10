<?php
<<<<<<< HEAD
/* Smarty version 3.1.30, created on 2017-07-10 05:11:16
=======
/* Smarty version 3.1.30, created on 2017-07-07 12:25:38
>>>>>>> b5de5d3a1bbf792d2944f8a8ac35b1632230393c
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\yhnearby.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
<<<<<<< HEAD
  'unifunc' => 'content_5962f05492dab8_05338738',
=======
  'unifunc' => 'content_595f61a27e2b83_68244717',
>>>>>>> b5de5d3a1bbf792d2944f8a8ac35b1632230393c
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72078890a0a616d32e7cf5c129e914f6f58aad05' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\yhnearby.html',
<<<<<<< HEAD
      1 => 1499656273,
=======
      1 => 1499422996,
>>>>>>> b5de5d3a1bbf792d2944f8a8ac35b1632230393c
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:bottom.html' => 1,
  ),
),false)) {
<<<<<<< HEAD
function content_5962f05492dab8_05338738 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_595f61a27e2b83_68244717 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> b5de5d3a1bbf792d2944f8a8ac35b1632230393c
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0" >
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/yhnearby.css">
<<<<<<< HEAD
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/qzzmain.css">
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
=======
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>>>>>>> b5de5d3a1bbf792d2944f8a8ac35b1632230393c
>
</head>
<body>
<!--header start-->
<header>
    <div class="header-main">
        <a href="#" class="iconfont icon-fanhui back"></a>
        <div class="header-p">
            <span>附近球友</span>
            <span class="he-span">SOUSU JIEGUOSOUSU</span>
        </div>
        <div class="add">+</div>
    </div>
</header>
<!--header end-->
<!--section start-->
<section>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <li>
            <div class="self">
                <div class="self-tou">
                </div>
            </div>
            <div class="seri">
                <div class="seri-tou">
                    <span class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</span>
                    <div class="medal">
                        <img src="<?php echo IMG_PATH;?>
/yhxunzhang.png" alt="">
                        <img src="<?php echo IMG_PATH;?>
/yhxunzhang.png" alt="">
                        <img src="<?php echo IMG_PATH;?>
/yhxunzhang.png" alt="">
                        <img src="<?php echo IMG_PATH;?>
/yhxunzhang.png" alt="">
                        <img src="<?php echo IMG_PATH;?>
/yhxunzhang.png" alt="">
                    </div>
                    <span class="mintitle"><?php echo $_smarty_tpl->tpl_vars['v']->value["yname"];?>
</span>
                    <p class="detail">身高:<?php echo $_smarty_tpl->tpl_vars['v']->value["height"];?>
  体重:<?php echo $_smarty_tpl->tpl_vars['v']->value["weight"];?>
  位置:<?php echo $_smarty_tpl->tpl_vars['v']->value["role"];?>
</p>
                    <div class="attention">
                        关注
                    </div>
                </div>
                <div class="seri-hot">
                    <img src="<?php echo IMG_PATH;?>
/yh-hot.png" alt="">
                </div>

            </div>
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </ul>
</section>
<!--section end-->
<!--底部开始-->
<?php $_smarty_tpl->_subTemplateRender("file:bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--底部结束-->
</body>
</html><?php }
}
