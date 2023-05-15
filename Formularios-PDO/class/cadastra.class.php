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
        $randparent1 = rand(0,5);
        $randparent2 = rand(0,5);
        $randlocinicio = rand(0,4);
        
            if ($randparent1 == 0 && $randparent2 == 0){
                $randParentAdotivo1 = rand(1,5);
                $randParentAdotivo2 = rand(1,5);
                $randlocinicio = rand(2,3);
                $sql = "insert into usuario (nome,sobrenome,email,senha,parent1,parent2,parentAdotivo1,parentAdotivo2,locinicio) values 
                ('$nome','$sobrenome','$email','$senha','$randparent1','$randparent2','$randParentAdotivo1','$randParentAdotivo2','$randlocinicio')";

            }else{
            $sql = "insert into usuario (nome,sobrenome,email,senha,parent1,parent2,locinicio) values ('$nome','$sobrenome','$email','$senha','$randparent1','$randparent2','$randlocinicio')";
            }
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