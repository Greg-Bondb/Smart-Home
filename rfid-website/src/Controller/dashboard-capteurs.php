<?php
    require("src/Model/employee.php");

    $employee = new employee();
    $info = $employee->matEmployee($_SESSION['matricule']);
    
    $name =  $info['first_name']." ".$info['last_name'];

    $employee->log("s'est connecté", "dashboard");

    require('src/View/dashboard-capteurs.php');
?>