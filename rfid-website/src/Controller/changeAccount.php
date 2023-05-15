<?php
//marche pas encore + rajouter logo loupe search
    require("src/Model/employee.php");

    $employee = new employee();

    if (isset($_POST["modif"])) {
        $data = $employee->parseEmployee($_GET['id_employee']);
    };

    if (isset($_POST["submit"])){
        $accreditation = $_POST["accreditation"];
        $matricule = $_POST["matricule"];
        //$rfid = $_POST["rfid"];
        $rfid = "1234";
        $firstname = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $birth = $_POST["birth"];
        $digicode = $_POST["digicode"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        $register = $employee->changeAccount($matricule, $firstname, $lastName, $birth, $digicode, $rfid, $accreditation, $email, $password);
        $employee->log($_SESSION['matricule']." a mis à jour", $matricule);
        header("Location: account");
    }

    require('src/View/changeAccount.php');
?>