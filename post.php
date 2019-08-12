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
				<li><a href="index.php">Home</a></li>
						<li><a href="signup.html"><?php echo $_SESSION['username']; ?></a></li>
						<li><a href="index.php?logout='1'">Log Out</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Eleifend vitae urna</p>
						<h2>Generic Page Template</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
<?php 

$name= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$submitbutton= $_POST['submit'];

$position= strpos($name, "."); 

$fileextension= substr($name, $position + 1);

$fileextension= strtolower($fileextension);


$uname= $_POST['name'];
$pname= $_POST['ppname'];
$price= $_POST['price'];
$mob=$_POST['mobile'];



if (isset($name)) {



if (!empty($name)){
if (move_uploaded_file($tmp_name, "stationaryfiles/".$name)) {
echo 'Uploaded!';}
else{
echo"not uploaded";}

}
}

$user = "root"; 
$password = ""; 
$host = "localhost"; 
$dbase = "spardha"; 
$table = "stationary"; 


$connection= mysql_connect ($host, $user, $password);
if (!$connection)
{
die ('Could not connect:' . mysql_error());
}
mysql_select_db($dbase, $connection);


if(!empty($pname)&&!empty($uname)&&!empty($price)&&!empty($mob)){
mysql_query("INSERT INTO $table (productname, username,price,mobileno,filenam)
VALUES ('$pname', '$uname', '$price', '$mob', '$name')");
echo"hi";
}

mysql_close($connection);



$user = "root"; 
$password = ""; 
$host = "localhost"; 
$dbase = "spardha"; 
$table = "stationary"; 
$mobile= $_POST['mobile'];
$email=$_POST['email'];

// Connection to DBase 
mysql_connect($host,$user,$password); 
@mysql_select_db($dbase) or die("Unable to select database");

$result= mysql_query( "SELECT productname, username,price,mobileno,filenam FROM $table" ) 
or die("SELECT Error: ".mysql_error()); 
print "<table border=0>\n"; 
print "<tr>\n";
$count=0;
while ($row = mysql_fetch_array($result)){ 
if($count<4){
$files_field= $row['filenam'];
$files_show= "stationaryfiles/$files_field";
$pname1= $row['productname'];
$uname1= $row['username'];
$price1= $row['price'];
$mobileno1= $row['mobileno'];
print "\t<td>\n"; 
echo "<div>";
echo "<div ><img src='$files_show' height='200px' width='auto'></div><br>";

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

 




require_once('email/class.phpmailer.php');
include("email/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded		
	  
$mail = new PHPMailer();
$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "interlinkspardha";  // GMAIL username
$mail->Password   = "interlink999";            // GMAIL password

$mail->SetFrom('iste2k18@gmail.com', 'NIPUNA,ISTE'); // Change the name as you want
$mail->Subject    = "upload info";
$mail->Body = "Congrats!!!! you are successfully uploaded your product in our site. ";
$mail->AddAddress("$email");

$mail->Send();

echo "<script>alert('Product has been uploaded...Check your mail!')</script>"; 	  


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
