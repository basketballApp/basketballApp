<?php
/* Smarty version 3.1.30, created on 2017-08-10 10:09:37
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\qzzindex.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_598c14c1d7dee5_27278323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60a182eed17d2a10702044b97d25b2c533e6afe7' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\qzzindex.html',
      1 => 1502352266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:bottom.html' => 1,
  ),
),false)) {
function content_598c14c1d7dee5_27278323 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/qzzmain.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/mui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/qzzmain.js"><?php echo '</script'; ?>
>
</head>
<body style="background: #fff">
<!--头部开始-->
<header>
    <div class="header-main">

        <div class="m">
            <div class="china">··&nbsp;篮球伙&nbsp;··</div>
            <div class="eng">BASKETBALL TEAM</div>
        </div>
        <a href="index.php?m=index&f=search" class="r"><img src="<?php echo IMG_PATH;?>
/qzzh-search.png" alt="" style="width: 100%;height: 100%;float: left"></a>
    </div>
</header>
<!--头部结束-->
<!--banner开始-->
<div class="mui-slider" style="height:3.56rem;margin-top: 0.88rem;">
    <div class="mui-slider-group">
        <div class="mui-slider-item" >
            <a href="#" >
                <img src="<?php echo IMG_PATH;?>
/qzzbn1.png" style="height:3.56rem;" >
            </a>
        </div>
        <div class="mui-slider-item" >
            <a href="#">
                <img src="<?php echo IMG_PATH;?>
/qzzbn2.png" style="height:3.56rem;" >
            </a>
        </div>
        <div class="mui-slider-item">
            <a href="#">
                <img src="<?php echo IMG_PATH;?>
/qzzbn3.png" style="height:3.56rem;" >
            </a>
        </div>
        <div class="mui-slider-item">
            <a href="#">
                <img src="<?php echo IMG_PATH;?>
/qzzbn4.png" style="height:3.56rem;" >
            </a>
        </div>
    </div>
    <div class="mui-slider-indicator">
        <div class="mui-indicator mui-active"></div>
        <div class="mui-indicator"></div>
        <div class="mui-indicator"></div>
        <div class="mui-indicator"></div>
    </div>
</div>
<!--banner结束-->
<!--附近球友开始-->
<div class="partener">
    <div class="par-main">
        <div class="head">
            <img src="<?php echo IMG_PATH;?>
/qzzc-fjqy.png" alt="">
        </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['con']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <div class="one">
            <div class="title">
                <div class="pics">
                    <img src="<?php echo IMG_PATH;?>
/qzzuser1.png" alt="">
                </div>
                <div class="intro">
                    <a href="index.php?m=index&f=index&a=pengyouquan&pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
" class="user"><?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value["uname"];
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
</a>
                    <a href="" class="eng"><?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value["yname"];
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>
</a>
                </div>
            </div>
            <div class="con">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result1']->value, 'video');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['video']->value) {
?>
                <a href="javascript:;" >
                    <video src="<?php echo $_smarty_tpl->tpl_vars['video']->value['dvideo'];?>
" style="width: 100%;transform: scale(1)"></video>
                    <div class="img" style="position: absolute;left: 0;right: 0;bottom: 0;top:0;margin:auto;width: 0.4rem">
                        <img src="<?php echo IMG_PATH;?>
/start.png" alt="" style="float: left;width: 0.4rem;margin-top: 0.25rem" class="start">
                    </div>
                </a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
            <div class="say">
                <p><?php echo $_smarty_tpl->tpl_vars['v']->value["dcon"];?>
</p>
            </div>
            <div class="comment">
                <div class="zan com fzan div" did=<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['did'];
$_prefixVariable3=ob_get_clean();
echo $_prefixVariable3;?>
>
                    <img src="<?php echo IMG_PATH;?>
/qzzzan.png" alt="" class="zimg">
                    <span belove=<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['belove'];
$_prefixVariable4=ob_get_clean();
echo $_prefixVariable4;?>
><?php echo $_smarty_tpl->tpl_vars['v']->value["belove"];?>
</span>
                </div>

                <div class="xing com scan div" did=<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['did'];
$_prefixVariable5=ob_get_clean();
echo $_prefixVariable5;?>
>
                    <img src="<?php echo IMG_PATH;?>
/qzzcollect.png" alt="" class="wimg">
                    <span collect=<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value['collect'];
$_prefixVariable6=ob_get_clean();
echo $_prefixVariable6;?>
><?php echo $_smarty_tpl->tpl_vars['v']->value["collect"];?>
</span>
                </div>
                <input type="button" class="button" value="已关注" style="padding: 0">
            </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
</div>
<!--附近球友结束-->
<!--附近球场开始-->
<div class="hall">
    <div class="head">
        <img src="<?php echo IMG_PATH;?>
/qzzc-ballpack.png" alt="">
    </div>
    <div class="content">
        <div class="cons">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result2']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <div class="rect">
                <a class="imgs">
                    <img src="<?php echo IMG_PATH;?>
/qzzc3-pic1.png" alt="">
                </a>
                <div class="mask">
                    <a href="#" class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a>
                    <div class="comment">
                        <div class="iconfont icon-wujiaoxing icons"></div>
                        <div class="iconfont icon-wujiaoxing icons"></div>
                        <div class="iconfont icon-wujiaoxing icons"></div>
                        <div class="iconfont icon-wujiaoxing icons"></div>
                        <div class="iconfont icon-wujiaoxing icons"></div>
                    </div>
                </div>
                <div class="details"><a href="index.php?m=index&f=index&a=addOrder&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">查看详情</a></div>
                <div class="address">
                    <div class="add">
                        <img src="<?php echo IMG_PATH;?>
/qzzaddress.png" alt="">
                    </div>
                    <div class="intros"><?php echo $_smarty_tpl->tpl_vars['v']->value["cdesc"];?>
</div>
                </div>
                <div class="other">
                    <div class="zan">
                        <img src="<?php echo IMG_PATH;?>
/qzzssdz.png" alt="" class="pics">
                        <span><?php echo $_smarty_tpl->tpl_vars['v']->value["cwatch"];?>
</span>

                    </div>
                    <!--<div class="here">-->
                        <!--<img src="<?php echo IMG_PATH;?>
/qzzgohere.png" alt="" class="pics">-->
                        <!--<span>到这去</span>-->
                    <!--</div>-->
                </div>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div>
</div>
<div>

</div>
<style>

</style>
<!--附近球场结束-->
<!--底部开始-->
<?php $_smarty_tpl->_subTemplateRender("file:bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--底部结束-->
</body>
</html><?php }
}
