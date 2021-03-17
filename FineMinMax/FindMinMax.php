<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $num3 = $_GET['num3'];
        $totle = 0;
        $check = $_GET['m'];

        if($check == "Minimum"){
            if($num1 < $num2){
                $totle = $num1;
            }
            else{
                $totle = $num2;
            }

            if($totle < $num3){
                echo "MiniMun is : $totle";
            }
            else{
                echo "MiniMun is : $num3";
            }
        }
        else if ($check == "Maximun"){
            if($num1 > $num2){
                $totle = $num1;
            }
            else{
                $totle = $num2;
            }
            if($totle > $num3){
                echo "Maximun is : $totle";
            }
            else{
                echo "Maxinum id : $num3";
            }
        }
        else{
            $totle = ($num1 + $num2 + $num3 ) / 3; 
            echo "Average is : $totle";
        }
    ?>
</body>
</html>