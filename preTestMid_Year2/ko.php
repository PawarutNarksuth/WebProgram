<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bingo</title>
</head>
<body>
<center>
    <form action="#" method="get" enctype="multipart/form-data">
        <table style='border:1px solid black;  border-collapse: collapse;font-size:40px;'>
            <?php
                $arr = [];
                $index = 0;
                for($r = 0 ; $r < 5 ; $r++){
                    echo "<tr style='border:1px solid black;'>";
                    for($c = 0 ; $c < 5 ; $c++){
                        array_push($arr,rand(0,99));
                        echo "<td style='border:1px solid black;border-collapse: collapse;width:200px;'> ",$arr[$index],"</td>";
                        $index += 1;
                    } 
                    echo "</tr>";
                }
            ?>
        </table>
        <br>
        <?php
        if(isset($_GET['new-game'])){
        ?>
            <input type="submit" name="start-game" value="START GAME" style="width:250px; height:50px;background-color:#33CCFF; 
            border :1px solid black ; color:white; font-weight: bold; font-size:20px;">
        <?php
        }else {
        ?>
            <input type="submit" name="new-game" value="START GAME" style="width:250px; height:50px;background-color:#33CCFF; 
            border :1px solid black ; color:white; font-weight: bold; font-size:20px;">
        <?php
        }
        ?>
        
    </form>
</center>
    
    <?php
        $round = 1 ;
        $score = 0 ;
        if(isset($_GET['start-game'])){
            checkNum($score , $arr , $round);
        }else {
            checkNum($score , $arr , $round);
        }
        
        function checkNum($score , $arr , $round){
            while($score != 5){
                $check = false;
                $rand = rand(0,99);
                for($i = 0 ; $i < count($arr) ; $i++){
                    if($arr[$i] == $rand){
                        $check = true;
                        $score ++;
                        echo "<label style='font-weight:bold;'>";
                        echo "ครั้งที่ $round = $rand => ยินดีด้วย คุณมีเลขนี้ <br>";
                        echo "</label>";
                        break;
                    }
                }
                if($check == false){
                    echo "ครั้งที่ $round = $rand => เสียใจด้วย คุณไม่มีเลขนี้ <br>";
                }
                $round++;
            }
            $round -= 1;
            echo "<center>";
            echo "<div style='color:red;font-size:30px;font-weight:bold;'>คุณ จบ BINGO เกมนี้ ใน ครั้งที่ $round</div>";
            echo "</center>";
        }
        
    ?>
    
</body>
</html>

