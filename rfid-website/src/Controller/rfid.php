<?php    
    require("src/Model/employee.php");

    $employee = new employee();

    if (isset($_GET['uid'])){
        $data = $employee->log2($_GET['uid']);    
    }
?>