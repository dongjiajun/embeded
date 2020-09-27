<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/4/16
 * Time: 16:32
 * keyword：本来是打算使用一个六维数组来存放三级回复内容的，但是十分繁琐且没有必要，因此我这里使用三个二维数组来存放。
 */
include_once("global.php");
ob_clean();
if(!empty($_GET[nid]))
{
    $query=$db->query("update note set note_click=note_click+'1' where id='$_GET[nid]'");//更新点击数。
    $query=$db->query("select * from note where id='$_GET[nid]'");
    $row_note=$db->fetch_array($query);
    $row_note[note_title]=GBK_TO_UTF($row_note[note_title]);
    $row_note[note_keyword]=GBK_TO_UTF($row_note[note_keyword]);
    $row_note[note_content]=GBK_TO_UTF($row_note[note_content]);
    //$row_note[note_datetime]=date("Y/m/d",$row_note[note_datetime]);
    $time=date("Y/m/d",$row_note[note_datetime]);
    $smarty->assign("click_num",$row_note[note_click]);
    $smarty->assign("note_title",$row_note[note_title]);
    $smarty->assign("note_content",$row_note[note_content]);
    $smarty->assign("note_keyword",$row_note[note_keyword]);
    $smarty->assign("note_datetime",$time);



    $note_id=$_GET[nid];
    $smarty->assign("note_id",$note_id);
    $query=$db->query("select * from user where id='$uid'");//设置回复的时候自动将当前用户信息写入hidden字段。
    $row_reply=$db->fetch_array($query);
    $row_reply[user_name]=GBK_TO_UTF($row_reply[user_name]);
    $smarty->assign("reply_name",$row_reply[user_name]);
    $smarty->assign("replay_id",$uid);



    $query=$db->query("select *from user where id='$row_note[u_id]' limit 1");//设置该帖作者信息。
    $row=$db->fetch_array($query);
    $smarty->assign("user_name",GBK_TO_UTF($row[user_name]));
    $smarty->assign("user_explain",GBK_TO_UTF($row[user_explain]));
    $smarty->assign("user_his_inter",$row[user_his_intergral]);
    $smarty->assign("user_ranking",$row[ranking]);
    $smarty->assign("user_pic",$row[user_pic]);


    //下面的六个全局变量全部用于三级回复。
    $flag=0;
    $flag_second=0;
    $flag_third=0;
    $reply_list;
    //从这里开始修改。
    $reply_second_list;
    $reply_third_list;
    function routingFindNext($fid,$db,$f_f_flag,$f_flag,$cen)
    {
        global $flag;
        global $flag_second;
        global $flag_third;
        global $reply_list;
        global $reply_second_list;
        global $reply_third_list;
        $flag_son=0;
        //从这里开始修改
        $query=$db->query("select n.*,u.user_name from note_reply as n,
                      user as u where n.n_id='$_GET[nid]' and n.u_id=u.id and n.r_fid='$fid'");
        while($row_reply=$db->fetch_array($query))
        {
            if($row_reply[r_fid]!=0)
            {
                if($cen==2)
                {
                $query_name=$db->query("select `user_name` from `user` where `id`=(select `u_id` from `note_reply` where id='$row_reply[r_fid]')");
                $row_obj_name=$db->fetch_array($query_name);

                $obj_name=GBK_TO_UTF($row_obj_name[user_name]);
                $row_reply[note_reply_content]=GBK_TO_UTF($row_reply[note_reply_content]);
                $row_reply[user_name]=GBK_TO_UTF($row_reply[user_name]);
                $row_reply[note_reply_datetime]=date("Y/m/d H:i:s",$row_reply[note_reply_datetime]);
                $reply_second_list[$flag_second]=$row_reply;
                $reply_second_list[$flag_second][reply_floor]=$flag+1;
                $reply_second_list[$flag_second][obj_name]=$obj_name;
                $reply_list[$f_f_flag][child][$flag_son++]=&$reply_second_list[$flag_second];
                $flag_second++;
                }
                else{
                    $query_name=$db->query("select `user_name` from `user` where `id`=(select `u_id` from `note_reply` where id='$row_reply[r_fid]')");
                    $row_obj_name=$db->fetch_array($query_name);

                    $obj_name=GBK_TO_UTF($row_obj_name[user_name]);
                    $row_reply[note_reply_content]=GBK_TO_UTF($row_reply[note_reply_content]);
                    $row_reply[user_name]=GBK_TO_UTF($row_reply[user_name]);
                    $row_reply[note_reply_datetime]=date("Y/m/d H:i:s",$row_reply[note_reply_datetime]);
                    $reply_third_list[$flag_third]=$row_reply;
                    $reply_third_list[$flag_third][reply_floor]=$flag+1;
                    $reply_third_list[$flag_third][obj_name]=$obj_name;
                    $reply_second_list[$f_flag][child][$flag_son++]=&$reply_third_list[$flag_third];
                    $flag_third++;
                }
            }
            else{
                $obj_name="楼主";
                $row_reply[note_reply_content]=GBK_TO_UTF($row_reply[note_reply_content]);
                $row_reply[user_name]=GBK_TO_UTF($row_reply[user_name]);
                $row_reply[note_reply_datetime]=date("Y/m/d H:i:s",$row_reply[note_reply_datetime]);
                $reply_list[$flag]=$row_reply;
                $reply_list[$flag][reply_floor]=$flag+1;
                $reply_list[$flag][obj_name]=$obj_name;
                $flag++;
            }
            routingFindNext($row_reply[id],$db,$flag-1,$flag_second-1,$cen+1);
        }
    }


    routingFindNext(0,$db,0,0,1);
    //print_r($reply_list);//最原始的修改部分。
    $smarty->assign("reply_list",$reply_list);//回复部分。

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

$smarty->display("note_view.html");

}
else{
    //填写解决冲突的逻辑,目前不需要
}
?>