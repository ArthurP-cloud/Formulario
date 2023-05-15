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
                                print "Bem vindo,\n".$_SESSION['nome']."\n".$_SESSION['sobrenome'].".<br>";}

                            switch ($_SESSION['parent1']){
                                case 0:
                                    if($_SESSION['parent1'] == 0 && $_SESSION['parent2'] == 0){
                                        print "<p> Filho de pais desconhecidos"; 
                                    }else{
                                        print "<p>Filho de pai desconhecido e ";}
                                break;
                                case 1:
                                    print "<p>Filho de Rodrigo e ";
                                break;
                                case 2:
                                    print "<p>Filho de Bruno e ";
                                break;
                                case 3:
                                    print "<p>Filho de Carlos e ";
                                break;
                                case 4:
                                    print "<p>Filho de Yan e ";
                                break;
                                case 5:
                                    print "<p>Filho de Arthur e ";
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
                                        print "Seus pais são Rodrigo e ";
                                    break;
                                    case 2:
                                        print "Seus pais são Bruno e ";
                                    break;
                                    case 3:
                                        print "Seus pais são Carlos e ";
                                    break;
                                    case 4:
                                        print "Seus pais são Yan e ";
                                    break;
                                    case 5:
                                        print "Seus pais são Arthur e ";
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
                                    print "<p>Nascido de parto normal esta morando com seus pais.</p>";
                                break;
                                case 1:
                                    print "<p>Sofre um acidente de avião e se encontra em uma ilha aparentemente deserta.</p>";
                                break;
                                case 2:
                                    print "<p>Foi adotado ainda jovem e mora com eles.</p>";
                                break;
                                case 3:
                                    print "<p>Foi encontrado na porta de uma igreja e entrege a seus pais adotivos que o acolheram.</p>";
                                break;
                                case 4:
                                    print "<p>Fruto de uma inceminação artificial mora com seus pais.</p>";
                                break;
                            }     
                            /*
                            if ($_SESSION['parent1'] == 1){
                                print "   Filho de Rodigo e ";
                            }else{
                                print "   Filho de pai desconhecido e";
                            }
                            if ($_SESSION['parent2'] == 1){
                                print "Gabriela, ";
                            }else{
                                print "mãe desconhecida, ";
                            }
                            if ($_SESSION['locinicio'] == 1){
                                print "sofre um acidente de avião e se encontra em uma ilha. ";
                            }else{
                                print "nascido de parto normal.";
                            }
                            */
                            


                            ?>
                    </fieldset>
                </div>
                    
                <br><br>
            </section>
        </div>
    
</body>
</html>