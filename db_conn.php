<?php
//Inserir informações da sua conexão no banco de dados 
$host = "";
$user = "";
$password = "";
$database = "db_pdwel";

$conn = mysqli_connect($host, $user, $password, $database);

if(!$conn){
    echo "Conexão falhou";
} else {
    return $conn;
}