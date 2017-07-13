<?php
/* Smarty version 3.1.30, created on 2017-07-12 05:36:28
  from "E:\wamp\www\basketball\basketballApp\mvc\template\admin\xhyAdminLogin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5965993c5848e2_86957162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0999420cdaff574bbb072f9ce6b701a0418392cd' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\admin\\xhyAdminLogin.html',
      1 => 1499830586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5965993c5848e2_86957162 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/iconfont.css">
    <link rel="stylesheet" href="<?php echo ADMINCSS_PATH;?>
/xhyAdminLogin.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/messages_zh.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="box">
    <img src="<?php echo ADMINIMG_PATH;?>
/xhyad-loginbg.png" alt="" class="img">
    <form action="index.php?m=admin&f=login&a=check" id="login-form" method="post" >
        <img src="<?php echo ADMINIMG_PATH;?>
/xhylogo.png" alt="" class="logo">
        <div class="main">
            <h3>篮球伙管理系统</h3>
            <div class="user">
                <label for="">用户名 NAME</label>
                <input type="text" placeholder="请输入您的用户名" class="name" name="uname" autocomplete="off">
                <div class="icon iconfont icon-user"></div>
                <div class="nametrue iconfont icon-duihao1-copy-copy"></div>
            </div>
            <div class="user">
                <label for="">密码 PASSWORD</label>
                <input type="password" placeholder="请输入您的密码" class="pass" name="upass">
                <div class="icon1 iconfont icon-mima1"></div>
                <div class="passtrue iconfont icon-duihao1-copy-copy"></div>
            </div>
            <div class="user">
                <label for="">验证码 AUTHCODE</label>
                <input type="text" class="test" value="验证码" name="code">
                <img src="index.php?m=admin&f=login&a=code" alt="" onclick="this.src=this.src+'&code='+Math.random()" style="cursor: pointer;" class="code">
            </div>
            <div class="user">
                <input type="submit" value="立即登录" class="login">
            </div>
        </div>
    </form>
</div>
</body>
<?php echo '<script'; ?>
 src="<?php echo ADMINJS_PATH;?>
/xhyAdminLogin.js"><?php echo '</script'; ?>
>
</html><?php }
}
