<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/3/27
 * Time: 16:10
 */

include_once("global.php");

if($_POST[sub])
{
    $db->Get_user_login($_POST[username],$_POST[password]);
}
$smarty->display("login.html");
?>


