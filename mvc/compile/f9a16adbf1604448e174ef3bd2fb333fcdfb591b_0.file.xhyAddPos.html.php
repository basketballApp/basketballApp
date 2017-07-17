<?php
/* Smarty version 3.1.30, created on 2017-07-14 02:46:52
  from "E:\wamp\www\basketball\basketballApp\mvc\template\admin\xhyAddPos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5968147c23f933_16938166',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9a16adbf1604448e174ef3bd2fb333fcdfb591b' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\admin\\xhyAddPos.html',
      1 => 1499993208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5968147c23f933_16938166 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
    <style>
        body, html {
            padding: 0;
            margin: 0;
            list-style: none;
            box-sizing: border-box;
        }

        form {
            width: 70%;
            height: 100%;
            padding-top: 50px;
            margin: 0 auto;
            font-family: "微软雅黑";
        }

        .box {
            width: 100%;
            float: left;
            line-height: 30px;
            color: #3598DC;
            margin-bottom: 15px;
            font-size:16px;
        }

        .form {
            width: 80%;
            float: right;
        }

        .tijiao {
            width: 20%;
            margin: 0 auto;
            margin-left: 200px;
        }
        .btn{
            background: #ffd305;
            border: none;
        }
        .btn:hover{
            background: #313131;
        }
    </style>
</head>
<body>
<form action="index.php?m=admin&f=position&a=addCon" method="post">
    <div class="box">
        添加位置:<input type="text" name="posname" class="form form-control">
    </div>
    <div class="box">
        <input type="submit" value="提交" class="btn btn-info tijiao">
    </div>
</form>
</body>
</html><?php }
}
