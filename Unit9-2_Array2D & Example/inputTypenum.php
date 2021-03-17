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
        $number = $_GET['num1'];
        $number2 = $_GET['num2'];
        $number3 = $_GET['num3'];

        if(!empty($number)){
            echo "ตัวเลขที่ 1 = $number <br>";
        }
        if(!empty($number2)){
           echo "ตัวเลขที่ 2 = $number2 <br>"; 
        }
        if(!empty($number3)){
            echo "ตัวเลขที่ 3 = $number3 <br>";
        }
      
    ?>
</body>
</html>