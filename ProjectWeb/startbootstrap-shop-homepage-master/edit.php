<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-image: url(images/bg-edit.jpg);font-family: FC Home;">
    <?php
        $use = $_REQUEST['customer_user'];

        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project_2";

        $conn = mysqli_connect($hostname, $username, $password); 
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error()); //connect เข้า sever ได้ไหม
        }

        mysqli_select_db($conn , $dbname) or die ("can't select departmentstore database"); //connect เข้า database ได้ไหม

        $sql = "SELECT * FROM customer WHERE username = '$use'";
        $result = mysqli_query($conn , $sql);
        $rs = mysqli_fetch_array($result);

    ?>
    <center>
        <h1>แก้ไขข้อมูลลูกค้า</h1>
        <form action="procress.php" method="GET"> 
        <table border="2" style="text-align: center;width: 600px;background-color: blanchedalmond;">
            <tr>
                <td colspan="2">
                    Edit customer
                </td>
            </tr>
            <tr>
                <td>
                    email
                </td>
                <td>
                    <input type="text" value=<?php echo "$rs[0]" ?> name="email">
                </td>
            </tr>
            <tr>
                <td>
                    Name
                </td>
                <td>
                    <input type="text" value=<?php echo "$rs[1]" ?> name="name">
                </td>
            </tr>
            <tr>
                <td>
                    Lastname
                </td>
                <td>
                    <input type="text" value=<?php echo "$rs[2]" ?> name="lastname">
                </td>
            </tr>
            <tr>
                <td>
                    Username
                </td>
                <td>
                    <input type="text" value=<?php echo "$rs[3]" ?> name="use">
                </td>
            </tr>
            <tr>
                <td>
                    Password
                </td>
                <td>
                    <input type="text" value=<?php echo "$rs[4]" ?> name="pass">
                </td>
            </tr>
            <tr>
                <td>
                    Telphone
                </td>
                <td>
                    <input type="text" value=<?php echo "$rs[5]" ?> name="tel">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="ยืนยัน">
                </td>
            </tr>
        </table>
    </form>
    </center>
</body>
</html>