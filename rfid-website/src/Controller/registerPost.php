<?php
    require("src/Model/employee.php");

    $employee = new employee();

    if (isset($_POST["submit"])){
        $accreditation = $_POST["accreditation"];
        //$rfid = $_POST["rfid"];
        $rfid = "1234";
        $firstname = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $birth = $_POST["birth"];
        $digicode = $_POST["digicode"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        $register = $employee->register($matricule, $firstname, $lastName, $birth, $digicode, $rfid, $accreditation, $email, $password);
        header("Location: account");
    }

    require('src/View/register.php');
?>