<html lang="en">
<head>
<?php 
    include 'header.php';
    ?>
    <title>Car Country Edit</title>
</head>
<?php 
    include 'style.php';
    ?>
<body>
<?php 
      include 'condb.php';
      if ($_SERVER["REQUEST_METHOD"]==="POST") {

        if (!empty($_POST["input_cc_name"])) {

        $upmy_country = $_POST["input_cc_name"];
        $upmy_countryid = $_POST["input_cc_id"];

        $sql_string = "UPDATE in_carscountry SET cc_name = '{$upmy_country}' WHERE cc_id = ".$upmy_countryid;
        //echo $sql_string;
        if ($conn->query($sql_string) === TRUE) {
            echo "New record created successfully<br>";
            echo "<a href='car_country.php'>กลับ</a>";
        } else {
            echo "Error: " . $sql_string . "<br>" . $conn->error;
        }
        }else {
            echo "Input is empty";
        }
    }
    if (!empty($_GET["id"])) {
        $get_id =  $_GET["id"];
        $sql_string = "SELECT * FROM in_carscountry WHERE cc_id = ".$get_id;
        $result = $conn->query($sql_string);
        $row=$result->fetch_assoc();
      ?>

     <form action="?" method = "post" class= "ed-tb">
        <table class = my-table>
              <h1 style = "text-align: center">แก้ไขประเทศผู้ผลิตรถยนต์</h1>
              <tr>
              <th>ชื่อ</th>
              </tr>
              <td><input class ="input" type="text" name="input_cc_name" value ="<?=$row["cc_name"]?>" placeholder = "name of country" ></td>
              <input type= "hidden" name= "input_cc_id" value ="<?=$row["cc_id"]?>" >
        </table>
        <br>
              <button class = button_3  type="submit" name="button">
                ส่งข้อมูล
              </button>
    </form>
    <form action = "car_country.php">
    <button class = button_4  type="submit" name="button">
    ยกเลิก
    </button>
    <?php 
    }
    ?>
</body>
</html>