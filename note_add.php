<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/4/16
 * Time: 14:05
 */
include_once("global.php");
ob_clean();
$option_list;
$r=$db->Get_user_shell_check($uid,$shell);//检查用户状态
if (!empty($_POST['content'])) {//我们需要使用传过来的四个数据，note_title,note_keyword,content,note_tid
    if (get_magic_quotes_gpc()) {
        $htmlData = stripslashes($_POST['content']);

    } else {
        $htmlData = $_POST['content'];
        $time=time();
        $_POST[note_title]=UTF_TO_GBK($_POST[note_title]);
        $_POST[content]=UTF_TO_GBK($_POST[content]);
        $_POST[note_keyword]=UTF_TO_GBK($_POST[note_keyword]);
        $db->query("insert into note(id,note_title,note_keyword,note_content,u_id,t_id,note_datetime)
values('','$_POST[note_title]','$_POST[note_keyword]','$_POST[content]','$uid','$_POST[note_tid]','$time')");
        $db->Get_admin_msg("index.php","帖子发布成功，将跳转到主页");
    }
}

$query=$db->query("select *from user where id='$uid' limit 1");
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

function rountinfFindNext($db,$db_name,$f_id,$space)
{
    global $option_list;
    $query=$db->query("select *from `$db_name` where technology_fid='$f_id'");
    while($row=$db->fetch_array($query))
    {

        $row[technology_name]=iconv("GBK","UTF-8",$row[technology_name]);

        if($f_id==0){
            $option_list[]=array("t_id"=>$row[id],"technology_name"=>$row[technology_name]);
        }
        else
        {
            $option_list[]=array("t_id"=>$row[id],"technology_name"=>$space.$row[technology_name]);
        }
        rountinfFindNext($db,$db_name,$row[id],$space.$space,$option_list);
    }

}

rountinfFindNext($db,"technology_class",0,"&nbsp;&nbsp;");
$smarty->assign("option_list",$option_list);

$smarty->display("note_add.html");

?>