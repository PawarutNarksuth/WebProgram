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
        $Salary = $_GET['Salary'];
        $year = $Salary*12 ;

        echo "เงินเดือน :" . number_format((float)$Salary, 2) ." บาท  <br>" ;

        echo "เงินรายปี :" . number_format((float)$year, 2) ." บาท <br>" ;

        if($year >= 2000000){
            echo "ภาษี : 30% <br>";
            echo "เสียภาษี : ". number_format((float)($year * 30) /100 ,2) .   "<br>";
            echo "เงินหลังหักภาษี : ". number_format((float)($year - (($year * 30) /100 )) ,2)."<br>";
        }
        else if($year >= 1000000 && $year <= 1999999){
            echo "ภาษี : 20% <br>";
            echo "เสียภาษี : ". number_format((float)($year * 20) /100 ,2) .   "<br>";
            echo "เงินหลังหักภาษี : ". number_format((float)($year - (($year * 20) /100 )) ,2)."<br>";
        }
        else if($year >= 500000 && $year <= 999999){
            echo "ภาษี : 10% <br>";
            echo "เสียภาษี : ". number_format((float)($year * 10) /100 ,2)  .   "<br>";
            echo "เงินหลังหักภาษี : ".number_format((float)($year - (($year * 10) /100 )) ,2)."<br>";
        }
        else if($year >= 100000 && $year <= 499999){
            echo "ภาษี : 5% <br>";
            echo "เสียภาษี : ".number_format((float)($year * 5) /100 ,2) .   "<br>";
            echo "เงินหลังหักภาษี : ".number_format((float)($year - (($year * 5) /100 )) ,2) .   "<br>";
        }

    ?>
    <a href="salay.html"> back </a>
</body>
</html>