<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/4/13
 * Time: 11:28
 */
include_once("global.php");
ob_clean();
$r=$db->Get_user_shell_check($uid,$shell);
$option_list;//这种使用方式类似于静态变量
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


$max_file_size=2000000;
$destination_folder='admin/up_file/';
if($_POST[submit]){
    if (is_uploaded_file($_FILES['upfile']['tmp_name'])){
        echo "2231";
        $upfile=$_FILES["upfile"];
        $name = $upfile["name"];
        $type = $upfile["type"];
        $size = $upfile["size"];
        $tmp_name = $upfile["tmp_name"];
        $error = $upfile["error"];

        if($max_file_size<$size)
        {
            echo "文件太大";
            exit();
        }
        if(!file_exists($destination_folder))//若该文件夹不存在则创建该文件夹
        {
            mkdir($destination_folder);
        }

        $filename=$upfile["tmp_name"];
        $pinfo=pathinfo($upfile["name"]);//获取关于文件路径的详细信息
        $ftype=$pinfo['extension'];
        if($ftype=='zip')
        {

            $destination = $destination_folder.UTF_TO_GBK($pinfo['filename']).".".$ftype;
            if(!file_exists($destination))
            {
                move_uploaded_file($tmp_name,$destination);
                $time=time();
                $_POST[source_name]=UTF_TO_GBK($_POST[source_name]);
                $_POST[source_keyword]=UTF_TO_GBK($_POST[source_keyword]);
                $_POST[source_introduce]=UTF_TO_GBK($_POST[source_introduce]);
                $db->query("insert into source(id,source_name,source_keyword,source_introduce,source_addr,source_price,u_id,t_id,source_download_num,source_datetime)
                            values('','$_POST[source_name]',
                            '$_POST[source_keyword]',
                            '$_POST[source_introduce]',
                            '$destination',
                            '$_POST[source_price]',
                            '$uid',
                            '$_POST[source_tid]',
                            '0',
                            '$time')");

                $db->query("update user set user_upload_num=user_upload_num+'1' where id='$uid'");//更改用户上传记录
                echo "<script language='javascript'>window.alert('文件已成功上传!');</script>";
            }
            else{
                echo "<script language='javascript'>window.alert('已存在同名文件，不能上传!');</script>";
            }
        }
        else{
            echo "<script language='javascript'>window.alert('文件类型不符，请将你要上传的资源压缩为zip格式!');</script>";
            exit();
        }

    }

}
$smarty->display("resource_upload.html");

?>