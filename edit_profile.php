<?php 
  session_start();
?>
<html lang="en">
<head>
    <?php 
    include 'header.php';
    ?>
    <title>Edit Profile</title>
</head>
<?php 
   include 'style.php';
    ?>
<body>
    <?php 
    include 'condb.php';
    $sql_user = "SELECT * FROM in_user WHERE user_name = '".$_SESSION["username"]."'";
    $result = $conn->query($sql_user);
                if ($result->num_rows > 0) { 
                    $row = $result->fetch_assoc();
    ?>

    <h1 style = "text-align: center">Edit Profile</h1>
    <form action="check_editprofile.php" method="POST">
    <h5 style = "text-align: center">name</h5><input type="text" name="update_usernickname" value ="<?=$row["user_nickname"]?>">
    <h5 style = "text-align: center">Username</h5><input type="text" name="update_username" value ="<?=$row["user_name"]?>">
    <h5 style = "text-align: center">Current Password</h5><input type="password" name="old_password" required>
    <h5 style = "text-align: center">New Password</h5><input type="password" name="update_password" required>
    <input type= "hidden" name= "update_userid" value ="<?=$row["user_id"]?>" >
    <br>
    <button class= "button_3" type="submit">submit</button>
    </form>
    <a href="data.php"><button class= "button_4" type="submit">Back</button></a>
    <?php
                }
    ?>
    
</body>
</html>