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
        เครื่องคำนวนวงกลมแหละทรงกลม <br><br>

        <?php 
            $check = $_GET['cir'];
            $num = $_GET['Number'];

            function radius($Num){
                return $Num;
            }
            function diameter($Num){
                return $Num * 2;
            }
            function circumference($Num){
                return 2 * pi() * $Num;
            }
            function circlearea($Num){
                return pi() * ($Num * $Num);
            }
            function ssa($Num){
                return (4 * pi()) * ($Num * $Num);
            }
            function circleVolume($Num){
                return ((4 / 3) * pi()) * ($Num * $Num);
            }

            if($check == "รัศมี"){
                echo $check." : ". number_format((float)radius($num), 4, '.', '');
            } 
            if($check == "เส้นผ่าศุูนย์กลาง"){
                echo $check." : ".number_format((float)diameter($num), 4, '.', '');
            }
            if($check == "เส้นรอบวง"){
                echo $check." : ".number_format((float)circumference($num), 4, '.', '');
            }
            if($check == "พื้นที่วงกลม"){
                echo $check." : ".number_format((float)circlearea($num), 4, '.', '');
            } 
            if($check == "พื้นที่ผิวของทรงกลม"){
                echo $check." : ".number_format((float)ssa($num), 4, '.', '');
            } 
            if($check == "ปริมาตรของทรงกลม"){
                echo $check." : ".number_format((float)circleVolume($num), 4, '.', '');
            }
        ?>
        <br><br><input type="button" name="Back" value="Back" onClick="jascript:history.go(-1)" style="color:white ; background-color:#009999;border:none border-radius:4px;padding:10px 20px">
    </center
</body>
</html>