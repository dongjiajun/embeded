<?php /* Smarty version 2.6.30, created on 2017-04-12 11:36:25
         compiled from register.html */ ?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">	
		<link href="<?php echo $this->_tpl_vars['t_dir']; ?>
css/register.css" rel="stylesheet">
	</head>
	
	<body>
		<form name="reg" method="post" action="">
			<div class="zczh">
				<h2>注册账号</h2>
				<div class="form-group">
					<div style="position: relative">
						<input id="registerName" name="registerName"  placeholder="请输入邮箱或手机号" required="required" type="text">
						<span class="loading" style="display: inline;"><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
image/ajax-loader-big.gif" height="16" width="16"></span>
					</div>

					<div class="regr" style="display: block;">
						<div style="display: block;">
							<input class="user_verify" id="codev" maxlength="4" name="codev" placeholder="验证码" type="text" value=""><a class="boxyzm_yy " id="captchaImage"><img id="w0-image" src="confirm_pic.php" alt="图片无法加载" title="点击换图" style="cursor:pointer"></a>
						</div>
						<input name="checkUser" id="username" value="" placeholder="用户名" type="text">
						<input id="userpwd" size="15" name="password" placeholder="密码" type="password">
					</div>
					
					<p class="ydxy"><input type="checkbox" checked="" name="checkbox" value=""><span>我已经认真阅读并同意<a target="_blank" href="#">《Tertiary服务条款》</a></span></p>
					<input id="logging" accesskey="l" value="立 即 注 册" tabindex="6" type="submit" name="sub">
				</div>
			</div>
		</form>
	</body>
</html>

  

	