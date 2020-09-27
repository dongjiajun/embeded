<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/3/15
 * Time: 13:28
 *
 *
 */
include_once("admin_global.php");
$r=$db->Get_user_shell_check($uid,$shell);



if(isset($_POST[sub]))
{
    $_POST[tec_name]=UTF_TO_GBK($_POST[tec_name]);
    $db->query("insert into `technology_class`(`id`,`technology_fid`,`technology_name`)
                values('','$_POST[f_id])','$_POST[tec_name]')");
    $db->Get_admin_msg("admin_manage_tec_class.php","已成功添加类型");
}
function rountinfFindNext($db,$db_name,$f_id,$space)
{
    $query=$db->query("select *from `$db_name` where technology_fid='$f_id'");
    while($row=$db->fetch_array($query))
    {

        $row[technology_name]=iconv("GBK","UTF-8",$row[technology_name]);
        //$news_class_arr[$row[id]]=$row[technology_name];
        if($f_id==0){
            echo "<option value=\"$row[id]\">$row[technology_name]</option>";
        }
        else
        {
            echo " <option value=\"$row[id]\">$space$row[technology_name]</option>";
        }
        rountinfFindNext($db,$db_name,$row[id],$space.$space);
    }
}
?>


<!DCOTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>首页</title>
</head>

<table border="0" width="500px" cellpadding="5"  align="center">
    <tr align="center" bgcolor="blue"><th colspan="2">技术分类</th></tr>
    <tr align="center" bgcolor="#1e90ff">
        <td colspan="2">
            添加技术类型
        </td>
    </tr>
    <form method="post" action="admin_manage_tec_class.php" >
        <tr  bgcolor="#1e90ff">
            <td width="100px">选择分类</td>
            <td>
                <select name="f_id">
                    <option value="0">添加大类</option>
                    <?php
                    rountinfFindNext($db,"technology_class",0,"&nbsp;&nbsp;");
                    ?>
                </select>
            </td>
            <tr bgcolor="#1e90ff">
               <td>类型名:</td><td><input type="text" name="tec_name"/><input type="submit" name="sub" value="确认添加"></td>
        </tr>
        </tr>
    </form>

</table>

</html>
