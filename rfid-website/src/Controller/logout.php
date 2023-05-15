<?php
    require("src/Model/employee.php");

    $employee = new employee();
    $employee->disconnect();
    $employee->log("s'est déconnecté","site web");
    header("Location: login");

?>