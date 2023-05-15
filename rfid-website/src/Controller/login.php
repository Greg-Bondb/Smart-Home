<?php
    require("src/Model/employee.php");

    //login to your account
    if (isset($_POST['submit'])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $employee = new employee();
        $resp = $employee->login($email,$password);

        if ($resp) {
            header('Location: home');
            $employee->log("s'est connecté","site web");
        } else {
            $employee->log("a echoue connexion","site web");
            $error = "Echec de l'authentification, l'email ou le mot de passe invalide !";
        }
    }

    require('src/View/login.php');
?>