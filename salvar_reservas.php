<?php

require_once "conexao.php";

$id_cliente = $_POST['id'];
$id_quarto = $_POST['id'];
$entrada = $_POST['data_entrada'];
$saida = $_POST['data_saida'];
$diponivel = 1;

$sql = "INSERT INTO reservas (id, id, data_entrada, data_saida, disponivel)
VALUES ($id, '$id', '$data_entrada', $data_saida, $diponivel)";

if(mysqli_query($conexao, $sql)){
    echo "<h2>ver minhas reservas </h2>";
    
}else{
    echo "Não foi possivel cadastrar esse quarto ";
    echo "<a href = 'ver_quarto.php'>mostre mais quartos</a>";
}
?>