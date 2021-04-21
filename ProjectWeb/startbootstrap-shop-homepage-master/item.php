<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>
<style>
  .card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  }

  /* On mouse-over, add a deeper shadow */
  .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }

  /* Add some padding inside the card container */
  .container {
    padding: 2px 16px;
  }
  .con {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body style="font-family: FC Home;font-size: 24px;">

  <!-- Navigation -->
  <form method="GET">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="in">BT Carrent</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <?php
              session_start();

              $user = @$_SESSION['user'];
              $ck = @$_SESSION['check'];
              
              if($user == ""){
              }
              else if($ck == 1 ){
                echo "<li class='nav-item active'>
                          <a class='nav-link'> 
                            ยินดีตอนรับคุณ : $user 
                            </a>
                      </li>";
                echo "<li class='nav-item active'>
                      <a class='nav-link' href=logout.php > 
                        logout
                        </a>
                  </li>";
              }
              if($ck == 2){
                echo "<li class='nav-item active'>
                      <a class='nav-link' href=logout.php style='color:red;'> 
                        ไม่พบ user กรุณาลองใหม่ 'คลิก'
                        </a>
                  </li>";
              }
            ?>
          
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login Staff</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container" style="position: relative; pandding : 20;">
  
  <br>

  <?php
    $all = $_REQUEST['all'];
    
    echo "<h1> ประเภท</h1>";

    if($all = 'bike'){
  ?>
  <div class="con">
  <div class="container">
    <div class="row">
      
    <div class="col-lg-4">
        <div class="card" style="width:300px;">
        <center>
          <img src="images/bikered.jpg" style="width:170px;">
          <div class="container">
            <h4><b>John Doe</b></h4>
            <p>Architect & Engineer</p>
          </div>
        </center>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="card" style="width:300px;">
          <center>
            <img src="images/bikered.jpg" style="width:170px;">
            <div class="container">
              <h4><b>John Doe</b></h4>
              <p>Architect & Engineer</p>
            </div>
          </center>
        </div>
      </div>

      
      <div class="col-lg-4">
        <div class="card" style="width:300px;">
          <center>
            <img src="images/bikered.jpg" style="width:170px;">
            <div class="container">
              <h4><b>John Doe</b></h4>
              <p>Architect & Engineer</p>
            </div>
          </center>
        </div>
      </div>

    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-lg-2">
      <label for="option">จังหวัดที่รับรถ :</label>
    </div>
    <div class="col-lg-5">

      <select name="province" id="option">
        <option value="" selected>--------- เลือกจังหวัด ---------</option>
        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
        <option value="กระบี่">กระบี่ </option>
        <option value="กาญจนบุรี">กาญจนบุรี </option>
        <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
        <option value="กำแพงเพชร">กำแพงเพชร </option>
        <option value="ขอนแก่น">ขอนแก่น</option>
        <option value="จันทบุรี">จันทบุรี</option>
        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
        <option value="ชัยนาท">ชัยนาท </option>
        <option value="ชัยภูมิ">ชัยภูมิ </option>
        <option value="ชุมพร">ชุมพร </option>
        <option value="ชลบุรี">ชลบุรี </option>
        <option value="เชียงใหม่">เชียงใหม่ </option>
        <option value="เชียงราย">เชียงราย </option>
        <option value="ตรัง">ตรัง </option>
        <option value="ตราด">ตราด </option>
        <option value="ตาก">ตาก </option>
        <option value="นครนายก">นครนายก </option>
        <option value="นครปฐม">นครปฐม </option>
        <option value="นครพนม">นครพนม </option>
        <option value="นครราชสีมา">นครราชสีมา </option>
        <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
        <option value="นครสวรรค์">นครสวรรค์ </option>
        <option value="นราธิวาส">นราธิวาส </option>
        <option value="น่าน">น่าน </option>
        <option value="นนทบุรี">นนทบุรี </option>
        <option value="บึงกาฬ">บึงกาฬ</option>
        <option value="บุรีรัมย์">บุรีรัมย์</option>
        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
        <option value="ปทุมธานี">ปทุมธานี </option>
        <option value="ปราจีนบุรี">ปราจีนบุรี </option>
        <option value="ปัตตานี">ปัตตานี </option>
        <option value="พะเยา">พะเยา </option>
        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
        <option value="พังงา">พังงา </option>
        <option value="พิจิตร">พิจิตร </option>
        <option value="พิษณุโลก">พิษณุโลก </option>
        <option value="เพชรบุรี">เพชรบุรี </option>
        <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
        <option value="แพร่">แพร่ </option>
        <option value="พัทลุง">พัทลุง </option>
        <option value="ภูเก็ต">ภูเก็ต </option>
        <option value="มหาสารคาม">มหาสารคาม </option>
        <option value="มุกดาหาร">มุกดาหาร </option>
        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
        <option value="ยโสธร">ยโสธร </option>
        <option value="ยะลา">ยะลา </option>
        <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
        <option value="ระนอง">ระนอง </option>
        <option value="ระยอง">ระยอง </option>
        <option value="ราชบุรี">ราชบุรี</option>
        <option value="ลพบุรี">ลพบุรี </option>
        <option value="ลำปาง">ลำปาง </option>
        <option value="ลำพูน">ลำพูน </option>
        <option value="เลย">เลย </option>
        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
        <option value="สกลนคร">สกลนคร</option>
        <option value="สงขลา">สงขลา </option>
        <option value="สมุทรสาคร">สมุทรสาคร </option>
        <option value="สมุทรปราการ">สมุทรปราการ </option>
        <option value="สมุทรสงคราม">สมุทรสงคราม </option>
        <option value="สระแก้ว">สระแก้ว </option>
        <option value="สระบุรี">สระบุรี </option>
        <option value="สิงห์บุรี">สิงห์บุรี </option>
        <option value="สุโขทัย">สุโขทัย </option>
        <option value="สุพรรณบุรี">สุพรรณบุรี </option>
        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
        <option value="สุรินทร์">สุรินทร์ </option>
        <option value="สตูล">สตูล </option>
        <option value="หนองคาย">หนองคาย </option>
        <option value="หนองบัวลำภู">หนองบัวลำภู </option>
        <option value="อำนาจเจริญ">อำนาจเจริญ </option>
        <option value="อุดรธานี">อุดรธานี </option>
        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
        <option value="อุทัยธานี">อุทัยธานี </option>
        <option value="อุบลราชธานี">อุบลราชธานี</option>
        <option value="อ่างทอง">อ่างทอง </option>
      </select>

    </div>
    <div class="col-lg-5">
      วางเงินมัดจำ : <input type="text">
    </div>
  </div>
  <br>
  
  <div class="row">
    <div class="col-lg-2">
      <label for="start">วันที่เริ่มเช่า:</label>
    </div>
    
    <div class="col-lg-5">
      <label for="start">วันที่เริ่มเช่า</label>
      <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
    </div>
    
    <div class="col-lg-5">
      <label for="end">วันที่คืนรถ</label>
      <input type="date" id="end" name="trip-end" value="2018-07-22" min="2018-01-01" max="2018-12-31">
    </div>

  </div>
  <br>
  <center>
    <input type="submit" value="ยืนยัน">
  </center
  <?php
    }
  ?>

  </div>
  </div>

