<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/3/15
 * Time: 13:28
 */
include_once("admin_global.php");
$r=$db->Get_user_shell_check($uid,$shell);



if(isset($_POST[update]))
{
    unset($_POST[update]);
    foreach($_POST as $name=>$value)
    {
        $value=iconv("UTF-8","GBK",$value);//转换编码格式
        $db->query("update `config` set `value`='$value' where `name`='$name'");
    }
}
$query=$db->query("select *from `config`");
while($row=$db->fetch_array($query))
{
    $row[value]=iconv("GBK","UTF-8",$row[value]);//转换编码格式
    $config_arr[$row[name]]=$row[value];
}
?>


<!DCOTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>首页</title>
</head>
    <form method="post" action="main.php">
        <table border="0" width="500px" cellpadding="5" cellspacing="3" align="center">
            <tr align="center" bgcolor="blue"><th>系统配置</th></tr>
            <tr align="center" bgcolor="#1e90ff">
                <td>网站名称:<input type="text" name="website_name" maxlength="40" value="<?php echo $config_arr[website_name]?>"/>
                </td>
            </tr>
            <tr align="center" bgcolor="#1e90ff">
                <td>网站地址:<input type="text" name="website_address" maxlength="40" value="<?php echo $config_arr[website_address]?>"/>
                </td>
            </tr>
            <tr align="center" bgcolor="#1e90ff">
                <td>关&nbsp;键&nbsp;字:<input type="text" name="website_keyword" maxlength="40" value="<?php echo $config_arr[website_keyword]?>"/>
                </td>
            </tr>
            <tr align="center" bgcolor="#1e90ff">
                <td>说&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;明:<input type="text" name="website_remark" maxlength="40" value="<?php echo $config_arr[website_remark]?>"/>
                </td>
            </tr>
            <tr align="center" bgcolor="#1e90ff">
                <td>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱:<input type="text" name="website_mail" maxlength="40" value="<?php echo $config_arr[website_mail]?>"/>
                </td>
            </tr>
            <tr align="center" bgcolor="#1e90ff">
                <td>电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话:<input type="text" name="website_tel" maxlength="40" value="<?php echo $config_arr[website_tel]?>"/>
                </td>
            </tr>

            <tr align="center" bgcolor="#1e90ff"><td><input type="submit" value="更新"  name="update"></td></tr>
        </table>
    </form>
</html>
