<?php 
    session_start();
    $user = @$_SESSION['user'];
    $ck = @$_SESSION['check'];
    $booking_no = rand();
    if($_GET['trip-end'] == "blank"){
      $_GET['trip-end'] = $_GET['trip-start'];
      $_GET['return_province'] = $_GET['get_province'];
      $total = 1*$_GET['rate'];
      $day_rent = 1;
    }else{
      $difday = date_diff(date_create($_GET['trip-start']),date_create($_GET['trip-end']));
      $day_rent = intval($difday->format("%a day"));
      $total = $day_rent*$_GET['rate'];
    }
    $conn = mysqli_connect("localhost" , "root" , "");
    mysqli_select_db($conn , "project_2") or die ("can't select departmentstore database"); //connect เข้า database ได้ไหม
    $sql = "SELECT * FROM customer WHERE username = '$user'";
    $detail = mysqli_query($conn ,$sql);
    $asoc_detail = mysqli_fetch_assoc($detail);
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
</head>
<body style="font-family: FC Home;font-size: 24px;">

  <!-- Navigation -->
  <form method="GET" action="process_booking.php">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="in">BT Carrent</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <?php
            
            use function PHPSTORM_META\type;

            
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
<div class="container">
    <div class="row">
        <table>
          <tr><h2>
              <td>
                เลขที่การทำรายการ
              </td>
              <td>
                <?php echo $booking_no?>
              </td>
              </h2>
          </tr>
          
        </table>
    </div>
    <div class="row">
        <div class="col-lg-5">
        
        </div>
        <table border="0" width = "100%" >
        
        <tr>
        <td>
            <center><img src="images/bikered.jpg" style="width:170px;" ></center>
        </td>
        <td>
              <table border="1" align="center" width = "80%">
              <tr>
                    <td>
                        ประเภทรถที่เช่า
                    </td>
                    <td>
                    <input type="text" name="car_model" value="<?php echo $_SESSION['category'] ?>">
                    </td>
                </tr>
                <tr>
              <tr>
                    <td>
                        รุ่นรถที่เช่า
                    </td>
                    <td>
                    <input type="text" name="car_model" value="<?php echo $_GET['car_model'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        จังหวัดที่รับรถ
                    </td>
                    <td>
                    <input type="text" name="get_province" value="<?php echo $_GET['get_province'] ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        จังหวัดที่คืนรถ
                    </td>
                    <td>
                    <input type="text" name="return_province" value="<?php echo $_GET['return_province']?>">
                    
                    </td>
                </tr>
                <tr>
                    <td>
                        วันที่เริ่มเช่า
                    </td>
                    <td>
                    <input type="text" name="trip-start" value="<?php echo $_GET['trip-start']?>">
                    
                    </td>
                </tr>
                <tr>
                    <td>
                        วันที่คืนรถ
                    </td>
                    <td>
                    <input type="text" name="trip-end" value="<?php echo $_GET['trip-end']?>">
                    
                    </td>
                </tr>
                <tr>
                    <td>
                        ราคารถรวมทั้งสิ้น
                    </td>
                    <td>
                    <input type="text" name="total" value="<?php echo $total ?>">
                    
                    </td>
                </tr>
                <tr>
                    <td>
                        ระยะเวลาเช่า (วัน) 
                    </td>
                    <td>
                    <input type="text" name="day_rent" value="<?php echo $day_rent ?>">
                    
                    </td>
                </tr>
              </table>
              </td>
        </tr>
        
        <tr>
          <td colspan="2">
              ข้อมูลผู้ขอเช่ารถ
          </td>
        </tr>
        <tr>
          <td>
              ชื่อ
          </td>
          <td>
            <?php echo $asoc_detail['F_name']."\t".$asoc_detail['L_name'];?>
          </td>
        </tr>
        <tr>
          <td>
              เบอร์โทรศัพท์
          </td>
          <td>
              <?php echo $asoc_detail['tel'];?>
          </td>
        </tr>
        <tr>
          <td>
              อีเมล
          </td>
          <td>
            <?php echo $asoc_detail['Email'];?>
          </td>
        </tr>
        </table>


        <div class="col col-lg-12">
        <center>
        <input type="text" name="booking_no" value="<?php echo $booking_no?>" hidden>
        <input type="submit" value="ทำการจอง">
        <button onclick="window.print()">พิมพ์รายละเอียด</button>
        </center>
        </div>
        </div>
        
   
</div>
    
</form>
</body>


</html>