<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/3/7
* Time: 16:56
*/
session_start();
include_once('./configs/config.php');
include_once('./common/smarty/Smarty.class.php');
include_once('./common/mysql.class.php');
include_once('./common/action.class.php');
include_once('./common/page.class.php');

$db=new action($mydbhost,$mydbuser,$mydbpw,$mydbname,$mydbcharset);

$smarty=new Smarty();//创建smarty对象实例
$smarty->config_dir=$smarty_config_dir;
$smarty->caching=$smarty_caching;
$smarty->template_dir=$smarty_template_dir;
$smarty->compile_dir=$smarty_compile_dir;
$smarty->cache_dir=$smarty_cache_dir;
$smarty->left_delimiter=$smarty_delimiter[0];
$smarty->right_delimiter=$smarty_delimiter[1];


function GBK_TO_UTF($str)
{
$str=iconv("GBK","UTF-8",$str);
return $str;
}
function UTF_TO_GBK($str)
{
$str=iconv("UTF-8","GBK",$str);
return $str;
}
date_default_timezone_set("Etc/GMT-8");//设置时区
$smarty->assign("t_dir",$smarty_template_dir);//设置模版的图片的通用路径

$uid=$_SESSION[uid];
$shell=$_SESSION[shell];
?>