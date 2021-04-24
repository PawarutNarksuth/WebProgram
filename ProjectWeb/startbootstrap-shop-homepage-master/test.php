<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="GET">
        <input type="radio" name="h" value="5">
        <input type="radio" name="h" value="4">  
        <input type="radio" name="h" value="3">
    <input type="submit" name="submit">
</form>

<?php
    $t = $_GET['h'];
    
    if($t == '5'){
        $re = 'red';
    }
    else if($t == '4'){
        $re = 'blue';
    }
    else if($t == '3'){
        $re = 'green';
    }

    echo $re;
?>
</body>
</html>