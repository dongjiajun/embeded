<?php /* Smarty version 2.6.30, created on 2017-05-04 15:26:24
         compiled from index_bottom.html */ ?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CSS Zen Garden: The Beauty of CSS Design</title>

	<link rel="stylesheet" media="screen" href="<?php echo $this->_tpl_vars['t_dir']; ?>
css/170.css">
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['t_dir']; ?>
js/jquery-1.4.2.js"></script>
	<script type="text/javascript" src="<?php echo $this->_tpl_vars['t_dir']; ?>
js/fun.js"></script>
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
		function circle_control(circle)
		{
			rotate_1 = circle;
			$("#background_image").animate({opacity:"0"},1000,function(){$(this).css("background-image","url('<?php echo $this->_tpl_vars['t_dir']; ?>
image/top/"+circle+".jpg')")});
			for(var i=1;i<7;i++)
			{
				if(i==circle)
				{
					$("#circle_"+i)[0].style.backgroundColor="#bad8d5";
				}
				else
				{
					$("#circle_"+i)[0].style.backgroundColor="gray";
				}
			}
			$("#background_image").animate({opacity:"1"},1000);
			rotate_1--;
			if(rotate_1==0)
			{
				rotate_1=6;
			}
			setTimeout("circle_control("+rotate_1+")",10000);
		}
		setTimeout("circle_control("+rotate_1+")",10000);
		
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
</head>

<body id="css-zen-garden">
	<div id="zong_1">
		<div id="left_1">
			<div class="wrapper1">
				<ul>
					<li><a href=""><figure><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
image/001.png" width="30px"/><figcaption style="margin-top:-10px">首页</figcaption></figure></a></li>
					<li><a href="note_add.php"><figure><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
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
			<a href="#">
				<header role="banner" id="background_image">
					<div style="height:315px"></div>
					<div style="background-color:rgba(100,100,100,0.6);width:100%;height:50px;">
						<div id="biaoqian">事了拂袖去，深藏功与名</div>
						<div style="padding-top:10px">
							<div class="circle" id="circle_1" onmouseover="circle_control(1)" style="width:20px; height:20px; background-color:gray; border-radius:20px;"></div>
							<div class="circle" id="circle_2" onmouseover="circle_control(2)" style="width:20px; height:20px; background-color:gray; border-radius:20px;"></div>
							<div class="circle" id="circle_3" onmouseover="circle_control(3)" style="width:20px; height:20px; background-color:gray; border-radius:20px;"></div>
							<div class="circle" id="circle_4" onmouseover="circle_control(4)" style="width:20px; height:20px; background-color:gray; border-radius:20px;"></div>
							<div class="circle" id="circle_5" onmouseover="circle_control(5)" style="width:20px; height:20px; background-color:gray; border-radius:20px;"></div>
							<div class="circle" id="circle_6" onmouseover="circle_control(6)" style="width:20px; height:20px; background-color:#bad8d5; border-radius:20px;"></div>
						</div>
					</div>
				</header>
				</a>
				<div class="summary" id="zen-summary" role="article">
					<p>A demonstration of what can be accomplished through <abbr title="Cascading Style Sheets">CSS</abbr>-based design. Select any style sheet from the list to load it into this page.</p>
					<p>Download the example <a href="" title="This modified.">html file</a> and <a href="" title="This modify.">css file</a></p>
				</div>

				<div class="preamble" id="zen-preamble" role="article">
					<h3>The Road to Enlightenment</h3>
						</div>
			</section>

			<div class="main supporting" id="zen-supporting" role="main">
				<div class="explanation" id="zen-explanation" role="article">
					<h3>So What is This About?</h3>
					</div>

				<div class="participation" id="zen-participation" role="article">
					<h3>Participation</h3>
							</div>

				<div class="benefits" id="zen-benefits" role="article">
					<h3>Benefits</h3>
					</div>

				<div class="requirements" id="zen-requirements" role="article">
					<h3>Requirements</h3>
						</div>

				<footer>
					<a href="" title="Check" class="zen-validate-html">HTML</a>
					<a href="" title="Check" class="zen-validate-css">CSS</a>
					<a href="" title="View" class="zen-license">CC</a>
					<a href="" title="Read" class="zen-accessibility">A11y</a>
					<a href="" title="Fork" class="zen-github">GH</a>
				</footer>
			</div>
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
				<tr><td>排&nbsp;&nbsp;名：</td> <td><?php echo $this->_tpl_vars['user_ranking']; ?>
</td></tr>
				<tr><td>签&nbsp;&nbsp;到：</td> <td><div id="sign_pic"><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
image/Sign.png" height="20px" onclick="handle()"/></div></td></tr>
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