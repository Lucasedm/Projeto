<?php

include('conexao.php');
$Nome_U = $_POST['Nome_U'];
$Email_U = $_POST['Email_U'];
$Telefone_U = $_POST['Telefone_U'];
$CPF_CNPJ_U = $_POST['CPF_CNPJ_U'];
$Senha_U = $_POST['Senha_U'];
//$C_Senha = $_POST['C_Senha'];
$Nacionalidade = $_POST['Nacionalidade'];

$query = "INSERT INTO usuarios (Nome_U, Email_U, Telefone_U, CPF_CNPJ_U, Senha_U, Nacionalidade) VALUES ('$Nome_U', '$Email_U', '$Telefone_U', '$CPF_CNPJ_U', '$Senha_U', '$Nacionalidade')";
$result = mysqli_query($conectar, $query);

?>