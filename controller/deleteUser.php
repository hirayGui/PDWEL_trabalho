<?php
include_once("../db_conn.php");

if (isset($_GET['id'])){

    $id = $_GET['id'];

    $sql = "DELETE FROM usuarios WHERE id = ".$id;
        $result = mysqli_query($conn, $sql);
        if ($result){
            header("Location: ../view/home.php?success=Usuario excluido com sucesso!");
        }
        else{
            header("Location: ../view/home.php?error=Ocorreu um erro ao realizar a exclusão!");
        }
}
else {
    header("Location: ../view/home.php");
}