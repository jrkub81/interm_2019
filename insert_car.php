<?php 
      session_start();
      include 'condb.php';

          $my_brand = $_POST["in_carsbrand"];
          $my_model = $_POST["in_carsmodel"];
          $my_year = $_POST["in_carsyear"];
          $my_color = $_POST["in_carscolor"];
          $my_colorcode = $_POST["in_carscolorcode"];
          $my_type = $_POST["in_carstype"];
          $my_country = $_POST["in_carscountry"];
          $my_engine = $_POST["in_carsengine"];
          $my_price = $_POST["in_carsprice"];
          $my_carimg = $_FILES["in_carsimgname"]["name"];

          $filedir = $_FILES["in_carsimgname"]["tmp_name"];
          
          if (!empty($_POST["in_carsbrand"])||!empty($_POST["in_carsmodel"])||!empty($_POST["in_carsyear"])
          ||!empty($_POST["in_carsyear"])||!empty($_POST["in_carscolor"])||!empty($_POST["in_carscolorcode"])
          ||!empty($_POST["in_carstype"])||!empty($_POST["in_carscountry"])||!empty($_POST["in_carsengine"])
          ||!empty($_POST["in_carsprice"])||!empty($_POST["in_carsimgname"])) {
  
          $newfilename= date('dmYHis').str_replace(" ", "", basename($my_carimg));

          if (move_uploaded_file($filedir,"carsimg/".$newfilename)) {

          $sql_string = "INSERT INTO 
          in_cars(in_carsbrand,in_carsmodel,in_carsyear,in_carscolor,in_carscolorcode,in_carstype,in_carscountry,in_carsengine,in_carsprice,creatTIME,in_carsimgname,in_carsimgdir) 
          VALUE ('{$my_brand}','{$my_model}','{$my_year}','{$my_color}','{$my_colorcode}','{$my_type}','{$my_country}','{$my_engine}','{$my_price}',NOW(),'{$newfilename}','{$filedir}')";
          //echo $sql_string;
          if ($conn->query($sql_string) === TRUE) {
              header("location:data.php");
          } else {
              echo "Error: " . $sql_string . "<br>" . $conn->error;
        
          }
              }
    
            }

    ?>