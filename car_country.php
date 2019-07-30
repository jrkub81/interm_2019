<html lang="en">
<head>
<?php 
    include 'header.php';
    ?>
    <title>Car Country Management</title>
</head>
<?php 
    include 'style.php';
    ?>
<body>
<?php 
      include 'condb.php';
      ?>
       <table class = my-table>
              <h1 style = "text-align: center">ประเทศผู้ผลิตรถยนต์</h1>
              <tr>
              <th>ลำดับ</th>
              <th>ชื่อ</th>
              <th>การจัดการ</th>
              </tr>
              <?php 
               $sql_string = "SELECT * FROM in_carscountry WHERE 1";
               $result = $conn->query($sql_string);
               while ($row = $result->fetch_assoc()) {
              ?>
                <tr><td style = "text-align: center" ><?=$row["cc_id"]?></td>
                <td><?=$row["cc_name"]?></td>
                <td>
                <li><a href="carcountry_edit.php?id=<?= $row["cc_id"]?>"  >แก้ไข</a>

                <li><a href="carcountry_delete.php?id=<?= $row["cc_id"]?>"  >ลบ</a>
              </li></td>
              <?php 
               }
              ?>
              </tr></table>
              <hr>
        <?php 
        if ($_SERVER["REQUEST_METHOD"]==="POST") {

            if (!empty($_POST["cc_name"])) {
    
            $my_country = $_POST["cc_name"];
    
            $sql_string = "INSERT INTO 
            in_carscountry(cc_name,creatdate) 
            VALUE ('{$my_country}',NOW())";
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
        ?>
        <form action="?" method = "post" class= "ed-tb">
        <table class = my-table>
              <h1 style = "text-align: center">เพิ่มประเทศผู้ผลิตรถยนต์</h1>
              <tr>
              <th>ชื่อ</th>
              </tr>
              <td><input class ="input" type="text" name="cc_name" value ="" placeholder = "name of country" ></td>
        </table>
        <br>
              <button class = button_3  type="submit" name="button">
                ส่งข้อมูล
              </button>
    </form>
    <form action = "car_country.php">
    <button class = button_4  type="submit" name="button">
    ยกเลิก
    </button> </form>
    <hr>
    <form action = "car_complete.php">
    <button class = button_3  type="submit" name="button">
    กลับหน้าหลัก
    </button> </form>
</body>
</html>