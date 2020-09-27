<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/4/22
 * Time: 18:53
 */

error_reporting(E_ALL^E_DEPRECATED^E_NOTICE);
include_once("../common/mysql.class.php");
$db=new mysql("localhost","root","199485","embedded_communicate_db","GBK");
$query=$db->query("select *from note order by note_click DESC ");
while($row=$db->fetch_array($query))
{
    $query_name=$db->query("select user_name from user where id='$row[u_id]'");
    $name=$db->fetch_array($query_name);
    $name[user_name]=iconv("GBK","UTF-8", $name[user_name]);

    $row[note_title]=iconv("GBK","UTF-8", $row[note_title]);
    $row[note_keyword]=iconv("GBK","UTF-8", $row[note_keyword]);
    $row[note_content]=iconv("GBK","UTF-8", $row[note_content]);
    $row[note_datetime]=date("Y/m/d",$row[note_datetime]);
    $arr_test[]=array("id"=>$row[id],"note_title"=>urlencode($row[note_title]),"note_keyword"=>urlencode($row[note_keyword]),
        "note_content"=>urlencode("没有查找到该帖子内容"),"username"=>urlencode($name[user_name]),"note_datetime"=>$row[note_datetime]);
}
//print_r($arr_test);


echo urldecode(json_encode($arr_test));

?>