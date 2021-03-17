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
        $money= $_GET['money'];
        $pun = '';
        $temp = '';
        echo "จำนวนเงิน : " .$money."</br>";

    if($money >= 1000)
    {
        $pun = $money /1000 ;
        $temp = $money%1000;
    echo "Bank 1000 : " .floor($pun)."</br>";
    }
    if($temp >= 500)
    {
        $haroi = $temp /500 ;
        $temp = $temp%500;
    echo "Bank 500 : " .floor($haroi)."</br>";
    }
    if($temp >= 100)
    {
        $roi = $temp /100 ;
        $temp = $temp%100;
    echo "Bank 100 : " .floor($roi)."</br>";
    }
    if($temp >= 50)
    {
        $hasib = $temp /50 ;
        $temp = $temp%50;
    echo "Bank 50 : " .floor($hasib)."</br>";
    }
    if($temp >= 20)
    {
        $yeesib = $temp /20 ;
        $temp = $temp%20;
    echo "Bank 20 : " .floor($yeesib)."</br>";
    }
    if($temp >= 10)
    {
        $sib = $temp /10 ;
        $temp = $temp%10;
    echo "Bank 10 : " .floor($sib)."</br>";
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
    <a href="money.html"> back </a>
</body>
</html>