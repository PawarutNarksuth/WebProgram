<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center >
    <form action="pageLogin2.php" method="POST">
        <table border="2" style="width:200px; border-collapse: collapse;">
                <tr>
                    <td colspan="2" align="center">
                        Login Department Store
                    </td>
                </tr>
                <tr>
                    <td>
                        Username
                    </td>
                    <td>
                        <input type="text" name="username">
                    </td>
                </tr>
                <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <input type="password" name="password">
                    </td>
                </tr>
            </table>
            <br>
            <input type="submit" value="login" name="login">
            <input type="reset" value="cancel" >
        <form>
    </center>
</body>
</html>