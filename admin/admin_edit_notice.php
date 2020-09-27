<?php
/**
 * Created by PhpStorm.
 * User: DJJ
 * Date: 2017/3/23
 * Time: 16:47
 * 本页面仅仅用于添加公告，不用于修改
 */
error_reporting(E_ALL^E_NOTICE^E_DEPRECATED);
include_once("admin_global.php");
$r=$db->Get_user_shell_check($uid,$shell);
$htmlData = '';
if (!empty($_POST['content'])) {
    if (get_magic_quotes_gpc()) {
        $htmlData = stripslashes($_POST['content']);

    } else {
        $htmlData = $_POST['content'];
        $time=time();
        $_POST[title]=UTF_TO_GBK($_POST[title]);
        $_POST[content]=UTF_TO_GBK($_POST[content]);
        $db->query("insert into `notice`(id,notice_title,notice_content,notice_datetime)
                  values('','$_POST[title]','$_POST[content]','$time')");
        $db->Get_admin_msg("admin_send_notice.php","已成功添加公告");
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>添加公告</title>
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
    <tr align="center"><td><input type="hidden" name="id" value="<?php echo $_GET[id]?>"></td></tr>
    <tr align="center"><td>公告内容: <?php echo $htmlData; ?><td></tr>
    <tr align="center"><td>公告标题:<input type="text" name="title"></td></tr>
    <tr align="center">
      <td><textarea name="content" style="width:700px;height:200px;visibility:hidden;"></textarea>
      </td>
    </tr>
        <tr align="center"><td><input type="submit" value="提交内容" name="sub"></td></tr>
    </table>
</form>
</body>
</html>





