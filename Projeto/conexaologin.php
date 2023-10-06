<?php

include('conexao.php');
$Nome_U = $_POST['Nome_U'];
$Senha_U = $_POST['Senha_U'];

$query = "SELECT INTO usuarios (Nome_U, Senha_U) VALUES ('$Nome_U', '$Senha_U')";
$result = mysqli_query($conectar, $query);
?>