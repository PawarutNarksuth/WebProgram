<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-family:FC Home">
    <center>
        <table >
            <form method="GET" action="CalculateCar.php">
            <?php
            session_start();
                
                $name_Car = $_GET['NameC'];
                
                //$_session['name_Car'] = $_GET['NameC'];
                    
                if($name_Car == "Accord"){
                    echo "<tr align=center><td><img src=pic/logo-accord.png style=width:200px;></td></tr>";
                    echo "<tr align=center> <td> <img src=pic/Accord.png style=width:400px></td>";
                    $price_Car = 1799000;
                    $DB_year = 2.00;
                }
                else if($name_Car == "Civic"){
                    echo "<tr align=center><td> <img src=pic/logo-civic.png style=width:150px;> </td></tr>";
                    echo "<tr align=center> <td> <img src=pic/Civic.png style=width:400px></td>";
                    $price_Car = 1145000;
                    $DB_year = 2.00;
                }
                else if($name_Car == "Jazz"){
                    echo "<tr align=center><td> <img src=pic/logo-jazz.png style=width:150px;> </td></tr>";
                    echo "<tr align=center> <td> <img src=pic/Jazz.png style=width:400px></td>";
                    $price_Car = 754000;
                    $DB_year = 4.00;
                }
                else if($name_Car == "City"){
                    echo "<tr align=center><td> <img src=pic/logo-city.png style=width:150px;> </td></tr>";
                    echo "<tr align=center> <td> <img src=pic/City.png style=width:400px></td>";
                    $price_Car = 749000;
                    $DB_year = 4.00;
                }
            ?>
                <td>
                    <fieldset>
                        <legend>
                            ??????????????????????????????????????????
                        </legend>
                        ??????????????????????????? <input type="radio" name="ck" value="persen"> 
                        <select name="Down"> 
                            <option value=15>
                                15%
                            </option>
                            <option value=20>
                                20%
                            </option>
                            <option value=25>
                                25%
                            </option>
                            <option value=30>
                                30%
                            </option>
                        </select>
                        
                        ????????????  <input type="radio" name="ck" value="mon"> ??????????????????????????? <input type="text" style="width:100px" name="Money">
                    </fieldset>  
                    
                    <fieldset>  
                        <legend>
                            ????????????????????????????????????????????????????????????
                        </legend>
                        ???????????????????????? <select name="Installment"> 
                                    <option value=36> 36 </option>
                                    <option value=48> 48 </option>
                                    <option value=60> 60 </option>
                                    <option value=72> 72 </option>
                                </select>
                        ?????????
                    </fieldset> 
                    <br><br>
                    <?php
                        echo  "<input type='text' name='NameC' value='$name_Car' hidden>";
                    ?>
                    <input type="submit" value="Calculate" name="Cal"><br><br>
                    <?php
                        if(isset($_GET['Cal'])){ 
                            $price_down = $_GET['Down'];
                            $resalt_IM = $_GET['Installment'];
                            $money = $_GET['Money'];
                    ?>
                    <table  border="2" style="width:400px;">
                        <tr align="center">
                            <td colspan="2" >
                                ??????????????????????????????????????????????????????????????????????????????????????????
                            </td>
                        </tr>
                        <tr >
                            <td > 
                                ?????????????????????????????? :
                            </td>
                            <td>
                                <?php
                                    echo $name_Car;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                ?????????????????????????????? : 
                            </td>
                            <td>
                                <?php
                                    echo Number_format($price_Car ,) . " ?????????";
                                ?>
                            </td>
                        <tr>
                        <tr>
                            <td>
                                (1) ??????????????????????????? :
                            </td>
                            <td>
                                <?php
                                    //echo $price_down . "%"; 
                                    echo NUmber_format(DownPayment($price_Car , $price_down ,$money)) . " ????????? ";
                                    if($_GET['ck'] == "persen"){
                                        echo " ( $price_down %)";
                                    }else{
                                        echo "(".Number_format(($money / $price_Car) * 100) ."%)";
                                    }
                                    $total_Down = DownPayment($price_Car , $price_down ,$money);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                (2) ?????????????????????????????????????????????????????????????????? :
                            </td>
                            <td>
                                <?php
                                    echo Number_format(installment($price_Car , $total_Down) , ). " ?????????";
                                    $Price_sc = installment($price_Car ,$total_Down);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                (3) ???????????????????????? ??????????????? :
                            </td>
                            <td>
                                <?php
                                    echo Number_format(interestYear($Price_sc ,$DB_year) , ). " ????????? (".$DB_year."%???????????????)" ;
                                    $DB_Y = interestYear($Price_sc ,$DB_year);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                (4) ???????????????????????? ????????????????????? ??????() :
                            </td>
                            <td>
                                <?php
                                    echo Number_format(interestTotal($DB_Y , $resalt_IM/12) ,). " ?????????";
                                    $total_BD = interestTotal($DB_Y , $resalt_IM/12);
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                (5) ???????????????????????????????????????????????????????????? ????????? 1 ????????? :
                            </td>
                            <td>
                                <?php
                                    echo payMonth($Price_sc , $total_BD , $resalt_IM) . " ?????????";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <a href="homePage.php"> <input type="button" value="???????????????????????????????????????" > </a>
                            </td>
                        </tr>
                    </table>
                    <?php       
                        }
                    ?>
                </td>
            </form>
            </tr>
        </table>
    </center>
</body>
</html>


<?php
    function DownPayment($pc,$pd ,$m){
        if($m != NULL){
            return ((($m / $pc )*100) /100) * $pc ;
        }  
        else{
            return $pc * ($pd/100) ;
        }
        
    }
    function installment($pc ,$td){
        return $pc - $td;
    }
    function interestYear($ps , $db){
        return $ps * ($db/100);
    }
    function interestTotal($dby , $re){
        return $dby * $re;
    }
    function payMonth($sc ,$tbd ,$re){
        return Number_format(($sc + $tbd) / $re );
    }
?>