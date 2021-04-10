<?php
        setcookie("employeeUsername" , "" , time()-3600);
        setcookie("employeePassword" , "", time()-3600);
        setcookie("employeePermission" , "", time()-3600);

    header("location:pageLogin1.php")
?>