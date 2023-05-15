<?php
//class bdd connexion
class bdd {

    public PDO $connexion;
    
    //construc function
    public function __construct() {
        $this->connexion = new PDO('mysql:host=192.168.137.1;port=22000;dbname=rfid;charset=utf8mb4', 'root', '1234');
    }
}

?>