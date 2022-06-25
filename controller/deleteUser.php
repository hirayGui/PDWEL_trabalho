<?php

if (isset($_GET['id'])){
    include "../db_conn.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM usuarios WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        if (result){
            header("Location: ../view/selectUsuarios.php?success=Usuario excluido com sucesso!");
        }
        else{
            header("Location: ../view/selectUsuarios.php?error=Ocorreu um erro ao realizar a exclusão!");
        }
}
else {
    header("Location: ../selectUsuarios.php");
}