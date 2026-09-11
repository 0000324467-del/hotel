<?php
require_once "conexao.php";

$nome = $_POST['hotel'];
$cidade = $_POST['cidade'];
$estrelas= $_POST['estrelas'];

$sql = "INSERT INTO hoteis (nome, cidade, estrelas)
VALUES ('$nome', '$cidade', '$estrelas')";

if(mysqli_query($conexao, $sql)){

}else{

}
?>