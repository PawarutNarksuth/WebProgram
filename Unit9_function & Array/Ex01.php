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

        $id = $_GET['ID'];
        $name = $_GET['strname'];
        $sex = $_GET['sex'];
        $sub = $_GET['sub'];
        $grade =$_GET['grade'];
        
    function Displays($ID , $NAME , $SEX ,$SUB , $GRADE){
        echo   "รหัสนักศึกษา : $ID  <br>" ;
        echo   "ชื่อ - นามสกุล : $NAME <br>" ;
        echo  "เพศ : $SEX <br>"  ;
        echo   "สาขาวิชา : $SUB <br>" ;
        echo   "เกดรเฉลี่ย : $GRADE <br>" ;  
        
    }
    
    Displays($id ,$name,$sex,$sub,$grade);
    
    ?>
    <a href="Ex01.html"> back </a>
</center>
</body>
</html>