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
    <style>
        center img{
            border-radius: 50%;
        }
        .con {
            border-radius: 5px;
            background-color: #e4dcdc;
            padding: 20px;
        }
        #table1 {
            border-collapse: separate;
            border-spacing: 15px;
        }
    </style>
</head>
<body style="font-family:FC Home;height: 1000px;color: wheat;background-color: #d4bb84f3;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php">Back</a>
    </nav>
    <br><br><br><br>
    <center>

        <br><br><br><br>
        
        <form action="procress_yourself.php" method="GET">
        <div style="background-color: #f2f2f2;width: 900px;border-radius: 10px;color: black;padding: 20px" >
            <table style="width:650px;" id="table1">
                <tr>
                    <td>
                        <h3>แก้ไขข้อมูล</h3>
                    </td>
                </tr>
                <?php
                    session_start();
                    $name_user = @$_SESSION['user'];

                    $hostname = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "project_2";
                    
                    $conn = mysqli_connect($hostname , $username , $password);

                    if(!$conn){
                        die("connection failed" . mysqli_connect_error());
                    }
                    mysqli_select_db($conn , $dbname) or die ("can't select departmentstore database");
                    
                    $sql = "SELECT * FROM customer WHERE username = '$name_user'";

                    $result = mysqli_query($conn , $sql);

                    $cus = mysqli_fetch_array($result);
                    echo '<tr> <td> Username : </td> <td> <input type=text value='.$cus[3].' name=user></td value=> ';
                    echo '<td> password : </td> <td> <input type=password name=pass></td> </tr>';
                    echo '<tr> <td> First Name : </td> 
                                <td> <input type=text value='.$cus[1].' name=fname></td> 
                                <td > Last Name : </td> <td><input type=text value='.$cus[2].' name=lname></td>
                        </tr>';
                    echo '<tr> <td> Email : </td> <td> <input type=text value='.$cus[0].' style=width:200px name=email></td> 
                                <td> Telephone : </td> <td> <input type=text value='.$cus[5].' name=tel></tr>';
                    echo '<tr> <td colspan=4 style=text-align:center;> <input type=submit value=ยืนยันการแก้ไข></td> </tr>'
                ?>
            </table>
        </div>
    </form>
    </center>
</body>
</html>