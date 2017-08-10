<?php
/* Smarty version 3.1.30, created on 2017-07-18 17:01:40
  from "E:\wamp\www\basketball\basketballApp\mvc\template\admin\addOneCourt.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596e22d4420769_06861093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '935089048f17d9fd26db7cac6d6a5606155d8627' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\admin\\addOneCourt.html',
      1 => 1500390097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596e22d4420769_06861093 (Smarty_Internal_Template $_smarty_tpl) {
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
        .addPic{
            margin-top: 10px;
        }
    </style>
    <?php echo '<script'; ?>
>
        $(function(){
            var flag=true;

            $(".addPic").click(function(){

                if(flag){
                    var parent=document.querySelector(".uploadbox");
                    var obj=new upload();
                    obj.createView({
                        parent:parent
                    });
                    obj.up("index.php?m=admin&f=index&a=upload",function (data) {
                        console.log(data);
                        document.querySelector("input[name=courtimg]").value=data;
                    });

                    $(".uploadbox").css("display","block")
                    flag=!flag;
                }else{
                    document.querySelector("input[name=courtimg]").value="";
                    $(".uploadbox").css("display","none")
                    flag=!flag;
                }

            })

            $("button.addOneCourt").click(function(){
                var cname=$("input[name=cname]").val();
                var cyname=$("input[name=cyname]").val();
                var cdesc=$("input[name=cdesc]").val();
                var addr=$("input[name=addr]").val();
                var yytime=$("input[name=yytime]").val();
                var privilege=$("input[name=privilege]").val();
                var price=$("input[name=price]").val();
                var provide=$("input[name=provide]").val();
                var courtimg=$("input[name=courtimg]").val();
                $.ajax({
                    url:"index.php?m=admin&f=court&a=addOneCourt",
                    type:"post",
                    data:{
                        cname:cname,cyname:cyname,cdesc:cdesc,addr:addr,
                        yytime:yytime,privilege:privilege,price:price,
                       provide:provide,courtimg:courtimg
                    },
                    success:function(e){
                        if(e==1){
                            alert("添加成功")
                            $("input[name=cname]").val("");
                            $("input[name=cyname]").val("");
                            $("input[name=cdesc]").val("");
                            $("input[name=addr]").val("");
                            $("input[name=yytime]").val("");
                            $("input[name=privilege]").val("");
                            $("input[name=price]").val("");
                            $("input[name=provide]").val("");
                            $("input[name=courtimg]").val("");
                        }

                    }
                })
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
        </tr>
        <tr num="">
            <td name="cname"><input type="text" name="cname" value=""></td>
            <td name="cyname"><input type="text" name="cyname"></td>
            <td name="cdesc"><input type="text" name="cdesc"></td>
            <td name="addr"><input type="text" name="addr"></td>
            <td name="yytime"><input type="text" name="yytime"></td>
            <td name="privilege"><input type="text" name="privilege"></td>
            <td name="provide"><input type="text" name="provide"></td>
            <td name="price"><input type="text" name="price"></td>
        </tr>
        <tr>
            <th>场馆图</th>
        </tr>
        <tr>
            <td class="img">
                <input type="hidden" name="courtimg" value="">
                <div class="uploadbox" style="display: none;"></div>
                <button class="btn btn-danger addPic">添加图片</button>
            </td>
        </tr>
        <tr>
            <td colspan="12"><button class="btn btn-warning addOneCourt">添加</button></td>
        </tr>
    </table>

</body>
</html><?php }
}
