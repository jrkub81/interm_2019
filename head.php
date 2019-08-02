<?php 
 include 'header.php';
 include 'condb.php';
 include 'style.php';
?>
<ul class="topnav">
            <li><a class="active" href="data.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="edit_profile.php">Edit Profile</a></li>
            <li><a href="data_add.php">Insert Data</a></li>
            <li><a href="logout.php">Log out</a></li>

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