<?php
$user = "root"; 
$password = ""; 
$host = "localhost"; 
$dbase = "spardha"; 
$table = "stationary"; 
 $mobile=$_POST['mobile'];
// Connection to DBase 
mysql_connect($host,$user,$password); 
@mysql_select_db($dbase) or die("Unable to select database");
print" <form action='deletedatabase.php' method='post'>";
$result= mysql_query( "SELECT pid,productname, username,price,mobileno,filenam FROM $table where mobileno='$mobile' " ) 
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
$pid= $row['pid'];
print "\t<td>\n"; 
echo "<div>";
echo "<div ><img src='$files_show' height='100px' width='auto'>$files_field</div><br>";
echo "<font face=arial size=4 align=center>$pname1<br>$uname1<br>$price1<br>$mobileno1</font>";
echo "pid:".$pid."<br>";
echo"Enter above pid: <input type='text' name='pid' >";

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
print"<input type='submit' name='submit' value='delete'/>";


print" </form>";
?>
