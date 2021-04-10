<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $goodId = $_REQUEST['goodId'];

        $hostname = "localhost";
        $username = "root";
        $password = "12345";
        $dbname = "departmentstore";

        $conn = mysqli_connect($hostname, $username, $password); 
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error()); //connect เข้า sever ได้ไหม
        }

        mysqli_select_db($conn , $dbname) or die ("can't select departmentstore database"); //connect เข้า database ได้ไหม

        $sql = "DELETE FROM `goods` WHERE goodsid = '$goodId'";
        mysqli_query($conn , $sql) or die ("Delete into the goods table an error occurred" . mysqli_error()); 

        mysqli_close($conn);
        header("location:showgoods.php");
    ?>
</body>
</html>