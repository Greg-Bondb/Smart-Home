<?php
    require("src/Model/employee.php");

    $employee = new employee();
    $rows = $employee->SelectEmployee();

    if (isset($_POST["delete"])){
        $data = $employee->parseEmployee($_GET['id_employee']);
        $employee->deleteEmployee($_GET['id_employee']);
        $employee->log("a supprimé", $data['matricule']);
        header('Location: account');
    }

    require('src/View/account.php');
?>