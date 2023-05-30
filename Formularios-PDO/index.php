<?php
session_start();
if(!empty($_SESSION['email'])){
    header("Location: home.php");
}
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
                <li><a href="index.php">Inicio</a></li>
                <li><a href="login.php">Game</a></li>
            </ul>
        </nav>
        <section>
            <div class="cadastre">
                <h1>Cadastre seu Citizen</h1>
                <hr><br>
                
                <fieldset>
                    
                    <legend>Preencha todos os campos</legend>

                        <form method="post" action="processar.php">

                            <input type="text" class="campo" name="nome" maxlength="12" placeholder="Nome" required autofocus><br><br>

                            <input type="text" class="campo" name="sobrenome" maxlength="20" placeholder="SobreNome" required><br><br>
  
                            <input type="email" class="campo" name="email" maxlength="50" placeholder="E-mail" required><br><br>

                            <input type="password" class="campo" name="senha" maxlength="8" placeholder="Senha" required><br>
                            

                            <p class="btns">
                            <input type="submit" class="btn" value="Cadastrar">
                            <input type="reset" class="btn" value="Limpar">
                            </p>
                        </form>
                            
                        
                </fieldset>
            </div>
        </section>
    </div>
    
</body>
</html>