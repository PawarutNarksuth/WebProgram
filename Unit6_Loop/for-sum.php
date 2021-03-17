<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $num = 10;
        $sum = 0;

        for($n = 1 ; $n <= $num ; $n++)
        {
            $sum += $n;
            echo "Sumation of 1 to $n is = $sum<br>";
        }
    ?>
</body>
</html>