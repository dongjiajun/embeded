<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/3/26
 * Time: 16:41
 */
include_once("admin_global.php");
$r=$db->Get_user_shell_check($uid,$shell);
if (!empty($_POST['content'])) {
    if (get_magic_quotes_gpc()) {
        $htmlData = stripslashes($_POST['content']);

    } else {
        $htmlData = $_POST['content'];
        $time=time();
        $_POST[title]=UTF_TO_GBK($_POST[title]);
        $_POST[content]=UTF_TO_GBK($_POST[content]);
        $db->query("insert into note(note_title,note_content,note_datetime) values('$_POST[title]','$_POST[content]','$time')");
        echo "发布成功";
    }
}
?>
<!DCOTYPE HTML>
<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=utf-8"/>
    <style>
        form {
            margin: 0;
        }
        textarea {
            display: block;
        }
    </style>
    <link rel="stylesheet" href="./editor/themes/default/default.css" />
    <script charset="utf-8" src="./editor/kindeditor-min.js"></script>
    <script charset="utf-8" src="./editor/lang/zh_CN.js"></script>
    <script>
        var editor;
        KindEditor.ready(function(K) {
            editor = K.create('textarea[name="content"]', {
                resizeType : 1,
                allowPreviewEmoticons : false,
                allowImageUpload : false,
                items : [
                    'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
                    'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
                    'insertunorderedlist', '|', 'emoticons', 'image', 'link']
            });
        });
    </script>
</head>
<body>
    <form method="post" action="">
        <table align="center"  width="100%">
            <tr align="center"></td></tr>

            <tr align="center"><td>帖子标题:<input type="text" name="title"></td></tr>
            <tr align="center">
                <td><textarea name="content" style="width:700px;height:200px;visibility:hidden;"></textarea>
                </td>
            </tr>
            <tr align="center"><td></a><input type="submit" value="提交内容" name="sub"></td></tr>
        </table>
    </form>
</body>


