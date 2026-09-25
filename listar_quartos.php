<?php

require_once "conexao.php";

$sql = "SELECT reservas.id, quartos.numero, quartos.tipo, quartos.preco_diaria, reservas.data_entrada, reservas.data_saida, hoteis.nome FROM reservas JOIN quartos ON reservas.quarto_id = quartos.id JOIN hoteis ON quartos.id_hotel = hoteis.id WHERE reservas.id_cliente = '$id_cliente'";
$resultado = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Reservas</title>
</head>
<body>
    
</body>
</html>

echo "<table border='1'>";
echo "<tr>
        <th>hotel_id</th>
        <th>numero</th>
        <th>tipo</th>
      </tr>";

while ($linha = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>" . $linha['hotel_id'] . "</td>";
    echo "<td>" . $linha['numero'] . "</td>";
    echo "<td>" . $linha['tipo'] . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "<br>";
echo "<a href = 'cadastrar_quarto.html'>Cadastre outro quarto</a>";
echo "<br><br>";
echo "<a href = 'login_hotel.html'>Voltar/Sair</a>";

?>