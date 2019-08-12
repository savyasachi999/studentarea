<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$password = "";
	$specialcode   = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'spardha');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$mobile = mysqli_real_escape_string($db, $_POST['mobile']);
		$year = mysqli_real_escape_string($db, $_POST['year']);
		$branch = mysqli_real_escape_string($db, $_POST['branch']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$specialcode = mysqli_real_escape_string($db, $_POST['specialcode']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		if (empty($specialcode)) { array_push($errors, "special code is required"); }

		

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users VALUES('$username', '$email', '$mobile', '$year', '$branch', '$password','$specialcode')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$specialcode = mysqli_real_escape_string($db, $_POST['specialcode']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}
		if (empty($specialcode)) {
			array_push($errors, "special code is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			
			$query = "SELECT * FROM users where username='$username' and specialcode='$specialcode' and passwor='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) >= 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				
				array_push($errors, "Wrong username/password/specialcode combination");
			}
		}
	}
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
	
?>