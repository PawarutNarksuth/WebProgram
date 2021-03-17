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
        <form method="GET" action="CarSell.php">
            <table border=2>
                <tr>
                    <td>
                        ชื่อ - นามสกุลลูกค้า
                    </td>
                    <td>
                        <input type="text" name="Name">
                    </td>
                </tr>
                <tr>
                    <td>
                        จำนวนเงินที่ต้องการผ่อนต่องวด
                    </td>
                    <td>
                        <input type="text" name="Money">
                    </td>
                </tr>
                </tr>
                <tr>
                    <td>
                        จำนวนเงินที่ต้องการ
                    </td>
                    <td>
                        <select name="SEL"> 
                            <option> 36</option>
                            <option> 48</option>
                            <option> 60</option>
                            <option> 72</option>
                        </select>
                    </td>
                </tr>
                <tr align="center">
                    <td colspan="2">
                        <input type="submit" value="ซื้อรถ" name="Buy">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>