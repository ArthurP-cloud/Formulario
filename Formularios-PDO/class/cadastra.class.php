<?php

class cadastra extends conexao {

    public function cadastrarCitizen(){        

        

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        

        $conn = $this->connect();
        
        $verificarEmailExist = "select email from usuario where email = '$email'";

        $stmt = $conn->prepare($verificarEmailExist);
        
        $stmt->execute();

        $verificarLinhas = $stmt->rowCount();
        
        if ($verificarLinhas < 1){
        $rand = rand(0,1);
        $rand1 = rand(0,1);
        $rand2 = rand(0,1);

        $sql = "insert into usuario (nome,sobrenome,email,senha,parent1,parent2,locinicio) values ('$nome','$sobrenome','$email','$senha','$rand','$rand1','$rand2')";
        $stmt = $conn->prepare($sql);
        
        $stmt->execute();

        $linhas = $stmt->rowCount();

            if ($linhas == 1) {
                return 1;
            }

        }
        return 0; 

    }
}