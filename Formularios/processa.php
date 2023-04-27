<?php

include_once("conexao.php");//ao inves de digitar toda a conexao novamente incluimos o arquivo

$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];

$sql = "insert into usuarios (nome,email,profissao) values ('$nome','$email','$profissao')";
$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Formulário com HTML5</title>
        <link rel="stylesheet" href="css/usuarios.css">
    </head>
    <body>
        <div class="container">
            <nav>
                <ul class="menu">
                    <a href="index.php"><li>Cad. Funcionários</li></a>
                    <li>Cad. Fornecedores</li>
                    <li>Cad. Clientes</li>
                    <li>Cad. Serviços</li>
                    <a href="consultas.php"><li>Consultas</li></a>
                    <li>Sair</li>
                </ul>
            </nav>
            <section>
                <h1>Confirmação de Cadastro</h1>
                <hr><br><br>

                <?php
                if($linhas == 1){
                    print "Cadastro efetuado com sucesso!";

                }else{
                    print "Cadastro NÃO efetuado.<br> Já existe um usuário com este e-mail!";

                }
                ?>

            </section>
        </div>        
    </body>
</html>