<?php /* Smarty version 2.6.30, created on 2017-04-12 11:37:39
         compiled from login.html */ ?>
<!DOCTYPE html>

<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>帐号登录</title>
    <link type="text/css" rel="stylesheet" href="<?php echo $this->_tpl_vars['t_dir']; ?>
css/login.css">
	<body>
		<div class="main">
			<div class="login-banner"><a href="#" target="_blank"><img src="<?php echo $this->_tpl_vars['t_dir']; ?>
image/head.jpg" class="img-responsive"></a></div>
				<div class="login-part">
					<h3>帐号登录 </h3>
					<div class="user-info">
						<form id="fm1" action="" method="post">
							<input id="username" name="username" tabindex="1" placeholder="输入用户名" class="user-name" type="text">
							<input id="password" name="password" tabindex="2" placeholder="输入密码" class="pass-word" type="password" value="">
							<div class="forget-password">
								<input type="checkbox" name="rememberMe" id="rememberMe" value="true" class="auto-login" tabindex="4">
								<label for="rememberMe">下次自动登录</label>
								<a href="#" tabindex="5">忘记密码</a>
							</div>
							<input class="logging" accesskey="l" value="登 录" tabindex="6" type="submit" name="sub">
						</form>
					</div>
					
					<div class="third-part">
						<div class="register-now"><span>还没有Tertiary帐号？</span>
							<span class="register tracking-ad">
								<a href="register.php">立即注册</a>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
