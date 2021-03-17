<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $date = "Sunday";
        $day = "";
        switch($date){
            case "Monday" :  
                 $day = "Color is yello " ;
                 break;
            case "Tuesday" :  
                 $day = "Color is pink ";
                 break;
            case "Wednesday" : 
                 $day = "Color is Green ;" ;
                 break;
            case "Thursday ": 
                 $day =  "Color is Orange" ; 
                 break;
            case "Friday" :
                 $day =  "Color is Blue"; 
                 break;
            case "Saturday" : 
                 $day = "Color is purple";
                  break;
            case "Sunday": 
                 $day = "Color is Red ";
        }

        echo "Day = $date <br>";
        echo "Color =  $day" ;
    ?>
</body>
</html>