<?php
    $mail = $_REQUEST['mail'];
    $use = $_REQUEST['use'];
    $sub = $_REQUEST['sub'];
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project_2";

    $conn = mysqli_connect($hostname , $username , $password);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error()); //connect เข้า sever ได้ไหม
    }
    
    mysqli_select_db($conn , $dbname) or die ("can't select departmentstore database"); //connect เข้า database ได้ไหม

    $sql = "INSERT INTO contact(username,email,sub)
            VALUES ('$use','$mail','$sub')";
    
    $result = mysqli_query($conn ,$sql);
    $conn->close();
    
    echo "$sub";
    header("location:index.php");
?>