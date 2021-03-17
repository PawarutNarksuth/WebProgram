<!DOCTYPE html>
<html lang="en">
<head><title></title></head>
<body>
<center>
<?php
        $money= $_GET['money'];
        $pun = '';
        $temp = '';
        echo "จำนวนเงิน : " .$money."</br>";
    
    if($money >= 1000)
    {
        $pun = $money /1000 ;
        $temp = $money%1000;
        echo "แบงค์ 1000 : " .floor($pun)."</br>";
    }
    if($temp >= 500)
    {
        $haroi = $temp /500 ;
        $temp = $temp%500;
        echo "แบงค์ 500 : " .floor($haroi)."</br>";
    }
    if($temp >= 100)
    {
        $roi = $temp /100 ;
        $temp = $temp%100;
        echo "แบงค์ 100 : " .floor($roi)."</br>";
    }
    if($temp >= 50)
    {
        $hasib = $temp /50 ;
        $temp = $temp%50;
        echo "แบงค์ 50 : " .floor($hasib)."</br>";
    }
    if($temp >= 20)
    {
        $yeesib = $temp /20 ;
        $temp = $temp%20;
        echo "แบงค์ 20 : " .floor($yeesib)."</br>";
    }
    if($temp >= 10)
    {
        $sib = $temp /10 ;
        $temp = $temp%10;
        echo "เหรียญ 10 : " .floor($sib)."</br>";
    }
    if($temp >= 5)
    {
        $ha = $temp /5 ;
        $temp = $temp%5;
        echo "เหรียญ 5 : " .floor($ha)."</br>";
    }
    if($temp >= 1)
    {
        $one = $temp /1 ;
        $temp = $temp%1;
        echo "เหรียญ 1 : " .floor($one)."</br>";
    }

?>
<a href="bank.php"> Back </a>
</center>
</body>
</html>