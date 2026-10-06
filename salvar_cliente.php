<?php

require_once "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha  = $_POST['senha'];

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO clientes (nome, email, telefone, senha)
VALUES ('$nome', '$email', '$telefone', '$senha_hash')";

if(mysqli_query($conexao, $sql)){

}else{

}
?>