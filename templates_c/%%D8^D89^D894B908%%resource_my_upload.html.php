<?php /* Smarty version 2.6.30, created on 2017-04-18 09:59:06
         compiled from resource_my_upload.html */ ?>
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
				<li><a href="resource_main.php">首页</a></li>
				<li><a href="resource_classify.php">分类下载</a></li>
				<li><a href="resource_groom.php">推荐下载</a></li>
				<li><a href="resource_new.php">最新下载</a></li>
				<li><a href="resource_upload.php">资源上传</a></li>
				<li style="background:#7c9acc">我的资料</li>
			</ul>
		</div>
		<div style="width:100%; font-family:'华文楷体';font-weight:bold;color:#E5FBBB;background:#5192cc;padding-top:6px;padding-bottom:6px;"><span style="margin-left:20px">首页&nbsp;>&nbsp;我的资料&nbsp;>&nbsp;我的上传</span></div>
		
		<div style="font-family:'华文楷体';font-size:20px;margin-left:20px;margin-top:20px;">
			<div style="border:solid 1px #5192cc;width:250px;position:absolute">
				<table id="resource_my_1" border="0" width="250px" height="180px">
					<tr style="background:#094dbe;color:white"><td><a href="resource_my.php">全部资源</a></td></tr>
					<tr><td><a href="resource_my_upload.php"  style="color:red">我的上传</a></td></tr>
					<tr><td><a href="resource_my_collect.php">我的收藏</a></td></tr>
				</table>
			</div>
			
			<div style="width:835px;margin-left:290px;font-family:'华文楷体';font-size:17px;color:#123053">
				<table border="0" width="835px">
					<tr style="background:#5192cc"><td colspan="6" style="padding:8px"><span style="float:left">我上传的资源（<?php echo $this->_tpl_vars['upload_num']; ?>
个）</span></td></tr>
					<tr class="resource_my_3" style="background:#68a3d8"><td width="400px" colspan="3">标题/下载积分</td><td>下载次数</td><td>获得积分</td><td>上传日期</td></tr>
					
						<?php unset($this->_sections['key']);
$this->_sections['key']['name'] = 'key';
$this->_sections['key']['loop'] = is_array($_loop=$this->_tpl_vars['upload_list']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						<tr class="resource_my_3"><td colspan="3"><div style="float:left"><?php echo $this->_tpl_vars['upload_list'][$this->_sections['key']['index']]['source_name']; ?>
</div> <div style="float:right;padding-right:80px;"><?php echo $this->_tpl_vars['upload_list'][$this->_sections['key']['index']]['source_price']; ?>
</div></td><td style="padding-left:40px">3</td><td style="padding-left:40px"><?php echo $this->_tpl_vars['upload_list'][$this->_sections['key']['index']]['get_intergral']; ?>
</td><td><?php echo $this->_tpl_vars['upload_list'][$this->_sections['key']['index']]['source_datetime']; ?>
</td></tr>
						<?php endfor; endif; ?>
				</table>
			</div>
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