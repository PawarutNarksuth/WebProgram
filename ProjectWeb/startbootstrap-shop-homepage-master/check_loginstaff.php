<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();

        $user = $_GET['user'];
        $pass = $_GET['pass'];

        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project_2";

        $conn = mysqli_connect($hostname , $username , $password);

        if(!$conn){
            die("connection failed" . mysqli_connect_error());
        }
    
        mysqli_select_db($conn , $dbname) or die ("can't select departmentstore database");

        $sql = "SELECT * FROM staff WHERE username_staff = '$user' AND pass_staff = '$pass'";

        $result = mysqli_query($conn , $sql);

        $staff = mysqli_fetch_array($result);

        if($staff[2] != $user && $staff[2] != $pass){
            $_SESSION['ck_staff'] = 1;
        }
        else{
            $_SESSION['ck_staff'] = 2;
        }

        $conn->close();

        header("location:login.php");
    ?>
</body>
</html>