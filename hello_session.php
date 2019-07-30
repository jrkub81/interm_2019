<?php
// Start the session
session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello Session</title>
</head>
<body>
    <?php
    if (empty($_SESSION["myname"]) || !($_SESSION["myname"])) {
        echo "No session variable";
    }else {
        echo  $_SESSION["myname"];
    }
   
    ?>
</body>
</html>