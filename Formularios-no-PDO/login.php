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

    <a href="index.php">Cadastre-se</a> ou Login

    </div>
    
    <div class="container">
        <nav>
            <ul class="menu">
                <a href="index.php"><li>Inicio</li></a><br>
                <a href="home.php"><li>Game</li></a>
            </ul>
        </nav>
        <section>
            <div class="cadastre">
            <h1>Cadastre seu Citizen</h1>
            <hr>
            <br><br>
            </div>
            <div class="preencha">
            <fieldset>
                
                <legend>Preencha todos os campos</legend>

                    <form method="post" action="testlogin.php">

                        <p>E-mail</p>
                        <input type="email" class="campo" name="email" maxlength="50" requered><br>
                        <p>Senha</p>
                        <input type="password" class="campo" name="senha" maxlength="8" required><br>

                        <p class="btns">
                        <input type="submit" class="btn" value="Entrar"><br>

                    </form>

                    
            </div>
             

            </fieldset>

        </section>
    </div>

</body>
</html>