<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Mali&display=swap" rel="stylesheet">
    <title>Trainning2</title>
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

        }
        .my-table tr th {
          background-color: #000;
          color: #fff;
        }
</style>
<body>
    <?php
    $cars_info = array(
        array("type"=>"รถยนต์อเนกประสงค์สมรรถนะสูงขนาดกลาง", "country"=>"Japan", "engine"=>3000, "price"=>1900000),
        array("type"=>"รถยนต์อเนกประสงค์สมรรถนะสูงขนาดเล็ก", "country"=>"Japan", "engine"=>1800, "price"=>1500000),
        array("type"=>"รถยนต์นั่งขนาดเล็กมาก", "country"=>"Japan", "engine"=>1500, "price"=>600000),
        array("type"=>"รถยนต์นั่งขนาดเล็กมาก", "country"=>"Japan", "engine"=>1500, "price"=>650000),
        array("type"=>"รถกระบะขนาดกลาง", "country"=>"Japan", "engine"=>2500, "price"=>900000),
        array("type"=>"N/A", "country"=>"N/A", "engine"=>0, "price"=>0));
    $cars = array(
        array("colour"=>"Red", "colour_code"=>"#db0824", "brand"=>"TOYOTA", "model"=>"YARIS", "years"=>2019, "more_info"=>$cars_info[2] ),
        array("colour"=>"Black", "colour_code"=>"#110000", "brand"=>"TOYOTA", "model"=>"REVO", "years"=>2018, "more_info"=>$cars_info[4] ),
        array("colour"=>"Black", "colour_code"=>"#000000", "brand"=>"HONDA", "model"=>"JAZZ", "years"=>2017, "more_info"=>$cars_info[3] ),
        array("colour"=>"Blonde", "colour_code"=>"#faf0be", "brand"=>"HONDA", "model"=>"CR-V", "years"=>2017, "more_info"=>$cars_info[1] ),
        array("colour"=>"Silver", "colour_code"=>"#C0C0C0", "brand"=>"ISUZU", "model"=>"MU-X", "years"=>2016, "more_info"=>$cars_info[0] ),
        array("colour"=>"Gold", "colour_code"=>"#D3CC74", "brand"=>"BMW", "model"=>"M3", "years"=>2019, "more_info"=>$cars_info[5])
);

    ?>
    <h1>Cars Info</h1> 
    <?php
    include 'time.php';
     ?>
    <br>
    <table class = my-table>
    <tr>
    <th>ลำดับ</th>
    <th>ยี่ห้อ</th>
    <th>โมเดล</th>
    <th>ปี</th>
    <th>สี</th>
    <th>รายละเอียด</th>
    </tr>
    <?php 
    foreach ($cars as $key => $val) {
    ?>
   <tr>
    <td><?= $key+1 ?></td>
    <td><?= $val["brand"]?></td>
    <td><?= $val["model"]?></td>
    <td><?= $val["years"]?></td>
    <td> <font color = <?= $val["colour_code"]?>><?= $val["colour"]?></font></td>
    <td><ul>
        <?= 
            "<li><b>ประเภทรถยนต์: </b>".$val["more_info"]["type"]."<br>". 
            "<li><b>ประเทศ: </b>".$val["more_info"]["country"]." <br>". 
            "<li><b>ขนาดเครื่องยนต์: </b>".$val["more_info"]["engine"]." C.C <br>".
            "<li><b>ราคา: </b>".$val["more_info"]["price"]." บาท"
    
    ?></li></td>
    <?php 
    }
        ?>
    </ul></tr> 
    </table>
    
</body>
</html>