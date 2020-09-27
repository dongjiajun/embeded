<?php
/**
 * Created by PhpStorm.
 * User: DJJ
* Date: 2017/3/10
* Time: 17:02
*/
session_start();
include_once("../common/mysql.class.php");
include_once("../configs/config.php");
include_once("./common/action.class.php");
include_once("./common/page.class.php");
date_default_timezone_set("Etc/GMT-8");//设置时区

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

$db=new action($mydbhost,$mydbuser,$mydbpw,$mydbname,$mydbcharset);

$uid=$_SESSION[uid];
$shell=$_SESSION[shell];

?>