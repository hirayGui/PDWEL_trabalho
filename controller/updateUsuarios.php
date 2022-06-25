<?php

if (isset($_GET['id'])){
    include "db_conn.php";

    $id = $_GET['id'];
    $sql = "SELECT * FROM usuarios WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }
    else {
        header("Location: selectUsuarios.php");
    }
} else if(isset($_POST['editar'])){
    include "../db_conn.php";

    function formatacaoCadastro($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = formatacaoCadastro($_POST['name']);
    $email = formatacaoCadastro($_POST['email']);
    $password = $_POST['password'];
    $cel = $_POST['cel'];
    $pix = $_POST['pix'];

    if (empty($name) ││ empty($email) ││ empty($password) ││ empty($cel) ││ empty($pix)){
        header("Location: ../view/cadastro.php?error=Todos os campos são obrigatórios!&$userData");
    }
    else {
        $sql = "UPDATE usuarios
                SET nome = '$name', email = '$email', senha = '$password', cel = '$cel', pix = '$pix'
                WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        if (result){
            header("Location: ../view/selectUsuarios.php?id_funcionario=$id&success=Informações Alteradas com sucesso!");
        }
        else{
            header("Location: ../view/updateUsuarios.php?id_funcionario=$id&error=Ocorreu um erro ao fazer a alteração de dados!");
        }
    }

}
else {
    header("Location: ../view/selectUsuarios.php");
}