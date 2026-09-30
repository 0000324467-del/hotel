<?php

require_once "conexao.php";

$sql = "SELECT 
reservas.id AS id_reservas,
hoteis.id AS id_hoteis,
hoteis.nome AS nome_hotel,
quartos.tipo,
quartos.preco_diaria,
reservas.data_entrada,
reservas.data_saida
FROM reservas
JOIN quartos ON reservas.quarto_id = quartos.id 
JOIN hoteis ON quartos.hotel_id = hoteis.id";

$resultado = mysqli_query ($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title>Minhas Reservas</title>
</head>
<body>
    <h2>Minhas Reservas Confirmadas</h2>
    <table>
        <tr>
            <th>cod.reserva</th>
            <th>Quarto</th>
            <th>tipo de quarto</th>
            <th>diaria</th>
            <th>data entrada</th>
            <th>data saida</th>
        </tr>

    <?php
        while($linha = mysqli_fetch_assoc($resultado)){
        echo "<tr>
            <td>".$linha['id_reservas']." </td>
            <td>".$linha['nome_hotel']. " </td>
            <td>".$linha['tipo']." </td>
            <td>".$linha['preco_diaria']." </td>
            <td>".$linha['data_entrada']." </td>
            <td>".$linha['data_saida']." </td>
        </tr>";
        }
    ?>
        
    </table>
    <a href="listar_hoteis.php">clique aqui para novas reservas</a>
</body>
</html>
