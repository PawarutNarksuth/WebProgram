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

          <li class="nav-item">
            <a class="nav-link" href="rent_date.php">Rent</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="container">
    <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/bikered.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">จักรยาน</a>
                </h4>
                <h5>200 Bath / Half Day</h5>
                <h5>300 Bath / Full Day</h5>
                <br>
                <p class="card-text">เหมาะสำหรับผู้ที่ต้องการท่องเที่ยวในสถานที่ใกล้ๆ และรับชมบรรยากาศ</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
    </div>              

       

