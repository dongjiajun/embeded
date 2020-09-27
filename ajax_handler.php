<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/4/17
 * Time: 20:19
 */
include_once("global.php");


if($_GET[name]) {
    $content=$_GET[name];
   /* $e=mb_detect_encoding($content, array('UTF-8','GBK'));//这里和下面一段都是字符串的编码转换处理
    switch($e) {
        case 'UTF-8':
            $content=iconv("UTF-8","GBK","$_GET[name]");
            break;
        case 'GBK':
            break;
    }*/
    $db->query("update user set `ranking`=`ranking`+1 where id='$uid'");
    //sleep(2);

}
?>