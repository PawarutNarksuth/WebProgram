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
        $employeeUsername = $_POST['username'];
        $employeePassword = $_POST['password'];

        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "departmentstore";
    
        $conn = mysqli_connect($hostname, $username, $password); 
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error()); //connect เข้า sever ได้ไหม
        }
        
        mysqli_select_db($conn, $dbname) or die("Cannot select departmentStore database");

        $sql = "SELECT * FROM employee WHERE employeeUsername='$employeeUsername' AND employeePassword='$employeePassword'";
        
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result))
        {
            $employee = mysqli_fetch_array($result);
            session_start();

            $_SESSION['employeeUsername']=$employee[2];
            $_SESSION['employeePassword']=$employee[3];
            $_SESSION['employeePermission']=$employee[4];

            mysqli_close($conn);
            header("location:menu.php");
        }
        else
        {
            echo "Unable to access the system <br>";
            echo "Wrong username or password";
        }

    ?>
</body>
</html>