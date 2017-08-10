<?php
/* Smarty version 3.1.30, created on 2017-07-18 16:57:50
  from "E:\wamp\www\basketball\basketballApp\mvc\template\admin\xhyBallMan.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596e21eed694a5_63843316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dd43a7ff3c42cc4b70ebb3c5fbd9e0221d7a42f' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\admin\\xhyBallMan.html',
      1 => 1500389868,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596e21eed694a5_63843316 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index.js"><?php echo '</script'; ?>
>
    <style>
        body,html{
            width:100%;
            height:100%;
            font-family: '微软雅黑';
        }
        *{
            padding: 0;
            margin: 0;
            list-style: none;
        }
        a{
            text-decoration: none;
        }
        th{
            background: #313131;
            color:#fff;
            text-align: center;
            line-height: 50px;
        }
        th,td,input{
            width: 100px;
        }
        td{
            height:100px;overflow: hidden;
        }
        .table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td {
             vertical-align: middle;
        }
    </style>
    <?php echo '<script'; ?>
>
        $(function(){

            $("button.add").click(function(){
               location.href="index.php?m=admin&f=court&a=addOneCourtYe";
            })
            $("body").delegate("td:not(.del,.img)","dblclick",function(){
                var td=$(this);
                var old=td.html();
                td.html("")
                var input=$("<input>");
                input.appendTo(td);
                input.val(old);

                input.blur(function(){
                    var news=input.val();

                    if(old==news){
                        td.html(news);
                        $("input").remove();

                    }else{
                        var cid=td.parents("tr").attr("num");
                        var attr=td.attr("name");
                        var value=news;
                        $.ajax({
                            url:"index.php?m=admin&f=court&a=updateCourt",
                            type:"post",
                            data:{
                                cid:cid,attr:attr,value:value
                            },
                            success:function(data){
                                $("input").remove();
                                td.html(news);

                            }
                        })
                    }
                })
            })

            //编辑图片
            $("body").delegate(".img","click",function(){
                var that=$(this);
                var courtimg=$(this).attr("courtimg");
                var cid=$(this).parent("tr").attr("num");
                console.log(courtimg +"  "+cid)

                $(this).html("");
                var parent=document.querySelector(".uploadbox");
                var obj=new upload();
                obj.createView({
                    parent:parent
                });
                obj.up("index.php?m=admin&f=index&a=upload",function (data) {
                    document.querySelector("input[name=courtimg]").value=data;
                    courtimg=data;
                    $.ajax({
                        url:"index.php?m=admin&f=court&a=editCourtImg&courtimg="+courtimg+"&cid="+cid,
                        type:"post",
                        data:{
                            cid:cid,courtimg:courtimg
                        },
                        success:function(e){
                            alert('编辑成功');
                            that.children("img").attr("src",courtimg);
                        }
                    })
                });

            })
        })
    <?php echo '</script'; ?>
>
</head>
<body>

    <table class="table table-striped">
        <tr>
            <th>球馆名称</th>
            <th>英文名称</th>
            <th>介绍</th>
            <th>地址</th>
            <th>营业时间</th>
            <th>优惠</th>
            <th>支持项目</th>
            <th>价格</th>
            <th>关注人数</th>
            <th>喜欢人数</th>
            <th>场馆图</th>
            <th>操作</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allcourt']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
        <tr num="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
            <td name="cname"><?php echo $_smarty_tpl->tpl_vars['v']->value['cname'];?>
</td>
            <td name="cyname"><?php echo $_smarty_tpl->tpl_vars['v']->value['cyname'];?>
</td>
            <td name="cdesc"><?php echo $_smarty_tpl->tpl_vars['v']->value['cdesc'];?>
</td>
            <td name="addr"><?php echo $_smarty_tpl->tpl_vars['v']->value['addr'];?>
</td>
            <td name="yytime"><?php echo $_smarty_tpl->tpl_vars['v']->value['yytime'];?>
</td>
            <td name="privilege"><?php echo $_smarty_tpl->tpl_vars['v']->value['privilege'];?>
</td>
            <td name="provide"><?php echo $_smarty_tpl->tpl_vars['v']->value['provide'];?>
</td>
            <td name="price"><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</td>
            <td name="cwatch"><?php echo $_smarty_tpl->tpl_vars['v']->value['cwatch'];?>
</td>
            <td name="belove"><?php echo $_smarty_tpl->tpl_vars['v']->value['belove'];?>
</td>
            <td class="img" courtimg="<?php echo $_smarty_tpl->tpl_vars['v']->value['courtimg'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['courtimg'];?>
" alt="" style="width: 100px">
                <input type="hidden" name="courtimg">
            </td>
            <td class="del">
                <a href="index.php?m=admin&f=court&a=delcourt&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
">
                    <button class="btn btn-default del">删除</button>
                </a>
            </td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <tr>
            <td colspan="12"><button class="btn btn-warning add">添加新场馆</button></td>
        </tr>
    </table>


</body>
</html><?php }
}
