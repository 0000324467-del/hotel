<?php

require_once "conexao.php";

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$estrelas= $_POST['estrelas'];
$email= $_POST['email'];
$senha= $_POST['senha'];

$sql = "INSERT INTO hoteis (nome, cidade, estrelas, email, senha)
VALUES ('$nome', '$cidade', $estrelas, '$email', '$senha')";

if(mysqli_query($conexao, $sql)){

}else{

}
?>