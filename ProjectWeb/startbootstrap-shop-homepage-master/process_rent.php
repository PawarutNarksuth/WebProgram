<?php
    session_start();
    $user = $_SESSION['user'];
    
    //$type = $_GET['t'];
    $type = "1";
    $s_date = $_GET['trip-start'];
    $r_date = $_GET['trip-end'];
    $conn = mysqli_connect("localhost" , "root" , "");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error()); //connect เข้า sever ได้ไหม
    }
    
    mysqli_select_db($conn , "project_2") or die ("can't select departmentstore database"); //connect เข้า database ได้ไหม
    $Sql = "INSERT INTO `booking`(`id`,`user`,`tie`, `s_date`, `r_date`, `sta`) VALUES (NULL,'test','2',NULL,NULL,'R')";
    $sql = "INSERT INTO `booking`(`id`,`user`,`tie`, `s_date`, `r_date`, `sta`) VALUES (NULL,'$user','$type',NULL,NULL,'R')";

    mysqli_query($conn ,$sql);
    $conn->close();
    //header("Location: index.php");
    ?>