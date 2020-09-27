<?php /* Smarty version 2.6.30, created on 2017-04-18 10:19:16
         compiled from resource.html */ ?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CSS Zen Garden: The Beauty of CSS Design</title>

	<link rel="stylesheet" media="screen" href="<?php echo $this->_tpl_vars['t_dir']; ?>
css/resource.css">
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['t_dir']; ?>
js/jquery-1.4.2.js"></script>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Dave Shea">
	<meta name="description" content="A demonstration of what can be accomplished visually through CSS-based design.">
	<meta name="robots" content="all">
	<script language="javascript">
	</script>
</head>

<body id="css-zen-garden">
	<div id="resource_top_1">
		<div style="padding-top:10px;float:right;padding-right:40px;font-weight:bold"><a href="login.php">登陆</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="register.php">注册</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="message_send.php">私信</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="resource_my_collect.php">收藏</a></div>
		<div style="padding-top:10px;float:left;padding-left:40px;font-weight:bold"><a href="index.php">我的首页</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">相关技术</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">我的博客</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">手机应用</a></div>
	</div>
	
	
	<div id="resource_zong">
		<div>
			<div style="margin-top:20px;float:left;padding-left:40px;font-size:40px;font-family:'华文隶书';font-style:bold">Tertiary grass download</div>
			<div style="margin-top:20px;float:left;margin-left:80px;"><input style="height:30px;width:350px" type="text" required="true" placeholder="搜索"/>&nbsp;&nbsp;&nbsp;<input style="height:34px;width:60px;background-color:red;border-style:none;color:white" type="button" value="开始"/></div>
			<div style="margin-top:26px;float:left;padding-left:60px;" ><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
image/onload1.png"></div>
			<div style="margin-top:32px;float:left;padding-left:10px;font-weight:bold;" ><span style="color:#d3e4f4;margin-top:-10px;"><a href="resource_upload.php">上&nbsp;传&nbsp;资&nbsp;料</a></span></div>
		</div>
		
		
		<div id="resource_zong_1">
			<ul>
				<li id="resource_zong_li_1">&nbsp;&nbsp;所有分类&nbsp;&nbsp;&nbsp;</li>
				<li style="background:#7c9acc">首页</li>
				<li><a href="resource_classify.php">分类下载</a></li>
				<li><a href="resource_groom.php">推荐下载</a></li>
				<li><a href="resource_new.php">最新下载</a></li>
				<li><a href="resource_upload.php">资源上传</a></li>
				<li><a href="resource_my.php">我的资料</a></li>
			</ul>
		</div>
		
		<div id="resource_zong_2">
			<ul>
				<li>系统运维</li>
				<li>数据库</li>
				<li>开发技术</li>
				<li>web开发</li>
				<li>移动开发</li>
				<li>虚拟化</li>
				<li>大数据</li>
				<li>硬件开发</li>
				<li>其他</li>
			</ul>
		</div>
		
		<div id="resource_zong_3" style="float:left;">
			<table border="0">
				<tr>
					<td>
					<div id="resource_zong_3_1" style="margin:20px;margin-left:20px;">
						<img src="<?php echo $this->_tpl_vars['t_dir']; ?>
image/6.jpg" width="300px" style="float:left">
						<div style="float:left;margin-left:20px;margin-top:10px;">
							<ul>
								<?php unset($this->_sections['key']);
$this->_sections['key']['name'] = 'key';
$this->_sections['key']['loop'] = is_array($_loop=$this->_tpl_vars['source_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<li>[暂无分类]&nbsp;<?php echo $this->_tpl_vars['source_list'][$this->_sections['key']['index']]['source_name']; ?>
</li>
								<?php endfor; endif; ?>
							</ul>
						</div>
					</div>
					</td>
				</tr>
				<tr>
					<td>
					<div style="margin:20px 20px;">
					<span style="font-family:'华文新魏';font-size:20px;">推荐下载</span>
					<hr width="100%" style="margin-top:10px;margin-bottom:10px;"/>
					<div id="resource_zong_3_2" style="float:left">
						<ul>
							<?php unset($this->_sections['key']);
$this->_sections['key']['name'] = 'key';
$this->_sections['key']['loop'] = is_array($_loop=$this->_tpl_vars['source_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<li>[暂无分类]&nbsp;<?php echo $this->_tpl_vars['source_list'][$this->_sections['key']['index']]['source_name']; ?>
</li>
							<?php endfor; endif; ?>
						</ul>
					</div>
					<div style="float:right" id="resource_zong_3_3">
						<ul>
							<?php unset($this->_sections['key']);
$this->_sections['key']['name'] = 'key';
$this->_sections['key']['loop'] = is_array($_loop=$this->_tpl_vars['source_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<li>[暂无分类]&nbsp;<?php echo $this->_tpl_vars['source_list'][$this->_sections['key']['index']]['source_name']; ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
							<?php endfor; endif; ?>

						</ul>
					</div>
					</div>
					</td>
				</tr>
			</table>
		</div>
		
		
			
			
		<div id="resource_zong_4">
			<div style="width:300px;height:220px;border:1px solid #3D82AD;">
				<div style="padding-top:30px;padding-left:30px;height:120px;background:#96bde0">
					<img src="<?php echo $this->_tpl_vars['t_dir']; ?>
<?php echo $this->_tpl_vars['user_pic']; ?>
" style="float:left;width:60px;height:60px;">
					<div style="float:left;padding-left:30px">
						<?php echo $this->_tpl_vars['user_name']; ?>
<br/><br/>
						等级：<?php echo $this->_tpl_vars['user_grade']; ?>
级
					</div>
				</div>
				<div id="resource_zong_4_1" style="padding-top:10px;padding-left:10px;height:30px;">
					
						<table width="100%" border="0" style="padding-bottom:10px;">
							<tr><th><?php echo $this->_tpl_vars['user_download']; ?>
</th><th><?php echo $this->_tpl_vars['user_upload']; ?>
</th><th><?php echo $this->_tpl_vars['user_inter']; ?>
</th></tr>
							<tr><th>我的上传</th><th>我的下载</th><th>我的积分</th></tr>
						</table>
				</div>
			</div>
			
			<div id="resource_zong_4_2">
				<div id="right_2_top">
					<div class="lanmubox">
						<div class="hd">
							<ul><li>下载公告</li></ul>
						</div>
						<div class="bd">
							<ul id="hd_1" style="display:block">
								<?php unset($this->_sections['key']);
$this->_sections['key']['name'] = 'key';
$this->_sections['key']['loop'] = is_array($_loop=$this->_tpl_vars['notice_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<li><a href="#">>&nbsp;<?php echo $this->_tpl_vars['notice_list'][$this->_sections['key']['index']]['notice_title']; ?>
</a></li>
								<?php endfor; endif; ?>

							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<div id="resource_zong_4_3">
				<div id="right_3_top">
					<div class="lanmubox">
						<div class="hd">
							<ul><li>最新热点</li></ul>
						</div>
						<div class="bd">
							<ul id="hd_1" style="display:block">
								<?php unset($this->_sections['key']);
$this->_sections['key']['name'] = 'key';
$this->_sections['key']['loop'] = is_array($_loop=$this->_tpl_vars['note_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
								<li><a href="note_view.php?nid=<?php echo $this->_tpl_vars['note_list'][$this->_sections['key']['index']]['id']; ?>
">$&nbsp;<?php echo $this->_tpl_vars['note_list'][$this->_sections['key']['index']]['note_title']; ?>
</a></li>
								<?php endfor; endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			
		</div>
	
	
		<div id="resource_zong_5" style="width:70%">
			<table style="width:100%">
				<tr><td>
					<div id="resource_zong_5_1" style="background:#96bde0;width:97%;padding:15px;padding-left:20px;font-size:20px;font-family:'华文新魏'">
						抢先下载
					</div>
				</td></tr>
				<tr><td>
					<div>

						<?php unset($this->_sections['key']);
$this->_sections['key']['name'] = 'key';
$this->_sections['key']['loop'] = is_array($_loop=$this->_tpl_vars['source_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<a href="#">
							<div style="font-family:'华文楷体'">
								<div style="margin-top:20px;margin-left:20px;margin-bottom:20px;">
									<h3><?php echo $this->_tpl_vars['source_list'][$this->_sections['key']['index']]['source_name']; ?>
</h3><div style="float:right;margin-top:15px;"><div style="float:right;margin-right:20px;"><a href="download.php?downname=<?php echo $this->_tpl_vars['source_list'][$this->_sections['key']['index']]['source_addr']; ?>
&&price=<?php echo $this->_tpl_vars['source_list'][$this->_sections['key']['index']]['source_price']; ?>
&&u_id=<?php echo $this->_tpl_vars['source_list'][$this->_sections['key']['index']]['u_id']; ?>
"><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
image/arrow_down.gif" width="15px"></a></div><div style="float:right;margin-right:30px;">所需积分：<?php echo $this->_tpl_vars['source_list'][$this->_sections['key']['index']]['source_price']; ?>
</div><div style="float:right;margin-right:30px;">数据库</div> </div>
									<div style="margin-top:15px">上传人：<?php echo $this->_tpl_vars['source_list'][$this->_sections['key']['index']]['upload_user']; ?>
 &nbsp;&nbsp;· <?php echo $this->_tpl_vars['source_list'][$this->_sections['key']['index']]['source_datetime']; ?>
 ·  &nbsp;&nbsp;下载人数：<?php echo $this->_tpl_vars['source_list'][$this->_sections['key']['index']]['source_download_num']; ?>
人</div>
								</div>
								<hr/>
							</div>
						</a>
						<?php endfor; endif; ?>

						

						
					</div>
				<tr><td>
			</table>
		</div>
	</div>

	<div style="width:85%;background:#79A6D4;margin:30px auto;padding-top:30px;padding-bottom:30px;font-size:15px;font-family:'华文楷体'" >
		<center>
		关于我们&nbsp;&nbsp;|&nbsp;&nbsp;联系我们&nbsp;&nbsp;|&nbsp;&nbsp;意见反馈<br/><br/>
			Copyright©2005-2017&nbsp;&nbsp;Tertiary_grass.COM 版权所有<br/><br/>
			本站由沈阳师范大学软件学院技术指导
		</center>
	</div>
	
</body>
</html>