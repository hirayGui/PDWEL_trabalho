<?php

$sname = "127.0.0.2";
$uname = "root";
$password = "";

$db_name = "db_pdwel";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(!conn){
    echo "Conexão falhou";
} else {
    return $conn;
}