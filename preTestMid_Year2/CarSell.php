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
        $name = $_GET['Name'];
        $Money = $_GET['Money'];
        $sel = $_GET['SEL'];
        $total = $Money * $sel;
    ?>
    <center>
    <table border=2>
                <tr>
                    <td>
                        ชื่อลูกค้า :
                    </td>
                    <td>
                        <?php
                            echo $name;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        ผ่อนงวดละ :
                    </td>
                    <td>
                        <?php
                            echo $Money;
                        ?>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td>
                        จำนวนงวด :
                    </td>
                    <td>
                        <?php
                            echo $sel;
                        ?>
                    </td>
                </tr>
                <tr>                
                    <td>
                        ยอดรวมเงิน :
                    </td>
                    <td>
                        <?php
                            echo $total;
                        ?>
                    </td>
                </tr>
                <?php
                function carCheck($total){
                    if($total < 749000){
                        echo "<tr><td colspan=2> ยอดเงินของท่านไม่เพียงพอ ที่จะซื้อรถยนต์ได้</td></tr>";
                    }else{
                        echo "<tr><td colspan=2> รถยนต์ที่ท่านสามารถเลือกซื้อได้</td></tr>";
                    }
                }
                carCheck($total);
                ?>
                </tr>
                <?php
                    if($total >= 1799000){
                        echo "<tr>
                                    <td>
                                        <img src = image\img\Accord.png width=200px> 
                                        <img src= image\img\logo-Accord.png width=150px>
                                    </td>
                                    <td>
                                        1,799,000
                                    </td>
                            </tr>";
                        echo "<tr>
                                    <td>
                                        <img src = image\img\Civic.png width=200px> 
                                        <img src= image\img\logo-civic.png width=150px>
                                    </td>
                                    <td>
                                        1,149,000
                                    </td>
                            </tr>";
                        echo "<tr>
                                <td>
                                    <img src = image\img\Jazz.png width=200px> 
                                    <img src= image\img\logo-jazz.png width=150px>
                                </td>
                                <td>
                                    849,000
                                </td>
                            </tr>";
                        echo "<tr>
                                <td>
                                    <img src = image\img\City.png width=200px> 
                                    <img src= image\img\logo-city.png width=150px>
                                </td>
                                <td>
                                    749,000
                                </td>
                            </tr>";
                    }
                    else if($total < 1799000 && $total >=1149000){
                        echo "<tr>
                                <td>
                                    <img src = image\img\Civic.png width=200px> 
                                    <img src= image\img\logo-civic.png width=150px>
                                </td>
                                <td>
                                    1,149,000
                                </td>
                            </tr>";
                        echo "<tr>
                                <td>
                                    <img src = image\img\Jazz.png width=200px> 
                                    <img src= image\img\logo-jazz.png width=150px>
                                </td>
                                <td>
                                    849,000
                                </td>
                            </tr>";
                        echo "<tr>
                                <td>
                                    <img src = image\img\City.png width=200px> 
                                    <img src= image\img\logo-city.png width=150px>
                                </td>
                                <td>
                                    749,000
                                </td>
                            </tr>";
                    }
                    else if($total < 1149000 && $total >=849000){
                        echo "<tr>
                                <td>
                                    <img src = image\img\Jazz.png width=200px> 
                                    <img src= image\img\logo-jazz.png width=150px>
                                </td>
                                <td>
                                    849,000
                                </td>
                            </tr>";
                        echo "<tr>
                                <td>
                                    <img src = image\img\City.png width=200px> 
                                    <img src= image\img\logo-city.png width=150px>
                                </td>
                                <td>
                                    749,000
                                </td>
                            </tr>";
                    }
                    else if($total < 849000 && $total >= 749000){
                        echo "<tr>
                                <td>
                                    <img src = image\img\City.png width=200px> 
                                    <img src= image\img\logo-city.png width=150px>
                                </td>
                                <td>
                                    749,000
                                </td>
                            </tr>";
                    }
                ?>
                <tr align="center">
                    <td colspan="2">
                        <a href="CarPay.php"><input type="submit" value="Back to Home" name="back"> </a>
                    </td>
                </tr>
            </table>
    </center>
</body>
</html>