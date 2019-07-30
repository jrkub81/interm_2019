<?php 
 $db_host = "localhost";
 $db_username = "root";
 $db_password = "";
 $db_name = "intern_2019";
 
 // Create connection
 $conn = mysqli_connect($db_host, $db_username, $db_password,$db_name);
 
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
 //echo "Connected successfully";
 $conn->set_charset("utf8");
?>