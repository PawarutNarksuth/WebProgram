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
    <form action="Insert.php" method=GET>
        <div class="login-page">
            <div class="form">
                <form class="login-form">
                    <h2> สมัครสมาชิก </h2>
                    <br>
                    กรอก username
                    <input type="text" placeholder="username" name="username">
                    กรอก password
                    <input type="password" placeholder="password" name="password">
                    ชื่อ
                    <input type="text" placeholder="first name" name="F_name">
                    นามสกุล
                    <input type="text" placeholder="last name" name="L_name">
                    เบอร์
                    <input type="text" placeholder="tel" name="tel">
                    อีเมล
                    <input type="text" placeholder="email" name="mail">
                    <button style="width: 100px;">login</button>
                    <input type="reset" name="clear" style="width: 100px;background-color: rgb(245, 48, 22);color: white;">
                </form>
            </div>
        </div>
    </form>
</body>
</html>