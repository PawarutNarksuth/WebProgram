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
            $men = $_GET['Gender'];
            
            if(!empty($men)){
                echo "Your Genger is : $men";
            }
            else{
                echo "You forgot Select Gender!!!";
            }
        ?>
</body>
</html>