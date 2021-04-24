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
        $use = $_REQUEST['cus_no'];

        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project_2";

        $conn = mysqli_connect($hostname, $username, $password); 
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error()); //connect เข้า sever ได้ไหม
        }

        mysqli_select_db($conn , $dbname) or die ("can't select departmentstore database"); //connect เข้า database ได้ไหม

        $sql = "SELECT * FROM booking WHERE booking_no = '$use'";
        $result = mysqli_query($conn , $sql);
        $rs = mysqli_fetch_array($result);

    ?>
    <center>
        <h1>แก้ไขข้อมูลการจอง</h1>
        <form action="procress_edit_book.php" method="GET"> 
        <table border="2" style="text-align: center;width: 600px;background-color: blanchedalmond;">
            <tr>
                <td colspan="2">
                    Edit customer
                </td>
            </tr>
            <tr>
                <td>
                    booing_no
                </td>
                <td>
                    <input type="text" value=<?php echo "$rs[0]" ?> name="booking_no">
                </td>
            </tr>
            <tr>
                <td>
                    id
                </td>
                <td>
                    <input type="text" value=<?php echo "$rs[1]" ?> name="id">
                </td>
            </tr>
            <tr>
                <td>
                    user
                </td>
                <td>
                    <input type="text" value=<?php echo "$rs[2]" ?> name="user">
                </td>
            </tr>
            <tr>
                <td>
                    category
                </td>
                <td>
                    <input type="text" value=<?php echo "$rs[3]" ?> name="category">
                </td>
            </tr>
            <tr>
                <td>
                    model
                </td>
                <td>
                    <input type="text" value=<?php echo "$rs[4]" ?> name="model">
                </td>
            </tr>
            <tr>
                <td>
                    s_date
                </td>
                <td>
                    <input type="text" value=<?php echo "$rs[5]" ?> name="s_date">
                </td>
            </tr>
            <tr>
                <td>
                    r_date
                </td>
                <td>
                    <input type="text" value=<?php echo "$rs[6]" ?> name="r_date">
                </td>
            </tr>
            <tr>
                <td>
                    status
                </td>
                <td>
                    <input type="text" value=<?php echo "$rs[7]" ?> name="sta">
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