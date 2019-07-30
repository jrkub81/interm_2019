<?php 
  session_start();
  include 'header.php';
  include 'style.php';
  include 'condb.php';

  $old_password = $_POST["old_password"];
  $old_password_md5 = md5( $old_password);

  $sql_password = "SELECT user_password FROM in_user WHERE user_name ='".$_SESSION["username"]."'";
  $result = $conn->query($sql_password);
  $row = $result->fetch_assoc();
  
  $current_password = $row["user_password"];

  if ($old_password_md5==$current_password) {
    $sql = "UPDATE in_user SET user_name = '".$_POST["update_username"]."',user_password='".md5($_POST["update_password"])."'
          ,user_nickname='".$_POST["update_usernickname"]."' WHERE user_name = '".$_SESSION["username"]."' ";
          $result = $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
    $_SESSION["username"] = $_POST["update_username"];
    $_SESSION["password"] = $_POST["update_password"];
    header("location:profile.php");  
  }
  
  else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
 }else {
    header("location:new_passwordfail.php");  
 }
  $conn->close();
?>