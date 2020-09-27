<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/3/15
 * Time: 13:28
 */
include_once("admin_global.php");
$r=$db->Get_user_shell_check($uid,$shell);
?>


<!DCOTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>首页</title>
</head>
<!--用了frameset的页面不能有body-->
<frameset rows="20%,80%">
    <frameset rows="80%,20%">
        <frame src="admin_top.php" frameborder=0 noresize/>
        <frame src="admin_top2.php" frameborder=1 scrolling="no"/>

    </frameset>
    <frameset cols="15%,85%">
        <frame src="admin_left.php" frameborder=0 noresize/>
        <frame src="main.php" name="right" frameborder=0/>
    </frameset>
</frameset>

</html>
