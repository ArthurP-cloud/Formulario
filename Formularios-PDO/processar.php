
<?php

    //include_once("cadastra.php");
    
    require_once 'classes/autoload.php';
            $alunos = new cadastra();
            $alunos->cadastrarCitizen();

    //$linhas = mysqli_affected_rows($conexao);

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

        Cadastre-se ou <a href="index.php">Login</a>

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

                    if ($linhas == 1) {
                        print "Cadastro efetuado com sucesso!";
                    }
                    if ($linhas == 0) {
                        print "Cadastro NÂO efetuado.<br> Já existe um usuário com este e-mail!";
                    }                   

                ?>

                    <br><br>
                <a href="index.php">Ir ao Login</a>

        </section>
    </div>

</body>
</html>