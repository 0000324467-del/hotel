<?php

include "conexao.php"; 

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM hoteis WHERE email = '$email' and senha = '$senha'";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    header("location: cadastrar_quarto.php");
    exit();
}else {
    header("location: login_hotel.html");
    exit();
}

?>