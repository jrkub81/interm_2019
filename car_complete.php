<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<html lang="en">
<head>
<?php 
    include 'header.php';
    ?>
    <title>Cars Complete</title>
</head>
<?php 
    include 'style.php';
    ?>
<body>
<div class="container">
<?php 
      include 'condb.php';;
      ?>
      <table class = my-table>
              <?php 
                  include 'navbar.php';;
              ?>
              <br>
              <div class="row">
              <div class="col-3">
                <h2 style = "text-align: center">ค้นหาแบรนด์รถยนต์</h2></div>
                <form action="" method="GET">
                <select class= select1 name ="selectc" onchange="this.form.submit()">
                <option value ="" selected disabled>---Select---</option>
                <option value ="ALL">---ALL---</option>
            <?php 
            $sql_name = "SELECT cb_id,cb_name FROM in_carsbrand ";
            $result1 = $conn->query($sql_name);
            while($row = $result1->fetch_assoc()){
            ?>
                <option value="<?= $row["cb_id"] ?>"<?php if ($row["cb_id"]==$_GET["selectc"]) {
                       echo "selected";
                   } ?>><?= $row["cb_name"] ?></option>
            <?php 
            }
            ?>
            </select>
            
            <h2 style = "text-align: center">ค้นหาโมเดลรถยนต์</h2><input type = "text" class = input name = "like" placeholder = "Car Model" value = <?= $_GET["like"]?>>
            </div><br>
            <button class = button_3 type= "submit">ค้นหา</button></form>
              <br> 
              <br>
              <tr>
              <th style = "text-align: center">ลำดับ</th>
              <th style = "text-align: center">แบรนด์</th>
              <th style = "text-align: center">โมเดล</th>
              <th style = "text-align: center">ปี</th>
              <th style = "text-align: center">สี</th>
              <th style = "text-align: center">รายละเอียด</th>
              <th style = "text-align: center">การจัดการ</th>
              </tr>
              <?php

              if($_GET["selectc"] =="" && $_GET["like"]!=""){

                 $sql_string = "SELECT * FROM in_cars 
                 INNER JOIN `in_carstype`
                 ON (in_cars.in_carstype = in_carstype.ct_id)
                 INNER JOIN `in_carscountry`
                 ON (in_cars.in_carscountry = in_carscountry.cc_id)
                 INNER JOIN `in_carsbrand`
                 ON (in_cars.in_carsbrand = in_carsbrand.cb_id)
                 WHERE in_carsmodel LIKE '%".$_GET["like"]."%' 
                  ";

               }
               elseif ($_GET["selectc"]=="ALL" && $_GET["like"]!=""){

                $sql_string = "SELECT * FROM in_cars 
                 INNER JOIN `in_carstype`
                 ON (in_cars.in_carstype = in_carstype.ct_id)
                 INNER JOIN `in_carscountry`
                 ON (in_cars.in_carscountry = in_carscountry.cc_id)
                 INNER JOIN `in_carsbrand`
                 ON (in_cars.in_carsbrand = in_carsbrand.cb_id)
                 WHERE in_carsmodel LIKE '%".$_GET["like"]."%' 
                 ORDER BY in_carsid ";
                    
               }
               elseif($_GET["selectc"]=="" || $_GET["selectc"]=="ALL"){
               
                 $sql_string = "SELECT * FROM in_cars 
                 INNER JOIN `in_carstype`
                 ON (in_cars.in_carstype = in_carstype.ct_id)
                 INNER JOIN `in_carscountry`
                 ON (in_cars.in_carscountry = in_carscountry.cc_id)
                 INNER JOIN `in_carsbrand`
                 ON (in_cars.in_carsbrand = in_carsbrand.cb_id)
                 ORDER BY in_carsid ";
                
               }
               elseif ($_GET["selectc"]!="" && $_GET["like"]!=""){

                $sql_string = "SELECT * FROM in_cars 
                 INNER JOIN `in_carstype`
                 ON (in_cars.in_carstype = in_carstype.ct_id)
                 INNER JOIN `in_carscountry`
                 ON (in_cars.in_carscountry = in_carscountry.cc_id)
                 INNER JOIN `in_carsbrand`
                 ON (in_cars.in_carsbrand = in_carsbrand.cb_id)
                 WHERE in_carsbrand LIKE '%".$_GET["selectc"]."%' and in_carsmodel LIKE '%".$_GET["like"]."%' 
                 ORDER BY in_carsid ";
                    
               }
               else {
        
                 $sql_string = "SELECT * FROM in_cars 
                 INNER JOIN `in_carstype`
                 ON (in_cars.in_carstype = in_carstype.ct_id)
                 INNER JOIN `in_carscountry`
                 ON (in_cars.in_carscountry = in_carscountry.cc_id)
                 INNER JOIN `in_carsbrand`
                 ON (in_cars.in_carsbrand = in_carsbrand.cb_id)
                 WHERE in_carsbrand = '".$_GET["selectc"]."'
                 ORDER BY in_carsid ";
               }

               $result = $conn->query($sql_string);
               while ($row = $result->fetch_assoc()) {
              ?>

              <tr><td style = "text-align: center" ><?=$row["in_carsid"]?></td>
              <td><?=$row["cb_name"]?></td>
              <td><?=$row["in_carsmodel"]?></td>
              <td><?=$row["in_carsyear"]?></td>
              <td><font color =<?=$row["in_carscolorcode"]?>><?=$row["in_carscolor"]?></font></td>
              <td><ul><?="<li><b>ประเภทรถยนต์: </b>".$row["ct_name"]."<br>".
                         "<li><b>ประเทศ: </b>".$row["cc_name"]."<br>".
                         "<li><b>ขนาดเครื่องยนต์: </b>".$row["in_carsengine"]."<br>".
                         "<li><b>ราคา: </b>".$row["in_carsprice"].
                         "<li><b>เวลา: </b>".$row["creatTIME"]?>
              </li></td>
              <td>
              <li><a href="car_edit.php?id=<?= $row["in_carsid"]?>"  class = "fix">แก้ไข</a>

              <li><a href="car_delete.php?id=<?= $row["in_carsid"]?>"  class = "bye">ลบ</a>
              </li></td>
      <?php
      }
      ?>
     </ul>
     </tr></table>
     <br>
  
     <div class = "row">
      
        <div class = "col-md-4">
        <button class="button_3" onclick="window.location.href='car_add.php'">เพิ่มรถยนต์</button>  
        </div>
        <div class = "col-md-4">
        <button class="button_3" onclick="window.location.href='car_country.php'">หน้าจัดการประเทศ</button>
        </div>
        <div class = "col-md-4">
        <button class="button_3" onclick="window.location.href='car_type.php'">หน้าจัดการประเภทรถยนต์</button>
        </div>
        </div>
        </div>

</body>
</html>