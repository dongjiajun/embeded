<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/4/12
 * Time: 16:30
 */

include_once("global.php");

if($_POST[sub])
{
    if($_SESSION[check_pic]==$_POST[codev])
    {
        $_POST[checkUser]=UTF_TO_GBK($_POST[checkUser]);
        $query_account=$db->query("select user_account from user where user_account='$_POST[registerName]'");
        $query_name=$db->query("select user_name from user where user_name='$_POST[checkUser]'");
        if($row=$db->fetch_array($query_account))
        {
            $db->Get_admin_msg("register.php","该手机号或者邮箱已被注册");
        }
        else if($row=$db->fetch_array($query_name)){
            $db->Get_admin_msg("register.php","该用户名已被占用,请重新选择");
        }
        else{
        $_POST[password]=md5($_POST[password]);
        $db->query("insert into user(user_account,user_pass,user_name,user_grade) values('$_POST[registerName]','$_POST[password]','$_POST[checkUser]','1')");
        $db->Get_admin_msg("login.php","注册成功，将跳转到登录界面");
        }
    }
    else{
        $db->Get_admin_msg("register.php","验证码错误!");
    }

}
$smarty->display("register.html");

?>