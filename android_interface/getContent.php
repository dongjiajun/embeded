<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/4/22
 * Time: 17:44
 */


error_reporting(E_ALL^E_DEPRECATED^E_NOTICE);
include_once("../common/mysql.class.php");
if($_GET[id])
{
$db=new mysql("localhost","root","199485","embedded_communicate_db","GBK");
$query=$db->query("select *from note where id='$_GET[id]'limit  1 ");
    $db->query("update note set note_click=note_click+'1'");//在安卓端访问帖子时更新点击量。
$row=$db->fetch_array($query);

    $row[note_content]=iconv("GBK","UTF-8",$row[note_content]);
   // $arr_test[]=array("note_content"=>urlencode($row[note_content]));

//print_r($arr_test);

echo $row[note_content];
//echo urldecode(json_encode($arr_test));
}

?>