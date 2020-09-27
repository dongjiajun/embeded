<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/3/7
 * Time: 16:53
 */
error_reporting(E_ALL^E_DEPRECATED^E_NOTICE);
include_once("../common/mysql.class.php");
class action extends mysql{
    //获取由用户名和密码以及后缀字符串联起来的shell,并检验是否匹配
    public function Get_user_shell($uid,$shell)
    {
        $query=$this->query("select * from `admin` where `id`='$uid'");
        $us=is_array($row=$this->fetch_array($query));
        $shell=$us?$shell==md5($row[username].$row[password]."TKBK") : false;
        return $shell?$row:NULL;
    }



    //检查用户权限
    public function Get_user_shell_check($uid,$shell,$m_id=9)
    {
        if($row=$this->Get_user_shell($uid,$shell))
        {
            if($row[mid]<$m_id)
            {
                $this->Get_user_ontime();
                return $row;
            }
            else{
                echo "你没有权限操作！";
                exit();
            }
        }
        else{
            $this->Get_admin_msg('index.php','您还没有登录，请先登录！');
        }
    }

    //检查用户在线时间
    public function Get_user_ontime($long='3600')
    {
        //echo date("h:i:s",$_SESSION[ontime]);
        $new_time=time();
        $onlinetime=$_SESSION[ontime];
        //echo $new_time-$onlinetime;
        if($new_time-$onlinetime>$long)
        {
            echo "登录超时";
            session_destroy();
            exit();
        }
        else{
            $_SESSION[ontime]=time();

        }
    }


    //用户登录，检查用户和密码是否匹配
    public function Get_user_login($username,$password)
    {
        $username=str_replace(" ","",$username);//去除多余的空格
        $username=iconv("UTF-8","GBK",$username);
        $sql="select *from `admin` where `username`='$username'";
        $query=$this->query($sql);
        $us=is_array($row=$this->fetch_array($query));
        $ps=$us?md5($password)==$row[password]:false;
        if($ps)
        {
            $_SESSION[uid]=$row[id];
            $_SESSION[shell]=md5($row[username].$row[password]."TKBK");
            $_SESSION[ontime]=time();

            $this->Get_admin_msg('admin_main.php','登录成功');
        }
        else{
            $this->Get_admin_msg('index.php','用户名或密码错误');
            session_destroy();
        }
    }

    //用户退出
    public function Get_user_out(){
        session_destroy();
        $this->Get_admin_msg('index.php','退出成功');
    }


    //输出给用户的提示信息，并跳转到指定页面，目前跳转没有生效
    public function Get_admin_msg($url,$show='操作已成功')
    {
        $msg='
        <!DOCTYPE HTML>
        <html>
            <head>
                <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
                <meta http_equiv="refresh" content="2;URL='.$url.'">
            </head>
            <body>
                <div>
                    <table>
                        <tr>
                            <th align="center">信息提示</th>
                        </tr>
                        <tr>
                            <td><p>'.$show.'
                            <br/>2秒后返回指定页面！<br/>
                            如果浏览器无法跳转，<a href="'.$url.'">请点击此处</a>

                            </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </body>
        <html>
        ';

        echo $msg;
        exit();
    }
}


//这部分的注释非常有用，对于自己写的类，一定要测试通过之后再开始使用，否则使用过程中非常容易引起问题。

/*$obj=new action("localhost","root","199485","news_php100","GBK");
$val="董佳俊";
$val=iconv("UTF-8","GBK",$val);
$sql="select * from `p_admin` where `username`='$val'";
$query=$obj->query($sql);
if($row=$obj->fetch_array($query))
{
    echo "xixi";
}*/







?>
