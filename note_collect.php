<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/4/17
 * Time: 22:59
 */

include_once("global.php");

ob_clean();
$r=$db->Get_user_shell_check($uid,$shell);//检查用户状态
if(!empty($_GET[id])&&!empty($_GET[nid]))
{
    $db->query("delete from user_collection where u_id='$_GET[id]' and n_id='$_GET[nid]'");
}

$query=$db->query("select uc.*,n.note_title from user_collection as uc,note as n where uc.n_id=n.id and uc.u_id='$uid'");
$num=0;
while($row_collect=$db->fetch_array($query))
{
    $row_collect[note_title]=GBK_TO_UTF($row_collect[note_title]);
    $row_collect[collection_datetime]=date("Y/m/d",$row_collect[collection_datetime]);
    $collect_list[]=$row_collect;
    $num++;
}
//print_r($collect_list);
$smarty->assign("collect_num",$num);
$smarty->assign("collect_list",$collect_list);

$query=$db->query("select *from user where id='$_SESSION[uid]' limit 1");
$row=$db->fetch_array($query);
$smarty->assign("user_name",GBK_TO_UTF($row[user_name]));
$smarty->assign("user_explain",GBK_TO_UTF($row[user_explain]));
$smarty->assign("user_his_inter",$row[user_his_intergral]);
$smarty->assign("user_ranking",$row[ranking]);
$smarty->assign("user_pic",$row[user_pic]);


$query=$db->query("select *from note limit 5");
while($row=$db->fetch_array($query))
{
    $row[note_title]=GBK_TO_UTF($row[note_title]);
    $recommend_arr[]=array("id"=>$row[id],"title"=>$row[note_title]);
}

$query=$db->query("select *from note order by note_datetime limit 5");
while($row=$db->fetch_array($query))
{
    $row[note_title]=GBK_TO_UTF($row[note_title]);
    $new_arr[]=array("id"=>$row[id],"title"=>$row[note_title]);
}

$query=$db->query("select *from note order by note_datetime limit 5");//随机的文章这里用的和上面一样的，暂时测试
while($row=$db->fetch_array($query))
{
    $row[note_title]=GBK_TO_UTF($row[note_title]);
    $rand_arr[]=array("id"=>$row[id],"title"=>$row[note_title]);
}

$smarty->assign("recommend_arr",$recommend_arr);
$smarty->assign("new_arr",$new_arr);
$smarty->assign("rand_arr",$rand_arr);
//print_r($recommend_arr);
$smarty->display("note_collect.html");

?>