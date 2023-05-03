<?php

class cadastra extends conexao {

    public function cadastrarCitizen(){        

        

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];

        $conn = $this->connect();
        
        $verificar = "select email from usuario where email = '$email'";

        $stmt = $conn->prepare($verificar);
        
        $stmt->execute();

        $vlinhas = $stmt->rowCount();
        
        if ($vlinhas < 1){

        $sql = "insert into usuario (nome,sobrenome,email) values ('$nome','$sobrenome','$email')";
        $stmt = $conn->prepare($sql);
        
        $stmt->execute();

        $linhas = $stmt->rowCount();
        print "<br>";
        print_r($linhas);
            if ($linhas == 1) {
                return 1;
            }

        }
        return 0;

        

        
        
        
       
    }
}