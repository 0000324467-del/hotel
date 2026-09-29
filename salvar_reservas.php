<?php

require_once "conexao.php";

$cliente_id = $_POST['cliente_id'];
$quarto_id = $_POST['quarto_id'];
$data_entrada = $_POST['data_entrada'];
$data_saida  = $_POST['data_saida'];

$sql = "INSERT INTO reservas (cliente_id, quarto_id, data_entrada, data_saida, total)
VALUES ($cliente_id, $quarto_id, '$data_entrada', '$data_saida', 100)";

if(mysqli_query($conexao, $sql)){
    echo "Reserva salva com sucesso";
    echo "<a href = 'minhas_reservas.php'>Ver Minhas Reservas</a>";
}else{
    echo "a href = 'ver_quartos.php'>Veja mais quartos clicando aqui</a>";
   
}
?>