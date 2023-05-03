<?php
session_start();

    //print_r($_REQUEST);
    if (!empty($_POST['email'] && !empty($_POST['senha']))) 
    {

        include_once('conexao.php');

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuario where email = '$email' and senha = '$senha'";

            $result = $conexao->query($sql);

            $linhas = mysqli_affected_rows($conexao);


            if ($linhas == 1){

                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;

                header('Location: home.php');

            }else{

                unset($_SESSION['email']);
                unset($_SESSION['senha']);
                
                print "Citizen não encontrado";
            }

            mysqli_close($conexao);
        
        
    }else{
       header('Location: login.php');

        
    }


?>