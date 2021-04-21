<?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project_2";

        $email = $_GET['email'];
        $name = $_GET['name'];
        $l_name = $_GET['lastname'];
        $use = $_GET['use'];
        $pass = $_GET['pass'];
        $tel = $_GET['tel'];

        $conn = mysqli_connect($hostname, $username, $password); 

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error()); //connect เข้า sever ได้ไหม
        }
        
        mysqli_select_db($conn , $dbname) or die ("can't select departmentstore database"); //connect เข้า database ได้ไหม

        $sql = "UPDATE customer SET Email ='$email',F_name ='$name',L_name='$l_name ',username ='$use',pass = '$pass',tel = '$tel' WHERE username = '$use'";
        

        $result = mysqli_query($conn,$sql);

        $conn->close();

        header("Location: staff_display.php");
?>