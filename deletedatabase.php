<?php
$pid=(int)$_POST['pid'];
$user = "root"; 
$password = ""; 
$host = "localhost"; 
$dbase = "spardha"; 
$table = "stationary"; 
// Connection to DBase 
mysql_connect($host,$user,$password); 
@mysql_select_db($dbase) or die("Unable to select database");
$result= mysql_query( "delete FROM $table where pid='$pid' " ) 
or die("SELECT Error: ".mysql_error()); 
if($result)
{
    echo"successfully deleted";

}
?>