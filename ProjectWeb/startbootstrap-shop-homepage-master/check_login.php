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

    $sql = "SELECT * FROM customer WHERE username = '$user' AND pass = '$pass'";

    $result = mysqli_query($conn, $sql);

    $customer = mysqli_fetch_array($result);

    @$_SESSION['user'] = $customer[2];
    @$_SESSION['check'] = 1; 
    

    $conn->close();
    header("location:index.php");
?>