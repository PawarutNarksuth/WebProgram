<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body >  
    <center>
        <form action="Addgoods2.php" method="GET">
                <table border="2" style="width:500px">
                    <tr >
                        <td colspan="2" align="center">
                            Add goods
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Goods id
                        </td>
                        <td>
                            <input type="text" name="id" style="width:80%">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        Goods name
                        </td>
                        <td>
                            <input type="text" name="name" style="width:80%">
                        </td>
                    </tr>    <tr>
                        <td>
                        Goods price (bath)
                        </td>
                        <td>
                            <input type="text" name="price" style="width:80%">
                        </td>
                    </tr>    <tr>
                        <td>
                        Goods quantity
                        </td>
                        <td>
                            <input type="text" name="gq" style="width:80%">
                        </td>
                    </tr>
                </table>
                <br>
                <input type="submit" value="Add" name="submit">
                <input type="reset" value="Clear">
            </center>
        </form>
</body>
</html>