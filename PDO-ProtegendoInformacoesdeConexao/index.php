<!DOCTYPE html>
<html>
    <head>
        <meta charset="URF-8">
        <title>FSN</title>
    </head>
    <body>
        <?php
            require_once 'classes/autoload.php';
            $alunos = new Alunos();
            $alunos->listarAlunos(); //alunos chama o metodo que criamos listarAlunos.
        ?>
    </body>
    
</html>