<?php
    $user = $_GET['user'];
    $email = $_GET['mail'];
    $sub = $_GET['sub'];

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project_2";

    $conn = mysqli_connect($hostname , $username , $password);

    if(!$conn){
        die("connection failed" . mysqli_connect_error());
    }

    mysqli_select_db($conn , $dbname) or die ("can't select departmentstore database");

    $sql = "SELECT * FROM customer WHERE username = '$user' AND Email = '$email'";
    $result = mysqli_query($conn,$sql);
    $customer = mysqli_fetch_array($result);


    error_reporting(0);
    ini_set('display_errors', 0);

    if($customer[0] == $email && $customer[3] == $user){
        echo "<center><br><br><br><br><br><br> <img src='images/succress.png' style='width:300px'> <br><br><br>";
        echo ' <h4> Submit Succress <a href=procress_contact.php?use='.$user.'&mail='.$email.'&sub='.$sub.'> click here to submit </a><h4> </center>';
    }
    else{
        echo "<center><br><br><br><br><br><br> <img src='images/error.png' style='width:300px'> <br><br><br>";
        echo " <h4> Somthing is worng please try again <a href=index.php>'click here to back home page'</a><h4>  </center>";
    }
    //header("location:contect.php");
?>