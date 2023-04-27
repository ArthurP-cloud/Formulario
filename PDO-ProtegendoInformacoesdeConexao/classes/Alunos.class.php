<?php

class Alunos extends Connection {

    public function listarAlunos(){
        $conn = $this->connect();

        $sql = "select nome, email from usuarios";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();//armazenar todas as informaçoes na variavel $result
    
        foreach($result as $values)://foreach - elimina 1 dos 2 arrays formados ali encima
            echo $values['nome'].'<br>';
            echo $values['email'].'<br><br>';
        endforeach;
    
    }

}