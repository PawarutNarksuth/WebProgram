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
  <link href="css/login.css" rel="stylesheet">

</head>
<body style="font-family: FC Home;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php">Back</a>
      </nav>
      <form action="check_loginstaff.php" method="GET">
        <div class="login-page">
            <div class="form">
                <form class="login-form">
                <h2> ล็อกอินพนักงาน </h2>
                <br>
                <?php
                session_start();
                $check = @$_SESSION['ck_staff'];

                if($check == 1){
                  echo "<div style='color:red;'>*can not found username please tyr again* </div><br>";
                }
                if($check == 2){
                  header("location:staff_display.php");
                }
                session_destroy();
                ?>
                <input type="text" name="user" placeholder="username"/>
                <input type="password" name="pass" placeholder="password"/>
                <button>login</button>
                
              </form>
            </div>
          </div>
      </form>
</body>
</html>