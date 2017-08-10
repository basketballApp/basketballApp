<?php
/* Smarty version 3.1.30, created on 2017-07-18 16:59:58
  from "E:\wamp\www\basketball\basketballApp\mvc\template\admin\xhyAdminMain.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596e226e0b5f46_19590126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '125c93be9b10b4985917f480da94c1de97dc226e' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\admin\\xhyAdminMain.html',
      1 => 1500389997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596e226e0b5f46_19590126 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/iconfont.css">
    <link rel="stylesheet" href="<?php echo ADMINCSS_PATH;?>
/xhyAdminMain.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
</head>
<body>
<nav>
    <div class="logo">
        <img src="<?php echo ADMINIMG_PATH;?>
/xhyadminlogo.png" alt="">
        <h3>篮球伙工作室</h3>
    </div>
    <div class="navcon">
        <ul class="first">
            <span class="active">
                <div class="iconfont"></div>
                用户管理
            </span>
            <ul class="second">
                <li>
                    <a href="index.php?m=admin&f=welcome&a=users" target="iframe">
                        添加用户
                    </a>
                </li>
                <li>
                    <a href="index.php?m=admin&f=welcome&a=Showuser" target="iframe">
                        查看用户
                    </a>
                </li>
            </ul>
        </ul>
        <ul class="first">
            <span>
                <div class="iconfont"></div>
                <a href="index.php?m=admin&f=order&a=showorder"  target="iframe">订单管理</a>
            </span>
        </ul>
        <ul class="first">
            <span>
                <div class="iconfont"></div>
               球场管理
            </span>
            <ul class="second">
                <li>
                    <a href="index.php?m=admin&f=court&a=allCourt" target="iframe">
                        查看球场
                    </a>
                </li>
                <li>
                    <a href="index.php?m=admin&f=court&a=addOneCourtYe" target="iframe">
                        添加球场
                    </a>
                </li>
            </ul>
        </ul>
        <ul class="first">
            <span>
                <div class="iconfont"></div>
                位置管理
            </span>
            <ul class="second">
                <li>
                    <a href="index.php?m=admin&f=position&a=add" target="iframe">
                        添加位置
                    </a>
                </li>
                <li>
                    <a href="index.php?m=admin&f=position&a=show" target="iframe">
                        查看位置
                    </a>
                </li>
            </ul>
        </ul>
        <ul class="first">
            <span>
                <div class="iconfont"></div>
                附近球友
            </span>
        </ul>

    </div>
</nav>
<header>
    <a class="loginout" href="index.php?m=admin&f=login&a=loginout">
        <div class="iconfont exit"></div>
        <span>安全退出</span>
    </a>
    <span>WELCOME <a href=""></a> 篮球伙伴欢迎您!</span>
</header>
<div class="mainbox">

    <div class="main">
        <iframe src="index.php?m=admin&f=welcome" frameborder="0" name="iframe" class="content"></iframe>
    </div>
</div>
</body>
<?php echo '<script'; ?>
 src="<?php echo ADMINJS_PATH;?>
/xhyAdminMain.js"><?php echo '</script'; ?>
>
</html><?php }
}
