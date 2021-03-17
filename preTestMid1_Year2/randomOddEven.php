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
            $row = $_GET['row'];
            $col = $_GET['col'];
            $ran = array(array());

            $counteven = 0  ;
            $countodd = 0 ;   

            echo "<table style='border-collapse: collapse;'>";
            echo "<tr align='center'> 
                    <td colspan=$row style='border:1px solid ;'> 
                        randomOddEven 
                    </td>
                </tr>";
            for($r = 0 ; $r < $row ;$r++){
                echo "<tr>";
                for($c = 0 ; $c < $col;$c++){
                    $ran[$r][$c] = rand(0,99);
                    echo "<td style='border:1px solid black; width:100px;height:30px;'> ". ckran($ran[$r][$c]);
                }
                echo "</tr> </td> ";
            }
            echo "</table>";
            function ckran($arr){
                $re = "";
                global $counteven ;
                global $countodd ;
    
                if($arr % 2 == 0){
                    $re = "<div style='color:blue;'> $arr </div>";
                    $counteven++;
                }else{
                    $re = "<div style='color:red;'> $arr </div>";
                    $countodd++;
                }
                return $re;
            }
            echo "<br>เลขคู่ =".  $counteven ." , ";
            echo "เลขคี่ =".   $countodd ."<br>";
        ?>
        <br><input type="button" name="Back" value="Back" onClick="jascript:history.go(-1)" style="color:white ; background-color:#009999;border:none; border-radius:4px;padding:10px 20px">
    </center>
    
</body>
</html>