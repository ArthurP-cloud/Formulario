
<?php

    //include_once("cadastra.php");
    
    require_once 'class/autoload.php';
            $citizen = new cadastra();
            $cadastro = $citizen->cadastrarCitizen();

            
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

        <a href="login.php">Login</a>

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
                    $msg= "";

                    if ($cadastro>0) {
                        $msg = "Cadastro realizado com sucesso.";
                        print "<p>Bem vindo Citizen</p>";
                    }else{
                        $msg = "Não foi possível cadastrar";
                        print "<p>Tente novamente.</p>";
                    }

                    echo '<script type="text/javascript"> alert("'.$msg.'") </script>';
               
                ?>
                
            <br><br>
            <a href="login.php">Ir ao Login</a>

        </section>
    </div>

</body>
</html>