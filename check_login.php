<?php
// Start the session
session_start();

$strUsername = $_POST['username'];
$strPassword = $_POST['password'];

include 'condb.php';
$sql = "SELECT * FROM in_user WHERE user_name = '".$strUsername."' 
        and user_password = '".$strPassword."'";

$sql2 = "SELECT * FROM in_user WHERE user_name = '".$strUsername."' 
and user_password = '".md5($strPassword)."'";


$result = $conn->query($sql);
$row = $result->fetch_assoc();

$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();


if ($result->num_rows != 0) {  
    $_SESSION["username"] = $row["user_name"];
    $_SESSION["password"] = $row["user_password"];
    header("location:data.php");

}elseif ($result2->num_rows != 0) {
    $_SESSION["username"] = $row2["user_name"];
    $_SESSION["password"] = $row2["user_password"];
    header("location:data.php");
}
else {
    $_SESSION["username"] = '';
    $_SESSION["user_password"] = '';
    header("location:login_fail.php");
    
}
?>
