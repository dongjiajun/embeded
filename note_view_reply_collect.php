<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/4/19
 * Time: 12:30
 */
include_once("global.php");
$r=$db->Get_user_shell_check($uid,$shell);
if(!empty($_GET[nid])) {
    if ($_POST[sub]) {
        $query = $db->query("update note set note_click=note_click-'1' where id='$_GET[nid]'");//减去因为回复增加的帖子访问量
        if (!empty($_POST[reply_content])) {
            $time = time();
            $_POST[reply_content] = UTF_TO_GBK($_POST[reply_content]);
            $db->query("insert into note_reply(id,u_id,n_id,r_fid,note_reply_content,note_reply_datetime)
                        values('','$_POST[reply_id]','$_POST[note_id]','$_POST[reply_f_id]','$_POST[reply_content]','$time')");
            //$db->Get_admin_msg("note_view.php?nid=$_GET[nid]","评论已发布，点击返回原帖");
            $url="note_view.php?nid=$_GET[nid]";
            echo "<script language='javascript'>location.href='$url'</script>";
        }
    }

    if (!empty($_GET[col]) && $_GET[col] == true) {
        $url="note_view.php?nid=$_GET[nid]";
        $time = time();
        $query = $db->query("select *from user_collection where u_id='$uid' and n_id='$_GET[nid]'");
        if (!$row = $db->fetch_array($query)) {
            $db->query("insert into user_collection(u_id,n_id,collection_datetime) value('$uid','$_GET[nid]','$time')");
            echo "<script language='javascript'>location.href='$url'</script>";
        } else {
            echo "<script language='javascript'>window.alert('你已经收藏过了该帖子')</script>";
            echo "<script language='javascript'>location.href='$url'</script>";
        }
    }
}
?>