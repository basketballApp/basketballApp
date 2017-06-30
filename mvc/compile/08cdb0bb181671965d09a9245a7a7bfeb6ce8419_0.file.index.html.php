<?php
/* Smarty version 3.1.30, created on 2017-06-27 09:00:48
  from "E:\wamp\www\php\mvc\template\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_595202a07d6cf4_84211541',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08cdb0bb181671965d09a9245a7a7bfeb6ce8419' => 
    array (
      0 => 'E:\\wamp\\www\\php\\mvc\\template\\index.html',
      1 => 1498546847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595202a07d6cf4_84211541 (Smarty_Internal_Template $_smarty_tpl) {
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
        }
    </style>
</head>
<body>
<form>
    <h3 style="text-align: center">用户登陆</h3>
    <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="type" class="form-control" id="exampleInputEmail1" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Code</label>
        <input type="password" class="form-control yanzheng" id="exampleInputPassword1" placeholder="Code">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
</html><?php }
}
