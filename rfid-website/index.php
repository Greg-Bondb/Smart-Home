<?php

// démarre d'une session utilisateur
session_start();

$uri = explode('/', $_SERVER['REQUEST_URI']);
$action = $uri[1];

//si l'utilisateur n'a pas de session en cours
if (!isset($_SESSION['matricule']) && !isset($_GET["uid"])) {
    if ($action == "login" || "") {
        require('./src/Controller/login.php');
    } else {
        header('Location: login');
        require('./src/Controller/login.php');
    }
    //si l'utilisateur a une session en cours
} else if (isset($_SESSION['matricule'])) {
    if (isset($_GET['id_employee'])) {
        $employe = $_GET['id_employee'];
    } else {
        $employe = "";
    }
    if ($action == "home" || $action == "") {
        require('./src/Controller/home.php');
    } else if ($action == "register") {
        require('./src/Controller/register.php');
    } else if ($action == "account") {
        require('./src/Controller/account.php');
    } else if ($action == "account?id_employee=" . $employe) {
        require('./src/Controller/account.php');
    } else if ($action == "changeAccount?id_employee=" . $employe) {
        require('./src/Controller/changeAccount.php');
    } else if ($action == "logout") {
        require('./src/Controller/logout.php');
    } else if ($action == "dashboard-capteurs") {
        require('./src/Controller/dashboard-capteurs.php');
    } else if ($action == "dashboard-led") {
        require('./src/Controller/dashboard-led.php');
    } else if ($action == "dashboard-control") {
        require('./src/Controller/dashboard-control.php');
    } else if ($action == "dashboard-autre") {
        require('./src/Controller/dashboard-autre.php');
    } else if ($action == "dashboard-log") {
        require('./src/Controller/dashboard-log.php');
    } else if ($action == "dashboard-logout") {
        require('./src/Controller/dashboard-logout.php');
    } else if ($action == "document_technique") {
        require('./src/View/document_technique.php');
    } else {
        require('./src/View/404.php');
    }
} else if ($action == "rfid?uid=" . $_GET["uid"]) {
    require('./src/Controller/rfid.php');
}
