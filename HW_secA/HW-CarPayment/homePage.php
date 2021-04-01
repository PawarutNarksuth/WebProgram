<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-family:FC Home;">
<center>
    <img src="pic/header (1).jpg" style="width:700px ;height:250px">
    
    <form action="CalCulateCar.php" method="GET">
    
    <fieldset align="center" style="width:680px">
        <legend> Car Model </legend>
        <br>
        <table align="center">
            <tr>
                <td>
                    เลือกรุ่นรถยนต์
                    <select name="NameC">
                        <option>Accord</option>
                        <option>Civic</option>
                        <option>Jazz</option>
                        <option>City</option>
                    </select>
                    <input type="submit" value="Submit" name="submit">
                </td>
            </tr>
        </table>
        <br><br>
        <table border="2" align="center">
            <tr>
                <td>
                    ภาพรถยนต์
                </td>
                <td>
                    รุ่นรถยนต์
                </td>
                <td>
                    ราคารถยนต์ 
                    (บาท)
                </td>
                <td>
                    อัตราดอกเบี้ย ต่อปี (ร้อยละ , %)
                </td>
            </tr>
            <tr>
                <td>
                    <img src="pic/Accord.png" style="width:200px">
                </td>
                <td>
                    Accord
                </td>
                <td>
                    1,799,000
                </td>
                <td>
                    2.00
                </td>
            </tr>
            <tr>
                <td>
                    <img src="pic/Civic.png" style="width:300px">
                </td>
                <td>
                    Civic
                </td>
                <td>
                    1,145,000
                </td>
                <td>
                    2.00
                </td>
            </tr>
            <tr>
                <td>
                    <img src="pic/Jazz.png" style="width:250px">
                </td>
                <td>
                    Jazz
                </td>
                <td>
                    754,00
                </td>
                <td>
                    4.00
                </td>
            </tr>
            <tr>
                <td>
                    <img src="pic/City.png" style="width:250px">
                </td>
                <td>
                    City
                </td>
                <td>
                    749,00
                </td>
                <td>
                    4.00
                </td>
            </tr>
        </table>
    </fieldset>
    </form>
<center>
</body>
</html>