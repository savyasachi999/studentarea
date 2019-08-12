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
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.html">Hielo <span>by TEMPLATED</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
				<li><a href="#">Home</a></li>
					<li><a href="signup.html"><?php echo $_SESSION['username']; ?></a></li>
					<li><a href="index.php?logout='1'">Log Out</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
                    <a href="upload2eee.php"><button >Do u want to upload a file</button></a>
					</header>
				</div>
			</section>

		<!-- Main -->
			<div id="main" class="container">

				<!-- Elements -->
					<h2 id="elements">Elements</h2>
					
                    
								<div class="table-wrapper">
<?php
$user = "root"; 
$password = ""; 
$host = "localhost"; 
$dbase = "spardha"; 
$table = "xeroxeee"; 
 
// Connection to DBase 
mysql_connect($host,$user,$password); 
@mysql_select_db($dbase) or die("Unable to select database");

$result= mysql_query( "SELECT subject, year, filename FROM $table order by year" ) 
or die("SELECT Error: ".mysql_error()); 

print "<table border=1>\n"; 
print "<tr>\n"; 
print "<th>subject name</th>\n";
print "<th>subject year</th>\n";
print "<th>Download Here</th>\n";
print "</tr>\n"; 
while ($row = mysql_fetch_array($result)){ 
$files_field= $row['filename'];
$files_show= "fileuploadeee/$files_field";
$descriptionvalue= $row['subject'];
$year1= $row['year'];
print "<tr>\n"; 
print "\t<td>\n"; 
echo "<font face=arial size=4/>$descriptionvalue</font>";
print "</td>\n";
print "\t<td>\n"; 
echo "<font face=arial size=4/>$year1</font>";
print "</td>\n";
print "\t<td>\n"; 
echo "<div align=center><a href='$files_show'>$files_field</a></div>";
print "</td>\n";
print "</tr>\n"; 
} 
print "</table>\n"; 


?></div>



<!-- Footer -->
<footer id="footer">
<div class="container">
<ul class="icons">
<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
</ul>
</div>
<div class="copyright">
&copy; Untitled. All rights reserved.
</div>
</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>