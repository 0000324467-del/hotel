<?php

require_once "conexao.php";

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$estrelas= $_POST['estrelas'];
$email= $_POST['email'];
$senha= $_POST['senha'];

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO hoteis (nome, cidade, estrelas, email, senha)
VALUES ('$nome', '$cidade', $estrelas, '$email', '$senha_hash')";

if(mysqli_query($conexao, $sql)){

}else{

}
?>