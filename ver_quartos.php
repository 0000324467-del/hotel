<?php

require_once "conexao.php";

$id_hotel = $_GET['id_hotel'];

$sql = "SELECT * FROM quartos WHERE id_hotel = '$id_hotel'";
$resultado = mysqli_query($conexao, $sql);

