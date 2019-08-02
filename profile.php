<?php 
  session_start();
include 'header.php';
include 'style.php';
include 'condb.php';

    $sql ="SELECT * FROM in_user WHERE user_name = '".$_SESSION['username']."'";
    $result = $conn->query($sql);
?>
<html lang="en">
<head>
    <title>Profile</title>
</head>
<body class="body-main">
    <?php 
    include 'head.php';
    ?>
    <h1 style="text-align:center">My profile</h1>
    <?php 
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["user_name"]!=''&& $row["user_password"]!=''&& $row["user_nickname"]=='') {   
        ?>
       <h2 style="text-align:center">Username: <?=$row["user_name"]?></h2>
       <h2 style="text-align:center">Name: ไม่มี</h2>
       <h2 style="text-align:center">Status: <?=$row["user_status"]?></h2>
       
    <?php 
            }else { ?>
             
             <h2 style="text-align:center">Username: <?=$row["user_name"]?></h2>
             <h2 style="text-align:center">Name: <?=$row["user_nickname"]?></h2>
             <h2 style="text-align:center">Status: <?=$row["user_status"]?></h2>
             
                <?php
            }
        }
    }
    ?>
    <a href="data.php"><button class="button_4">ย้อนกลับ</button></a>
</body>
</html>