<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        $num1 = $_GET['number1'];
        $num2 = $_GET['number2'];

        $sum = 0;
        
        for($n = $num1 ; $n <= $num2 ; $n++)
        {
            $sum += $n;
        }
        echo "number 1 = $num1 <br>";
        echo "number 2 = $num2 <br>";
        echo "Sumation  $num1 to $num2 is = $sum <br>";
    ?>
</body>
</html>