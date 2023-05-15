<?php
    require("src/Model/employee.php");

    $employee = new employee();
    $employee->log("s'est déconnecté","dashboard");
    header("Location: home");

?>