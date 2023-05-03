
<?php

    include_once("conexao.php");    

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "insert into usuario (nome,sobrenome,email,senha) values ('$nome','$sobrenome','$email','$senha')";
    
    try {
        $salvar = mysqli_query($conexao,$sql);

        $linhas = mysqli_affected_rows($conexao);
    } catch (Exception $erro) {
  
    }
    

    mysqli_close($conexao);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criar novo Citizen</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo2.css">
</head>
<body>
    
    <div class="logo">
        <img src="imagens/Banner-1-The Citizen.png" alt="Logo">
    </div>
    <div class="login">

        Cadastre-se ou <a href="login.php">Login</a>

    </div>
    
    <div class="container">
        <nav>
            <ul class="menu">
                <li>Inicio</li><br>
                <li>Game</li>
            </ul>
        </nav>
        <section>
            <div class="cadastre">
            <h1>Cadastre seu Citizen</h1>
            <hr>
            <br><br>
            </div>           
            
                <?php

                    if($linhas ==1) {                           
                        
                        print "Cadastrado com sucesso.";  
                    }else{
                        print "<br>!! E-mail já cadastrado !!<br>";
                    }  

                ?>

                    <br><br>

        </section>
    </div>

</body>
</html>