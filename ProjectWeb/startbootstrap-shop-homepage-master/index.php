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

          
        </ul>
      </div>
    </div>
  </nav>
            </form>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
          <a href="create_cus.php" class="list-group-item">สมัครสมาชิก</a>
          <a href="login_cus.php" class="list-group-item">ล๊อกอิน</a>
          <a href="contect.php" class="list-group-item">ติดต่อเรา</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="images/1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="images/3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <h2> ประเภทยานพาหนะ</h2>
        <hr>
        <div class="row">
          
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

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/redcar.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">รถเก๋ง</a>
                </h4>
                <h5>600 Bath / Day</h5>
                <h5>4,200 Bath / Week</h5>
                <h5>13,000 Bath / Mont</h5>
                
                <p class="card-text">เหมาะสำหรับผู้ท่องเที่ยวมาไม่เยอะ 2-4 คนเพื่อความสะดวกสบาย</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/kabared.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">รถตู้</a>
                </h4>
                <h5>2500 Bath / Day </h5>
                <h5>17,000 Bath / week </h5>
                <br>
                <p class="card-text">เหมาะสำหรับผู้มาเป็นครอบครัวใหญ่ หรือ ผู้มาสมนาเป็นหมู่คณะ</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          <!--
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/7.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">รถกระบะ</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>-->

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="images/wavered.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">จักยานยนต์</a>
                </h4>
                <h5>350 - 650 Bath / Day </h5>
                <h5>10,000 Bath / Mont </h5>
                <br>
                <p class="card-text">เหมาะสำหรับผู้ที่ต้องรับชมการบรรยากาศ และความสะดวกคล่องตัวในการเดินทาง</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
          <!--
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Item Six</a>
                </h4>
                <h5>$24.99</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>-->

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
