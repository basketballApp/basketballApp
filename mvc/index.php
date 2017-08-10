<?php
header("content-type:text/html;charset=utf-8");
define("COMING","yes");
//include "libs/functions.php";   //include 只支持文件路径
$server=$_SERVER;
define("ROOT_PATH",$server["DOCUMENT_ROOT"]);
define("APP_PATH",ROOT_PATH."basketball/basketballApp/mvc");
define("LIBS_PATH",APP_PATH."/libs");
define("MODULE_PATH",APP_PATH."/module");

define("TPL_PATH",APP_PATH."/template");
define("VIDEO_PATH",APP_PATH."/uploadVideo");
//define("URL_ROOT",$server["SERVER_PROTOCOL"]);
//截取路径
//substr() 函数返回/截取字符串的一部分   substr(string,start,length)
//strpos()  查找字符串在另一字符串中第一次出现的位置
//strrpos() 查找字符串在另一字符串最后一次出现的位置
$prot=substr($server["SERVER_PROTOCOL"],0,strrpos($server["SERVER_PROTOCOL"],"/"));
$path=substr($server["SCRIPT_NAME"],0,strrpos($server["SCRIPT_NAME"],"/"));//服务器路径
define("URL_PATH",$prot."://".$server["HTTP_HOST"].$path);
define("CSS_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/index/css");
define("IMG_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/index/image");
define("JS_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/index/js");
define("FONTS_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/index/fonts");
define("ICONFONT_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/index/iconfont");
define("SELF_PATH",$prot."://".$server["HTTP_HOST"].$server["SCRIPT_NAME"]);
define("ADMINCSS_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/admin/css");
define("ADMINIMG_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/admin/image");
define("ADMINJS_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/admin/js");
define("ADMINFONTS_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/admin/fonts");
define("ADMINICONFONT_PATH",$prot."://".$server["HTTP_HOST"].$path."/static/admin/iconfont");
require_once LIBS_PATH."/functions.php";
require_once LIBS_PATH."/route.class.php";
require_once LIBS_PATH."/db.class.php";
//require_once LIBS_PATH."/smarty.class.php";
require_once LIBS_PATH."/smarty/Smarty.class.php";
require_once LIBS_PATH."/main.class.php";
require_once LIBS_PATH."/code.class.php";
require_once LIBS_PATH."/session.class.php";
include LIBS_PATH."/indexMain.class.php";
include LIBS_PATH."/uploadV.class.php";
$obj=new route();
$obj->getInfo();



