<?php

require_once "conexao.php";

$sql = "SELECT * FROM hoteis";
$resultado = mysqli_query($conexao, $sql);

echo "<table border='1'>";
echo "<tr>
        <th>Nome</th>
        <th>Cidade</th>
        <th>Estrelas</th>
        <th>Escolha o Hotel</th>
      </tr>";

while ($linha = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td>" . $linha['nome'] . "</td>";
    echo "<td>" . $linha['cidade'] . "</td>";
    echo "<td>" . $linha['estrelas'] . "</td>";
    echo "<td> <a href='ver_quartos.php?hotel_id=" . $linha['id'] . "'>sua escolha</a></td>";
    echo "</tr>";
}

echo "</table>";


?>