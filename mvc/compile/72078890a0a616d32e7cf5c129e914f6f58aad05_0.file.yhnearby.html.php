<?php
/* Smarty version 3.1.30, created on 2017-08-10 09:48:19
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\yhnearby.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598c0fc38658b6_48996591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72078890a0a616d32e7cf5c129e914f6f58aad05' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\yhnearby.html',
      1 => 1502351298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:bottom.html' => 1,
  ),
),false)) {
function content_598c0fc38658b6_48996591 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh">
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
 src="<?php echo JS_PATH;?>
/yhadd.js"><?php echo '</script'; ?>
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
                <div class="self-tou"  style=" background: url('<?php echo IMG_PATH;?>
/img.jpg') center center;background-size: contain;">
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
                    <div class="attention" mfid=<?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>
 uid=<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
 >
                            <?php if (isset($_smarty_tpl->tpl_vars['arr']->value)) {?>
                                <?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value["uid"];
$_prefixVariable1=ob_get_clean();
if (in_array($_prefixVariable1,$_smarty_tpl->tpl_vars['arr']->value)) {?>
                                   已关注
                              <?php } else { ?>未关注
                                <?php }?>
                            <?php }?>
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
