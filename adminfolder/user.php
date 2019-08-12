<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Hielo by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
	

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
				<li><a href="#">Home</a></li>
					<li><a href="signup.html"><?php echo $_SESSION['username']; ?></a></li>
					<li><a href="index.php?logout='1'">Log Out</a></li>
				</ul>
			</nav>

		

			<div id="main" class="container">

				<!-- Elements -->
					<h2 id="elements">Elements</h2>
					
                    
								<div class="table-wrapper">
										<?php
										$user = "root"; 
										$password = ""; 
										$host = "localhost"; 
										$dbase = "spardha"; 
										$table = "users"; 
										 
										// Connection to DBase 
										mysql_connect($host,$user,$password); 
										@mysql_select_db($dbase) or die("Unable to select database");
                                        $count=mysql_query( "SELECT count(mobileno) FROM $table " ) ;
                                       
                                        $row = mysql_fetch_array($count);
                                        $total = $row[0];
                                        echo"no of users: ".$total;
										$result= mysql_query( "SELECT username,email,mobileno,branch FROM $table " ) 
										or die("SELECT Error: ".mysql_error()); 
									
print "<table border=1>\n"; 
print "<tr>\n"; 
print "<th>username</th>\n";
print "<th>email</th>\n";
print "<th>mobileno</th>\n";
print "<th>branch</th>\n";
print "</tr>\n"; 
while ($row = mysql_fetch_array($result)){ 

$uname= $row['username'];
$mail= $row['email'];
$mobile= $row['mobileno'];
$branch= $row['branch'];
print "<tr>\n"; 
print "\t<td>\n"; 
echo "<font face=arial size=4/>$uname</font>";
print "</td>\n";
print "\t<td>\n"; 
echo "<font face=arial size=4/>$mail</font>";
print "</td>\n";
print "\t<td>\n"; 
echo "<font face=arial size=4/>$mobile</font>";
print "</td>\n";
print "\t<td>\n"; 
echo "<font face=arial size=4/>$branch</font>";
print "</td>\n";
print "</tr>\n"; 
} 
print "</table>\n"; 


?>
										
							
						</div>
					
			

		<!-- Footer -->
			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>