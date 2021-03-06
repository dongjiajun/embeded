<?php /* Smarty version 2.6.30, created on 2017-04-18 10:43:01
         compiled from note_add.html */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CSS Zen Garden: The Beauty of CSS Design</title>

    <link rel="stylesheet" media="screen" href="<?php echo $this->_tpl_vars['t_dir']; ?>
css/170.css">
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['t_dir']; ?>
js/jquery-1.4.2.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dave Shea">
    <meta name="description" content="A demonstration of what can be accomplished visually through CSS-based design.">
    <meta name="robots" content="all">
    <script language="javascript">
        var rotate_1 = 5;
        $(document).ready(function(){
            $("#left_1").hover(function(){
                        $("#left_1").animate({width:"13%"},1000);
                    },
                    function(){
                        $("#left_1").animate({width:"5%"},1000);
                    });
        });


        function sxt(aaa)
        {
            if(aaa==1)
            {
                $("#hd_1")[0].style.display="block";
                $("#hd_2")[0].style.display="none";
                $("#hd_3")[0].style.display="none";
                $("#li_1")[0].style.background="#deebf7";
                $("#li_2")[0].style.background="none";
                $("#li_3")[0].style.background="none";
            }
            if(aaa==2)
            {
                $("#hd_1")[0].style.display="none";
                $("#hd_2")[0].style.display="block";
                $("#hd_3")[0].style.display="none";
                $("#li_1")[0].style.background="none";
                $("#li_2")[0].style.background="#deebf7";
                $("#li_3")[0].style.background="none";
            }
            if(aaa==3)
            {
                $("#hd_1")[0].style.display="none";
                $("#hd_2")[0].style.display="none";
                $("#hd_3")[0].style.display="block";
                $("#li_1")[0].style.background="none";
                $("#li_2")[0].style.background="none";
                $("#li_3")[0].style.background="#deebf7";
            }

        }
    </script>
    <link rel="stylesheet" href="./common/editor/themes/default/default.css" />
    <script charset="utf-8" src="./common/editor/kindeditor-min.js"></script>
    <script charset="utf-8" src="./common/editor/lang/zh_CN.js"></script>
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

<body id="css-zen-garden">
<div id="zong_1">
    <div id="left_1">
        <div class="wrapper1">
            <ul>
                <li><a href="index.php" target="_parent"><figure><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
image/001.png" width="30px"/><figcaption style="margin-top:-10px">首页</figcaption></figure></a></li>
                <li><a href=""><figure><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
image/001.png" width="30px"/><figcaption style="margin-top:-10px">发帖</figcaption></figure></a></li>
                <li><a href="resource_main.php" target="_parent"><figure><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
image/001.png" width="30px"/><figcaption style="margin-top:-10px">资源</figcaption></figure></a></li>
                <li><a href="#"><figure><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
image/001.png" width="30px"/><figcaption style="margin-top:-10px">首页</figcaption></figure></a></li>
                <li><a href="#"><figure><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
image/001.png" width="30px"/><figcaption style="margin-top:-10px">首页</figcaption></figure></a></li>
            </ul>
        </div>
    </div>

    <div class="page-wrapper" id="page-wrapper1">
        <section class="intro" id="zen-intro">

            <div class="summary" id="zen-summary" role="article">
                <p>发帖声明：你发的帖子不能包括色情，淫秽等敏感信息。</p>
            </div>

            <div class="preamble" id="zen-preamble" role="article">
                <h3>我要发帖</h3>

                <p>
                <form action="note_add.php" method="post">
                    <table border="0" width="100%" style="padding-left:20px;padding-right:20px">
                        <tr style="height:60px;">
                            <th>标题：</th>
                            <td><input type="text" style="height:25px;width:300px" name="note_title"/></td>
                        </tr>
                        <tr style="height:60px;">
                            <th>标签：</th>
                            <td><input type="text" style="height:25px;width:300px" name="note_keyword"/></td>
                        </tr>
                        <tr style="height:60px">
                            <th>板块：</th>
                            <td><select name="note_tid">
                                <?php unset($this->_sections['key']);
$this->_sections['key']['name'] = 'key';
$this->_sections['key']['loop'] = is_array($_loop=$this->_tpl_vars['option_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['key']['show'] = true;
$this->_sections['key']['max'] = $this->_sections['key']['loop'];
$this->_sections['key']['step'] = 1;
$this->_sections['key']['start'] = $this->_sections['key']['step'] > 0 ? 0 : $this->_sections['key']['loop']-1;
if ($this->_sections['key']['show']) {
    $this->_sections['key']['total'] = $this->_sections['key']['loop'];
    if ($this->_sections['key']['total'] == 0)
        $this->_sections['key']['show'] = false;
} else
    $this->_sections['key']['total'] = 0;
if ($this->_sections['key']['show']):

            for ($this->_sections['key']['index'] = $this->_sections['key']['start'], $this->_sections['key']['iteration'] = 1;
                 $this->_sections['key']['iteration'] <= $this->_sections['key']['total'];
                 $this->_sections['key']['index'] += $this->_sections['key']['step'], $this->_sections['key']['iteration']++):
$this->_sections['key']['rownum'] = $this->_sections['key']['iteration'];
$this->_sections['key']['index_prev'] = $this->_sections['key']['index'] - $this->_sections['key']['step'];
$this->_sections['key']['index_next'] = $this->_sections['key']['index'] + $this->_sections['key']['step'];
$this->_sections['key']['first']      = ($this->_sections['key']['iteration'] == 1);
$this->_sections['key']['last']       = ($this->_sections['key']['iteration'] == $this->_sections['key']['total']);
?>
                                <option value="<?php echo $this->_tpl_vars['option_list'][$this->_sections['key']['index']]['t_id']; ?>
"><?php echo $this->_tpl_vars['option_list'][$this->_sections['key']['index']]['technology_name']; ?>
</option>
                                <?php endfor; endif; ?>
                            </select>
                            </td>
                        </tr>
                        <tr style="height:60px">
                            <th>内容：</th>
                            <td>
                                <table align="center"  width="100%">
                                    <tr align="center"></td></tr>
                                    <tr >
                                        <td><textarea name="content" style="width:700px;height:200px;visibility:hidden;"></textarea>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>


                        <tr style="height:60px">
                        <th>&nbsp;</th>

                        <td><input type="submit" value="发布帖子" style="padding:7px 20px;">
                        </td>
                    </tr>
                    </table>
                </form>
                </p>
            </div>

        </section>


    </div>
</div>


<div id="right_1">
    <div id="right_1_top">
        <h3><div style="margin-top:10px;margin-left:20px;margin-bottom:0px"><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
image/heart.gif" width="13px"><span style="padding-left:10px;font-size:20px;font-family:'华文隶书';">关&nbsp;于&nbsp;博&nbsp;主</span></div></h3>
        <center><hr color="#3D82AD" width="90%"/></center>
        <a href="#"><figure align="center"><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
<?php echo $this->_tpl_vars['user_pic']; ?>
" style="margin-top:10px" width="230" height="230"/><figcaption style="margin-top:-8px;font-size:20px;font-family:'华文隶书';color:#2C5079"><?php echo $this->_tpl_vars['user_name']; ?>
</figcaption></figure></a>
        <p>博&nbsp;&nbsp;主：<?php echo $this->_tpl_vars['user_name']; ?>
</p>
        <p style="white-space:normal;line-height:20px">简&nbsp;&nbsp;介：<?php echo $this->_tpl_vars['user_explain']; ?>
</p>
        <center style="margin-top:10px"><hr  width="90%" style="border:1px dashed;"/></center>
        <table border="0" id="Blogger_1">
            <tr><td>积&nbsp;&nbsp;分：</td> <td><?php echo $this->_tpl_vars['user_his_inter']; ?>
</td></tr>
            <tr><td>等&nbsp;&nbsp;级：</td> <td><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
image/blog8.png"/></td></tr>
            <tr><td>排&nbsp;&nbsp;名：</td> <td>第<?php echo $this->_tpl_vars['user_ranking']; ?>
名</td></tr>
            <tr><td>签&nbsp;&nbsp;到：</td> <td><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
image/Sign.png" height="20px"/></td></tr>
        </table>
    </div>
</div>

<div id="right_2">
    <div id="right_2_top">
        <div class="lanmubox">
            <div class="hd">
                <ul><li id="li_1" onmouseover="sxt('1')" style="background:#deebf7">精心推荐</li><li id="li_2" onmouseover="sxt('2')">最新文章</li><li id="li_3" onmouseover="sxt('3')">随机文章</li></ul>
            </div>
            <div class="bd">
                <ul id="hd_1" style="display:block">
                    <?php unset($this->_sections['key']);
$this->_sections['key']['name'] = 'key';
$this->_sections['key']['loop'] = is_array($_loop=$this->_tpl_vars['recommend_arr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['key']['show'] = true;
$this->_sections['key']['max'] = $this->_sections['key']['loop'];
$this->_sections['key']['step'] = 1;
$this->_sections['key']['start'] = $this->_sections['key']['step'] > 0 ? 0 : $this->_sections['key']['loop']-1;
if ($this->_sections['key']['show']) {
    $this->_sections['key']['total'] = $this->_sections['key']['loop'];
    if ($this->_sections['key']['total'] == 0)
        $this->_sections['key']['show'] = false;
} else
    $this->_sections['key']['total'] = 0;
if ($this->_sections['key']['show']):

            for ($this->_sections['key']['index'] = $this->_sections['key']['start'], $this->_sections['key']['iteration'] = 1;
                 $this->_sections['key']['iteration'] <= $this->_sections['key']['total'];
                 $this->_sections['key']['index'] += $this->_sections['key']['step'], $this->_sections['key']['iteration']++):
$this->_sections['key']['rownum'] = $this->_sections['key']['iteration'];
$this->_sections['key']['index_prev'] = $this->_sections['key']['index'] - $this->_sections['key']['step'];
$this->_sections['key']['index_next'] = $this->_sections['key']['index'] + $this->_sections['key']['step'];
$this->_sections['key']['first']      = ($this->_sections['key']['iteration'] == 1);
$this->_sections['key']['last']       = ($this->_sections['key']['iteration'] == $this->_sections['key']['total']);
?>
                    <li><a href="note_view.php?nid=<?php echo $this->_tpl_vars['recommend_arr'][$this->_sections['key']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['recommend_arr'][$this->_sections['key']['index']]['title']; ?>
</a></li>
                    <?php endfor; endif; ?>
                </ul>
                <ul id="hd_2" style="display:none">
                    <?php unset($this->_sections['key']);
$this->_sections['key']['name'] = 'key';
$this->_sections['key']['loop'] = is_array($_loop=$this->_tpl_vars['new_arr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['key']['show'] = true;
$this->_sections['key']['max'] = $this->_sections['key']['loop'];
$this->_sections['key']['step'] = 1;
$this->_sections['key']['start'] = $this->_sections['key']['step'] > 0 ? 0 : $this->_sections['key']['loop']-1;
if ($this->_sections['key']['show']) {
    $this->_sections['key']['total'] = $this->_sections['key']['loop'];
    if ($this->_sections['key']['total'] == 0)
        $this->_sections['key']['show'] = false;
} else
    $this->_sections['key']['total'] = 0;
if ($this->_sections['key']['show']):

            for ($this->_sections['key']['index'] = $this->_sections['key']['start'], $this->_sections['key']['iteration'] = 1;
                 $this->_sections['key']['iteration'] <= $this->_sections['key']['total'];
                 $this->_sections['key']['index'] += $this->_sections['key']['step'], $this->_sections['key']['iteration']++):
$this->_sections['key']['rownum'] = $this->_sections['key']['iteration'];
$this->_sections['key']['index_prev'] = $this->_sections['key']['index'] - $this->_sections['key']['step'];
$this->_sections['key']['index_next'] = $this->_sections['key']['index'] + $this->_sections['key']['step'];
$this->_sections['key']['first']      = ($this->_sections['key']['iteration'] == 1);
$this->_sections['key']['last']       = ($this->_sections['key']['iteration'] == $this->_sections['key']['total']);
?>
                    <li><a href="note_view.php?nid=<?php echo $this->_tpl_vars['new_arr'][$this->_sections['key']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['new_arr'][$this->_sections['key']['index']]['title']; ?>
</a></li>
                    <?php endfor; endif; ?>
                </ul>
                <ul id="hd_3" style="display:none">
                    <?php unset($this->_sections['key']);
$this->_sections['key']['name'] = 'key';
$this->_sections['key']['loop'] = is_array($_loop=$this->_tpl_vars['rand_arr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['key']['show'] = true;
$this->_sections['key']['max'] = $this->_sections['key']['loop'];
$this->_sections['key']['step'] = 1;
$this->_sections['key']['start'] = $this->_sections['key']['step'] > 0 ? 0 : $this->_sections['key']['loop']-1;
if ($this->_sections['key']['show']) {
    $this->_sections['key']['total'] = $this->_sections['key']['loop'];
    if ($this->_sections['key']['total'] == 0)
        $this->_sections['key']['show'] = false;
} else
    $this->_sections['key']['total'] = 0;
if ($this->_sections['key']['show']):

            for ($this->_sections['key']['index'] = $this->_sections['key']['start'], $this->_sections['key']['iteration'] = 1;
                 $this->_sections['key']['iteration'] <= $this->_sections['key']['total'];
                 $this->_sections['key']['index'] += $this->_sections['key']['step'], $this->_sections['key']['iteration']++):
$this->_sections['key']['rownum'] = $this->_sections['key']['iteration'];
$this->_sections['key']['index_prev'] = $this->_sections['key']['index'] - $this->_sections['key']['step'];
$this->_sections['key']['index_next'] = $this->_sections['key']['index'] + $this->_sections['key']['step'];
$this->_sections['key']['first']      = ($this->_sections['key']['iteration'] == 1);
$this->_sections['key']['last']       = ($this->_sections['key']['iteration'] == $this->_sections['key']['total']);
?>
                    <li><a href="note_view.php?nid=<?php echo $this->_tpl_vars['rand_arr'][$this->_sections['key']['index']]['id']; ?>
"><?php echo $this->_tpl_vars['rand_arr'][$this->_sections['key']['index']]['title']; ?>
</a></li>
                    <?php endfor; endif; ?>
                </ul>


            </div>
        </div>

    </div>
</div>

<div id="right_3">
    <div id="right_3_top">
        <h3><div style="margin-top:10px;margin-left:20px;margin-bottom:0px"><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
image/heart.gif" width="13px"><span style="padding-left:10px;font-size:20px;font-family:'华文隶书';">友&nbsp;情&nbsp;连&nbsp;接</span></div></h3>
        <center><hr color="#3D82AD" width="90%"/></center>
        <p>1.<a href="#">沈康的博客</a></p>
        <p>2.<a href="#">小明的博客</a></p>
        <p>3.<a href="#">董佳俊的博客</a></p>
    </div>
</div>

</body>
</html>