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
    <?php
        $sql = "SELECT * FROM `goods` ";
        $result = mysqli_query($conn , $sql);
        echo "<table border=2 style='width:700px;'>
         <tr >
            <td colspan=7 align=center> <h1> Show Goods</h1> </td>
         </tr>
         <tr >
            <td colspan=7 align=center> <a href='Addgoods.php'> Add goods</a> <a href='Addgoods.php'> Log out</a> </td>
         </tr>
        
                <tr >
                    <td>
                        #
                    </td>
                     <td>
                        Goods id
                    </td>
                     <td>
                        Goods name
                    </td>
                     <td>
                        Goods price (bath)
                    </td>
                     <td>
                        Goodes quantity
                    </td>
                     <td>
                        Edit
                    </td>
                     <td>
                        Delete
                    </td>
                </tr>";
        $row = 1;
        
        while($rs = mysqli_fetch_array($result))
        {
            echo '<tr> <td> '.$row.' </td> <td> '.$rs[0].' </td><td> '.$rs[1].' </td><td> '. $rs[2] .' </td><td> '.$rs[3].' </td><td><a href=editgoods.php?goodId='.$rs[0].'> Edit </a></td>
            
            <td><a href=deletegoods.php?goodId='.$rs[0].' onclick="return confirm(\'confirm delete '.$rs[1] .'\')">Delete </a></td></tr> ';
            $row++;
        }
        echo "</table>";
    ?>
    </center>
</body>
</html>