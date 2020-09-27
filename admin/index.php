<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/3/10
 * Time: 17:03
 * keyword:match username,passwd   user:董佳俊  password:199485
 */
include_once("admin_global.php");
if($_POST[login])
{
   // echo $_POST[username].$_POST[passwd];
    $db->Get_user_login($_POST[username],$_POST[passwd]);
}

?>
<!DCOTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>login</title>
    <script language="javascript" type="text/javascript">

        function $(id)
        {return document.getElementById(id);}

        function checkLogin()
        {
            /*if($("uname").value=="dongjiajun"&&$("pwd").value=="123456")
            {
                return true;
            }
            else return false;*/
            return true;
        }


        function ensure()
        {
            //window.alert("允许提交");
            return checkLogin();
        }
    </script>
</head>
<body bgcolor="#123456">
<form action="index.php"  method="post" onsubmit="return ensure()">
    <table border="0"  width="100%" height="100%" >
        <tr height="120px"><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>

        <tr >
            <td width="350px">&nbsp;</td>
            <td>
                <table  border="0" background="./images/two.jpg" width="535px" height="300px" align="center">
                    <tr><td colspan="3" align="center"><font size=5>嵌入式交流平台后台登录</font>
                        </td>
                    </tr>

                    <tr>

                        <td colspan="3" align="center">
                            <font size=4 color="white">帐号：</font>
                            <input type="text" name="username" id="uname"/>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="3" align="center">
                            <font size=4 size=4 color="white">密码：</font>
                            <input type="password" name="passwd" id="pwd"/>
                        </td>
                    </tr>

                    <tr>
                        <td align="center" colspan="3">
                            <input type="submit" value="登录系统"  name="login"/>
                            <input  type="reset" value="重新填写" name="reset"/>
                        </td>



                    </tr>
                    <tr>
                        <td align="center" colspan="3">
                            <a href="zhuce.html"><font color="white">注册登录</font></a>
                            <a href="findPass.html"><font color="white">找回密码</font></a>
                        </td>

                    </tr>
                </table>
            </td>
            <td width="350px">&nbsp;
            </td>
        </tr>

        <tr height="150px"><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
    </table>
</form>
</body>
</html>
