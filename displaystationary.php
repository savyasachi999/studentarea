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
		<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 200px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
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
				<li><a href="index.php">Home</a></li>
					<li><a href="signup.html"><?php echo $_SESSION['username']; ?></a></li>
					<li><a href="index.php?logout='1'">Log Out</a></li>
				</ul>
			</nav>
			
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
        
        <form action="search.php" method="post">
           
            <div class="topnav">
			<div class="search-container">
    
      <input type="text" style="color:black" placeholder="Search.." name="valueToSearch">
      <button type="submit" name="search"><i class="fa fa-search"></i></button></div></div>
    </form>

					<a href="postproduct.php"><button>Do u want to post your product??</button></a>
 <a href="deleteproduct.html"><button>delete your product??</button></a>
					</header>
				</div>
			</section>






		
		<!-- Two -->
			<section id="two" class="wrapper style2">
<?php
$user = "root"; 
$password = ""; 
$host = "localhost"; 
$dbase = "spardha"; 
$table = "stationary"; 
 
// Connection to DBase 
mysql_connect($host,$user,$password); 
@mysql_select_db($dbase) or die("Unable to select database");

$result= mysql_query( "SELECT productname, username,price,mobileno,filename FROM $table" ) 
or die("SELECT Error: ".mysql_error()); 
print "<table border=0>\n"; 
print "<tr>\n";
$count=0;
while ($row = mysql_fetch_array($result)){ 
if($count<4){
$files_field= $row['filename'];
$files_show= "stationaryfiles/$files_field";
$pname1= $row['productname'];
$uname1= $row['username'];
$price1= $row['price'];
$mobileno1= $row['mobileno'];
print "\t<td>\n"; 
echo "<div>";
echo "<div ><img src='$files_show' height='300px' width='auto'></div><br>";
echo "<font face=arial size=4 align=center>$pname1<br>$uname1<br>$price1<br>$mobileno1</font>";
echo"</div>";
print "</td>\n";
$count=$count+1;
}
else{
	$count=0;
	print "<tr>\n";
}
} 
print "</tr>\n"; 
print "</table>\n"; 

?>



		
</section>

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