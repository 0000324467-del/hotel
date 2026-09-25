<?php

require_once "conexao.php";

$cliente_id = $_POST['cliente_id'];
$quarto_id = $_POST['quarto_id'];
$data_entrada = $_POST['data_entrada'];
$data_saida = $_POST['data_saida'];


$sql = "INSERT INTO reservas (cliente_id, quarto_id, data_entrada, data_saida, total)
VALUES ($cliente_id, $quarto_id, '$data_entrada', '$data_saida', 100)";

if(mysqli_query($conexao, $sql)){
    echo "<h2>ver minhas reservas </h2>";
    
}else{
    echo "Não foi possivel salvar sua reserva ";
    echo "<a href = 'ver_quarto.php'>mostre mais quartos</a>";
}
?>