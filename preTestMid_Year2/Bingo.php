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
        Bingo
    <?php 
    session_start();

    
    if(!isset($_GET['submit'])){
        for($i = 0 ;$i < 5 ;$i++){
            echo "<table style='border:1px ;  border-collapse: collapse ;font-size:40px;'><tr>";
            for($j = 0 ;$j < 5;$j++){
                $_SESSION["op[$i][$j]"] = rand(0,99);
                echo "<td style='border:1px solid black;width:200px;'>".$_SESSION["op[$i][$j]"]."</td>";
            }
            echo "</tr></table>";
        }
        echo "<form method=GET action=Bingo.php> ";
        echo "<br><input type=submit value=STARTGAME name=submit>";
        echo "</form>";
        $_SESSION["count"] = 0;
        $_SESSION["finish"] = 0;
    }
    else{
        for($i = 0 ;$i < 5 ;$i++){
            echo "<table style='border:1px ;  border-collapse: collapse;font-size:40px;' ><tr>";
            for($j = 0 ;$j < 5;$j++){
                echo "<td style='border:1px solid black; width:200px;'>".$_SESSION["op[$i][$j]"]."</td>";
            }
            echo "</tr></table>";
        }  
        
        if($_SESSION["finish"] == 5 ){
            echo "<form method=GET action=Bingo.php> ";
            echo "<br><input type=submit value=STARTGAME name=submit disabled=disabled>";
            echo "</form>";
        }
        else {
            echo "<form method=GET action=Bingo.php> ";
            echo "<br><input type=submit value=STARTGAME name=submit>";
            echo "</form>";
        }   
        checkNum();
        
    }



    function checkNum(){
        $Number = rand(0,99);
        $Dis = "";
        $ck = true;

        for($i = 0 ; $i < 5 ;$i++){
            for($j = 0 ;$j < 5 ;$j++){
                if($Number == $_SESSION["op[$i][$j]"]){
                    $Dis = "ยินดีด้วย คุณมีเลขนี้";
                    $_SESSION["count"]++;
                    $ck = false;
                    $_SESSION["finish"] += 1;
                    break;
                }
                else{
                    $Dis = "เสียใจด้วย คุณไม่มีเลขในนี้";
                }
            }
            if($ck == false){
                break;
            }
            if($ck == true && $i == 4){
                $_SESSION["count"] += 1;
                break;
            }        
        } 

        $_SESSION["LA".$_SESSION["count"]] =  "ครั้งที่ ".$_SESSION["count"]."= ".$Number."=>".$Dis ."<br>";
        
        for($i = 0 ; $i < $_SESSION["count"] ; $i++){
            echo $_SESSION["LA".($i+1)];
        }
        echo $_SESSION["finish"];
        
        if($_SESSION["finish"] == 5){
            echo  " <div style='color:red;font-size:30px;'><b>คุณ จบ Bingo เกมนี้ครั้งที่ ".$_SESSION["count"] ."<b></div>";
        }
    }
    ?>
    </center>
</body>
</html>