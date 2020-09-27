<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/3/23
 * Time: 15:23
 */

include_once("admin_global.php");
$r=$db->Get_user_shell_check($uid,$shell);
if(!empty($_GET[id]))
{

}
/**
 *这里删除用户对应的数据库操作，只有用户表测试过，下面四条删除语句没测试
 */
if(!empty($_GET[del]))
{
    $db->query("delete from `user` where `id`='$_GET[del]'");
    $db->query("delete from `user_message` where `uid_send`='$_GET[del]' or `uid_get`='$_GET[del]'");
    $db->query("delete from `user_collection` where `u_id`='$_GET[del]'");
    $db->query("delete from `note` where `u_id`='$_GET[del]'");
    $db->query("delete from `note_reply` where `u_id`='$_GET[del]'");
    $db->Get_admin_msg("admin_user_manage.php","已成功删除该用户");
}

//获取所有用户
$query=$db->query("select *from user order by id ASC");
$flag=0;
while($row=$db->fetch_array($query))
{
    $flag++;
    $user_message_list[$flag][id]=$row[id];
    $user_message_list[$flag][user_account]=$row[user_account];
    $user_message_list[$flag][user_pass]=$row[user_pass];
    $user_message_list[$flag][user_name]=GBK_TO_UTF($row[user_name]);
    $user_message_list[$flag][user_his_intergral]=$row[user_his_intergral];

}
?>

<!DCOTYPE HTML>
<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
    <table align="center"  width="100%">
        <tr  bgcolor="#dc143c" height="50px"><th colspan="6"><font size="5">用户管理</font></th></tr>
        <tr align="center" bgcolor="#1e90ff">
            <td width="5%">用户id</td>
            <td width="20%">用户帐号</td>
            <td width="30%">用户密码</td>
            <td width="20%">用户名</td>
            <td width="5%">用户历史积分</td>
            <td width="20%">操作</td></tr>
        <?php
            foreach($user_message_list  as $key=>$val)
            {

        ?>

                <tr align="center" >
                    <td><?php echo $val[id]?></td>
                    <td><?php echo $val[user_account]?></td>
                    <td><?php echo $val[user_pass]?></td>
                    <td><?php echo $val[user_name]?></td>
                    <td><?php echo $val[user_his_intergral]?></td>
                    <td><a href="?del=<?php echo $val[id]?>">删除</a>
                        /<a href="?id=<?php echo $val[id]?>">修改</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>
