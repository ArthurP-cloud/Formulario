<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "thecitizen";
$conexao = mysqli_connect($hostname,$user,$password,$database);

if (!$conexao) {
    echo "falha na conexão com o Banco de Dados";    
}

?>