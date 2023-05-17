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

        <a href="login.php">Login</a>

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
                <h1>Cadastre seu Citizen</h1>
                <hr>
                <br><br>
            </div>
            <div class="preencha">
                <fieldset>
                    
                    <legend>Preencha todos os campos</legend>

                        <form method="post" action="processar.php">

                            <p>Nome</p>
                            <input type="text" class="campo" name="nome" maxlength="12" required autofocus><br>
                            <p>Sobrenome</p>
                            <input type="text" class="campo" name="sobrenome" maxlength="20" required><br>
                            <p>E-mail</p>
                            <input type="email" class="campo" name="email" maxlength="50" required><br>
                            <p>Senha</p>
                            <input type="password" class="campo" name="senha" maxlength="8" required><br>
                            

                            <p class="btns">
                            <input type="submit" class="btn" value="Cadastrar">
                            <input type="reset" class="btn" value="Limpar">
                            </p>
                        </form>
                        <form action="testes.php">
                            <input type="submit" class="btnteste" value="Area de testes">
                        </form>
                </fieldset>
            </div>
        </section>
    </div>

</body>
</html>