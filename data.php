<?php
// Start the session
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
    <title>Data Connecting</title>
</head>
   <?php 
    include 'style.php';
    ?>
<body class="body-main">
        <ul class="topnav">
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="#news">Profile</a></li>
            <li><a href="#contact">Edit Profile</a></li>
            <li><a href="data_add.php">Insert Data</a></li>
            <li><a href="logout.php">Log out</a></li>
            
              
                
        <?php 
        include 'condb.php';
        $sql_string = " SELECT * FROM in_cars 
                        INNER JOIN `in_carstype`
                        ON (in_cars.in_carstype = in_carstype.ct_id)
                        INNER JOIN `in_carscountry`
                        ON (in_cars.in_carscountry = in_carscountry.cc_id)
                        INNER JOIN `in_carsbrand`
                        ON (in_cars.in_carsbrand = in_carsbrand.cb_id)
                        ORDER BY in_carsid";
        $result = $conn->query($sql_string);
        
        ?>
        <?php
        // }
        if($_SESSION["username"] !=''){ 
            if($result->num_rows>0){
            
                // echo "id ".$row["in_carsid"]." ".$row["in_carsbrand"]." ".$row["in_carsmodel"]." ".$row["in_carsyear"]
                // ." ".$row["in_carscolor"]." ".$row["in_carscolorcode"]." ".$row["in_carstype"]." ".$row["in_carscountry"]
                // ." ".$row["in_carsengine"]." ".$row["in_carsprice"]."<br>";
                // echo "<br>";
                ?>
                <?php 
                $sql_user = "SELECT * FROM in_user WHERE user_name = '".$_SESSION["username"]."'";
                $result2 = $conn->query($sql_user);
                $result2->num_rows>0;
                while ($row2 = $result2->fetch_assoc()) {
                    if ($row2["user_name"]!=''&& $row2["user_password"]!=''&& $row2["user_nickname"]=='') {
                ?>





                     <div style="text-align:right;">
                     ชื่อผู้ใช้ : ไม่มี
                <a href="profile.php">โปรไฟล์</a>
                <a href="edit_profile.php">แก้ไขโปรไฟล์</a>
                </div>
                <?php    
                    }else {
                ?>
                     <div style="text-align:right;">
                     <li class="right"><a href="#about">ชื่อผู้ใช้:
                <?=$row2["user_nickname"]; ?>
                </a></li>
                </div>
                <?php            
                    }
                 }
                 ?>
                </ul>
                <br>
                <h1 class="h1-pro" style="text-align:center">Car Info</h1> 
                 <br>
                <div style="overflow-x:auto;">
                <table class = "my-table" >
                <tr>
                <th scope ="row" style="text-align:center">ลำดับ</th>
                <th style="text-align:center">แบรนด์</th>
                <th style="text-align:center">โมเดล</th>
                <th style="text-align:center">ปี</th>
                <th style="text-align:center">สี</th>
                <th style="text-align:center">รายละเอียด</th>
                <th style="text-align:center">รูปภาพประกอบ</th>
                <th style="text-align:center">การจัดการ</th>
                </tr>
               
                <?php 
                 while ($row = $result->fetch_assoc()) {
                ?>
                 <tr>
                 <td style="text-align:center"><?=$row["in_carsid"]?></td>
                <td style="text-align:center"><?=$row["cb_name"]?></td>
                <td style="text-align:center"><?=$row["in_carsmodel"]?></td>
                <td style="text-align:center"><?=$row["in_carsyear"]?></td>
                <td><font color =<?=$row["in_carscolorcode"]?>><?=$row["in_carscolor"]?></font></td>
                <td><ul><?="<li><b>ประเภทรถยนต์: </b>".$row["ct_name"]."<br>".
                "<li><b>ประเทศ: </b>".$row["cc_name"]."<br>".
                "<li><b>ขนาดเครื่องยนต์: </b>".$row["in_carsengine"]."<br>".
                "<li><b>ราคา: </b>".$row["in_carsprice"]?>
                </li></td>
                <td>
                <?php if($row["in_carsimgname"]!=""&&$row["in_carsimgname"]!=null){
                    ?>
                <img src="carsimg/<?php echo $row["in_carsimgname"];?>" width='150' height='150'>
                <?php }else {
                 ?>
                <img src="carsimg/carone.jpg" width='150' height='150'>
                <?php
                } 
                ?>
                </td>
                <td style="text-align:center"><a href="data_edit.php?id=<?= $row["in_carsid"]?>">แก้ไข</a><br>
                <a href="data_delete.php?id=<?= $row["in_carsid"]?>">ลบ</a>
                </td>

    
        <?php
            }
        }else {
            echo "No data selected";
        }
        ?>
       </ul></tr>
       </table>
       </div>

        <hr>

        <div class = "row">
        <div class = "col-md-12">
        <button class="button_3" onclick="window.location.href='data_add.php'">เพิ่มรถยนต์</button>  
        </div>
        </div>
        <hr>
        <?php 
       
    }
    
        ?>
        <a href="logout.php"><button class="button_4" type="submit" >Log out</button></a>
        <script>
    function logout() {
        window.location.href = "logout.php";
    }
</script>
</body>

</html>