<?php

require_once "conexao.php";

$cliente_id = $_POST['nome'];
$quarto_id = $_POST['quarto_id'];
$numero = $_POST['numero'];
$tipo  = $_POST['tipo'];
$preço_diaria  = $_POST['preço_diaria'];
$disponivel  = $_POST['disponivel'];

$sql = "INSERT INTO clientes (cliente_id, quarto_id, numero, tipo, preço_diaria, disponivel)
VALUES ('$cliente_id', '$quarto_id', '$numero', '$tipo', '$preço_diaria', '$disponivel')";

if(mysqli_query($conexao, $sql)){

}else{

}
?>