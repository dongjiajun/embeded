<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/3/26
 * Time: 15:37
 */
include_once("admin_global.php");
$r=$db->Get_user_shell_check($uid,$shell);
if($_GET[del])
{
    $query=$db->query("select *from `source` where `id`='$_GET[del]' limit 1");
    $row=$db->fetch_array($query);
    unlink($row[source_addr]);
    $db->query("delete from  `source` where `id`='$_GET[del]'");
}
?>

<!DCOTYPE HTML>
<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
    <table width="100%" border="0">
        <tr align="center" bgcolor="#dc143c" height="50px"><td colspan="9"><font size="5">资源管理</font></td></tr>
        <tr bgcolor="#6495ed">
            <td>资源名</td>
            <td>资源介绍</td>
            <td>资源地址</td>
            <td>所需积分</td>
            <td>发布者</td>
            <td>所属类型</td>
            <td>下载量</td>
            <td>发布时间</td>
            <td>操作</td>
        </tr>
        <?php
            $query=$db->query("select *from source");
        while($row=$db->fetch_array($query))
        {
        ?>
            <tr>
                <td><?php echo GBK_TO_UTF($row[source_name])?></td>
                <td><?php echo GBK_TO_UTF($row[source_introduce])?></td>
                <td><?php echo $row[source_addr]?></td>
                <td><?php echo $row[source_price]?></td>
                <td><?php echo $row[u_id]?></td>
                <td><?php echo $row[t_id]?></td>
                <td><?php echo $row[source_download_num]?></td>
                <td><?php echo date("H:i:s",$row[source_datetime])?></td>
                <td><a href="?del=<?php echo $row[id]?>">删除</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
