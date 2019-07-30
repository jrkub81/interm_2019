<html lang="en">
<head>
<?php 
    include 'header.php';
    ?>
    <title>Carcountry_delete</title>
</head>
<?php 
    include 'style.php';
    ?>
<body>
<?php 
      include 'condb.php';
      if (!empty($_GET["id"])) {
        $get_id =  $_GET["id"];

      $sql_string = "DELETE FROM in_carscountry WHERE cc_id = ".$get_id;
        //echo $sql_string;
        if ($conn->query($sql_string) === TRUE) {
            echo "Record delete successfully. <br>";
            echo "<a href='car_country.php'>กลับ</a>";
        } else {
            echo "Error: " . $sql_string . "<br>" . $conn->error;
        }
    }
      ?>
</body>
</html>