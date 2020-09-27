<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/3/26
 * Time: 19:02
 */

include_once("admin_global.php");
$r=$db->Get_user_shell_check($uid,$shell);

if(!empty($_GET[del]))
{
    $db->query("delete from `note` where `id`='$_GET[del]'");
}
?>

<!DOCTYPE HTML>
    <html>
<head>
    <meta content="Content-Type" charset="text/html; charset=utf-8"/>
</head>
<body>
    <table width="100%" border="0">
        <tr align="center" bgcolor="#dc143c"><td colspan="8">管理帖子</td></tr>
        <tr bgcolor="#6495ed" align="center">
            <td>帖子id</td>
            <td>作者</td>
            <td>标题</td>
            <td>关键字</td>
            <td>点击量</td>
            <td>类型</td>
            <td>发布时间</td>
            <td>操作</td>
        </tr>
        <?php
        $result=$db->query("select id from `note`");
        $total=$db->num_rows($result);
        pageft($total,5);
        if($firstcount<0)
            $firstcount=0;
        $query=$db->query("select *from `note` order by id ASC limit $firstcount,$displaypg ");
        while($row=$db->fetch_array($query))
        {
            ?>
            <tr align="center">
                <td><?php echo $row[id]?></td>
                <td><?php echo "1"?></td>
                <td><?php echo GBK_TO_UTF($row[note_title])?></td>
                <td><?php echo GBK_TO_UTF($row[note_keyword])?></td>
                <td><?php echo GBK_TO_UTF($row[note_click])?></td>
                <td><?php echo "1"?></td>
                <td><?php echo date("Y-m-d H:i:s",$row[note_datetime])?></td>
                <td><a href="?del=<?php echo $row[id]?>">删除</a></td>
            </tr>
            <?php
        }
        ?>
        <tr><td align="center" colspan="8"><?php echo $pagenav?></td></tr>
    </table>
</body>
</html>
