
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area de Teste</title>
</head>
<body>

    <input type="submit" value="Cadastrar".<?php
    $hostDB='localhost';
    $user='root';
    $pass='';
    $database='thecitizen';
    
    $conn = mysqli_connect($hostDB,$user,$pass,$database);

    $sql = "select email from usuario where email = 'arthur@teste.com'";
    $result = mysqli_query($conn,$sql);
    $registros = mysqli_num_rows($result);

    if($registros <1){
        $sql = "insert into usuario (nome,sobrenome,email,senha) values ('arthur','piazera','arthur@teste.com','123')";
        $result = mysqli_query($conn,$sql);
    }
    mysqli_close($conn);
    ?>>

    <input type="submit" value="Consultar".<?php

$hostDB='localhost';
$user='root';
$pass='';
$database='thecitizen';

$conn = mysqli_connect($hostDB,$user,$pass,$database);


$sql = "select * from usuario order by nome";
$consulta = mysqli_query($conn,$sql);
$registros = mysqli_num_rows($consulta);

print "<br><br>";
print "$registros registro encontrados.";
print "<br><br>";
 while ($exibirRegistro = mysqli_fetch_array($consulta)){
    $codigo = $exibirRegistro[0];
    $nome = $exibirRegistro[1];
    $parent1 = $exibirRegistro[5];
    $parent2 =$exibirRegistro[6];

    print "<article>";

                    print "$codigo<br>";
                    print "$nome<br>";
                    print "$parent1<br>";
                    print "$parent2<br>";
                    print "<br>";

                    print "</article>";

 }
 mysqli_close($conn);

?>>
    
</body>
</html>