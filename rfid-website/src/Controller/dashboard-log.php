<?php
    require("src/Model/employee.php");

    $employee = new employee();
    $info = $employee->matEmployee($_SESSION['matricule']);
    
    $name =  $info['first_name']." ".$info['last_name'];


    $rows = $employee->SelectLog();


    require('src/View/dashboard-log.php');
?>