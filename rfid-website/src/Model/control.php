<?php
    require("src/Model/bdd.php");
    
    //class user intecract with bdd
    class control extends bdd {

        //unique request function
        public function request1(string $rqsql): object{
            $statement = $this->connexion->prepare($rqsql);
            $statement->execute();
            return $statement;
        }

        //double request function
        public function request2(string $rqsql, array $exec): object{
            $statement = $this->connexion->prepare($rqsql);
            $statement->execute($exec);
            return $statement;
        }
    }

?>