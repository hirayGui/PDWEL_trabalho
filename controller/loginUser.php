<?php
include_once("../db_conn.php");
if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sqlQuery = "SELECT * FROM usuarios WHERE email = '$email' AND senha ='$senha'";
    $result = mysqli_query($conn, $sqlQuery);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['userid'] = $user['id_user'];
        $_SESSION['role'] = $user['ds_role'];
        $_SESSION['name'] = $user['ds_name'];
        header("Location: ../view/home.php");
    } else {
        header("Location: ../index.php?error=Ocorreu um erro");
    }
}
