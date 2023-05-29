<?php
session_start();
/*if($_SESSION){
    header('Location: home.php');
}*/
if(!empty($_SESSION['email'])){
        header("Location: home.php");
    }
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
        <div class="container">
            <nav>
                <ul class="menu">
                    <li><a href="index.php">Inicio</a></li><br>
                    <li><a href="login.php">Game</a></li>
                </ul>
            </nav>
            <section>

                <div class="cadastre">

                    <h1>Entrar com Citizen</h1>
                    <hr>
                    <br>
                    <?php
                        if(isset($_SESSION['msg'])){
                            echo $_SESSION['msg'];
                            unset($_SESSION['msg']);
                        }
                    ?>
                    <fieldset>

                        <legend>Login</legend>

                        <form action="home.php" method="post">
                            <br>
                            <input type="text" class="campo" name="email" maxlength="50" placeholder="E-mail" required autofocus><br>
                            
                            <br>
                            <input type="password" class="campo" name="senha" placeholder="Senha" maxlength="8" required><br>
                            
                            <br>
                            <p class="btns">
                                <input type="submit" class="btn" name="logar" value="Logar">
                            </p><br>

                        </form>

                    </fieldset>

                </div>
                    
                <br><br>
            </section>

        </div>
    
</body>

</html>
