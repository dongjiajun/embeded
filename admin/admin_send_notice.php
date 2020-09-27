<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/3/23
 * Time: 16:31
 */

include_once("admin_global.php");
$r=$db->Get_user_shell_check($uid,$shell);

if($_GET[del])
{
$db->query("delete from notice where id='$_GET[del]'");


}
?>

<!DCOTYPE HTML>
<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<table align="center"  width="100%">
    <tr  bgcolor="#dc143c" height="50px"><th colspan="6"><font size="5">公告管理</font></th></tr>
    <tr align="center" bgcolor="#1e90ff">
        <td>公告id</td>
        <td>公告标题</td>
        <td>公告内容</td>
        <td>发布时间</td>
        <td>操作</td>
    </tr>
    <?php
    $result=$db->query("select id from `notice`");
    $total=$db->num_rows($result);
    pageft($total,10);
    if($firstcount<0)
        $firstcount=0;
    $query=$db->query("select *from `notice` order by id ASC limit $firstcount,$displaypg ");
    while($row=$db->fetch_array($query))
    {
        ?>
        <tr align="center">
            <td><?php echo $row[id]?></td>
            <td><?php echo GBK_TO_UTF($row[notice_title])?></td>
            <td><?php echo GBK_TO_UTF($row[notice_content])?></td>
            <td><?php echo date("Y-m-d H:i:s",$row[notice_datetime])?></td>
            <td><a href="?del=<?php echo $row[id]?>">删除</a></td>
        </tr>
        <?php
    }
    ?>
    <tr><td align="center" colspan="6"><?php echo $pagenav?></td></tr>


</table>
</body>
</html>