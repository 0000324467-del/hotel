<?php

$host = "localhost";
$usuario = "root";
$senha = "123";
$banco = "hotel_db";    

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if($conexao){
    //echo "conectou ao banco de dados";
} else {
    //echo "Não conectou ao banco de dados";
}



?>