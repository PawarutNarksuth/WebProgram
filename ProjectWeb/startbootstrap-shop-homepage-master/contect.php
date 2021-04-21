<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
    <style>
        center img{
            border-radius: 50%;
        }
        .con {
            border-radius: 5px;
            background-color: #e4dcdc;
            padding: 20px;
        }
    </style>
</head>
<body style="font-family:FC Home;height: 1000px;background-image: url(images/bgg.jpg);color: wheat;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php">Back</a>
    </nav>
    <br><br><br><br>
    <center>
        <table style="text-align: center;width: 900px;" >
            <tr>
                <td colspan="2">
                    <h1> ติดต่อเรา </h1>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="images/con1.jpg" width="300px">
                </td>
                <td>
                    <img src="images/con2.jpg" width="300px">
                </td>
            </tr>
            <tr>
                <td>
                    Best(ผู้ดูแลฐานข้อมูล)
                </td>
                <td>
                    Toey(ผู้ดูแลระบบ)
                </td>
            </tr>
        </table>

        <br><br><br><br>
        
        <form action="check_contect.php" method="GET">
        <div style="background-color: #f2f2f2;width: 900px;border-radius: 10px;color: black;padding: 20px" >
            <table >
                <tr>
                    <td>
                        <h3>Contact us</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        Username :
                    </td>
                    <td>
                        <input type="text" style="width: 500px;" placeholder="Username" name="user"><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email :
                    </td>
                    <td>
                        <input type="text" style="width: 500px;" placeholder="Email" name="mail">
                    </td>
                </tr>
                <tr>
                    <td>
                        Subject :
                    </td>
                    <td>
                        <textarea placeholder="Write your problem . . ." style="height: 200px;width: 500px;text-align: center;" name="sub"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" style="width: 100px;">
                    </td>
                </tr>
            </table>
        </div>
    </form>
    </center>
</body>
</html>