<html lang="en">
<head>
<?php 
    include 'header.php';
    ?>
    <title>Car Delete</title>
</head>
<?php 
    include 'style.php';
    ?>
<body>
    <?php 
      include 'condb.php';
      if (!empty($_GET["id"])) {
        $get_id =  $_GET["id"];

      $sql_string = "DELETE FROM in_cars WHERE in_carsid = ".$get_id;
        //echo $sql_string;
        if ($conn->query($sql_string) === TRUE) {
            echo "Record delete successfully. <br>";
            echo "<a href='car_complete.php'>กลับ</a>";
        } else {
            echo "Error: " . $sql_string . "<br>" . $conn->error;
        }
    }
    ?>
</body>
</html>