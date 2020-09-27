<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/4/13
 * Time: 10:40
 * notice:目前这里用的和前面的分类下载还有推荐下载都是一样的代码，同样后续只需要更改一些数据库的操作。
 */
include_once("global.php");
ob_clean();
$query=$db->query("select *from user where id='$_SESSION[uid]' limit 1");
$row=$db->fetch_array($query);
$smarty->assign("user_name",GBK_TO_UTF($row[user_name]));
$smarty->assign("user_inter",$row[user_intergral]);
$smarty->assign("user_download",$row[user_download_num]);
$smarty->assign("user_upload",$row[user_upload_num]);
$smarty->assign("user_grade",$row[user_grade]);
$smarty->assign("user_pic",$row[user_pic]);

$query=$db->query("select *from source limit 3");//抢先下载，推荐下载
$flag=0;
while($row=$db->fetch_array($query))
{
    $row[source_datetime]=date("Y/m/d",$row[source_datetime]);
    $row[source_introduce]=GBK_TO_UTF($row[source_introduce]);
    $row[source_name]=GBK_TO_UTF($row[source_name]);
    $source_list[$flag]=$row;

    $query_user=$db->query("select user_name from user where id='$row[u_id]'");//查找对应用户名,注意不是用户帐号
    $row_user=$db->fetch_array($query_user);

    $source_list[$flag++][upload_user]=GBK_TO_UTF($row_user[user_name]);
}
$smarty->assign("source_list",$source_list);


$query=$db->query("select id,notice_title from notice limit 5");//下载公告
while($row_notice=$db->fetch_array($query))
{
    $row_notice[notice_title]=GBK_TO_UTF($row_notice[notice_title]);
    $notice_list[]=$row_notice;
}
$smarty->assign("notice_list",$notice_list);

$query=$db->query("select id,note_title from note limit 5");//最新热点
while($row_note=$db->fetch_array($query))
{
    $row_note[note_title]=GBK_TO_UTF($row_note[note_title]);
    $note_list[]=$row_note;
}
$smarty->assign("note_list",$note_list);


$smarty->display("resource.html");

?>