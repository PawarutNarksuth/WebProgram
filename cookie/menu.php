<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <?php
        session_start();
        $employeeUsername = @$_COOKIE['employeeUsername'];
        $employeePermission = @$_COOKIE['employeePermission'];

    ?>
        Menu<br><br>
        <a href="page1.php"> page1 </a> <br><br>

        <?php
            
            if($employeePermission == 2 ){
                echo '<a href="page2.php"> page2 </a> <br><br>';
            }
            else{
                echo '<a href="" onclick="return confirm(\''.$employeeUsername.' No permission to view page2.php\')"> page2 </a> <br><br>';
            }
        ?>
        
        <a href="logout.php"> logout </a>
    </center>
</body>
</html>