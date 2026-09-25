<?php

require_once "conexao.php";
$hotel_id = $_GET['hotel_id'];

$sql = "SELECT * FROM quartos WHERE hotel_id = '$hotel_id'";
$resultado = mysqli_query($conexao, $sql);

echo "<table border='1'>";
echo "
    <tr>
        <th>numero</th>
        <th>tipo</th>
        <th>preco_diaria</th>
    </tr>
     ";

while ($linha = mysqli_fetch_assoc($resultado)) {
echo "
    <tr>
        <td>". $linha['numero'] . "</td>
        <td>". $linha['tipo'] . "</td>
        <td>". $linha['preco_diaria'] . "</td>
    </tr>
     ";
echo "</table>"; 
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservas</title>
</head>
<body>
    <h2>Quartos Disponíveis no Hotel selecionado</h2>
    <div>
        <form action="salvar_reservas.php" method="POST">
            <div>
                <label for="id_cliente">Id do Cliente</label>
                <input type="number" id="id_cliente" name="id_cliente" placeholder="Id do Cliente" required>
            <br><br>
            </div>
            <div>
                <label for="id_quarto">Id do Hotel</label>
                <input type="number" name="id_quarto" id="id_quarto" placeholder="Id do Hotel" required>
            </div>
            <br><br>
            <div>
                <label for="entrada">data da entrada</label>
                <input type="date" id="entrada" name="entrada" placeholder="data da entrada" min="1" max="5" required>
            </div>
            <br><br>
            <div>
                <label for="saida">data da saida</label>
                <input type="date" id="saida" name="saida" placeholder="data da saída do hotel" required>
            </div>
            <br><br>
            <button type="submit" class="btn-login">confirmar reserva</button>
        </form>
        <br><br>
    </div>
    </div>
    
</body>
</html>