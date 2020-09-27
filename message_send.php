<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/4/18
 * Time: 13:20
 */
include_once("global.php");
ob_clean();
$r=$db->Get_user_shell_check($uid,$shell);//检查用户状态
if($_POST[sub])
{
    if(!empty($_POST[title])&&!empty($_POST[content]))
    {
        $time=time();
        $_POST[get_people]=UTF_TO_GBK($_POST[get_people]);//这里一定要先转化，不然会出现查找不到用户的情况。
        $_POST[title]=UTF_TO_GBK($_POST[title]);
        $_POST[content]=UTF_TO_GBK($_POST[content]);
        $query=$db->query("select *from user where user_name='$_POST[get_people]'");
        if($row=$db->fetch_array($query))
        {
            //echo $row[id];
            if($row[id]!=$uid)
            {
             $db->query("insert into user_message(id,uid_send,uid_get,message_title,message_content,message_datetime)
                        values('','$uid','$row[id]','$_POST[title]','$_POST[content]','$time')");
            }
            else{
                echo "<script language='javascript'>window.alert('不能给自己发送私信！')</script>";
            }
        }
        else{
            echo "<script language='javascript'>window.alert('用户名错误，没有查找到该用户')</script>";
        }
    }
}



$query=$db->query("select *from user where id='$_SESSION[uid]' limit 1");
$row=$db->fetch_array($query);
$smarty->assign("user_name",GBK_TO_UTF($row[user_name]));
$smarty->assign("user_explain",GBK_TO_UTF($row[user_explain]));
$smarty->assign("user_his_inter",$row[user_his_intergral]);
$smarty->assign("user_ranking",$row[ranking]);
$smarty->assign("user_pic",$row[user_pic]);


$query=$db->query("select *from user_message where uid_get='$uid' order by message_datetime DESC");//加载我的消息
$flag=0;
$message_num=0;
while($row_message=$db->fetch_array($query))
{
    $row_message[message_title]=GBK_TO_UTF($row_message[message_title]);
    $row_message[message_content]=GBK_TO_UTF($row_message[message_content]);
    $row_message[message_datetime]=date("Y/m/d H:i:s",$row_message[message_datetime]);
    $message_list[$flag]=$row_message;

    $query_send=$db->query("select user_name from user where id='$row_message[uid_send]'");
    $row_people=$db->fetch_array($query_send);
    //print_r($row_people);
    $message_list[$flag++][send_people_name]=GBK_TO_UTF($row_people[user_name]);
    $message_num++;
}
//print_r($message_list);
$smarty->assign("message_list",$message_list);
$smarty->assign("message_num",$message_num);



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

$smarty->display("message_send.html");
?>