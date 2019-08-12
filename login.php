<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<div class="box">
	<h2>Login</h2>
	
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="inputbox">
			<input type="text" name="username" required="">
			<label>UserName</label>
		</div>
		<div class="inputbox">
			<input type="password" name="password" required="">
			<label>Password</label>
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