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
    <p>
    <form method="GET" action="input3.php">
        ค่าเริ่มต้น :<input type="text" name="start"><br><br>
        ค่าสุดท้าย :<input type="text" name="stop"><br><br>
        เลขที่นำไปหาร :<input type="text" name="numberck"><br><br>
        
        <input type="submit" value="CheckNum" name="submit">
    </form>
    <?php
        if(isset($_GET['submit'])){
            $st = $_GET['start'];
            $stp = $_GET['stop'];
            $Di = $_GET['numberck'];
            
            function checkNum($start,$stop,$Numberck){
                for($i = $start ; $i <= $stop ; $i++){
                    if($i % $Numberck == 0){
                        echo $i ." , ";
                    }
                }
            }

            function countNum($start,$stop,$Numberck){
                $count = 0;
                for($i = $start ; $i <= $stop ; $i++){
                    if($i % $Numberck == 0){
                        $count++;
                    }
                }
                echo "<br>จำนวนที่หารลงตัว = $count ตัว";
            }

            function sumNum($start,$stop,$Numberck){
                $numSum = 0;
                for($i = $start ; $i <= $stop ; $i++){
                    if($i % $Numberck == 0){
                        $numSum += $i;
                    }   
                }
                echo "<br>ผลรวมของตัวเลขที่หารลงตัว = $numSum";
            }

            checkNum($st , $stp , $Di);
            countNum($st , $stp , $Di);
            sumNum($st , $stp , $Di);
        }
    ?>
    </p>
    </center>
</body>
</html>