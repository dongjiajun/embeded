<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/3/26
 * Time: 14:34
 */
//因为file_exist不支持中文，所以我们的压缩包都只能为英文方式，只能考虑用介绍字段来标明压缩包是什么了
error_reporting(E_ALL^E_DEPRECATED^E_DEPRECATED);
include_once("admin_global.php");
//$r=$db->Get_user_shell_check($uid,$shell);
if($_POST[sub])
{
    $target_name=$_POST[downname];
    $source_datename="up_file/$target_name".".zip";
    $filename = "./$target_name".".zip"; //最终生成的文件名（含路径）

    if(!file_exists($filename)){
//重新生成文件
        $zip = new ZipArchive();//使用本类，linux需开启zlib，windows需取消php_zip.dll前的注释

        if ($zip->open($filename, ZIPARCHIVE::CREATE)!==TRUE) {
            exit('无法打开文件，或者文件创建失败');
        }
        if(file_exists($source_datename)){
            $zip->addFile( $source_datename, basename($source_datename));//第二个参数是放在压缩包中的文件名称，如果文件可能会有重复，就需要注意一下
            echo "1";
        }

        $zip->close();//关闭
    }
    if(!file_exists($filename)){
        exit("无法找到文件");
    }
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header('Content-disposition: attachment; filename='.basename($filename)); //文件名
    header("Content-Type: application/zip"); //zip格式的
    header("Content-Transfer-Encoding: binary"); //告诉浏览器，这是二进制文件
    header('Content-Length: '. filesize($filename)); //告诉浏览器，文件大小
    @readfile($filename);
}
?>