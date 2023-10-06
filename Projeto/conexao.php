<?php

// conexao do banco

$server = "localhost";
$user = "root";
$password = "";
$database = "controledeestoque";

$conectar = mysqli_connect($server,$user,$password,$database);

if($conectar == true){
    echo "conectado";
}
?>