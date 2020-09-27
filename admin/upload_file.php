<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/3/26
 * Time: 0:10
 * 前提是对该目录有写入的权限
 */
error_reporting(E_ALL^E_NOTICE^E_DEPRECATED);
include_once("admin_global.php");
$r=$db->Get_user_shell_check($uid,$shell);
$max_file_size=2000000;
$destination_folder='up_file/';
if($_POST[submit]){
    if (is_uploaded_file($_FILES['upfile']['tmp_name'])){

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
                $db->query("insert into source(id,source_name,source_introduce,source_addr,source_download_num,source_datetime)
                            values('','$pinfo[filename]','要设置为由用户添加','$destination','0','$time')");
                echo "文件上传成功";
            }
            else{
                echo "已经存在该文件";
            }
        }
        else{
            echo "文件类型不符";
            exit();
        }

    }

}
?>

<form action="" enctype="multipart/form-data" method="post" name="upform">
    上传文件:
    <input name="upfile" type="file">
    <input type="submit" name="submit" value="上传"><br>
</form>

