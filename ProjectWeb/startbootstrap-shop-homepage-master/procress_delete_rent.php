<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project_2";
    $no = $_REQUEST['customer_user'];

    $conn = mysqli_connect($hostname , $username , $password);

    if(!$conn){
        die("connection failed" . mysqli_connect_error());
    }
    mysqli_select_db($conn , $dbname) or die ("can't select departmentstore database");

    $sql = "DELETE FROM booking WHERE booking_no = '$no'";

    $result = mysqli_query($conn , $sql);

    //echo $cus ;
    header("location:staff_display.php");
?>