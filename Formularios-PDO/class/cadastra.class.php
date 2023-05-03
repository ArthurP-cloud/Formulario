<?php

class cadastra extends conexao {

    public function cadastrarCitizen(){

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];

        $conn = $this->connect();

        $sql = "insert into usuario (nome,sobrenome,email) values ('$nome','$sobrenome','$email')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }
}