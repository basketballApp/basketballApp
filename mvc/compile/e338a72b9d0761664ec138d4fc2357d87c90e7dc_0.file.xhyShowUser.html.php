<?php
/* Smarty version 3.1.30, created on 2017-07-13 17:05:29
  from "E:\wamp\www\basketball\basketballApp\mvc\template\admin\xhyShowUser.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59678c399df8e0_14413489',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e338a72b9d0761664ec138d4fc2357d87c90e7dc' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\admin\\xhyShowUser.html',
      1 => 1499958293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59678c399df8e0_14413489 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
    <style>
        *{
            margin: 0;
            padding:0;
            list-style: none;
            box-sizing: border-box;
        }
        body,html{
            width:100%;
            height:100%;
        }
        .table{
            width: 80%;
            margin: 0 auto;
            padding-top: 20px;
            border-radius: 5px;
            text-align: center;
        }
        th{
            text-align:center;
            line-height: 37px;
            font-weight: 600;
        }
        td{
            text-align:center;
            line-height: 51px;
        }
        .box{
            width: 100%;
            text-align: center;
            line-height: 35px;
            font-size: 16px;
            font-weight: 600;
            padding-left: 20px;
        }
        .btn{
            background: #ffd305;
            border: none;
        }
        .btn:hover{
            background: #313131;
        }
        th{
            background: #313131;
            color: #fff;
        }
    </style>
</head>
<body>
<table class="table table-striped table-bordered">
    <!--<div class="box">属性值：0代表管理员 ，1代表用户</div>-->
    <tr>
        <th>序号</th>
        <th>用户名</th>
        <th>密码</th>
        <th>属性值</th>
        <th>操作</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["upass"];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value["value"];?>
</td>
        <td>
            <a href="" class="btn btn-info">删除</a>
            <a href="" class="btn btn-danger">编辑</a>
        </td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
</body>
</html><?php }
}
