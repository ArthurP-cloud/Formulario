<?php
session_start();

    if (empty($_SESSION['email']) && empty($_SESSION['senha'])) {
    require_once 'class/autoload.php';
        $logar = new logando();
        $testelogar = $logar->logarCitizen();
    }
    /*if((!isset($_SESSION['email'])) and (!isset($_SESSION['senha']))){
        echo "É necessario realizar o login.";
    }*/

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Login</title>
</head>
<body>
    <div class="logo">
            <img src="imagens/Banner-1-The Citizen.png" alt="Logo">
    </div>
        <div class="login">

        <a href="index.php">Cadastre-se</a>

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
                    <h1>Entrar com Citizen</h1>
                    <hr>
                    <br><br>
                    <fieldset>
                        <legend>Login</legend>

                            <form action="login.php" class="btnsairf">
                            <input type="submit" class="btnsair" value="X".<?php session_destroy()?>>
                            </form>
                            
                            <?php
                            
                            if (!empty($_SESSION['email'])){
                                print "Bem vindo,".$_SESSION['email'];}
                            
                            ?>
                    </fieldset>
                </div>
                    
                <br><br>
            </section>
        </div>
    
</body>
</html>