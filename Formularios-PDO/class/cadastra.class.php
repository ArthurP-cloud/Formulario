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
        $a = 0;
        while ($a <= 19) {
        
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
            $sql = "insert into usuario (nome,sobrenome,email,senha,parent1,parent2,locinicio) values 
            ('$nome','$sobrenome','$email','$senha','$randparent1','$randparent2','$randlocinicio')";
            }
        $stmt = $conn->prepare($sql);
        
        $stmt->execute();

        $linhas = $stmt->rowCount();
        switch($a){
            case 0: $email = "carol@teste.com";
            $a++;
            break;
            case 1: $email = "ana@teste.com";
            $a++;
            break;
            case 2: $email = "digo@teste.com";
            $a++;
            break;
            case 3: $email = "zaper@teste.com";
            $a++;
            break;
            case 4: $email = "davio@teste.com";
            $a++;
            break;
            case 5: $email = "a@teste.com";
            $a++;
            break;
            case 6: $email = "b@teste.com";
            $a++;
            break;
            case 7: $email = "c@teste.com";
            $a++;
            break;
            case 8: $email = "d@teste.com";
            $a++;
            break;
            case 9: $email = "e@teste.com";
            $a++;
            break;
            case 10: $email = "f@teste.com";
            $a++;
            break;
            case 11: $email = "g@teste.com";
            $a++;
            break;
            case 12: $email = "h@teste.com";
            $a++;
            break;
            case 13: $email = "i@teste.com";
            $a++;
            break;
            case 14: $email = "j@teste.com";
            $a++;
            break;
            case 15: $email = "l@teste.com";
            $a++;
            break;
            case 16: $email = "m@teste.com";
            $a++;
            break;
            case 17: $email = "n@teste.com";
            $a++;
            break;
            case 18: $email = "o@teste.com";
            $a++;
            break;
            case 19: $email = "p@teste.com";
            $a++;
            break;
        }
        }

            if ($linhas == 1) {
                return 1;
            }

        }
        return 0; 

    }
}