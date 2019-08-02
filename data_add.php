<?php 
 session_start();
 if ($_SESSION["username"] ==''&&$_SESSION["password"] =='') {
    header("location:login.php");
}
?>
<html lang="en">
<head>
    <?php 
    include 'header.php';
    ?>
    <title>เพิ่มรถยนต์</title>
 

</head>
<?php 
    include 'style.php';
    ?>
<body class="body-main">
    <?php 
    include 'condb.php';

    ?>
    <?php 
     include 'head.php';
    ?>

              <form action="insert_car.php" method = "POST" class= "ed-tb" enctype="multipart/form-data">
              <table class = my-table>
              <h1 style = "text-align: center">เพิ่มข้อมูลรถยนต์</h1>
              <tr>
              <th style = "text-align: center">แบรนด์</th>
              <th style = "text-align: center">โมเดล</th>
              <th style = "text-align: center">ปีที่ผลิต</th>
              <th style = "text-align: center">สีของรถยนต์</th>
              <th style = "text-align: center">Code สี</th>
              <th style = "text-align: center">ประเภทรถยนต์</th>
              <th style = "text-align: center">ประเทศผู้ผลิต</th>
              <th style = "text-align: center">ขนาดของเครื่องยนต์</th>
              <th style = "text-align: center">ราคาของรถยนต์</th>
              <th style = "text-align: center">รูปรถยนต์</th>
              </tr>
              <td>
              <select name="in_carsbrand" value = "<?=$row["in_carsbrand"]?>">
              <?php 
                $sql_brand = "SELECT cb_id,cb_name FROM in_carsbrand ";
                $result1 = $conn->query($sql_brand);
                while($row = $result1->fetch_assoc()){
              ?>
                <option value="<?= $row["cb_id"] ?>"><?= $row["cb_name"] ?></option>
              <?php
                }
              ?>
              </select>
              </td>
              <td><input class ="input" type="text" name="in_carsmodel" value ="" placeholder = "Model" ></td>
              <td>
              <select name ="in_carsyear" value ="<?=$row["in_carsyear"] ?>">
              <?php
                foreach(range(1990, (int)date("Y")) as $year) {
                    echo "\t<option value='".$year."'>".$year."</option>\n\r"; 
                }
                ?>
                </select></td>
              <td><input class ="input" type="text" name="in_carscolor" value ="" placeholder = "Color" ></td>
              <td><input class ="input" type="text" name="in_carscolorcode" value ="" placeholder = "ColorCode" ></td>
              <td><select name="in_carstype" value = "<?=$row["in_carstype"]?>">
              <?php
                $sql_type = "SELECT ct_id,ct_name FROM in_carstype ";
                $result1 = $conn->query($sql_type);
                while($row = $result1->fetch_assoc()){
              ?>
                <option value="<?= $row["ct_id"] ?>"><?= $row["ct_name"] ?></option>
              <?php
                }
              ?>
              </select></td>
              <td>
              <select name ="in_carscountry" value = "<?= $row["in_carscountry"]?>">
              <?php 
              $sql_country = "SELECT cc_id,cc_name FROM in_carscountry ";
              $result1 = $conn->query($sql_country);
              while($row = $result1->fetch_assoc()){
              ?>
                <option value="<?= $row["cc_id"] ?>"><?= $row["cc_name"] ?></option>
              <?php 
              }
              ?>
              </select>
              </td>
              <td><input class ="input" type="number" name="in_carsengine" value ="" placeholder = "Engine" ></td>
              <td><input class ="input" type="number" name="in_carsprice" value ="" placeholder = "Price" ></td>
              <?php 
           
              ?>
              <td><input class ="input" type="file" name="in_carsimgname" value =""></td>
              </table>
              <br>
              <button class = button_3  type="submit" name="button">
    ส่งข้อมูล
    </button>
    </form><form action = "data.php">
    <button class = button_4  type="submit" name="button">
    ยกเลิก
    </button>
    </form>
    <?php 
     include 'footer.php';
    ?>
</body>
</html>