if (isset($_POST['login_admin'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
		

		if (count($errors) == 0) {
			
			
			$query = "SELECT * FROM admin where uname='$username' and pwd='$password'";
			$results = mysqli_query($db, $query);
			
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: adminfolder/indexad.php');
			}else {
				
				array_push($errors, "Wrong username/password/specialcode combination");
			}
		}
	}
