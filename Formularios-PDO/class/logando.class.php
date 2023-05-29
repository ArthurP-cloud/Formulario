<?php

class logando extends conexao{

    public function logarCitizen(){

        if(isset($_POST['logar']) && !empty($_POST['email'])){
            //tem que ser a primeira linha da pagina

            //$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $sql = "SELECT * FROM usuario where email='$email'";
            $conn = $this->connect();
            $stmt = $conn->prepare($sql);

            $stmt->execute();

            $result_usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            $numrows = $stmt->rowCount();
            if($numrows == 1){

                $_SESSION['email'] = $email;
                
                //var_dump($result_usuario);
                if (password_verify($senha, $result_usuario['senha'])) {
                    $_SESSION['senha'] = $result_usuario['senha'];
                    
                    $_SESSION['nome'] = $result_usuario['nome'];
                    $_SESSION['sobrenome'] = $result_usuario['sobrenome'];
                    $_SESSION['parent1'] = $result_usuario['parent1'];
                    $_SESSION['parent2'] = $result_usuario['parent2'];
                    $_SESSION['parentAdotivo1'] = $result_usuario['parentAdotivo1'];
                    $_SESSION['parentAdotivo2'] = $result_usuario['parentAdotivo2'];
                    $_SESSION['locinicio'] = $result_usuario['locinicio'];
                    return 1;
                    
                }else{
                    unset($_SESSION['email']);
                    unset($_SESSION['senha']);
                    unset($_SESSION['nome']);
                    unset($_SESSION['sobrenome']);
                    unset($_SESSION['parent1']);
                    unset($_SESSION['parent2']);
                    unset($_SESSION['parentAdotivo1']);
                    unset($_SESSION['parentAdotivo2']);
                    unset($_SESSION['locinicio']);
                    $_SESSION['msg'] = "<p style='color: red'>Erro: Usuário ou senha inválida!</p><br>";
                    header("Location: login.php");
                    
                }

            }else{
                $_SESSION['msg'] = "<p style='color: red'>Erro: Usuário ou senha inválida!</p><br>";
                header("Location: login.php");
                
            }

        }
     
    }
    

}

?>