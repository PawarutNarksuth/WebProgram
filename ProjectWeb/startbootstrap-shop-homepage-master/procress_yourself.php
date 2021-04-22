<?php
    session_start();
    $use_sess = @$_SESSION['user'];

    $use =  $_GET['user'];
    $pass =  $_GET['pass'];
    $fname =  $_GET['fname'];
    $lname =  $_GET['lname'];
    $email =  $_GET['email'];
    $tel =  $_GET['tel'];

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project_2";

    $conn = mysqli_connect($hostname, $username, $password); 
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error()); //connect เข้า sever ได้ไหม
    }

    mysqli_select_db($conn , $dbname) or die ("can't select departmentstore database"); //connect เข้า database ได้ไหม

    $sql = "UPDATE `customer` SET `Email`='$email',`F_name`='$fname',`L_name`='$lname',
            `username`='$use',`pass`='$pass',`tel`='$tel' WHERE username = '$use_sess'";

    $result = mysqli_query($conn , $sql);
    
    echo "<script type='text/javascript'>alert('update ข้อมูลสำเร็จ');
    window.location.href='edit_yourself.php';</script>";
?>