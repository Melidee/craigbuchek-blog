<!DOCTYPE html>

<!--[if IE 8]>
		<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="en-US">
	<![endif]-->
<!--[if !(IE 8) ]><!-->
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
<!--<![endif]-->
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<title>Craig Buchek's Blog ‹ Log In</title>
<link href="//s.w.org" rel="dns-prefetch"/>
<link href="../wp-admin/load-styles.php?c=0&amp;dir=ltr&amp;load%5B%5D=dashicons,buttons,forms,l10n,login&amp;ver=4.7.2" media="all" rel="stylesheet" type="text/css"/>
<meta content="noindex,follow" name="robots"/>
<meta content="width=device-width" name="viewport"/>
</head>
<body class="login login-action-login wp-core-ui locale-en-us">
<div id="login">
<h1><a href="https://wordpress.org/" tabindex="-1" title="Powered by WordPress">Craig Buchek's Blog</a></h1>
<form action="http://blog.craigbuchek.com/wp-login.php" id="loginform" method="post" name="loginform">
<p>
<label for="user_login">Username or Email Address<br/>
<input class="input" id="user_login" name="log" size="20" type="text" value=""/></label>
</p>
<p>
<label for="user_pass">Password<br/>
<input class="input" id="user_pass" name="pwd" size="20" type="password" value=""/></label>
</p>
<p class="forgetmenot"><label for="rememberme"><input id="rememberme" name="rememberme" type="checkbox" value="forever"/> Remember Me</label></p>
<p class="submit">
<input class="button button-primary button-large" id="wp-submit" name="wp-submit" type="submit" value="Log In"/>
<input name="redirect_to" type="hidden" value="http://blog.craigbuchek.com/wp-admin/"/>
<input name="testcookie" type="hidden" value="1"/>
</p>
</form>
<p id="nav">
<a href="wp-login.php?action=lostpassword">Lost your password?</a>
</p>
<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>
<p id="backtoblog"><a href="">← Back to Craig Buchek's Blog</a></p>
</div>
<div class="clear"></div>
</body>
</html>
