<?php

require_once "conexao.php";

$sql = "SELECT 
reservas.id, clientes.nome AS nome_cliente, 
clientes.telefone, quartos.numero_quarto, reservas. data_entrada, reservas.data_saida 

FROM reservas
JOIN quartos ON reservas.quarto_id = quartos.id 
JOIN clientes ON reservas.id_cliente = clientes.id
WHERE quartos.id_hotel = '$id_hotel";

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
    <h2>Minhas Reservas Solicitadas</h2>
    <table>
        <tr>
            <th>cod.reserva</th>
            <th>Nome Cliente</th>
            <th>telefone do Cliente</th>
            <th>Numero do Quarto</th>
            <th>data entrada</th>
            <th>data saida</th>
        </tr>

            <?php
                while($linha = mysqli_fetch_assoc($resultado)){
                    echo "<tr>
                        <td>".$linha['id_reservas']." </tr>
                        <td>".$linha['nome']. " </tr>
                        <td>".$linha['telefone']." </tr>
                        <td>".$linha['numero']." </tr>
                        <td>".$linha['data_entrada']." </tr>
                        <td>".$linha['data_saida']." </tr>
                </tr>";
            }
            ?>
        
    </table>
    <a href="cadastrar_quartos.php">cliqui aqui cadastrar outro quarto</a>
    <a href="logout_hotel.php">sair</a>
</body>
</html>
