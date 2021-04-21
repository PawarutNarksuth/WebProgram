<?php
    $F_name = $_GET['F_name'];
    $L_name = $_GET['L_name'];
    $us = $_GET['username'];
    $pass = $_GET['password'];
    $tel = $_GET['tel'];
    $mail = $_GET['mail'];

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project_2";

    session_start();

    $_SESSION['user'] = $F_name;
    $_SESSION['check'] = 1;

    $conn = mysqli_connect($hostname , $username , $password);

    if(!$conn){
        die("connection failed" . mysqli_connect_error());
    }

    mysqli_select_db($conn , $dbname) or die ("can't select departmentstore database");

    $sql = "INSERT INTO customer(email,F_name,L_name,username,pass,tel)
            VALUES  ('$mail','$F_name' ,  '$L_name' , '$us' , '$pass' , '$tel')";

    mysqli_query($conn , $sql);

    $conn->close();
    header("location:index.php");
?>