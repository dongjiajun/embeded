<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/4/13
 * Time: 11:27
 */
include_once("global.php");
ob_clean();

//对应我的收藏部分
$query=$db->query("select s.id,s.source_name,s.source_price,s.source_download_num,t.technology_name
                   from source as s,user_collection_source as u,technology_class as t
                   where u.u_id='$uid' and u.s_id=s.id and s.t_id=t.id");
while($row_source=$db->fetch_array($query))//我的收藏
{
    $row_source[source_name]=GBK_TO_UTF($row_source[source_name]);
    $row_source[technology_name]=GBK_TO_UTF($row_source[technology_name]);
    $collection_list[]=$row_source;
}
$smarty->assign("collection_list",$collection_list);

$query=$db->query("select count(u_id) as sum from user_collection_source where u_id='$uid'");
$row_number=$db->fetch_array($query);
$collection_num=$row_number[sum];

$smarty->assign("collection_num",$collection_num);

$smarty->display("resource_my_collect.html");
?>