<?php
    $con = mysqli_connect("localhost", "root", "","spardha");
    if (!$con){
      die('Could not connect: ' . mysqli_error());
    }

    $db_selected = mysqli_select_db("database",$con);
    $sql = "SELECT email FROM users";
    $result = mysqli_query($sql,$con);

    while ($row_data = mysqli_fetch_array($result)) {

       
        $from = 'interlinkspardha@gmail.com';
        $to = $row_data['email']; 
        $subject ='We are from Interlink';
        $msg = 'You have successfully uploaded';
        mail($to, $subject, $msg, $from);
    }
?>