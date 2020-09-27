<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/4/13
 * Time: 11:27
 * notice:目前这个页面我使用的和分类下载的页面(resource_classify)一样的代码，最后数据库还是需要修改一下的，因为现在没有什么来推荐
 */
include_once("global.php");

ob_clean();
$query=$db->query("select *from technology_class where `technology_fid`='0'");//技术分类,这里我只取顶级类型
while($row=$db->fetch_array($query))
{
    $row[technology_name]=GBK_TO_UTF($row[technology_name]);
    $top_tech[]=$row;
}
$smarty->assign("top_tech",$top_tech);

$flag=0;
$target_class_source_list;
function routingFindNextClass($fid,$db)
{
    global $flag;
    global $target_class_source_list;
    $query=$db->query("select *from source where t_id='$fid'");
    while($row_class=$db->fetch_array($query))
    {
        // $row_class[]
        $row_class[source_datetime]=date("Y/m/d",$row_class[source_datetime]);
        $row_class[source_keyword]=GBK_TO_UTF($row_class[source_keyword]);
        $row_class[source_introduce]=GBK_TO_UTF($row_class[source_introduce]);
        $row_class[source_name]=GBK_TO_UTF($row_class[source_name]);
        $target_class_source_list[$flag]=$row_class;

        $query_user=$db->query("select user_name from user where id='$row_class[u_id]'");//查找对应用户名,注意不是用户帐号
        $row_user=$db->fetch_array($query_user);

        $query_class_name=$db->query("select *from technology_class where id='$row_class[t_id]'");
        $row_class_name=$db->fetch_array($query_class_name);
        //print_r($row_class_name);
        $target_class_source_list[$flag][class_name]=GBK_TO_UTF($row_class_name[technology_name]);
        $target_class_source_list[$flag++][user_name]=GBK_TO_UTF($row_user[user_name]);


    }
    $query_next=$db->query("select id from technology_class where technology_fid='$fid'");
    while($row=$db->fetch_array($query_next))
    {
        routingFindNextClass($row[id],$db);
    }

}

if(!empty($_GET[c_id]))
{


    routingFindNextClass($_GET[c_id],$db);
    //print_r($target_class_source_list);
}
else{
    $query=$db->query("select *from source");
    $flag=0;
    while($row_class=$db->fetch_array($query))
    {
        // $row_class[]
        $row_class[source_datetime]=date("Y/m/d",$row_class[source_datetime]);
        $row_class[source_keyword]=GBK_TO_UTF($row_class[source_keyword]);
        $row_class[source_introduce]=GBK_TO_UTF($row_class[source_introduce]);
        $row_class[source_name]=GBK_TO_UTF($row_class[source_name]);
        $target_class_source_list[$flag]=$row_class;

        $query_user=$db->query("select user_name from user where id='$row_class[u_id]'");//查找对应用户名,注意不是用户帐号
        $row_user=$db->fetch_array($query_user);

        $query_class_name=$db->query("select *from technology_class where id='$row_class[t_id]'");
        $row_class_name=$db->fetch_array($query_class_name);
        //print_r($row_class_name);
        $target_class_source_list[$flag][class_name]=GBK_TO_UTF($row_class_name[technology_name]);

        $target_class_source_list[$flag++][user_name]=GBK_TO_UTF($row_user[user_name]);
    }
}
$smarty->assign("target_class_source_list",$target_class_source_list);
$smarty->display("resource_groom.html");

?>