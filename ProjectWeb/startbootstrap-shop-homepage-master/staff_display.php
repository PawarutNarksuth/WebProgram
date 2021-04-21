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
<body style="font-family:FC Home;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php">Back</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="logout.php" style="font-size:20px">logout
                        </a>
                    </li>
                </ul>
        </div>
    </nav>
    <br><br><br><br>
    <h1> ฐานข้อมูลลูกค้าทั้งหมด </h1>
    <br>
    <center>
        <table border="solid 2" style="width:600px;text-align:center;">
            <tr>
                <td>
                    #
                </td>
                <td>
                    อีเมล
                <td>
                    ชื่อ
                </td>
                <td>
                    นามสกุล
                </td>
                <td>
                    username
                </td>
                <td>
                    password
                </td>
                <td>
                    tel
                </td>
                <td>
                    Edit
                </td>
            </tr>
            <?php
                $hostname = "localhost";
                $username = "root";
                $password = "";
                $dbname = "project_2";
                
                $conn = mysqli_connect($hostname , $username , $password);

                if(!$conn){
                    die("connection failed" . mysqli_connect_error());
                }
                mysqli_select_db($conn , $dbname) or die ("can't select departmentstore database");
                
                $sql = "SELECT * FROM customer ";

                $result = mysqli_query($conn , $sql);
                $count = 1;
                while($cus = mysqli_fetch_array($result))
                {
                    echo '<tr><td>'.$count.'</td><td>'.$cus[0].'</td><td>'.$cus[1].'</td><td>'.$cus[2].'</td><td>'.$cus[3].'</td>
                    <td>'.$cus[4].'</td><td>'.$cus[5].'</td><td><a href=edit.php?customer_user='.$cus[3].'>Edit</a></td></tr>';
                    $count++;
                }
            ?>
        </table>
    </center>
    <br><br><br><br>
    <h1>ฐานข้อมูลลูกค้าที่จอง</h1>
</body>
</html>