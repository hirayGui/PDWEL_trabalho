<?php
include_once("../db_conn.php");

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        header("Location: selectUsuarios.php");
    }
} else if (isset($_POST['editar'])) {

    function formatacaoCadastro($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = $_POST['id'];
    $name = formatacaoCadastro($_POST['name']);
    $email = formatacaoCadastro($_POST['email']);
    $password = $_POST['password'];
    $cel = $_POST['cel'];
    $pix = $_POST['pix'];

    $userData = 'name=' . $name . '&email=' . $email . '&password=' . $password . '&cel=' . $cel . '&pix=' . $pix;

    if (empty($name) || empty($email) || empty($password) || empty($cel) || empty($pix)) {
        header("Location: ../view/editUsuario.php?error=Todos os campos são obrigatórios!");
    } else {
        $sql = "UPDATE usuarios SET nome = '$name', email = '$email', senha = '$password', telefone = '$cel', pix = '$pix' WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: ../view/home.php?id=$id&success=Informações Alteradas com sucesso!");
        } else {
            header("Location: ../view/editUsuario.php?id=$id&error=Ocorreu um erro ao fazer a alteração de dados!");
        }
    }
} else {
    header("Location: ../view/home.php");
}
