<?php

abstract class Connection{

    private $hostDB = 'mysql:host=localhost;dbname=cadastro';
    private $user = 'root';
    private $pass = '';

    protected function connect(){
        try{

            $conn = new PDO($this->hostDB,$this->user,$this->pass);
            $conn->exec("set names utf8");
            return $conn;

        }catch(PDOException $erro){

            echo $erro->getMessage();
        }
    }
}

?>