<?php


class Conexao {
    
        public Static $pdo;


        public function __contruct() {

        }

        public Static function getInstance(){

            if(!isset(self::$pdo)){

                try{
                    self::$pdo = new PDO('mysql:host=localhost;dbname=SGI', 'root', 'victor');
                }  catch (PDOException $e){
                    echo $e->getMessage();
                }
            }

            return self::$pdo;

        }

    
    }

?>
