<?php

include_once("conexao.php");

$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

$sql = "select * from usuarios where profissao like '%$filtro%' order by nome";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Formulário com HTML5</title>
        <link rel="stylesheet" href="css/usuarios.css">
    </head>
    <body>
        <div class="container">
            <nav>
                <ul class="menu">
                    <a href="index.php"><li>Cad. Funcionários</li></a>
                    <li>Cad. Fornecedores</li>
                    <li>Cad. Clientes</li>
                    <li>Cad. Serviços</li>
                    <a href="consultas.php"><li>Consultas</li></a>
                    <li>Sair</li>
                </ul>
            </nav>
            <section>
                <h1>Consultas</h1>
                <hr><br><br>

                <form action="" method="get">
                    Filtrar por profissão: <input type="text" name="filtro" class="campo" required autofocus>
                    <input type="submit" value="pesquisar" class="btn">
                </form>

                <?php

                print "Resultado da pesquisa com a palavra <strong>$filtro</strong><br><br>";
                print "$registros registros encontrados.";
                print "<br><br>";
                while ($exibirRegistros = mysqli_fetch_array($consulta)) {
                    
                    $codigo = $exibirRegistros[0];
                    $nome = $exibirRegistros[1];
                    $email = $exibirRegistros[2];
                    $profissao = $exibirRegistros[3];

                    print "<article>";

                    print "$codigo<br>";
                    print "$nome<br>";
                    print "$email<br>";
                    print "$profissao<br>";

                    print "</article>";

                }
                mysqli_close($conexao);
                ?>

            </section>
        </div>        
    </body>
</html>