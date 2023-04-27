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
                <h1>Cadastro de Usuários</h1>
                <hr>
                <br>

                <fieldset>
                <legend>Preencha todos os campos</legend>
                    <form method="post" action="processa.php">
                        <input type="submit" class="btn" value="Salvar">
                        <input type="reset" class="btn" value="Limpar">
                        <input type="button" class="btn" value="Excluir">
                        <br><br>

                        Nome do Funcionários<br>
                        <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
                        E-mail<br>
                        <input type="email" name="email" class="campo" maxlength="50" required><br>
                        Profissão<br>
                        <input type="text" name="profissao" class="campo" maxlength="40" required><br>
                    </form>
                </fieldset>
            </section>
        </div>        
    </body>
</html>