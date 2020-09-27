<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/4/18
 * Time: 20:25
 */
include_once("global.php");
//ob_clean();
if(!empty($_POST[search_keyword]))
{

    $_POST[search_keyword] = preg_replace("/[ ]+|\+/", " ", $_POST[search_keyword]);//去除多余空格或者+号
    $ser_arr = explode(" ", $_POST[search_keyword]);
    //print_r($ser_arr);
    //查找帖子表
    $note_num=0;//查找到的帖子数
    foreach($ser_arr as $key=>$val)
    {
        $val=UTF_TO_GBK($val);
        $sql="select * from note where `note_title` like '%$val%' or `note_keyword` like '%$val%'";
        $query_note=$db->query($sql);
        while($row_note=$db->fetch_array($query_note))
        {
            $row_note[note_title]=GBK_TO_UTF($row_note[note_title]);
            $row_note[note_keyword]=GBK_TO_UTF($row_note[note_keyword]);
            $row_note[note_content]=GBK_TO_UTF($row_note[note_content]);
            $row_note[note_datetime]=date("Y/m/d H:i:s",$row_note[note_datetime]);
            $search_note_list[]=array("id"=>$row_note[id],
                "note_title"=>$row_note[note_title],
                "note_keyword"=>$row_note[note_keyword],
                "t_id"=>$row_note[t_id],
                "note_datetime"=>$row_note[note_datetime]);
            //$search_note_list[]=$row_note;
            $note_num++;
        }
    }
   // print_r($search_note_list);
    $smarty->assign("note_num",$note_num);
    $smarty->assign("note_list",$search_note_list);

    //查找资源表
    $num_source=0;
    $flag=0;
    foreach($ser_arr as $key=>$val)
    {
        $val = UTF_TO_GBK($val);
        $sql = "select * from source where `source_name` like '%$val%'
                or `source_keyword` like '%$val%'
                or 'source_introduce' like '%$val%'";
        $query_source = $db->query($sql);
        while ($row_source = $db->fetch_array($query_source)) {
            $row_source[source_name] = GBK_TO_UTF($row_source[source_name]);
            $row_source[source_keyword] = GBK_TO_UTF($row_source[source_keyword]);
            $row_source[source_introduce] = GBK_TO_UTF($row_source[source_introduce]);
            $row_source[source_datetime]=date("Y/m/d H:i:s",$row_source[source_datetime]);
            $search_source_list[$flag] = $row_source;
            $num_source++;
            $query_user=$db->query("select user_name from user where id='$row_source[u_id]'");//查找对应用户名,注意不是用户帐号
            $row_user=$db->fetch_array($query_user);
            $query_class_name=$db->query("select *from technology_class where id='$row_source[t_id]'");
            $row_class_name=$db->fetch_array($query_class_name);
            //print_r($row_class_name);
            $search_source_list[$flag][class_name]=GBK_TO_UTF($row_class_name[technology_name]);
            $search_source_list[$flag++][user_name]=GBK_TO_UTF($row_user[user_name]);

        }

    }
    //print_r($search_source_list);
    $smarty->assign("num_source",$num_source);
    $smarty->assign("search_source_list",$search_source_list);

}




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
$smarty->display("search_main.html");


?>