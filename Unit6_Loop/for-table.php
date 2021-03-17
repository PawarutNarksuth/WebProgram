<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $row = $_POST['row'];
        $column = $_POST['column'];
        $rowMax = intval( $row);
        $colMax = intval( $column);

        echo "<table align='center' border='4' width='300'>";

        for($r = 1; $r <= $rowMax ; $r++) {
            echo "<tr>";

            for($c = 1; $c <= $colMax ; $c++) {
                
                if ($r == $c)
                    echo "<td align='center'><font color='#33ff66'> $r,$c </font></td>";
                else 
                    echo "<td align='center'> $r,$c </td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>