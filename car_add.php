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
<body>
    <?php 
    include 'condb.php';
    if ($_SERVER["REQUEST_METHOD"]==="POST") {

        if (!empty($_POST["in_carsbrand"])||!empty($_POST["in_carsmodel"])||!empty($_POST["in_carsyear"])
            ||!empty($_POST["in_carsyear"])||!empty($_POST["in_carscolor"])||!empty($_POST["in_carscolorcode"])
            ||!empty($_POST["in_carstype"])||!empty($_POST["in_carscountry"])||!empty($_POST["in_carsengine"])
            ||!empty($_POST["in_carsprice"])) {

        $my_brand = $_POST["in_carsbrand"];
        $my_model = $_POST["in_carsmodel"];
        $my_year = $_POST["in_carsyear"];
        $my_color = $_POST["in_carscolor"];
        $my_colorcode = $_POST["in_carscolorcode"];
        $my_type = $_POST["in_carstype"];
        $my_country = $_POST["in_carscountry"];
        $my_engine = $_POST["in_carsengine"];
        $my_price = $_POST["in_carsprice"];

        $sql_string = "INSERT INTO 
        in_cars(in_carsbrand,in_carsmodel,in_carsyear,in_carscolor,in_carscolorcode,in_carstype,in_carscountry,in_carsengine,in_carsprice,creatTIME) 
        VALUE ('{$my_brand}','{$my_model}','{$my_year}','{$my_color}','{$my_colorcode}','{$my_type}','{$my_country}','{$my_engine}','{$my_price}',NOW())";
        //echo $sql_string;
        if ($conn->query($sql_string) === TRUE) {
            echo "New record created successfully<br>";
            echo "<a href='car_complete.php'>กลับ</a>";
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
              <h1 style = "text-align: center">เพิ่มข้อมูลรถยนต์</h1>
              <tr>
              <th>แบรนด์</th>
              <th>โมเดล</th>
              <th>ปีที่ผลิต</th>
              <th>สีของรถยนต์</th>
              <th>Code สี</th>
              <th>ประเภทรถยนต์</th>
              <th>ประเทศผู้ผลิต</th>
              <th>ขนาดของเครื่องยนต์</th>
              <th>ราคาของรถยนต์</th>
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
              </table>
              <br>
              <button class = button_3  type="submit" name="button">
    ส่งข้อมูล
    </button>
    </form><form action = "car_complete.php">
    
    <button class = button_4  type="submit" name="button">
    ยกเลิก
    </button>
    </form>
</body>
</html>