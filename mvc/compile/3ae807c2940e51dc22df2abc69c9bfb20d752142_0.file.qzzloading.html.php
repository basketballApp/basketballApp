<?php
/* Smarty version 3.1.30, created on 2017-07-10 09:34:31
  from "F:\wamp\www\basketball\basketballApp\mvc\template\index\qzzloading.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59632e071bacb6_68762392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ae807c2940e51dc22df2abc69c9bfb20d752142' => 
    array (
      0 => 'F:\\wamp\\www\\basketball\\basketballApp\\mvc\\template\\index\\qzzloading.html',
      1 => 1499672069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:bottom.html' => 1,
  ),
),false)) {
function content_59632e071bacb6_68762392 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/qzzloading.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/rem.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/mui.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/iconfont.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jQuery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $(function() {
            $(".l").click(function () {
                history.go(-1);
            })
        })
    <?php echo '</script'; ?>
>
</head>
<body>
<!--头部开始-->
    <header>
        <div class="header-main">
            <div class="l iconfont icon-fanhui1"></div>
            <div class="m">
            <div class="china">··&nbsp;搜索结果&nbsp;··</div>
            <div class="eng">SOUSU JIEGUOSOUSU</div>
        </div>
            <div class="r">
            <!--<img src="../../static/image/qzzh-search.png" alt="" style="width: 100%;height: 100%;float: left">-->
        </div>
        </div>
    </header>
<!--头部结束-->
<!--搜索成功开始-->
    <div class="search sc" style="height: 4.3rem;">
        <div class="search-main" style="background-image: url('<?php echo IMG_PATH;?>
/qzz/qzzsslan.png'); background-size: 100%;background-repeat: no-repeat;">
            <div class="search-bg">
                <div class="top">搜索</div>
                <div class="bottom">
                    <input type="text" style="float: left;width: 85%;height: 80%;font-size:0.18rem;background:none;border: none;outline: none" value="FUJINQIUCHANG NEARBY">
                    <div class="icon">
                        <!--<div class="iconfont icon-vioce icons"></div>-->
                        <div class="iconfont icon-search icons"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--搜索成功-->
        <div class="search-result">
            <div class="result" STYLE="margin-left: 0.8rem">&nbsp;X咖啡创意西餐厅&nbsp;</div>
            <div class="result">&nbsp;山西大学体育馆&nbsp;</div>
            <div class="result">&nbsp;飞鸟篮球馆&nbsp;</div>
            <div class="result">&nbsp;工商学院篮球场&nbsp;</div>
            <div class="result">&nbsp;CD体育馆&nbsp;</div>
            <div class="result" STYLE="margin-left: 0.9rem">&nbsp;X咖啡创意西餐厅&nbsp;</div>
            <div class="result">&nbsp;飞鸟篮球馆&nbsp;</div>
        </div>
        <!--结束-->
    </div>
<!--搜索成功结束-->
<!--搜索失败开始-->
    <div class="search sf" style="height: 5.5rem;display: none">
    <div class="search-main" style="background-image: url('<?php echo IMG_PATH;?>
/qzz/qzzsslan.png');background-size: 100%;background-repeat: no-repeat;">
        <div class="search-bg">
            <div class="top">搜索</div>
            <div class="bottom">
                <input type="text" style="float: left;width: 85%;height: 80%;font-size:0.18rem;background:none;border: none;outline: none" value="FUJINQIUCHANG NEARBY">
                <div class="icon">
                    <!--<div class="iconfont icon-vioce icons"></div>-->
                    <div class="iconfont icon-search icons"></div>
                </div>
            </div>
        </div>
    </div>
    <!--搜索失败-->
    <div class="search-false">
        <div class="titles">
            <div class="sorry">SORRY</div>
            <div class="titlecon">
                <div class="chi">
                    对不起，没有搜索到您需要的相关商品
                </div>
                <div class="eng">
                  MEIYOUSOUSUODAONINXUYAODEXIANGGUANSHANGPIN
                </div>
            </div>
        </div>
        <div class="cons">
            <div class="intros">
                <div class="chinese">
                    <div class="logo"></div>
                    <span>搜索关键词</span>
                </div>
                <div class="english">ＳＯＵＳＵＯＧＡＵＮＪＩＡＮＣＩ</div>
            </div>
            <div class="tuijian" style="width: 100%;overflow: hidden;float: left;padding: 0.26rem 0;">
                <div class="result" STYLE="margin-left: 0.8rem">&nbsp;X咖啡创意西餐厅&nbsp;</div>
                <div class="result">&nbsp;山西大学体育馆&nbsp;</div>
                <div class="result" STYLE="margin-left: 0.9rem">&nbsp;X咖啡创意西餐厅&nbsp;</div>
                <div class="result">&nbsp;飞鸟篮球馆&nbsp;</div>
            </div>
        </div>
    </div>
    <!--结束-->
<!--搜索失败结束-->
</div>
<!--附近球场开始-->
    <div class="around">
        <div class="place">
            <div class="title">
                <div class="pics">
                    <img src="<?php echo IMG_PATH;?>
/qzzs-personal.png" alt="">
                </div>
                <div class="intro">
                    <a href="#" class="user">附近球场</a>
                    <a href="#" class="eng">FUJINQIUCHANG</a>
                </div>
            </div>
            <div class="content">
                <a href="#" class="bigpic">
                    <img src="<?php echo IMG_PATH;?>
/qzzss1.png" alt="">
                </a>
                <a href="#" class="smallpic">
                    <img src="<?php echo IMG_PATH;?>
/qzzss2.png" alt="">
                </a>
                <a href="#" class="bigpics" >
                    <img src="<?php echo IMG_PATH;?>
/qzzss3.png" alt="">
                </a>
                <a href="#" class="smpics" >
                    <img src="<?php echo IMG_PATH;?>
/qzzss4.png" alt="">
                </a>
                <a href="#" class="smpics" >
                    <img src="<?php echo IMG_PATH;?>
/qzzss5.png" alt="">
                </a>
                <a href="#" class="smpics" style="margin: 0" >
                    <img src="<?php echo IMG_PATH;?>
/qzss6.png" alt="">
                </a>
            </div>
            <div class="lists">
                <div class="list-main">
                    <div class="list">
                        <a href="" class="depics">
                            <img src="<?php echo IMG_PATH;?>
/qzzdetail1.png" alt="">
                        </a>
                        <div class="deintros">
                            <a href="" class="titlechi de">
                                <span>飞鸟体育篮球场</span>
                            </a>
                            <a href="" class="titleeng de">
                              <SPAN><STRONG>FEIDIAOTIYU</STRONG> LANQIUCHANG</SPAN>
                            </a>
                            <div class="line de"></div>
                            <div class="address de">
                                <span> 太原市迎泽区双塔西街滨河东路交叉口</span>
                            </div>
                            <div class="comment de">
                                <div class="zan com">
                                    <img src="<?php echo IMG_PATH;?>
/qzzzan.png" alt="">
                                    <span>5602</span>
                                </div>
                                <div class="here com">
                                    <img src="<?php echo IMG_PATH;?>
/qzzgohere.png" alt="">
                                    <span>到这去</span>
                                </div>
                                <div class="xing com">
                                    <img src="<?php echo IMG_PATH;?>
/qzzcollect.png" alt="">
                                    <span>5602</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list">
                        <a href="" class="depics">
                            <img src="<?php echo IMG_PATH;?>
/qzzdetail1.png" alt="">
                        </a>
                        <div class="deintros">
                            <a href="" class="titlechi de">
                                <span>飞鸟体育篮球场</span>
                            </a>
                            <a href="" class="titleeng de">
                                <SPAN><STRONG>FEIDIAOTIYU</STRONG> LANQIUCHANG</SPAN>
                            </a>
                            <div class="line de"></div>
                            <div class="address de">
                                <span> 太原市迎泽区双塔西街滨河东路交叉口</span>
                            </div>
                            <div class="comment de">
                                <div class="zan com">
                                    <img src="<?php echo IMG_PATH;?>
/qzzzan.png" alt="">
                                    <span>5602</span>
                                </div>
                                <div class="here com">
                                    <img src="<?php echo IMG_PATH;?>
/qzzgohere.png" alt="">
                                    <span>到这去</span>
                                </div>
                                <div class="xing com">
                                    <img src="<?php echo IMG_PATH;?>
/qzzcollect.png" alt="">
                                    <span>5602</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--附近球场结束-->
<!--底部开始-->
<?php $_smarty_tpl->_subTemplateRender("file:bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--底部结束-->
<!--loading开始-->
    <div class="mask" style="display: none">
        <div class="load">
            <div class="imgs">
                <img src="<?php echo IMG_PATH;?>
/qzzloading.png" alt="">
            </div>
            <div class="font"><b><i>LOADING···</i></b></div>
        </div>
</div>
<!--loading结束-->
<!--error开始-->
    <div class="masks">
    <div class="loads">
        <div class="error">
            <div class="imgs">
                <img src="<?php echo IMG_PATH;?>
/qzzlanqiu.png" alt="">
            </div>
            <div class="line1 line">
                <img src="<?php echo IMG_PATH;?>
/qzz/qzzline1.png" alt="">
            </div>
            <div class="line2 line">
                <img src="<?php echo IMG_PATH;?>
/qzz/qzzline2.png" alt="">
            </div>
            <div class="line3 line">
                <img src="<?php echo IMG_PATH;?>
/qzz/qzzline3.png" alt="">
            </div>
            <div class="intros">
                <div class="chi">对不起，网络出错了</div>
                <div class="eng">DUIBUQI WANGLUOCHUCUOLE</div>
            </div>
            <div class="button">
                <input type="button" class="again" value="再试一次">
                <input type="button" class="exit" value="退出界面">
            </div>
        </div>
    </div>
</div>
<!--error结束-->
<!--搜索弹出开始-->
    <div class="masksearch" style="display: none">
        <div class="searchs">
            <div class="search-main" style="background-image: none">
                <div class="search-bg">
                    <div class="top">搜索</div>
                    <div class="bottom">
                        <input type="text" style="float: left;width: 85%;height: 80%;font-size:0.18rem;background:none;border: none;outline: none" value="FUJINQIUCHANG NEARBY">
                        <div class="icon">
                            <!--<div class="iconfont icon-vioce icons"></div>-->
                            <div class="iconfont icon-search icons"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="alert">
            <div class="title">
                <div class="pics">
                    <img src="<?php echo IMG_PATH;?>
/qzzs-personal.png" alt="">
                </div>
                <div class="intro">
                    <a href="#" class="user">篮球大神</a>
                    <a href="#" class="eng"> <SPAN style="font-weight: 700">LANQIUDA</SPAN>SHEN</a>
                </div>
            </div>
            <div class="title">
                <div class="pics">
                    <img src="<?php echo IMG_PATH;?>
/qzzuser1.png" alt="">
                </div>
                <div class="intro">
                    <a href="#" class="user">赤脚大仙</a>
                    <a href="#" class="eng"> <SPAN style="font-weight: 700">CHIJIAODA</SPAN>XIAN</a>
                </div>
            </div>
            <div class="title">
                <div class="pics">
                    <img src="<?php echo IMG_PATH;?>
/qzzuser2.png" alt="">
                </div>
                <div class="intro">
                    <a href="#" class="user">得分后卫</a>
                    <a href="#" class="eng"> <SPAN style="font-weight: 700">DEFENHOU</SPAN>WEI</a>
                </div>
            </div>
        </div>
    </div>
<!--搜索弹出结束-->
</body>
</html><?php }
}
