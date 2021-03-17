<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_GET['check'])){
            $Name = $_GET['text1'];
            $Name2 = $_GET['text2'];
            
            echo "First name :  $Name  <br><br>";
            echo "Last name : $Name2 <br><br>";    
    ?>
        <a href="OnlyPage.html"> back </a>
    <?php 
        } else{  
    ?>
            <form method="GET" action="OneOnly.php">
                Reault <br><br> 
                First name :  <input type="text" name="text1"><br> <br> 
                Last name : <input type="text" name="text2"><br> <br>

                <input type="submit" name="check" value="OK">
                <input type="reset" value="clear">
            </form>
    <?php
        }
    ?>
</body>
</html>