<?php
session_start();
header("content-type:text/html;charset=utf-8");
//定义访问常量COME
define("COME","yes");
//服务器根目录     D:/wamp64/www
define("ROOT_PATH",$_SERVER['DOCUMENT_ROOT']);
//应用的根目录     D:/wamp64/www/admin/project/mvc
define("APP_PATH",substr($_SERVER['SCRIPT_FILENAME'],0,strrpos($_SERVER['SCRIPT_FILENAME'],'/')));
//libs文件的路径
define("LIBS_PATH",APP_PATH."/libs");
//modules文件的路径
define("MODULES_PATH",APP_PATH."/modules");
//模板的路径
define("TPL_PATH",APP_PATH."/template");
//smarty路径
define("SMARTY_PATH",LIBS_PATH."/smarty");

//协议
define("PORT",strtolower(strchr($_SERVER['SERVER_PROTOCOL'],'/',true)));
//主机地址
define("HOST",$_SERVER['HTTP_HOST']);
//项目的路径
define("APP_URL",substr($_SERVER['SCRIPT_NAME'],0,strrpos($_SERVER['SCRIPT_NAME'],'/')));
//服务器的项目路径
define("HTTP_URL",PORT.'://'.HOST.APP_URL);
//静态目录的路径
define("STATIC_URL",HTTP_URL.'/static');
//css的路径
define("CSS_URL",STATIC_URL.'/css');
//js的路径
define("JS_URL",STATIC_URL.'/js');
//img的路径
define("IMG_URL",STATIC_URL.'/img');
//iconfont路径
define("ICON_URL",STATIC_URL.'/iconfont/iconfont.css');
//百度编辑器路径
define("UEDITOR_URL",STATIC_URL.'/Ueditor');
//bui路径
define("BUI_URL",JS_URL.'/admin/bui');

include_once SMARTY_PATH."/Smarty.class.php";
include_once LIBS_PATH."/route.class.php";
$configs=include_once APP_PATH."/config.php";
include_once LIBS_PATH."/db.class.php";
include_once LIBS_PATH."/adminMain.class.php";
include_once LIBS_PATH."/indexMain.class.php";
include_once LIBS_PATH."/functions.php";
include_once LIBS_PATH."/upload.class.php";

$obj=new route();
$obj->set();