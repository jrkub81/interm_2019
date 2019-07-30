<html lang="en">
<?php 
    define("TITLE","Training Day1");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Mali&display=swap" rel="stylesheet">
    <title><?php echo TITLE?></title>
</head>
<style>
    body{
        font-family: 'Mali', cursive;
    }
    .my-table {
            width: auto;
            border-spacing: 0px;
            border-collapse: separate;
        }
        .my-table tr td,
        .my-table tr th {
            border: 1px solid #000;
            padding: 2px 5px;
            text-align: center;
        }
        .my-table tr th {
          background-color: #000;
          color: #fff;
        }
        .h1{
            text-align: center;
        }
		.pump-class {
		  background-color: blue;
		}
</style>
<body>
    <!-- <?php 
    //-----------------Training Day 1 -----------------------------
    // $numb_1 = 100;
    // if($numb_1 > 0 && $numb_1 <= 10){
    //     echo "number is 1-10";
    // } 
    // elseif ($numb_1 > 10 && $numb_1 <= 20) {
    //     echo "number is 11-20";
    // }
    // elseif ($numb_1 > 20 && $numb_1 <= 30) {
    //     echo "number is 21-30";
    // }
    // elseif ($numb_1 > 30 && $numb_1 <= 40) {
    //     echo "number is 31-40";
    // }
    // elseif ($numb_1 > 40 && $numb_1 <= 50) {
    //     echo "number is 41-50";
    // }
    // else{
    //     echo "number is not in rage";
    // //     }
    //     echo "<br>";

    //     $prefix = "นาง";
    //     if($prefix == "นาย"||$prefix == "เด็กชาย"){
    //         echo "สวัสดีคับ";
    //     }
    //     elseif($prefix == "นาง"||$prefix == "เด็กหญิง"||$prefix == "นางสาว"){
    //         echo "สวัสดีคะ";
    //     }else{
    //         echo "คุณเป็นตัวอะไร";
    //     }
    //     echo "<br>";
    //     switch ($numb_1) {
    //             case $numb_1 > 0 && $numb_1 <= 10:
    //             echo "number is 1-10";
    //             break;

    //             case $numb_1 > 10 && $numb_1 <= 20:
    //             echo "number is 11-20";
    //             break;

    //             case $numb_1 >20 && $numb_1 <= 30:
    //             echo "number is 21-30";
    //             break;

    //             case $numb_1 > 30 && $numb_1 <= 40:
    //             echo "number is 31-40";
    //             break;

    //             case $numb_1 > 40 && $numb_1 <= 50:
    //             echo "number is 41-50";
    //             break;
            
    //         default:
    //             echo "number is not in rage";
    //             break;
    //     }

    //     echo "<br>";
        // $numb_2 = 3;

        // echo "<br>";
        // echo "<b>Your number is:</b>";

      
           
        // if($numb_2 %2 == 0 && $numb_2 !=0){
        //     echo "<b>เลขคู่</b>";;
        // }elseif($numb_2 %2 != 0 ){
        //     echo "<b>เลขคี่</b>";
        // }else{
        //     echo "<b>เลขศูนย์</b>";
        // }
        //------------------------------------------------------------
     ?>-->
    <?php 
   //------------------------Training Day 2 -----------------------------
    // while ($a < 10) {
    //     echo ($a+1)." Hello. <br>";
    //     $a++;
    // }
    // while ($a < $b) {
    //     echo ($a+1)."Hello.<br>";
    //     $a++;
    // }

    // for ($a = 50; $a >=0 ; $a--) { 
    //     if ($a%7==0) {
    //         echo "<b><h2>".$a."</h2></b><br>";
    //     }else {
    //         echo $a."<br>";
    //     }
    // }
    // $num = 10;
    // for ($i=0; $i < $num; $i++) { 
    //     for ($n=0; $n < $i; $n++) { 
    //         echo "<b>*</b>";
    //     }
    //     echo "<br>";
    // }
    // for ($i= $num; $i >0 ; $i--) { 
    //     for ($n=$i; $n > 0 ; $n--) { 
    //         echo "<b>*</b>";
    //     }
    //     echo "<br>";
    // }
    //------------------------------------------------------------

    //------------------------Training Day 3 -----------------------------
    // echo "Echo Array<br>";
    //     $text = array("H","o","l","w","r","e","d");
    //     echo $text[0].$text[5].$text[2].$text[2].$text[1]."   ".$text[3].$text[1].$text[4].$text[2].$text[6];
    //     echo "<br><br>";

    // echo "Echo Array by for <br>";    
    // $cars = array("BMW", "Benz", "Toyota", "Mazda", "Honda", "Mitsubishi");
    // $arrlength = count($cars);

    // for ($i=0; $i < $arrlength; $i++) { 
    //     echo ($i+1).".".$cars[$i]."<br>";
    // }
    // echo "<br><br>";
    // echo "Echo Array by while <br>";
    // $i = 0;
    // while($i < $arrlength){
    //     echo ($i+1).".".$cars[$i]."<br>";
    //     $i++;
    //     }
    // $i = 0;

    // echo "<br><br>";
    // echo "Echo Array by do while <br>";
    // do {
    //     echo ($i+1).".".$cars[$i]."<br>";
    //     $i++;
    // } while ($i < $arrlength);
    
    // $age = array("Peter"=>"30","John"=>"20","Mike"=>"25");
    // print_r($age);
    // echo "<br>";
    // echo "Peter is   ".$age['Peter']."  year old<br>";
    // echo "John is   ".$age['John']."  year old<br>";
    
    // echo "<br>";
    // foreach ($age as $name => $year) {
    //     echo "Name   ".$name."   is   ".$year."  year olds";
    //     echo "<br>";
    // }
    // echo "<br>";
    // $hero = array("Peter"=>"Spider Man",
    //              "Steve"=>"Capntain America", 
    //              "Tony"=>"Iron Man");
    // $hero["Thor"] = "God of Hammer";
    // $hero["Bruce"] = "Hulk" ;
    // foreach ($hero as $name => $power) {
    //     echo "Name  ".$name."  is  ".$power;
    //     echo "<br>";
    // }
    // echo "<br>";
    // echo "Sort Number Matafaka<br>";
    // $number = array(10, 100, 20, 50, 15, 40, 70);
    // sort($number);
    // $num = count($number);
    // for ($i=0; $i < $num; $i++) { 
    //     echo $number[$i];
    //     echo "<br>";
    // }
    //------------------------------------------------------------
    // echo "Echo Array 2d shit!<br>";
    // $cars = array(
    //     array("BM","MG","Red",2015),
    //     array("Benz","Mazzda","Brone",2019),
    //     array("Toyota","Vios","Black",2019)
    // );
    // for ($row=0; $row < 3; $row++) {
    //     for ($col=0; $col < 4; $col++) { 
    //         echo $cars[$row][$col];
    //     }
    //     echo "<br>";
    // }
    // echo "<br>";

    // $arr_legth = count($cars);
    // for ($i=0; $i < $arr_legth; $i++) { 
    //     echo $cars[$i][0]." ".$cars[$i][1]." ".$cars[$i][2]." ".$cars[$i][3]."<br>";
    // }
    // echo "<br>";
    // for ($i=0; $i < $arr_legth; $i++) { 
    //     for ($j=0; $j <= $arr_legth; $j++) { 
    //         echo $cars[$i][$j];
    //     }
    //     echo "<br>";
    // }
    // echo "<br>"; 
    // foreach ($cars as $key => $value) {
    //     echo $value[0]." ".$value[1]." ".$value[2]." ".$value[3]."<br>";
    // }
    // echo "<br>"; 
    // foreach ($cars as $key => $value) {
    //     echo "<b>Brand: </b>".$value[0]." "."<b>Model: </b>".$value[1]." "."<b>Color: </b>".$value[2]." "."<b>Years: </b>".$value[3]."<br>";
    // }
    // echo "<br>";
    // $carF = array(
    //     array("Brand"=>"BM","Model"=>"MG","Color"=>"Red","Year"=>2015,"Price"=>1500000),
    //     array("Brand"=>"Benz","Model"=>"Mazzda","Color"=>"Brone","Year"=>2019,"Price"=>2500000),
    //     array("Brand"=>"Toyota","Model"=>"Vios","Color"=>"Black","Year"=>2019,"Price"=>3500000)
    // );
    // echo "<br>"; 
    // foreach ($carF as $key => $value) {
    //     echo $value["Brand"]." ".$value["Model"]." ".$value["Color"]." ".$value["Year"]." ".$value["Price"]."<br>";
    // }
    // echo "<br>";
    // foreach ($carF as $key => $value) {
    //     echo "<ul><li>".$value["Brand"]." ".$value["Model"]." ".$value["Color"]." ".$value["Year"]." ".$value["Price"]."</ul></li><br>";
    // }
    // echo "<br>";
    // $carG = array(
    //     array("Brand"=>"BM","Model"=>"MG","Color"=>"Red","Year"=>2015,"Price"=>null),
    //     array("Brand"=>"Benz","Model"=>"Mazzda","Color"=>"Brone","Year"=>2019,"Price"=>2500000),
    //     array("Brand"=>"Toyota","Model"=>"Vios","Color"=>"Black","Year"=>2019,"Price"=>null)
    // );

    // echo "<h1>Cars Info</h1>";

    // echo "<ol>";

    // foreach ($carG as $key => $value) {  
    //     if ($value["Price"]==null) {
    //         echo "<li><b>Brand: </b>".$value["Brand"].
    //         " <b>Model: </b>".$value["Model"] .
    //        " <b>Color: </b>".$value["Color"] .
    //        " <b>Year: </b>".$value["Year"].
    //        " <b>Price: </b>".$value["Price"];
    //         echo $value["Price"] = "<b>No data</b></li><br>";
    //     }else{
    //         echo "<li><b>Brand: </b>".$value["Brand"].
    //         " <b>Model: </b>".$value["Model"].
    //         " <b>Color: </b>".$value["Color"].
    //         " <b>Year: </b>".$value["Year"].
    //         " <b>Price: </b>".$value["Price"]."</li><br>";
    //     }
    // }
    // echo "</ol>";
    // echo "<br>";
    $carG = array(
            array("Brand"=>"BM","Model"=>"MG","Color"=>"Red","Year"=>2015,"Price"=>null,"Driver"),
            array("Brand"=>"Benz","Model"=>"Mazzda","Color"=>"Brone","Year"=>2018,"Price"=>2500000),
            array("Brand"=>"Toyota","Model"=>"Vios","Color"=>"Black","Year"=>2019,"Price"=>null),
            array("Brand"=>"ISUSU","Model"=>"DMAX","Color"=>"Blue","Year"=>2017,"Price"=>1500000)
         );
     ?>
    <h1>Cars Info</h1>
    <table class = my-table>
    <tr>
    <th>Number</th>
    <th>Brand</th>
    <th>Model</th>
    <th>Color</th>
    <th>Year</th>
    <th>Price</th>
    </tr>
    <?php 
    foreach ($carG as $key => $val) {
    ?>
   <tr>
    <td><?= $key+1 ?></td>
    <td><?= $val["Brand"]?></td>
    <td><?= $val["Model"]?></td>
    <td><?= $val["Color"]?></td>
    <td><?= $val["Year"]?></td>
    <td>
    <?php 
    if (empty($val["Price"])) {
        echo "No data";
    }else {
        echo $val["Price"] ;
    }
    ?>
   
    <?php
    }
    ?>
    </td></tr> 
    </table>
    
    
</body>
</html>