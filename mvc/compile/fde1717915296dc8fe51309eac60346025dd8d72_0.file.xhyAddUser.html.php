<?php
/* Smarty version 3.1.30, created on 2017-07-13 16:50:13
  from "E:\wamp\www\basketball\basketballApp\mvc\template\admin\xhyAddUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596788a55e94c4_91421671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fde1717915296dc8fe51309eac60346025dd8d72' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\admin\\xhyAddUser.html',
      1 => 1499957407,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596788a55e94c4_91421671 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
    <style>
        *{
            margin:0;
            padding:0;
            list-style:none;
            box-sizing: border-box;
        }
        body,html{
            width:100%;height:100%;
        }
        form{
            width: 80%;
            height:80%;
            margin: 0 auto;
            padding-top: 50px;
            color:#3598DC;
            font-size: 14px;
            text-align: center;
            line-height: 30px;
            font-weight: 500;
        }
        .box{
            width:100%;
            height: 40px;
            margin-bottom:20px;
            position: relative;
            line-height: 40px;
            color:#333;
        }
        .box>span{
            font-weight: 600;
        }
        .form-control{
            width: 90%;
            height:40px;
            float: right;
        }
        .btn{
            background: #ffd305;
            width: 80px;
            border: none;
        }
        .btn:hover{
            background: #313131;
        }
        .uname{
            width:20px;
            height:20px;
            position: absolute;
            right:10px;
            top:0;
            color:#3598DC;
        }
        .namefalse,.nametrue{
            display: none;
        }
        .passfalse,.passtrue{
            display: none;
        }
        .upass{
            width:20px;
            height:20px;
            position: absolute;
            right:10px;
            top:0;
            color:#3598DC;
        }
    </style>
</head>
<body>
<form action="index.php?m=admin&f=user&a=addCon" method="post">

    <div class="box">
        <span>用户名：</span><input type="text" name="uname" class="form-control" placeholder="请输入用户名">
        <div class="iconfont uname nametrue icon-biaodanyanzheng_zhengque"></div>
        <div class="iconfont uname namefalse icon-biaodanyanzheng_cuowu"></div>
    </div>
    <div class="box">
          <span>密码：</span>  <input type="password" name="upass" class="form-control" placeholder="请输入密码">
        <div class="iconfont upass passtrue icon-biaodanyanzheng_zhengque"></div>
        <div class="iconfont upass passfalse icon-biaodanyanzheng_cuowu"></div>
    </div>
    <div class="box">
        <span>管理员：&nbsp;</span><input type="radio" name="value" value="1" checked>
        <span>&nbsp;&nbsp;用户：&nbsp;</span><input type="radio" name="value" value="0" >
    </div>
    <div class="box">
        <input type="submit" value="提交" class="btn btn-info">
    </div>
</form>
</body>
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
</html><?php }
}
