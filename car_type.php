<html lang="en">
<head>
<?php 
    include 'header.php';
    ?>
    <title>Car Type</title>
</head>
<?php 
    include 'style.php';
    ?>
<body>
<?php 
      include 'condb.php';
      ?>
      <table class = my-table>
              <h1 style = "text-align: center">ข้อมูลประเภทรถยนต์</h1>
              <tr>
              <th>ลำดับ</th>
              <th>ประเภทรถยนต์</th>
              <th>การจัดการ</th>
              </tr>
              <?php 
               $sql_string = "SELECT * FROM in_carstype WHERE 1";
               $result = $conn->query($sql_string);
               while ($row = $result->fetch_assoc()) {
              ?>
                <tr><td style = "text-align: center" ><?=$row["ct_id"]?></td>
                <td><?=$row["ct_name"]?></td>
                <td>
                <li><a href="cartype_edit.php?id=<?= $row["ct_id"]?>"  >แก้ไข</a>

                <li><a href="cartype_delete.php?id=<?= $row["ct_id"]?>"  >ลบ</a>
              </li></td>
              <?php 
               }
              ?>
              </tr></table>
              <br>
              <form action = "cartype_add.php" method ="">
                <button class = button_3 type="submit" name="button">เพิ่มประเภทรถยนต์</button></form>
              <hr>
        <form action = "car_complete.php" method ="">
        <button class = button_3 type="submit" name="button">กลับหน้าหลัก</button></form>
</body>
</html>