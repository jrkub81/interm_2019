<?php 
  session_start();
include 'header.php';
include 'style.php';
?>
<?php 
include 'condb.php';
    $pwd = $_POST['input_password'];
    
    if (strlen($pwd) < 8) {
        header("location:register.php");
        $error = "Password too short!"; 
    }
    elseif (!preg_match("#[0-9]+#", $pwd)) {
      header("location:register.php");
      $error = "Password must include at least one number!";
     }
    elseif (!preg_match("#[a-z]+#", $pwd)) {
      header("location:register.php");
      $error = "Password must include at least one letter!";
      }
    elseif (!preg_match("#[A-Z]+#", $pwd)) {
        header("location:register.php");
        $error = "Password must include at least one Upper letter!";
    }
    else{
      $sql_insert = "INSERT INTO in_user(user_nickname,user_name,user_password,creatdate) 
      VALUE ('".$_POST["input_name"]."','".$_POST["input_username"]."','".md5($_POST["input_password"])."',NOW()) ";
      $result = $conn->query($sql_insert);
        if ( $result === TRUE) {
    header("location:login.php");
      } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
} 
    }
  $_SESSION["error"] = $error;
       
$conn->close();
?>

