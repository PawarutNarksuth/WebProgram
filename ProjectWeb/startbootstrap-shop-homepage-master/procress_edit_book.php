<?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project_2";

        $booking_no = $_GET['booking_no'];
        $id = $_GET['id'];
        $user = $_GET['user'];
        $category = $_GET['category'];
        $model = $_GET['model'];
        $s_date = $_GET['s_date'];
        $r_date = $_GET['r_date'];
        $sta = $_GET['sta'];

        $conn = mysqli_connect($hostname, $username, $password); 

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error()); //connect เข้า sever ได้ไหม
        }
        
        mysqli_select_db($conn , $dbname) or die ("can't select departmentstore database"); //connect เข้า database ได้ไหม

        $sql = "UPDATE booking SET booking_no='$booking_no',id='$id',user='$user',category='$category',model='$model',s_date='$s_date',r_date='$r_date',sta='$sta' WHERE booking_no = '$booking_no'";
        

        $result = mysqli_query($conn,$sql);

        $conn->close();

        header("Location: staff_display.php");
?>