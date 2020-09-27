<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/4/13
 * Time: 11:28
 */
include_once("global.php");
ob_clean();

$query=$db->query("select *from source where `u_id`='$uid' order by source_datetime asc");
$flag=0;
while($row_upload=$db->fetch_array($query))
{
    $row_upload[source_name]=GBK_TO_UTF($row_upload[source_name]);
    $row_upload[source_datetime]=date("Y/m/d",$row_upload[source_datetime]);
    $upload_list[$flag]=$row_upload;
    $upload_list[$flag++][get_intergral]=$row_upload[source_price]*$row_upload[source_download_num];
}
$smarty->assign("upload_list",$upload_list);


$query=$db->query("select count(u_id) as sum from source where u_id='$uid'");//总共上传的文件数量
$row_upload_people=$db->fetch_array($query);
$upload_num=$row_upload_people[sum];
$smarty->assign("upload_num",$upload_num);

$smarty->display("resource_my_upload.html");

?>