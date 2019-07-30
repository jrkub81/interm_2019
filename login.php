<?php
// Start the session
session_start();
?>
<html lang="en">
<head>
    <?php 
    include 'header.php';
    ?>
    <title>Login</title>
</head>
    <?php 
    include 'style.php';
    ?>
<body>
        <?php 
        include 'condb.php';
        // $sql_string = "SELECT * FROM in_cars";
        // $result = $conn->query($sql_string);
        
        ?>
    
    <h1 style = "text-align: center">Sign In</h1>
    <form action="check_login.php" method="post">
    <h2 style = "text-align: center">Username</h2>
    <input type="text" name="username" required>
    <h2 style = "text-align: center">Password</h2>
    <input type="password" name="password" required>
    <br>
    <button class ="button_3" type="submit">submit</button>
    </form>
    <form action="register.php" method="POST"></form>
    <?php 
    $error = "";
    $_SESSION["error"] = $error;
    ?>
    <a href="register.php"><button class="button_3">Register</button></a>
    </form>

</body>
</a>
