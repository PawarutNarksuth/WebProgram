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
<body style="font-family:FC Home;heigth:3000px">
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
    <center>
    <table border=2 style="width:800px;text-align:center;">
        <tr>
            <td>
                ลำดับ
            </td>
            <td>
                เลขการทำรายการ
            </td>
            <td>
                id
            </td>
            <td>
                user ผู้จอง
            </td>
            <td>
                ประเภทรถ
            </td>
            <td>
                รุ่นรถ
            </td>
            <td>
                วันที่จอง
            </td>
            <td>
                วันที่คืน
            </td>
            <td>
                สถานะการจอง
            </td>
            <td>
                Edit
            </td>
        </tr>
    <?php
                $sql1 = "SELECT * FROM booking";
                $result1 = mysqli_query($conn , $sql1);
                $count1 = 1;
                while($cus = mysqli_fetch_array($result1))
                {
                    echo '<tr><td>'.$count1.'</td><td>'.$cus[0].'</td><td>'.$cus[1].'</td><td>'.$cus[2].'</td><td>'.$cus[3].'</td>
                    <td>'.$cus[4].'</td><td>'.$cus[5].'</td><td>'.$cus[6].'</td><td>'.$cus[7].'</td><td><a href=edit.php?customer_user='.$cus[3].'>Edit</a></td></tr>';
                    $count1++;
                }
    ?>
    </table>
    </center>
    <br><br><br><br>
    <h1> เช็คประวัติการจองของ user </h1>
            <br><br>
    <center>
    <form method="GET" action="#">
        <label> เช็คประวัติ :</label>
        <input type="text" name="user">
        <input type="submit" value="ยืนยัน">
    </form>
    <br>
    <table border=2 style="width:800px;text-align:center;">
        <tr>
            <td>
                ลำดับ
            </td>
            <td>
                เลขการทำรายการ
            </td>
            <td>
                id
            </td>
            <td>
                user ผู้จอง
            </td>
            <td>
                ประเภทรถ
            </td>
            <td>
                รุ่นรถ
            </td>
            <td>
                วันที่จอง
            </td>
            <td>
                วันที่คืน
            </td>
            <td>
                สถานะการจอง
            </td>
            <td>
                Edit
            </td>
        </tr>
    <?php
        $ck_user = $_GET['user'];

                $sql2 = "SELECT * FROM booking WHERE user = '$ck_user'";
                $result2 = mysqli_query($conn , $sql2);
                $count = 1;
                while($cus = mysqli_fetch_array($result2))
                {
                    echo '<tr><td>'.$count.'</td><td>'.$cus[0].'</td><td>'.$cus[1].'</td><td>'.$cus[2].'</td><td>'.$cus[3].'</td>
                    <td>'.$cus[4].'</td><td>'.$cus[5].'</td><td>'.$cus[6].'</td><td>'.$cus[7].'</td><td><a href=edit.php?customer_user='.$cus[3].'>Edit</a></td></tr>';
                    $count1++;
                }
    ?>
    </table>
    </center>
    <br><br><br><br><br>
</body>
</html>