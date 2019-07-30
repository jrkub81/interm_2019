<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ข้อมูลรถยนต์</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">หน้าหลัก<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link">เลือกแบรนด์</a>
      </li>
      <li class="nav-item dropdown">
      <form action="" method="GET">
                <select class= "select1" name ="selectc" onchange="this.form.submit()">
                <option class="dropdown-item" value ="" selected disabled>---Select---</option>
                <option class="dropdown-item" value ="ALL">---ALL---</option>
            <?php 
            $sql_name = "SELECT cb_id,cb_name FROM in_carsbrand ";
            $result1 = $conn->query($sql_name);
            while($row = $result1->fetch_assoc()){
            ?>
                <option class="dropdown-item" value="<?= $row["cb_id"] ?>"<?php if ($row["cb_id"]==$_GET["selectc"]) {
                       echo "selected";
                   } ?>><?= $row["cb_name"] ?></option>
            <?php 
            }
            ?>
            </select></form>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>