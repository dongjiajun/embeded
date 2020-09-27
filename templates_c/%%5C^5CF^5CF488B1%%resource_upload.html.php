<?php /* Smarty version 2.6.30, created on 2017-04-18 20:13:34
         compiled from resource_upload.html */ ?>
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
			<div style="margin-top:32px;float:left;padding-left:10px;font-weight:bold;" ><span style="color:#d3e4f4;margin-top:-10px;">上&nbsp;传&nbsp;资&nbsp;料</span></div>
		</div>
		
		
		<div id="resource_zong_1">
			<ul>
				<li><a href="resource_main.php">首页</a></li>
				<li><a href="resource_classify.php">分类下载</a></li>
				<li><a href="resource_groom.php">推荐下载</a></li>
				<li><a href="resource_new.php">最新下载</a></li>
				<li style="background:#7c9acc">资源上传</a></li>
				<li><a href="resource_my.php">我的资料</a></li>
			</ul>
		</div>
		<div style="width:100%; font-family:'华文楷体';font-weight:bold;color:#E5FBBB;background:#5192cc;padding-top:6px;padding-bottom:6px;"><span style="margin-left:20px">首页>资源上传</span></div>
		
		<div style="margin-top:30px;margin-left:100px;font-family:'华文楷体';font-weight:bold">
			<form action="" method="post" enctype="multipart/form-data">
				<div style="margin-left:160px"><input type="file" name="upfile"/></div>
				<div style="margin-top:30px;border:2px solid #5192cc;width:600px;">
					<div align="center" style="background:#5192cc;padding:10px;"><h3>资料信息填写</h3></div>
					<div align="center" style="margin-top:20px;margin-bottom:20px;">
						<table border="0" height="300px">
							<tr> <td align="right">资料名称&nbsp;:&nbsp;</td> <td><input type="text" required placeholder="请输入名称" style="height:25px;width:300px" name="source_name"></td> </tr>
							<tr> <td align="right">关键字(Tag)&nbsp;:&nbsp;</td> <td><input type="text" required placeholder="标签可填1-10个" style="height:25px;width:300px" name="source_keyword"></td> </tr>
							<tr> <td align="right">资料类型&nbsp;:&nbsp;</td> <td>
								<!--如果这里导致上传的文件没有分类的话，就添加一个默认的-->
								<select style="height:25px" name="source_tid">
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
							</td> </tr>
							<tr> <td align="right">下载积分&nbsp;:&nbsp;</td> <td>
								<select style="height:25px" name="source_price">
									<option value="0">&nbsp;&nbsp;&nbsp;0&nbsp;&nbsp;&nbsp;</option><option value="1">&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;</option>
									<option value="2">&nbsp;&nbsp;&nbsp;2&nbsp;&nbsp;&nbsp;</option><option value="3">&nbsp;&nbsp;&nbsp;3&nbsp;&nbsp;&nbsp;</option>
									<option value="4">&nbsp;&nbsp;&nbsp;4&nbsp;&nbsp;&nbsp;</option><option value="5">&nbsp;&nbsp;&nbsp;5&nbsp;&nbsp;&nbsp;</option>
									<option value="6">&nbsp;&nbsp;&nbsp;6&nbsp;&nbsp;&nbsp;</option><option value="7">&nbsp;&nbsp;&nbsp;7&nbsp;&nbsp;&nbsp;</option>
									<option value="8">&nbsp;&nbsp;&nbsp;8&nbsp;&nbsp;&nbsp;</option><option value="9">&nbsp;&nbsp;&nbsp;9&nbsp;&nbsp;&nbsp;</option>
								</select>
							</td> </tr>
							<tr> <td align="right">资料描述&nbsp;:&nbsp;</td> <td><textarea rows="8" cols="60" required placeholder="介绍一下您的资源吧，让更多的人能够了解。" name="source_introduce"></textarea></td> </tr>
						</table>
					</div>
				</div>
				
				<div style="margin-top:40px;margin-left:60px">
					<table border="0" width="450px" height="150px">
						<tr><td>验证码&nbsp;:&nbsp;</td><td><input type="text" required placeholder="请输入验证码" style="height:25px;width:150px"></td><td>51342</td><td>看不清？换一张</td></tr>
						<tr><td align="center" colspan="4"><input type="checkbox" required>&nbsp;&nbsp;同意 &nbsp;&nbsp;&nbsp;&nbsp;上传协议</td></tr>
						<tr><td  align="center" colspan="4"><input style="height:34px;width:150px;background-color:blue;border-style:none;color:white;font-size:20px;" type="submit" value="提交" name="submit"/></td></tr>
					</table>
				</div>
			</form>
		</div>
		
		<div style="float:right;margin-top:-600px; font-family:'华文楷体';margin-right:30px;line-height:30px;width:200px;border:dotted #5192cc 6px;padding:30px">
			<h3>上传资料须知</h3><br/>
			1.存储空间：不限<br/>
			2.存储时间：永久<br/>
			3.每次只能上传一份资源<br/>
			4.每份资源最大为50M<br/>
			5.禁止上传任何政治敏感、色情<br/>
			6.要遵循上传协议<br/>
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