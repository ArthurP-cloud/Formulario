<?php
session_start();
    $semail = $_SESSION['email'];
    $ssenha = $_SESSION['senha'];

    if (!isset($semail) == true and (!isset($ssenha['senha']) == true)) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        
        header('Location: login.php');
    }
    $logado = $semail;

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
    
    <div class="container">
        <nav>
            <ul class="menu">
                <a href="index.php"></a><li>Inicio</li><br>
                <li>Game</li>
            </ul>
        </nav>
        <section>
            <div class="cadastre">
            <?php
                print "<h4>Bem Vindo, $logado</h4>";
            ?>
            <hr>
            <br><br>
            </div>
            <div class="preencha">
            <fieldset>
                
                <legend>The Citizen</legend>

                <a href="sair.php"><input type="submit" class="btnsair" value=" X "></a>
                    
            </div>
             

            </fieldset>

        </section>
    </div>

</body>
</html>