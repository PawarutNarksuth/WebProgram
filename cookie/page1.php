<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $employeeUsername = @$_COOKIE['employeeUsername'];
        $employeePassword = @$_COOKIE['employeePassword'];
        $employeePermission = @$_COOKIE['employeePermission'];

        if($employeePermission == 1){
            echo "This is page1.php";
        }
        else{
            echo $employeeUsername ." No promission to view page1.php";
        }
    ?>
</body>
</html>