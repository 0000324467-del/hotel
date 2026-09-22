<?php

require_once "conexao.php";

$hotel_id = $_POST['hotel_id'];
$numero = $_POST['numero'];
$tipo = $_POST['tipo'];
$preco_diaria = $_POST['preco_diaria'];
$diponivel = 1;

$sql = "INSERT INTO quartos (hotel_id, numero, tipo, preco_diaria, disponivel)
VALUES ($hotel_id, '$numero_quarto', '$tipo', $preco_diaria, $diponivel)";

if(mysqli_query($conexao, $sql)){
    echo "<h2>Quarto cadastrado com sucesso </h2>";
    echo "<a href = 'cadastrar_quarto.html'>Cadastre outro quarto</a>";
}else{
    echo "Não foi possivel cadastrar esse quarto ";
}
?>