<?php 
    session_start();
    $ck = @$_SESSION['check'];
    if($ck == 1){
?>
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

  .card-input-element+.card {
  height: calc(36px + 2*1rem);
  color: var(--primary);
  -webkit-box-shadow: none;
  box-shadow: none;
  border: 2px solid transparent;
  border-radius: 4px;
}

.card-input-element+.card:hover {
  cursor: pointer;
}

.card-input-element:checked+.card {
  border: 2px solid var(--primary);
  -webkit-transition: border .3s;
  -o-transition: border .3s;
  transition: border .3s;
}

.card-input-element:checked+.card::after {
  content: '\e5ca';
  color: #AFB8EA;
  font-family: 'Material Icons';
  font-size: 24px;
  -webkit-animation-name: fadeInCheckbox;
  animation-name: fadeInCheckbox;
  -webkit-animation-duration: .5s;
  animation-duration: .5s;
  -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}

@-webkit-keyframes fadeInCheckbox {
  from {
    opacity: 0;
    -webkit-transform: rotateZ(-20deg);
  }

  to {
    opacity: 1;
    -webkit-transform: rotateZ(0deg);
  }
}

@keyframes fadeInCheckbox {
  from {
    opacity: 0;
    transform: rotateZ(-20deg);
  }

  to {
    opacity: 1;
    transform: rotateZ(0deg);
  }
}

}
</style>
<body style="font-family: FC Home;font-size: 24px;">

  <!-- Navigation -->
  <form method="GET" action="report.php">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="in">BT Carrent</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <?php
              

              $user = @$_SESSION['user'];
              $ck = @$_SESSION['check'];
              
              if($user == ""){
              }
              else if($ck == 1 ){
                echo "<li class='nav-item active'>
                          <a class='nav-link'> 
                            ?????????????????????????????????????????? : $user 
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
                        ??????????????? user ???????????????????????????????????? '????????????'
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
    $_SESSION['category'] = $all;
    
    echo "<h1> ??????????????????</h1>";

    if($all == 'bike'){
  ?>
  <form action="report" method="GET">
  <div class="con">
  <div class="container">
    <div class="row">
      
    <div class="col-lg-4">
        <label>
            <div class="card" style="width:300px;">
            <input type="radio" hidden name = "car_model" value="??????????????????????????????????????????" id="opt" >
            <center>
            <img src="images/bikered.jpg" style="width:170px;">
            <div class="container">
                <h4><b>??????????????????????????????????????????</b></h4>
                <p>???????????????????????????????????????????????????????????????????????????????????????</p>
            </div>
        </center>
      </div>
    </label>
    </div>
    <div class="col-lg-4">
        <label>
            <div class="card" style="width:300px;">
            <input type="radio" hidden name = "car_model" value="????????????????????????????????????????????????" id="opt" >
            <center>
            <img src="images/bikefic.png" style="width:210px;" >
            <div class="container">
              <h4><b>????????????????????????????????????????????????</b></h4>
              <p>???????????????????????????????????????????????????????????????????????????????????????????????????</p>
            </div>
        </center>
      </div>
    </label>
    </div>

      
    <div class="col-lg-4">
        <label>
            <div class="card" style="width:300px;">
            <input type="radio" hidden name = "car_model" value="?????????????????????????????????????????????" id="opt">
            <center>
            <img src="images/bliketiger.jpg" style="width:170px;">
            <div class="container">
                <h4><b>?????????????????????????????????????????????</b></h4>
                <p>???????????????????????????????????????????????????????????????????????????????????????????????? 50-60 km/h</p>
            </div>
        </center>
        </div>
        </label>
    </div>

    </div>
  </div>

  <br>
  
  <div class="row">
      <div class="col-lg-2">
        <label for="option">????????????????????????????????????????????? :</label>
      </div>
      <div class="col-lg-4">
        <?php include 'get_province.php';?>
      </div>
      <div class="col-lg-6">
        <table border="0" >
        <tr><td>
            <label for="#">????????????????????????????????????</label>
            </td>
            <td>
            <label for="half"> ???????????????????????? </label>
            <input type="radio" name="rate" id="half" value="200">
            </td>
            <td>
            <label for="full"> ????????????????????? </label>
            <input type="radio" name="rate" id="full" value="300">
            </td>
        </tr>
        </table>
      </div>
    </div>
  <br>
  
  <div class="row">
  <div class="col-lg-3"></div>
    <div class="col-lg-3">
      <label for="start">??????????????????????????????????????????????????????????????????????????????:</label>
    </div>
    
    <div class="col-lg-5">
      
      <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
      <input type="text"  name="trip-end" value="blank"  hidden>
      

    </div>
   

  </div>
  <br>
  <center>
    <input type="submit" value="??????????????????">
  </center
  </div>
  </div>
  <?php
    }else if($all == 'car'){
  ?>
   <div class="con">
  <div class="container">
    <div class="row">
      
    <div class="col-lg-4">
            <label>
                <div class="card" style="width:300px;">
                <input type="radio" hidden name = "car_model" value="Eco Car" id="opt">
                <center>
            <img src="images/eco.png" style="width:170px;">
            <div class="container">
              <h4><b>Eco Car</b></h4>
              <p>???????????????????????????????????????????????????????????????????????????????????? </p>
            </div>
          </center>
        </div>
            </label>
      </div>
  
      <div class="col-lg-4">
            <label>
                <div class="card" style="width:300px;">
                <input type="radio" hidden name = "car_model" value="Sedan" id="opt">
                <center>
            <img src="images/sedan.png" style="width:170px;">
              <div class="container">
                <h4><b>Sedan</b></h4>
                <p>?????????????????????????????? ??????????????????????????? ??????????????????????????????</p>
              </div>
          </center>
        </div>
            </label>
      </div>
  
        
      <div class="col-lg-4">
            <label>
                <div class="card" style="width:300px;">
                <input type="radio" hidden name = "car_model" value="Luxury" id="opt">
                <center>
            <img src="images/lux.png" style="width:170px;">
            <div class="container">
              <h4><b>Luxury</b></h4>
              <p>????????????????????? ???????????????????????????????????????</p>
            </div>
          </center>
        </div>
            </label>
      </div>
  
      </div>
    </div>
  
    <br>
 
    <div class="row">
      <div class="col-lg-2">
        <label for="option">????????????????????????????????????????????? :</label>
      </div>
      <div class="col-lg-4">
        <?php include 'get_province.php';?>
      </div>
      <div class="col-lg-2">
        <label for="option">????????????????????????????????????????????? :</label>
      </div>
      <div class="col-lg-4">
      <?php include 'return_province.php';?>
      </div>
  
    </div>
    <br>
    
    <div class="row">
      <div class="col-lg-2">
        <label for="start">?????????????????????????????????????????????:</label>
      </div>
      
      <div class="col-lg-5">
        <label for="start">?????????????????????????????????????????????</label>
        <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
      </div>
      
      <div class="col-lg-5">
        <label for="end">?????????????????????????????????</label>
        <input type="date" id="end" name="trip-end" value="2018-07-22" min="2018-01-01" max="2018-12-31">
      </div>
  
    </div>
    <br>
    <center>
      <input type="text" name="rate" value="1500" hidden>
      <input type="submit" value="??????????????????">
    </center>  
    </div>
    <div>
  <?php
    }else if($all == 'kaba'){
  ?>
       <div class="con">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-4">
        <label>
            <div class="card" style="width:300px;">
            <input type="radio" hidden name = "car_model" value="noncab" id="opt">
            <center>
                <img src="images/noncap.png" style="width:170px;">
                <div class="container">
                <h4><b>noncab</b></h4>
                <p>???????????????????????? ?????????????????????????????????????????????</p>
                </div>
            </center>
            </div>
        </label>    
      </div>
  
      <div class="col-lg-4">
        <label>
            <div class="card" style="width:300px;">
            <input type="radio" hidden name = "car_model" value="single cab" id="opt">
            <center>
            <img src="images/single.png" style="width:170px;">
              <div class="container">
                <h4><b>single cab</b></h4>
                <p>????????????????????????????????????????????????????????????</p>
              </div>
            </center>
            </div>
        </label>
      </div>
  
        
      <div class="col-lg-4">
        <label>
            <div class="card" style="width:300px;">
            <input type="radio" hidden name = "car_model" value="double cab" id="opt">
            <center>
            <img src="images/double.png" style="width:170px;">
            <div class="container">
                <h4><b>double cab</b></h4>
                <p>???????????????????????????????????????????????????????????????????????????????????????</p>
            </div>
            </center>
            </div>
        </label>
      </div>
  
      </div>
    </div>
  
    <br>
 
    <div class="row">
      <div class="col-lg-2">
        <label for="option">????????????????????????????????????????????? :</label>
      </div>
      <div class="col-lg-4">
        <?php include 'get_province.php';?>
      </div>
      <div class="col-lg-2">
        <label for="option">????????????????????????????????????????????? :</label>
      </div>
      <div class="col-lg-4">
      <?php include 'return_province.php';?>
      </div>
  
    </div>
    <br>
    
    <div class="row">
      <div class="col-lg-2">
        <label for="start">?????????????????????????????????????????????:</label>
      </div>
      
      <div class="col-lg-5">
        <label for="start">?????????????????????????????????????????????</label>
        <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
      </div>
      
      <div class="col-lg-5">
        <label for="end">?????????????????????????????????</label>
        <input type="date" id="end" name="trip-end" value="2018-07-22" min="2018-01-01" max="2018-12-31">
      </div>
  
    </div>
    <br>
    <center>
      <input type="text" name="rate" value="2500" hidden>
      <input type="submit" value="??????????????????">
    </center>  
    </div>
    <div>
  <?php
    }else if($all == 'van'){
  ?>
  <div class="con">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-4">
      <label>
        <div class="card" style="width:300px;">
        <input type="radio" hidden name = "car_model" value="cago var" id="opt">
          <center>
            <img src="images/cargo.png" style="width:170px;">
            <div class="container">
              <h4><b>cago var</b></h4>
              <p>??????????????????????????????????????????????????? ????????????????????????????????????????????????????????????????????????</p>
            </div>
          </center>
        </div>
        </label>
      </div>
  
      <div class="col-lg-4">
      <label>
        <div class="card" style="width:300px;">
            <input type="radio" hidden name = "car_model" value="volkswagen" id="opt">
            <center>
            <img src="images/vw.png" style="width:170px;">
              <div class="container">
                <h4><b>volkswagen</b></h4>
                <p>????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
              </div>
          </center>
        </div>
        <label>
      </div>
  
        
      <div class="col-lg-4">
      <label>
            <div class="card" style="width:300px;">
            <input type="radio" hidden name = "car_model" value="alphard van" id="opt" >
            <center>
            <img src="images/al.png" style="width:170px;">
            <div class="container">
              <h4><b>alphard van </b></h4>
              <p>???????????????????????????????????????????????????????????? ????????????????????????????????? 5-6 ??????</p>
            </div>
          </center>
        </div>
        <label>
      </div>
  
      </div>
    </div>
  
    <br>
 
    <div class="row">
      <div class="col-lg-2">
        <label for="option">????????????????????????????????????????????? :</label>
      </div>
      <div class="col-lg-4">
        <?php include 'get_province.php';?>
      </div>
      <div class="col-lg-2">
        <label for="option">????????????????????????????????????????????? :</label>
      </div>
      <div class="col-lg-4">
      <?php include 'return_province.php';?>
      </div>
  
    </div>
    <br>
    
    <div class="row">
      <div class="col-lg-2">
        <label for="start">?????????????????????????????????????????????:</label>
      </div>
      
      <div class="col-lg-5">
        <label for="start">?????????????????????????????????????????????</label>
        <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
      </div>
      
      <div class="col-lg-5">
        <label for="end">?????????????????????????????????</label>
        <input type="date" id="end" name="trip-end" value="2018-07-22" min="2018-01-01" max="2018-12-31">
      </div>
  
    </div>
    <br>
    <center>
      <input type="text" name="rate" value="3000" hidden>
      <input type="submit" value="??????????????????">
    </center>  
    </div>
    <div>
  <?php
    }else if($all == 'morto'){
  ?>
  <div class="con">
  <div class="container">
    <div class="row">
      
      <div class="col-lg-4">
        <label>
            <div class="card" style="width:300px;">
            <input type="radio" hidden name = "car_model" value="wave125i" id="opt">
            <center>
                <img src="images/wave125.png" style="width:300px;">
                <div class="container">
                <h4><b>wave125i</b></h4>
                <p>??????????????????????????????????????????????????????????????????????????? ?????????????????????????????????????????????????????????????????????????????????</p>
                </div>
            </center>
            </div>
        </label>
      </div>
  
      <div class="col-lg-4">
        <label>
            <div class="card" style="width:300px;">
                <input type="radio" hidden name = "car_model" value="pcx" id="opt">
                <center>
                <img src="images/pcx.png" style="width:200px;">
                    <div class="container">
                        <h4><b>pcx</b></h4>
                        <p>?????????????????? auto ??????????????????????????????????????????????????????????????????????????????</p>
                    </div>
                </center>
            </div>
        </label>
      </div>
  
        
      <div class="col-lg-4">
        <label>
            <div class="card" style="width:300px;">
                <input type="radio" hidden name = "car_model" value="msx" id="opt">
                <center>
                <img src="images/msx.png" style="width:300px;">
                <div class="container">
                    <h4><b>msx</b></h4>
                    <p>??????????????????????????????????????????????????????????????? ?????????????????????????????? ?????????????????????????????????????????????????????????????????????</p>
                </div>
            </center>
            </div>
        </label>
      </div>
  
      </div>
    </div>
  
    <br>
 
    <div class="row">
      <div class="col-lg-2">
        <label for="option">????????????????????????????????????????????? :</label>
      </div>
      <div class="col-lg-4">
        <?php include 'get_province.php';?>
      </div>
      <div class="col-lg-2">
        <label for="option">????????????????????????????????????????????? :</label>
      </div>
      <div class="col-lg-4">
      <?php include 'return_province.php';?>
      </div>
  
    </div>
    <br>
    
    <div class="row">
      <div class="col-lg-2">
        <label for="start">?????????????????????????????????????????????:</label>
      </div>
      
      <div class="col-lg-5">
        <label for="start">?????????????????????????????????????????????</label>
        <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
      </div>
      
      <div class="col-lg-5">
        <label for="end">?????????????????????????????????</label>
        <input type="date" id="end" name="trip-end" value="2018-07-22" min="2018-01-01" max="2018-12-31">
      </div>
  
    </div>
    <br>
    <center>
      <input type="text" name="rate" value="500" hidden>
      <input type="submit" value="??????????????????">
    </center>  
    </div>
    <div>
  <?php 
  }else if($all == 'mini'){ ?>
<div class="con">
  <div class="container">
    <div class="row">
        <div class="col-lg-4">
            <label>
                <div class="card" style="width:300px;">
                <input type="radio" hidden name = "car_model" value="standard minibus" id="opt">
                <center>
                    <img src="images/mini1.png" style="width:170px;">
                    <div class="container">
                    <h4><b>standard minibus</b></h4>
                    <p>???????????? minibus ????????????????????????????????????????????????????????? 6-7 ??????</p>
                    </div>
                </center>
                </div>
            </label>    
        </div>
  
        <div class="col-lg-4">
            <label>
                <div class="card" style="width:300px;">
                <input type="radio" hidden name = "car_model" value="business minibus" id="opt">
                <center>
                    <img src="images/mini2.png" style="width:170px;">
                    <div class="container">
                    <h4><b>business minibus</b></h4>
                    <p>??????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                    </div>
                </center>
                </div>
            </label>    
        </div>
  
        <div class="col-lg-4">
            <label>
                <div class="card" style="width:300px;">
                <input type="radio" hidden name = "car_model" value="normal minibus" id="opt">
                <center>
                    <img src="images/mini3.png" style="width:170px;">
                    <div class="container">
                    <h4><b>normal minibus</b></h4>
                    <p>?????????????????? minibus ??????????????????????????????????????????????????????????????????????????????????????? ???????????????????????? 10-13 ??????</p>
                    </div>
                </center>
                </div>
            </label>    
        </div>
  
      
    </div>
  
    <br>
 
    <div class="row">
      <div class="col-lg-2">
        <label for="option">????????????????????????????????????????????? :</label>
      </div>
      <div class="col-lg-4">
        <?php include 'get_province.php';?>
      </div>
      <div class="col-lg-2">
        <label for="option">????????????????????????????????????????????? :</label>
      </div>
      <div class="col-lg-4">
      <?php include 'return_province.php';?>
      </div>
  
    </div>
    <br>
    
    <div class="row">
      <div class="col-lg-2">
        <label for="start">?????????????????????????????????????????????:</label>
      </div>
      
      <div class="col-lg-5">
        <label for="start">?????????????????????????????????????????????</label>
        <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31">
      </div>
      
      <div class="col-lg-5">
        <label for="end">?????????????????????????????????</label>
        <input type="date" id="end" name="trip-end" value="2018-07-22" min="2018-01-01" max="2018-12-31">
      </div>
  
    </div>
    <br>
    <center>
    <input type="text" name="rate" value="3500" hidden>
      <input type="submit" value="??????????????????">
    </center>  
    </div>
    <div>
<?php }
    
?>
  </form>
</body>
</html>

<?php 
    }else{
        $message = "???????????????????????????????????????????????????????????????????????????????????? ???????????????????????????????????????????????????";
        echo "<script type='text/javascript'>alert('$message');
    window.location.href='index.php';</script>";
    }
?>


