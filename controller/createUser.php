<?php
include_once("../db_conn.php");

if (isset($_POST['cadastrar'])) {
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
    $valor = $_POST['valor'];

    $userData = 'name=' . $name . '&email=' . $email . '&password=' . $password . '&cel=' . $cel . '&pix=' . $pix . '&valor=' . $valor;

    if (empty($name) || empty($email) || empty($password) || empty($cel) || empty($pix) || empty($valor)) {
        header("Location: ../view/criarUsuario.php?error=Todos os campos são obrigatórios!&" . $userData);
    } else {
        $sql = "INSERT INTO USUARIOS(nome, email, senha, telefone, pix, valor_gasto) VALUES ('$name', '$email', '$password', '$cel', '$pix', '$valor')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: ../view/home.php?success=Cadastrado com sucesso!");
        } else {
            header("Location: ../view/criarUsuario.php?error=Ocorreu um erro durante o cadastro!&" . $userData);
        }
    }
}
