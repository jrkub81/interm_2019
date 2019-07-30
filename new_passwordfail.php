<?php 
session_start();
include 'header.php';
include 'style.php';
include 'condb.php';
?>
<html lang="en">
<head>
    <title>Update New password fail</title>
</head>
<body>
        <h1 class= "fail" style = "text-align: center">Oop!!</h1>
        <h5 class= "fail" style = "text-align: center">Update Password Fail</h5>
        <h5 class= "fail" style = "text-align: center" >Your old password are incorect</h5>
        <br>
        <a href="edit_profile.php"><button class= "button_4" type="submit">กลับ</button></a>
</body>
</html>