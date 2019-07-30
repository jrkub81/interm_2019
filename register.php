<?php 
session_start();
include 'header.php';
include 'style.php';
include 'condb.php';

?>
<h1 style = "text-align: center" class="good">Register</h1>
<form action="insert_user.php" method="POST">
<h5 style = "text-align: center">Name</h5><input type="text" name="input_name"  required>
<h5 style = "text-align: center">Username</h5><input type="text" name="input_username"  required>
<h5 style = "text-align: center">Password</h5><input type="password" name="input_password" required>
<h6 style = "text-align: center" class="fail"><?=$_SESSION["error"]?></h6>

<button class= "button_3" type="submit">submit</button>
</form>
<a href="login.php"><button class= "button_4" type="submit">Back</button></a>
<?php 

?>
