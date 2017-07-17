<?php
/* Smarty version 3.1.30, created on 2017-07-14 02:55:36
  from "E:\wamp\www\basketball\basketballApp\mvc\template\admin\xhyShowPos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59681688b35cd3_64245726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '320e7097c164419fadf10ddfd79feb20dbf695b3' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\admin\\xhyShowPos.html',
      1 => 1499993732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59681688b35cd3_64245726 (Smarty_Internal_Template $_smarty_tpl) {
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
        table{
            float: left;
            width:80%;
            position: absolute;
            top:10%;
            left:0;right:0;
            margin:auto;
            background: #fff;
            box-shadow: 1px 1px 5px 1px rgba(0,0,0,.1);
            overflow: hidden;
        }
        th{
            width:50%;
            background:#3598dc;
            height:30px;
            text-align: center;
        }
        th:first-child{
            border-right:1px solid #fff;
        }
        td{
            width: 25%;
            height: 30px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            font-size: 14px;
            text-align: center;
            border-right:1px solid #fff;
        }

        .btn{
            width: 50px;
            height: 30px;
            background: #3598dc;
            margin: 10px 0;
            color: #fff;
        }
        a{

          margin-bottom: 0;
            color:#000;
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
    <table>
        <tr>
            <th>位置</th>
            <th>操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <tr>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['v']->value["posname"];?>

                </td>
                <td>
                    <a href="index.php?m=admin&f=position&a=del&pid=<?php echo $_smarty_tpl->tpl_vars['v']->value['pid'];?>
">
                        <button type='button' class='btn btn-info'> 删除</button>
                           </a>
                    <a href="">
                        <button type='button' class='btn btn-info'> 编辑</button>
                           </a>
                </td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>

    没有任何内容
</body>
</html><?php }
}
