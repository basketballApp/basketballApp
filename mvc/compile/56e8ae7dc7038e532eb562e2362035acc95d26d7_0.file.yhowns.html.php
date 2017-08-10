<?php
/* Smarty version 3.1.30, created on 2017-07-30 13:25:20
  from "E:\wamp\www\basketball\basketballApp\mvc\template\index\yhowns.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597dc220b83726_29259306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56e8ae7dc7038e532eb562e2362035acc95d26d7' => 
    array (
      0 => 'E:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\yhowns.html',
      1 => 1501413791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597dc220b83726_29259306 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no"/>
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/iconfont.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/yhown.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function() {
            $(".back").click(function () {
                history.go(-1);
            })
        })
    <?php echo '</script'; ?>
>
</head>
<body>
<!--header start-->
<header>
    <div class="header-main">
        <a href="#" class="iconfont icon-fanhui back"></a>
        <div class="header-p">
            <span>··&nbsp;个人中心&nbsp;··</span>
            <span class="he-span">PENGYOUQUAN</span>
        </div>
    </div>
</header>
<!--header end-->
<!--banner start-->
<div class="banner">
    <a href="#" class="ba-yh">
        <img src="<?php echo IMG_PATH;?>
/yhbanner.png" alt="">
    </a>
    <a href="javascript:;" class="tou" style="background-image: url('<?php echo IMG_PATH;?>
/yhtou.png');background-position: center;background-size: contain;">
        <div class="img" style="background-image: url('<?php echo IMG_PATH;?>
/yhgeren2.png');background-position: center;background-size: contain; "></div>
    </a>
    <div class="bedeck">
        <img src="<?php echo IMG_PATH;?>
/yhdian.png" alt="">
    </div>
</div>
<!--banner end-->
<!--own start-->
<div class="own">
    <div class="detail">
        <p class="top">LANQIUDASHENLUN</p>
        <span class="name">篮球大神周杰伦</span>
        <div class="medal">
            <img src="<?php echo IMG_PATH;?>
/yhxunzhang.png" alt="">
            <img src="<?php echo IMG_PATH;?>
/yhxunzhang.png" alt="">
            <img src="<?php echo IMG_PATH;?>
/yhxunzhang.png" alt="">
            <img src="<?php echo IMG_PATH;?>
/yhxunzhang.png" alt="">
            <img src="<?php echo IMG_PATH;?>
/yhxunzhang.png" alt="">
        </div>
        <p class="referral">喜欢篮球又喜欢周杰伦的男子</p>
    </div>
    <div class="member">
        <div class="own-member ">
            <div class=" iconfont own-left fans">
                &#xe638;
            </div>
            <div class="own-right">
                <p class="r-fans">粉丝</p>
                <span class="line"></span>
                <span class="fans-num">7589</span>
            </div>
        </div>
        <div class="own-member ">
            <div class=" iconfont own-left attention">
                &#xe64a;
            </div>
            <div class="own-right">
                <p class="r-fans">关注</p>
                <span class="line"></span>
                <span class="fans-num">7589</span>
            </div>
        </div>
        <div class="own-member ">
            <div class=" iconfont own-left favour">
                &#xe6ab;
            </div>
            <div class="own-right">
                <p class="r-fans">赞</p>
                <span class="line"></span>
                <span class="fans-num">7589</span>
            </div>
        </div>
    </div>
</div>
<!--own end-->
<!--section start-->
<section>
    <div class="section-main">
        <div class="header">
            <div class="Lin">
                <span class="lines"></span>
                <span class="circle"></span>
                <span class="circle cs"></span>
                <span class="lines"></span>
            </div>
            <p><span>QUANBUDON</span>GTAIDONGTAI</p>
            <p><span>全部</span>动态</p>
        </div>
        <ul class="state">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
            <li>
                <div class="state-left">
                    <div class="state-tou" style="background-image: url('<?php echo IMG_PATH;?>
/yhgeren2.png');background-position: center;background-size: contain; ">
                    </div>
                    <div class="iconfont xing">
                        &nbsp&#xe6ab; &#xe6ab; &#xe6ab;
                    </div>
                </div>
                <div class="ball">
                    <img src="<?php echo IMG_PATH;?>
/yhbask.png" alt="">
                </div>
                <div class="state-right">
                    <div class="stari-top">
                        <h5><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</h5>
                        <span class="metail"><?php echo $_smarty_tpl->tpl_vars['v']->value["yname"];?>
</span>
                        <span class="time">32MIN</span>
                    </div>
                    <div class="stari-modile">
                        <video class="video">
                            <source src="<?php echo $_smarty_tpl->tpl_vars['v']->value['dvideo'];?>
" >
                        </video>
                        <div class="img" style="position: absolute;left: 0;right: 0;bottom: 0;top:0;margin:auto;width: 0.8rem">
                            <img src="<?php echo IMG_PATH;?>
/start.png" alt="" style="float: left;width: 0.8rem;margin-top: 0.9rem" class="start">
                        </div>
                    </div>
                    <div class="stari-bottom">
                        <span>科比 VS 韦德对战</span>
                        <p><span class="la">LASIW</span>EIJIASI</p>
                        <div class="item">
                            <div class="iconfont items ffans">
                                &#xe638;
                                <span>2235</span>
                            </div>
                            <div class="iconfont items aattention">
                                &#xe64a;
                                <span>2334</span>
                            </div>
                            <div class="iconfont items ffavour">
                                &#xe6ab;
                                <span>4673</span>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <div class="bask">

            </div>
        </ul>
    </div>
</section>
<!--section end-->
<!--&lt;!&ndash;loginout start&ndash;&gt;-->
<!--<footer>-->
<!--<div class="loginout">-->
<!--<span class="iconfont icon-shouji"></span>-->
<!--<a href="">-->
<!--退出登录-->
<!--<span class="details">TUICHUDENGLU</span>-->
<!--</a>-->
<!--</div>-->
<!--</footer>-->
<!--&lt;!&ndash;loginout end&ndash;&gt;-->
</body>
<?php echo '<script'; ?>
>

    $(function () {
        var startflag=true;
        $(".state").delegate(".start","click",function () {
            var that=$(this)
            var now=0;
            var video = $(this).parent().siblings("video");
            console.log(video)
            video[0].ontimeupdate=function () {
                now=video[0].currentTime;//当前时长
                console.log(now,video[0].duration)
                if(now==video[0].duration){
                    console.log($(this).siblings())
                    $(this).siblings().html(" <img src='<?php echo IMG_PATH;?>
/start.png' alt='' style='float: left;width: 0.8rem;margin-top:0.9rem' class='start'>");
                }

            }
            if (startflag) {
                video[0].play();
                $(this).parent(".img").html(" <img src='<?php echo IMG_PATH;?>
/pause.png' alt='' style='float: left;width: 0.8rem;margin-top:0.9rem' class='start'>");

            } else {
                video[0].pause();
                $(this).parent(".img").html(" <img src='<?php echo IMG_PATH;?>
/start.png' alt='' style='float: left;width: 0.8rem;margin-top:0.9rem' class='start'>");
            }
            startflag = !startflag;

        })

    })
<?php echo '</script'; ?>
>
</html><?php }
}
