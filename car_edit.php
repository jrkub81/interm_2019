<html lang="en">
<head>
<?php 
    include 'header.php';
    ?>
    <title>Car Edit</title>
</head>
<?php 
    include 'style.php';
    ?>
<body>
    <?php 
     include 'condb.php';
     if ($_SERVER["REQUEST_METHOD"]==="POST") {

        if (!empty($_POST["input_carsbrand"])||!empty($_POST["input_carsmodel"])
        ||!empty($_POST["input_carsyear"])||!empty($_POST["input_carscolor"])||!empty($_POST["input_carscolorcode"])
        ||!empty($_POST["input_carstype"])||!empty($_POST["input_carscountry"])||!empty($_POST["input_carsengine"])
        ||!empty($_POST["input_carsprice"])) {
            
        $upmy_carsid = $_POST["input_carsid"];
        $upmy_brand = $_POST["input_carsbrand"];
        $upmy_model = $_POST["input_carsmodel"];
        $upmy_year = $_POST["input_carsyear"];
        $upmy_color = $_POST["input_carscolor"];
        $upmy_colorcode = $_POST["input_carscolorcode"];
        $upmy_type = $_POST["input_carstype"];
        $upmy_country = $_POST["input_carscountry"];
        $upmy_engine = $_POST["input_carsengine"];
        $upmy_price = $_POST["input_carsprice"];

        $sql_string = "UPDATE in_cars SET in_carsbrand = '{$upmy_brand}',in_carsmodel = '{$upmy_model}',
        in_carsyear = '{$upmy_year}',in_carscolor = '{$upmy_color}',in_carscolorcode = '{$upmy_colorcode}',
        in_carstype = '{$upmy_type}',in_carscountry = '{$upmy_country}',in_carsengine = '{$upmy_engine}',
        in_carsprice = '{$upmy_price}' WHERE in_carsid = ".$upmy_carsid;
        //echo $sql_string;
         if ($conn->query($sql_string) === TRUE) {
             echo "New record update successfully. <br>";
             echo "<a href='car_complete.php'>กลับ</a>";
         } else {
             echo "Error: " . $sql_string . "<br>" . $conn->error;
         }
        }else {
            echo "Input is empty";
        }
        }
        if (!empty($_GET["id"])) {
            $get_id =  $_GET["id"];
            $sql_string = "SELECT * FROM in_cars WHERE in_carsid = ".$get_id;
            $result = $conn->query($sql_string);
            $row = $result->fetch_assoc();
            $sql_brand = "SELECT cb_id,cb_name FROM in_carsbrand ";
            $result1 = $conn->query($sql_brand);
           
    ?>
  
                <form action="?" method = "post" class= "ed-tb">
              <table class = my-table> 
              <h1 style = "text-align: center">แก้ไขข้อมูลรถยนต์</h1>
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
              <td><select name = "input_carsbrand">
              <?php 
               while($row2 = $result1->fetch_assoc()){
              ?>
              <option value="<?= $row2["cb_id"] ?>"<?php if ($row["in_carsbrand"]==$row2["cb_id"]) {
                       echo "selected";
                   } ?>><?= $row2["cb_name"] ?></option>
              <?php
              }
              ?>
              </td></select>
              <td><input class ="input" type="text" name="input_carsmodel" value ="<?=$row["in_carsmodel"]?>" placeholder = "Model" ></td>
                <td><select name ="input_carsyear" value = "<?=$row["in_carsyear"]?>">
              <?php
               for ($i=1990; $i<=2019 ; $i++) { 
                   ?>
                   <option value = "<?=$i?>"<?php if ($row["in_carsyear"]==$i) {
                       echo "selected";
                   } ?>><?= $i ?></option>
                   <?php
               }
                ?>
                </select></td>
              <td><input class ="input" type="text" name="input_carscolor" value ="<?=$row["in_carscolor"]?>" placeholder = "Color" ></td>
              <td><input class ="input" type="text" name="input_carscolorcode" value ="<?=$row["in_carscolorcode"]?>" placeholder = "ColorCode" ></td>
              <td>
              <select name ="input_carstype" value = "<?= $row["in_carstype"]?>">
              <?php 
              $sql_country = "SELECT ct_id,ct_name FROM in_carstype ";
              $result2 = $conn->query($sql_country);
              while($row4 = $result2->fetch_assoc()){
              ?>
                <option value="<?= $row4["ct_id"] ?>"<?php if ($row["in_carstype"]== $row4["ct_id"]) {
                       echo "selected";
                   } ?>><?= $row4["ct_name"] ?></option>
              <?php 
              }
              ?>
              </td></select>
              <td>
              <select name ="input_carscountry" value = "<?= $row["in_carscountry"]?>">
              <?php 
              $sql_country = "SELECT cc_id,cc_name FROM in_carscountry ";
              $result1 = $conn->query($sql_country);
              while($row3 = $result1->fetch_assoc()){
              ?>
                <option value="<?= $row3["cc_id"] ?>"<?php if ($row["in_carscountry"]== $row3["cc_id"]) {
                       echo "selected";
                   } ?>><?= $row3["cc_name"] ?></option>
              <?php 
              }
              ?>
              </td></select>
              <td><input class ="input" type="number" name="input_carsengine" value ="<?=$row["in_carsengine"]?>" placeholder = "Engine" ></td>
              <td><input class ="input" type="number" name="input_carsprice" value ="<?=$row["in_carsprice"]?>" placeholder = "Price" ></td>
              <input type= "hidden" name= "input_carsid" value ="<?=$row["in_carsid"]?>" >
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
    <?php 
        }
    ?>
</body>
</html>