<?php /* Smarty version 2.6.30, created on 2017-04-17 15:41:53
         compiled from test.html */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Title</title>
    <link rel="stylesheet" media="screen" href="<?php echo $this->_tpl_vars['t_dir']; ?>
css/170.css">

</head>

<body>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['t_dir']; ?>
js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['t_dir']; ?>
js/fun.js"></script>
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
    function pinglunfb()
    {
        $("#pinglunfabiaot")[0].style.display="block";
    }
</script>
<input type="text" value="" name="12" id="my_ajax"/>
<input type="button" value="jdkfasl" onclick="handle()">
<div id="zong_1">
    <div id="left_1">
        <div class="wrapper1">
            <ul>
                <li><a href="index.php" target="_parent"><figure><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
image/001.png" width="30px"/><figcaption style="margin-top:-10px">首页</figcaption></figure></a></li>
                <li><a href="note_add.php" target="_parent"><figure><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
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
                <p>版权声明：本文为博主原创文章，未经博主允许不得转载。</p>
            </div>

            <div class="preamble" id="zen-preamble" role="article">
                <h3><?php echo $this->_tpl_vars['note_title']; ?>
</h3>
                <div id="preamble_1" style="padding-left:20px;">
                    <span style="float:left">标签：<?php echo $this->_tpl_vars['note_keyword']; ?>
</span><span style="float:right">2017-04-15&nbsp;&nbsp;&nbsp;<a href="#pinglunfabiao" onclick="pinglunfb()">评论帖子</a>&nbsp;&nbsp;&nbsp;收藏帖子</span>
                </div>
                <p>
						<pre>
                        <?php echo $this->_tpl_vars['note_content']; ?>

                        </pre>
                </p>
            </div>


            <div class="preamble" style="padding-top:100px;padding-bottom:100px;">
                <h3  id="pinglundiezi" >查看评论</h3>

                <?php unset($this->_sections['key']);
$this->_sections['key']['name'] = 'key';
$this->_sections['key']['loop'] = is_array($_loop=$this->_tpl_vars['reply_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                <p>
                <div style="border:1px solid #BDCCA3;">
                    <div style="background:#8eb7e2;padding:10px 10px;"><?php echo $this->_tpl_vars['reply_list'][$this->_sections['key']['index']]['reply_floor']; ?>
楼&nbsp;&nbsp;<?php echo $this->_tpl_vars['reply_list'][$this->_sections['key']['index']]['user_name']; ?>
&nbsp;&nbsp;<?php echo $this->_tpl_vars['reply_list'][$this->_sections['key']['index']]['note_reply_datetime']; ?>
发表&nbsp;&nbsp;&nbsp;<a href="#pinglunfabiao" onclick="pinglunfb()">回复</a></div>
                    <div style="padding:15px">
                        <?php echo $this->_tpl_vars['reply_list'][$this->_sections['key']['index']]['note_reply_content']; ?>

                    </div>
                </div>
                </p>
                <?php endfor; endif; ?>
                <p>
                <div style="border:1px solid #BDCCA3;">
                    <div style="background:#8eb7e2;padding:10px 10px;">2楼&nbsp;&nbsp;1217158716&nbsp;&nbsp;2017-04-15发表&nbsp;&nbsp;&nbsp;<a href="#pinglunfabiao" onclick="pinglunfb()">回复</a></div>
                    <div style="padding:15px">
                        楼主我前面几步都按着你来设置的，但到第9步设置附加依赖性时，一直不能显示出你所陈列的lib,并且也不能添加，这是什么原因？
                        <div style="border:1px solid #BDCCA3;margin-top:10px;">
                            <div style="background:#8eb7e2;padding:10px 10px;">return:&nbsp;&nbsp;1217158716&nbsp;&nbsp;2017-04-15发表&nbsp;&nbsp;&nbsp;<a href="#pinglunfabiao" onclick="pinglunfb()">回复</a></div>
                            <div style="padding:10px">
                                楼主我前面几步都按着你来设置的，但到第9步设置附加依赖性时，一直不能显示出你所陈列的lib,并且也不能添加，这是什么原因？
                            </div>
                        </div>
                    </div>
                </div>
                </p>

                <p>
                <div style="border:1px solid #BDCCA3;">
                    <div style="background:#8eb7e2;padding:10px 10px;">1楼&nbsp;&nbsp;1217158716&nbsp;&nbsp;2017-04-15发表&nbsp;&nbsp;&nbsp;<a href="#pinglunfabiao" onclick="pinglunfb()">回复</a></div>
                    <div style="padding:15px">
                        楼主我前面几步都按着你来设置的，但到第9步设置附加依赖性时，一直不能显示出你所陈列的lib,并且也不能添加，这是什么原因？

                    </div>
                </div>
                </p>
            </div>


            <div class="preamble" id="pinglunfabiaot" style="padding-top:100px;display:none">
                <h3 id="pinglunfabiao">发表评论</h3>
                <p>
                <form method="post" action="note_view.php?nid=<?php echo $this->_tpl_vars['note_id']; ?>
">
                    <table border="0" width="100%" style="padding-left:40px;">
                        <input type="hidden" value="<?php echo $this->_tpl_vars['note_id']; ?>
" name="note_id">
                        <input type="hidden" value="<?php echo $this->_tpl_vars['replay_id']; ?>
" name="reply_id">
                        <input type="hidden" value="0" name="reply_f_id" id="reply_f_id">
                        <tr style="height:40px">
                            <th>用户名：</th>
                            <td><?php echo $this->_tpl_vars['reply_name']; ?>
</td>
                        </tr>
                        <tr>
                            <th>评论内容：</th>
                            <td><textarea rows="15" cols="70" name="reply_content"></textarea></td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td><input type="submit" value="提交评论" style="padding:7px 20px" name="sub"></td>
                        </tr>
                    </table>
                </form>
                </p>
                <div style="padding-left:50px;padding-bottom:100px;">
                    * 以上用户言论只代表其个人观点，不代表本网站的观点或立场。
                </div>
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
        <center><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
image/btn_attent.gif" style="margin-top:10px"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo $this->_tpl_vars['t_dir']; ?>
image/btn_sendletter.gif" style="margin-top:10px"/></center>
        <center style="margin-top:10px"><hr  width="90%" style="border:1px dashed;"/></center>
        <table border="0" id="Blogger_1">
            <tr vertical-align="center"><td>访&nbsp;&nbsp;问：</td> <td><?php echo $this->_tpl_vars['click_num']; ?>
次</td></tr>
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
                    <li><a href="#"><?php echo $this->_tpl_vars['recommend_arr'][$this->_sections['key']['index']]['title']; ?>
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
                    <li><a href="#"><?php echo $this->_tpl_vars['new_arr'][$this->_sections['key']['index']]['title']; ?>
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
                    <li><a href="#"><?php echo $this->_tpl_vars['rand_arr'][$this->_sections['key']['index']]['title']; ?>
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