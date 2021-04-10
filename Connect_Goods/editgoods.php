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

      

    ?>
    <center>
        <table border="2" style="width:500px;text-align:center;" >
            <tr>
                <td colspan="2">
                    Edit Goods
                </td>
                
            </tr>
            <tr>
                <td>
                    Goods id
                </td>
                <td>
                    <input type="text">
                </td>
            </tr>
            <tr>
                <td>
                    Goodname
                </td>
                <td>
                    <input type="text">
                </td>
            </tr>
            <tr>
                <td>
                    Goods price (bath)
                </td>
                <td>
                    <input type="text">
                </td>
            </tr>
            <tr>
                <td>
                    Goods quantity
                </td>
                <td>
                    <input type="text">
                </td>
            </tr>
        </table>
    </center>
</body>
</html>