<?php
require("src/Model/control.php");

class employee extends control
{

    //session validation function
    public function verifSession(): array
    {
        return $this->request2("SELECT matricule FROM `account` WHERE `matricule`=:mat", ["mat" => $_SESSION['matricule']])->fetch();
    }

    //register user function
    public function register(string $matricule, string $first_name, string $last_name, string $birth_date, string $digicode, string $rfid, string $accreditation, string $email, string $password)
    {
        if ($email == null and $password == null) {
            //compte employee
            $this->request2("INSERT INTO employee(id_employee, matricule, first_name, last_name, birth_date, digicode, rfid, accreditation) VALUES (DEFAULT,:matricule,:first_name,:last_name,:birth_date,:digicode,:rfid,:accreditation)", ['matricule' => $matricule, 'first_name' => $first_name, 'last_name' => $last_name, 'birth_date' => $birth_date, 'digicode' => $digicode, 'rfid' => $rfid, 'accreditation' => $accreditation]);
        } else {
            //compte admin
            $this->request2("INSERT INTO employee(id_employee, matricule, first_name, last_name, birth_date, digicode, rfid, accreditation) VALUES (DEFAULT,:matricule,:first_name,:last_name,:birth_date,:digicode,:rfid,:accreditation); INSERT INTO account(id_account, matricule, email, password) VALUE (DEFAULT, :matricule, :email, :password)", ['matricule' => $matricule, 'first_name' => $first_name, 'last_name' => $last_name, 'birth_date' => $birth_date, 'digicode' => $digicode, 'rfid' => $rfid, 'accreditation' => $accreditation, 'email' => $email, 'password' => hash("sha256", $password)]);
        }
    }

    //login function
    public function login(string $email, string $password): bool
    {
        $statement = $this->request2("SELECT matricule, email, `password` FROM account WHERE password=:password AND email=:email", ['password' => hash("sha256", $password), 'email' => $email]);
        $response = $statement->fetch(PDO::FETCH_ASSOC);

        if ($response) {
            //connection win
            $_SESSION['matricule'] = $response['matricule'];
            return true;
        } else {
            //connection fail
            return false;
        }
    }

    // verif accreditation user
    public function verifAcc(string $matricule): bool
    {
        $req = $this->request2("SELECT matricule, accreditation FROM `employee` WHERE `matricule`=:mat", ["mat" => $matricule])->fetch();
        if ($req['accreditation'] == "administrateur") {
            return true;
        } else {
            return false;
        }
    }

    //change account function
    public function changeAccount(string $matricule, string $first_name, string $last_name, string $birth_date, string $digicode, string $rfid, string $accreditation, string $email, string $password)
    {
        if ($email == null and $password == null) {
            //suppression compte administrateur
            if ($this->verifAcc($matricule)) {
                $this->request2("DELETE FROM account WHERE matricule=:matricule", ['matricule' => $matricule]);
            }
            //update la bdd
            $this->request2("UPDATE `employee` SET `first_name`=:first_name,`last_name`=:last_name,`birth_date`=:birth_date,`digicode`=:digicode,`rfid`=:rfid,`accreditation`=:accreditation WHERE `matricule`=:matricule", ['matricule' => $matricule, 'first_name' => $first_name, 'last_name' => $last_name, 'birth_date' => $birth_date, 'digicode' => $digicode, 'rfid' => $rfid, 'accreditation' => $accreditation]);
        } else {
            //creation compte administrateur
            if (!$this->verifAcc($matricule)) {
                $this->request2("INSERT INTO account(id_account, matricule, email, password) VALUE (DEFAULT, :matricule, :email, :password)", ['matricule' => $matricule, 'email' => $email, 'password' => hash("sha256", $password)]);
            }
            //update la bdd
            $this->request2("UPDATE `employee` SET `first_name`=:first_name,`last_name`=:last_name,`birth_date`=:birth_date,`digicode`=:digicode,`rfid`=:rfid,`accreditation`=:accreditation WHERE `matricule`=:matricule", ['matricule' => $matricule, 'first_name' => $first_name, 'last_name' => $last_name, 'birth_date' => $birth_date, 'digicode' => $digicode, 'rfid' => $rfid, 'accreditation' => $accreditation]);
        }
    }

    // disconnect account function
    public function disconnect()
    {
        session_destroy();
    }

    //log function
    public function log(string $action, string $object)
    {
        date_default_timezone_set('Europe/Paris');
        $date = date('Y-m-d H:i:s');
        if (isset($_SESSION['matricule'])) {
            $sess = $_SESSION['matricule'];
        } else {
            $sess = "user";
        }
        $this->request2("INSERT INTO logs(id_log, matricule, action, object, date) VALUES (DEFAULT,:matricule,:action,:object,:date)", ['matricule' => $sess, 'action' => $action, 'object' => $object, 'date' => $date]);
    }

    //selectionner tous les employes
    public function SelectEmployee(): array
    {
        return $this->request2("SELECT id_employee, matricule, first_name, last_name, digicode, accreditation FROM employee", [])->fetchAll();
    }

    //supprime un employé
    public function deleteEmployee($id)
    {
        return $this->request2("DELETE FROM employee WHERE id_employee=:id_employee", ['id_employee' => $id]);
    }

    //recupere les infos d'un employé via l'id
    public function parseEmployee($id): array
    {
        return $this->request2("SELECT matricule, first_name, last_name, birth_date, digicode, accreditation FROM employee WHERE id_employee=:id_employee", ['id_employee' => $id])->fetch();
    }

    //recupere les infos d'un employé via le matricule
    public function matEmployee($matricule): array
    {
        return $this->request2("SELECT first_name, last_name, digicode FROM employee WHERE matricule=:matricule", ['matricule' => $matricule])->fetch();
    }

    //renvoie une matricule non utilisée
    public function matricule(): string
    {
        $lettres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $chiffres = '0123456789';
        $stringAleatoire = "";
        $tabMatricule = $this->request2("SELECT matricule FROM employee", [])->fetchAll();

        do {
            // Générer 3 lettres majuscules aléatoires
            $lettreAleatoire = substr(str_shuffle($lettres), 0, 3);
            // Générer 3 chiffres aléatoires
            $chiffreAleatoire = substr(str_shuffle($chiffres), 0, 3);
            // Concaténer les lettres et les chiffres pour former la chaîne finale
            $stringAleatoire = $lettreAleatoire . '-' . $chiffreAleatoire;
        } while (in_array($stringAleatoire, $tabMatricule));

        return $stringAleatoire;
    }

    //selectionner tous les employes
    public function SelectLog(): array
    {
        return $this->request1("SELECT id_log, matricule, action, object, date FROM LOGS ORDER by id_log DESC")->fetchAll();
    }

    //récuperer le matricule via l'uid
    public function log2(string $uid)
    {
        date_default_timezone_set('Europe/Paris');
        $date = date('Y-m-d H:i:s');
        $object = "rfid";
        //demande matricule via uid
        $rfid_matricule = $this->request2("SELECT matricule FROM employee WHERE rfid = :rfid", ['rfid' => $uid])->fetch();
        //
        $last_action = $this->request2("SELECT `action` FROM logs WHERE matricule = :matricule order by id_log DESC LIMIT 1", ['matricule' => $rfid_matricule['matricule']])->fetch();

        if ($last_action["action"] == "entree") {
            $action = "sortie";
        } else {
            $action = "entree";
        }
        $this->request2("INSERT INTO logs(id_log, matricule, action, object, date) VALUES (DEFAULT,:matricule,:action,:object,:date)", ['matricule' => $rfid_matricule['matricule'], 'action' => $action, 'object' => $object, 'date' => $date]);
    }
}
