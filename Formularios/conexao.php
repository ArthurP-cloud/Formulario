<?php 
$hostname = "localhost";
$user = "root";
$password = "";
$database = "cadastro";
$conexao = mysqli_connect($hostname,$user,$password,$database);

if(!$conexao){
    echo "Falha na conexão com o Banco de Dados";
}
//oi tao, sai do meu pc cara...
?>
