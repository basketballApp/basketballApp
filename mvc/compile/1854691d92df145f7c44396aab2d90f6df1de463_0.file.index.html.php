<?php
/* Smarty version 3.1.30, created on 2017-06-28 05:50:42
  from "E:\wamp\www\php\mvc\template\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595327920ecf94_56252459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1854691d92df145f7c44396aab2d90f6df1de463' => 
    array (
      0 => 'E:\\wamp\\www\\php\\mvc\\template\\admin\\index.html',
      1 => 1498620691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595327920ecf94_56252459 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
    <style>
        form{
            padding:10px;
            width:300px;
            height: 350px;
            border:1px solid #ccc;
            position:fixed;
            top:0;
            bottom:0;
            left:0;
            right:0;
            margin:auto;
        }
        .yanzheng{
            width:120px;
            display:inline-block;
        }
    </style>
</head>
<body>
<form method="post" action="<?php echo SELF_PATH;?>
/module?m=admin&f=login&a=check">
    <h3 style="text-align: center">用户登陆</h3>
    <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="type" class="form-control" name="mname" id="exampleInputEmail1" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="mpass" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1" style="display:block;">Code</label>
        <input type="text" class="form-control yanzheng" id="exampleInputPassword1" placeholder="Code" name="code">
        <img src="<?php echo SELF_PATH;?>
/module?m=admin&f=login&a=code" alt="" onclick="this.src='<?php echo SELF_PATH;?>
/module?m=admin&f=login&a=code'">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html><?php }
}
