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
    <form method="GET" action="OnlypageEx01.php">
        <table border="2" >
            <tr>
                <td colspan="2" align="center">
                    การรับรหัสนักศึกษา
                </td>
            </tr>
            <tr>
                <td>
                    รหัสนักศึกษา 
                </td>
                <td>
                    <input type="text" name="ID">
                </td>
            </tr>
            <tr>
                <td>
                    ชื่อ-นามสกลุ
                </td>
                <td>
                    <input type="text" name="strname">
                </td>
            </tr>
            <tr>
                <td>
                    เพศ
                </td>
                <td>
                ชาย <input type="radio"  name="sex" value="ชาย">
                หญิง <input type="radio" name="sex" value="หญิง">
                </td>
            </tr>
            <tr>
                <td>
                    หลักสูตร
                </td>
                <td>
                    <select name="sub">
                        <option>IT</option>
                        <option>ITI</option>
                        <option>INE</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    เกรดเฉลี่ย
                </td>
                <td>
                <input type="text" name="grade">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit" name="check"> submit</button>
                    <button type="reset"> reset</button>
                </td>
            </tr>
        </table>
    </form>
</center>
    <?php
        if(isset($_GET['check'])){
    ?>
        <center>
        <?php 
                $id = $_GET['ID'];
                $name = $_GET['strname'];
                $sex = $_GET['sex'];
                $sub = $_GET['sub'];
                $grade =$_GET['grade'];
                
                echo   "รหัสนักศึกษา : $id <br>" ;
                echo   "ชื่อ - นามสกุล : $name <br>" ;
                echo  "เพศ : $sex <br>"  ;
                echo   "สาขาวิชา : $sub <br>" ;
                echo   "เกดรเฉลี่ย : $grade <br>" ;  
        ?>
        <a href="OnlypageEx01.php"> back </a>
    </center>
    <?php
        }
    ?>
</body>
</html>