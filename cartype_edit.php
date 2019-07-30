<html lang="en">
<head>
<?php 
    include 'header.php';
    ?>
    <title>Car Type Edit</title>
</head>
<?php 
    include 'style.php';
    ?>
<body>
<?php 
      include 'condb.php';
      if ($_SERVER["REQUEST_METHOD"]==="POST") {

        if (!empty($_POST["input_ct_name"])) {

        $upmy_type = $_POST["input_ct_name"];
        $upmy_typeid = $_POST["input_ct_id"];

        $sql_string = "UPDATE in_carstype SET ct_name = '{$upmy_type}' WHERE ct_id = ".$upmy_typeid;
        //echo $sql_string;
        if ($conn->query($sql_string) === TRUE) {
            echo "New record created successfully<br>";
            echo "<a href='car_type.php'>กลับ</a>";
        } else {
            echo "Error: " . $sql_string . "<br>" . $conn->error;
        }
        }else {
            echo "Input is empty";
        }
    }
    if (!empty($_GET["id"])) {
        $get_id =  $_GET["id"];
        $sql_string = "SELECT * FROM in_carstype WHERE ct_id = ".$get_id;
        $result = $conn->query($sql_string);
        $row=$result->fetch_assoc();
      ?>

     <form action="?" method = "post" class= "ed-tb">
        <table class = my-table>
              <h1 style = "text-align: center">แก้ไขประเทศผู้ผลิตรถยนต์</h1>
              <tr>
              <th>ชื่อ</th>
              </tr>
              <td><input class ="input" type="text" name="input_ct_name" value ="<?=$row["ct_name"]?>" placeholder = "name of car type" ></td>
              <input type= "hidden" name= "input_ct_id" value ="<?=$row["ct_id"]?>" >
        </table>
        <br>
              <button class = button_3  type="submit" name="button">
                ส่งข้อมูล
              </button>
    </form>
    <form action = "car_type.php">
    <button class = button_4  type="submit" name="button">
    ยกเลิก
    </button>
    <?php 
    }
    ?>
</body>
</html>