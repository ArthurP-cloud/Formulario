<?php
session_start();
    if (isset($_POST['logar']) && empty($_SESSION['email']) && empty($_SESSION['senha'])) {
    require_once 'class/autoload.php';
        $logar = new logando();
        $testelogar = $logar->logarCitizen();
    }
    /*if((!isset($_SESSION['email'])) and (!isset($_SESSION['senha']))){
        echo "É necessario realizar o login.";
    }*/
    if(!$_SESSION){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/newstily.css">
    <title>Login</title>
</head>
<body>
    <div class="logo">
            <img src="imagens/Banner-1-The Citizen.png" alt="Logo">
    </div>
        <nav>
                <ul class="menu">
                    <li><a href="index.php">Inicio</a></li><br>
                    <li><a href="login.php">Game</a></li>
                </ul>
            </nav>
        <div class="container">
            
            <section>
                <div class="cadastre">
                    <h1> Olá Citizen</h1>
                    <hr>
                    <br><br>
                    <fieldset>
                        <legend>Login</legend>
                            <div class="divsair">
                            <button class="btnsair"><a href="sair.php">X</a></button>
                            </div>
                            
                            <div class="textphp">
                                <?php
                                
                                if (!empty($_SESSION['email'])){
                                    print "&emsp;Bem vindo,\n".$_SESSION['nome']."\n".$_SESSION['sobrenome'].".<br>";}

                                switch ($_SESSION['parent1']){
                                    case 0:
                                        if($_SESSION['parent1'] == 0 && $_SESSION['parent2'] == 0){
                                            print "<p> Filho de pais desconhecidos"; 
                                        }else{
                                            print "<p>Filho de pai desconhecido e ";}
                                    break;
                                    case 1:
                                        print "<p>&emsp;Filho de Rodrigo e ";
                                    break;
                                    case 2:
                                        print "<p>&emsp;Filho de Bruno e ";
                                    break;
                                    case 3:
                                        print "<p>&emsp;Filho de Carlos e ";
                                    break;
                                    case 4:
                                        print "<p>&emsp;Filho de Yan e ";
                                    break;
                                    case 5:
                                        print "<p>&emsp;Filho de Arthur e ";
                                    break;
                                }
                                switch ($_SESSION['parent2']){
                                    case 0:
                                        if($_SESSION['parent1'] == 0 && $_SESSION['parent2'] == 0){
                                            print ".</p>"; 
                                        }else{
                                            print "mãe desconhecida.</p>";}
                                    break;
                                    case 1:
                                        print "Gabriela.</p>";
                                    break;
                                    case 2:
                                        print "Brenda.</p>";
                                    break;
                                    case 3:
                                        print "Ana.</p>";
                                    break;
                                    case 4:
                                        print "Carolina.</p>";
                                    break;
                                    case 5:
                                        print "Daniela.</p>";
                                    break;
                                }
                                if ($_SESSION['parentAdotivo1']!=null && $_SESSION['parentAdotivo2']!=null){
                                    switch($_SESSION['parentAdotivo1']){
                                        case 1:
                                            print "&emsp;Pais adotivos, Rodrigo e ";
                                        break;
                                        case 2:
                                            print "&emsp;Pais adotivos, Bruno e ";
                                        break;
                                        case 3:
                                            print "&emsp;Pais adotivos, Carlos e ";
                                        break;
                                        case 4:
                                            print "&emsp;Pais adotivos, Yan e ";
                                        break;
                                        case 5:
                                            print "&emsp;Pais adotivos, Arthur e ";
                                        break;
                                    }
                                    switch($_SESSION['parentAdotivo2']){
                                        case 1:
                                            print "Gabriela.";
                                        break;
                                        case 2:
                                            print "Brenda.";
                                        break;
                                        case 3:
                                            print "Ana.";
                                        break;
                                        case 4:
                                            print "Carolina.";
                                        break;
                                        case 5:
                                            print "Daniela.";
                                        break;
                                    }
                                }  
                                switch ($_SESSION['locinicio']){
                                    case 0:
                                        print "<p>&emsp;Nascido de parto normal esta morando com seus pais.</p>";
                                    break;
                                    case 1:
                                        print "<p>&emsp;Sofre um acidente de avião e se encontra em uma ilha aparentemente deserta.</p>";
                                    break;
                                    case 2:
                                        print "<p>&emsp;Foi adotado ainda jovem e mora com eles.</p>";
                                    break;
                                    case 3:
                                        print "<p>&emsp;Foi encontrado na porta de uma igreja e entrege a seus pais adotivos que o acolheram.</p>";
                                    break;
                                    case 4:
                                        print "<p>&emsp;Fruto de uma inceminação artificial mora com seus pais.</p>";
                                    break;
                                    
                                }   

                                
                                ?>
                            </div>
                            <br>
                    </fieldset>
                </div>
                    
                <br><br>
            </section>
            <div class="options">
                <button class="vamos">
                    Ok,Vamos
                </button>
            </div>
        </div>
    
</body>
</html>