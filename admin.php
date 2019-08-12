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
	<form method="post" action="server.php">
		<div class="inputbox">
			<input type="text" name="username" required="">
			<label>Admin Name</label>
		</div>
		<div class="inputbox">
			<input type="password" name="password" required="">
			<label>password</label>
		</div>
		
        <input type="Submit" name="login_admin">
    <a href="log.php"style="color:white;"> Are You a user?</a>
	</form>
	</div>
</body>
</html>
		