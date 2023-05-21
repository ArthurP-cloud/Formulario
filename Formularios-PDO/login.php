<?php
session_start();

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

                        <form action="home.php" method="post">
                            <p>E-mail</p><br>
                            <input type="text" class="campo" name="email" maxlength="50" required autofocus><br>

                            <p>Senha</p><br>
                            <input type="password" class="campo" name="senha" maxlength="8" required><br>
                            
                            <p class="btns">
                                <input type="submit" class="btn" value="Logar">
                            </p><br>

                        </form>

                    </fieldset>

                </div>
                    
                <br><br>
            </section>

        </div>
    
</body>

</html>