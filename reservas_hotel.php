<?php

require_once "conexao.php";

$sql = "SELECT 
reservas.id, clientes.nome AS nome_cliente, 
clientes.telefone, quartos.numero, reservas. data_entrada, reservas.data_saida 

FROM reservas
JOIN quartos ON reservas.quarto_id = quartos.id 
JOIN clientes ON reservas.cliente_id = clientes.id
WHERE quartos.hotel_id = 1";

$resultado = mysqli_query ($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title>Reservas Hotel</title>
</head>
<body>
    <h2>Painel de Reservas Solicitadas</h2>
    <table>
        <tr>
            <th>Cod.Reserva</th>
            <th>Quarto</th>
            <th>Hóspede</th>
            <th>Telefone</th>
            <th>Data de Entrada</th>
            <th>Data de Saida</th>
        </tr>

            <?php
                while($linha = mysqli_fetch_assoc($resultado)){
                    echo "<tr>
                            <td>".$linha['id']." </td>
                            <td>".$linha['numero']. " </td>
                            <td>".$linha['nome_cliente']." </td>
                            <td>".$linha['telefone']." </td>
                            <td>".$linha['data_entrada']." </td>
                            <td>".$linha['data_saida']." </td>
                        </tr>";
                    }
            ?>
        
    </table>
    <a href="cadastrar_quarto.html">cliqui aqui cadastrar outro quarto</a>
    <br><br>
    <a href="logout_hotel.php">sair</a>
</body>
</html>
