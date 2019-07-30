<html lang="en">
<head>
<?php 
    include 'header.php';
    ?>
    <title>Car Type Add</title>
</head>
<?php 
    include 'style.php';
    ?>
<body>
<?php 
      include 'condb.php';
        if ($_SERVER["REQUEST_METHOD"]==="POST") {

            if (!empty($_POST["ct_name"])) {
    
            $my_type = $_POST["ct_name"];
    
            $sql_string = "INSERT INTO 
            in_carstype(ct_name,creatdate) 
            VALUE ('{$my_type}',NOW())";
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
        ?>
        <form action="?" method = "post" class= "ed-tb">
        <table class = my-table>
              <h1 style = "text-align: center">เพิ่มประเภทรถยนต์</h1>
              <tr>
              <th>ประเภทของรถยนต์</th>
              </tr>
              <td><input class ="input" type="text" name="ct_name" value ="" placeholder = "name of car type" ></td>
        </table>
        <br>
              <button class = button_3  type="submit" name="button">
                ส่งข้อมูล
              </button>
    </form>
    <form action = "car_type.php">
    <button class = button_4  type="submit" name="button">
    ยกเลิก
    </button> </form>
</body>
</html>