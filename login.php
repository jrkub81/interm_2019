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
<body class="body-main">
        <?php 
        include 'condb.php';
        // $sql_string = "SELECT * FROM in_cars";
        // $result = $conn->query($sql_string);
        
        ?>
    
    
    <img class="img-pro mx-auto d-block" src="carsimg/cars.jpg" width='350' height='350'>
    <h1 class="h1-pro" style = "text-align: center">Sign In</h1>
    <br>
    <form action="check_login.php" method="post">

    <div class="input-group input-group-lg">
    <div class="input-group-prepend">
      <span class="input-group-text h1-pro" id="inputGroup-sizing-lg">Username</span>
    </div>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="username" required>
    </div>
    <br>
    <div class="input-group input-group-lg">
    <div class="input-group-prepend">
      <span class="input-group-text h1-pro" id="inputGroup-sizing-lg">Password</span>
    </div>
    <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" name="password" required>
    </div>
    <br>
    <button class ="button_3 h1-pro" type="submit">submit</button>
    </form>
    <form action="register.php" method="POST"></form>
    <?php 
    $error = "";
    $_SESSION["error"] = $error;
    ?>
    <a href="register.php"><button class="button_3 h1-pro">Register</button></a>
    </form>

</body>
</a>
