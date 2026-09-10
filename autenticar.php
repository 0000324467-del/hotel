<?php

include "conexao.php"; 

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM clientes WHERE email = '$email' and senha = '$senha'";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    header("location: minhas_reservas.php");
    exit();
}else {
    header("location: login.html");
    exit();
}
?>


