<?php 
  session_start();
include 'header.php';
include 'style.php';
include 'condb.php';
?>

<?php 
   $filecarid = $_POST['up_carsid'];
   $filedir  = $_FILES['fileupload']['tmp_name'];
   $filename = $_FILES['fileupload']['name'];
    if ($filename!="") {
      $newfilename= date('dmYHis').str_replace(" ", "", basename($filename));
      if (move_uploaded_file($filedir,"carsimg/".$newfilename)) {
   $sql = "UPDATE in_cars SET `in_carsimgname`=('".$newfilename."'),`in_carsimgdir`=('".$filedir."') WHERE in_carsid = ".$filecarid;
   if($conn->query($sql)==TRUE){
        header("location:data.php");
   }
   else{
       echo "upload error";
   }
      }
    }    
  
?>

<br>
<a href="data.php">กลับ</a>