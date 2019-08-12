<?php
		$name =  $_POST['name'];
		$email =  $_POST['email'];
		$message = $_POST['message'];
		
        $user = "root"; 
        $password = ""; 
        $host = "localhost"; 
        $dbase = "spardha"; 
        $table = "complaints"; 
        
        
        $connection= mysql_connect ($host, $user, $password);
        if (!$connection)
        {
        die ('Could not connect:' . mysql_error());
        }
        mysql_select_db($dbase, $connection);
        
        
        
        $query=mysql_query("INSERT INTO $table VALUES ('$name','$email', '$message')");
        
        header('location:index.php');
        mysql_close($connection);
        
    ?>