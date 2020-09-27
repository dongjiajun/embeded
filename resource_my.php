<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/4/13
 * Time: 11:27
 */
include_once("global.php");
ob_clean();

$query=$db->query("select * from user where `id`='$uid' limit 1");
$row=$db->fetch_array($query);
$smarty->assign("user_name",GBK_TO_UTF($row[user_name]));
$smarty->assign("user_pic",GBK_TO_UTF($row[user_pic]));//这里图片我暂时没用，感觉没默认的图片好看
$smarty->assign("user_intergral",GBK_TO_UTF($row[user_intergral]));
$smarty->assign("user_download_num",GBK_TO_UTF($row[user_download_num]));
$smarty->assign("user_upload_num",GBK_TO_UTF($row[user_upload_num]));

$query=$db->query("select *from source limit 4");
while($row=$db->fetch_array($query))
{
    $row[source_name]=GBK_TO_UTF($row[source_name]);
    $row[source_keyword]=GBK_TO_UTF($row[source_keyword]);
    $row[source_introduce]=GBK_TO_UTF($row[source_introduce]);
    $source_list[]=$row;
}
$smarty->assign("source_list",$source_list);


$query=$db->query("select *from source where `u_id`='$uid' limit 3");//对应我的上传部分
$flag=0;
while($row_upload=$db->fetch_array($query))
{
    $row_upload[source_name]=GBK_TO_UTF($row_upload[source_name]);
    $row_upload[source_datetime]=date("Y/m/d",$row_upload[source_datetime]);
    $upload_list[$flag]=$row_upload;
    $upload_list[$flag++][get_intergral]=$row_upload[source_price]*$row_upload[source_download_num];
}
//print_r($upload_list);
$smarty->assign("upload_list",$upload_list);

$query=$db->query("select count(u_id) as sum from source where u_id='$uid'");
$row_upload_people=$db->fetch_array($query);
$upload_num=$row_upload_people[sum];
$smarty->assign("upload_num",$upload_num);


$query=$db->query("select count(u_id) as num from user_collection_source where `u_id`='$uid'");
$row=$db->fetch_array($query);
$user_collection_num=$row[num];
$smarty->assign("user_collection_num",$user_collection_num);


//对应我的收藏部分
$query=$db->query("select s.id,s.source_name,s.source_price,s.source_download_num from source as s,user_collection_source as u where u.u_id='$uid' and u.s_id=s.id limit 3");
while($row_source=$db->fetch_array($query))//我的收藏
{
    $row_source[source_name]=GBK_TO_UTF($row_source[source_name]);
    $collection_list[]=$row_source;
}
//print_r($collection_list);
$smarty->assign("collection_list",$collection_list);


$smarty->display("resource_my.html");
?>