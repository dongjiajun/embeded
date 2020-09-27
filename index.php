<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/3/26
 * Time: 21:09
 */

include_once("global.php");
//$r=$db->Get_user_shell_check($uid,$shell);//检查用户状态
ob_clean();

//下面的最终再解决
/*if(!empty($_GET[quit_login]))
{
if($_GET[quit_login]==1)
{
echo "<script language='javascript'>window.close();</script>";
$db->Get_admin_msg("login.php","已成功退出登录");
}
}*/
$smarty->display("index.htm");
?>