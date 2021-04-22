<?php
    session_start();
    $user = $_SESSION['user'];
    $category = $_SESSION['category'];
    $booking_no = $_GET['booking_no'];
    $s_date = $_GET['trip-start'];
    $r_date = $_GET['trip-end'];
    $car_model = $_GET['car_model'];
    $conn = mysqli_connect("localhost" , "root" , "");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error()); //connect เข้า sever ได้ไหม
    }
    
    mysqli_select_db($conn , "project_2") or die ("can't select departmentstore database"); //connect เข้า database ได้ไหม
    $sql = "INSERT INTO `booking`(`booking_no`,`id`,`user`,`category`,`model`, `s_date`, `r_date`, `sta`) VALUES ('$booking_no',NULL,'$user','$category','$car_model','$s_date','$r_date','R')";

    mysqli_query($conn ,$sql);
    $message="บันทึกข้อมูลสำเร็จ";
    echo "<script type='text/javascript'>alert('$message');
    window.location.href='index.php';</script>";
    $conn->close();
    //
    //header("Location: index.php");
    
    ?>