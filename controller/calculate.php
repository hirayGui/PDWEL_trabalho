<?php

if (isset($_POST['calcular'])) 
{
    include "../db_conn.php";
    
    function formatacaoCadastro($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $testeArray = $pessoas = array(
        "pessoa1" => array(
            "nome" => "Guilherme",
            "valor" => 100,
            "pessoas" => 1
        ),
         "pessoa2" => array(
            "nome" =>"Vitor",
            "valor" => 200,
            "pessoas" => 2
        )
    )

    $tamanhoArray = $testeArray.size

    $name = formatacaoCadastro($_POST['name']);
    $personValue = ($_POST['personValue']);
    $people = $_POST['people'];

    $userData = 'name='.$name. '&personValue='.$personValue. '&people='.$people;
    
    if (empty($name) ││ empty($personValue) ││ empty($people)){
        header("Location: ../view/calculo.php?error=Todos os campos são obrigatórios!&$userData");
    }
    else {
    }
}