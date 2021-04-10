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
        $goodsid = $_GET['id'];
        $goodsname = $_GET['name'];
        $goodsPrice  = $_GET['price'];
        $goodsQuantity = $_GET['gq'];

        $hostname = "localhost";
        $username = "root";
        $password = "12345";
        $dbname = "departmentstore";
    
        $conn = mysqli_connect($hostname, $username, $password); 
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error()); //connect เข้า sever ได้ไหม
        }
        mysqli_select_db($conn , $dbname) or die ("can't select departmentstore database"); //connect เข้า database ได้ไหม

        $sql = "INSERT INTO goods(goodsid,goodsName,goodsPrice,goodsQuantity)
            VALUES ( '$goodsid'  , '$goodsname' ,'$goodsPrice' ,'$goodsQuantity')";

        mysqli_query($conn , $sql) or die ("Insert into the goods table an error".mysqli_error()); // query ค่าเข้า database 

       /*if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } 
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }*/

        $conn->close();
    ?>

    <a href="showgoods.php"> show goods</a>
</body>
</html>