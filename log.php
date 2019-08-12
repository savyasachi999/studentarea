<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Input Form UI design</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="box">
	<h2>Login</h2>
	<form method="post" action="log.php">
		<div class="inputbox">
			<input type="text" name="username" required="">
			<label>username</label>
		</div>
		<div class="inputbox">
			<input type="password" name="password" required="">
			<label>password</label>
		</div>
		<div class="inputbox">
				<input type="text" name="specialcode" required="">
				<label>special code</label>
			</div>
		<input type="Submit" name="login_user">
		<p class="message"><font color="white">Haven't Signedup...?Then </font><a href="register.php"><font color="mediumseagreen">SIGNUP HERE</font></a></p>
	</form>
	</div>
</body>
</html>
		