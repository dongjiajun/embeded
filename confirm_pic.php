<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/4/12
 * Time: 16:50
 */
error_reporting(E_ALL^E_DEPRECATED^E_NOTICE);
session_start();
for($i=0;$i<4;$i++)//生成随机数
    $rand.=dechex(rand(1,15));

$_SESSION[check_pic]=$rand;

$arr=array("测试一","测试2","测试3","测试4","测试5","哈哈哈哈");
$im=imagecreatetruecolor(100,30);//创建一张真彩色图片

$bg=imagecolorallocate($im,0,0,0);//第一次用调色板的时候，系统会认为是设置背景颜色
$te=imagecolorallocate($im,255,255,255);//设置验证码正文内容的颜色

for($i=0;$i<5;$i++)//干扰线
{
    $te2 = imagecolorallocate($im, rand(0,255), rand(0,255), rand(0,255));
    imageline($im, 0, rand(0,20), rand(80,100), rand(0,30), $te2);
}

for($i=0;$i<200;$i++)//噪点
{
    $te3=imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));
    imagesetpixel($im,rand()%100,rand()%30,$te3);
}

//文字，写入中文的方式，也可写入英文

/*$content=$arr[rand(0,sizeof($arr)-1)];
$_SESSION[check_pic]=$content;
$content=iconv("gb2312","UTF-8",$content);//注这里是将转换后的文字返回，所以不能用先定义一个的方式
imagettftext($im,12,6,rand(10,20),rand(5,25),$te,"simhei.ttf",$content);//字体需要提前准备好，放到项目目录下面
//第二个参数代表，字号大小，第三个参数代表，倾斜度*/


//文字，写入字符串的方式，这里是使用随机数
imagestring($im,rand(5,6),rand(10,30),rand(0,10),$rand,$te);//图片，字体，位置，内容，背景颜色


//输出图像
header("Content-type: image/jpeg");
imagejpeg($im);//由于浏览器的兼容性,这里即使使用imagepng或者imagegif也都可以正常输出。
?>