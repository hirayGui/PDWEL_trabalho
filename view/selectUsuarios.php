<?php include_once('../controller/readUsers.php');
include_once("Conta.php"); ?>
<?php
$conta1 = new Conta;
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Calcular</title>

    <!--Importing Bootstrap-->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!--Importing icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!--Importing custom styles-->
    <link href="../css/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!--Main message-->
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <h1><i class="bi bi-pencil-square"></i> Calcular <small>Racha conta companion</small></h1>
                </div>
                <!--col-md-10-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </header>
    <!--header-->

    <!--Main section-->
    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                </div>
                <!--col-md-1-->
                <div class="col-md-10">
                    <br>
                    <?php if (isset($_GET['success'])) { ?>
                        <div id="success-alert" class="alert alert-success col-md-12">
                            <?php echo $_GET['success']; ?>
                        </div>
                        <!--success-alert-->
                    <?php } ?>
                    <?php if (isset($_GET['error'])) { ?>
                        <div id="error-alert" class="alert alert-danger col-md-12">
                            <?php echo $_GET['error']; ?>
                        </div>
                        <!--error-alert-->
                    <?php } ?>
                    <!--Lastest users-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Divisão final</h3>
                        </div>
                        <!--card-header-->
                        <div class="card-body">
                            <?php if (mysqli_num_rows($result)) { ?>
                                <div class="table-responsive col-md-6">
                                    <table class="table table-striped table-hover">
                                        <tr>
                                            <th>
                                                <p>Nome</p>
                                            </th>
                                            <th>
                                                <p>Pix</p>
                                            </th>
                                            <th>
                                                <p>Valor Gasto</p>
                                            </th>
                                        </tr>
                                        <?php $valorTotal = 0;
                                        $numeroPessoas = 0;
                                        $valorInd = 0;
                                        while ($rows = mysqli_fetch_assoc($result)) {
                                            $valorTotal += $rows['valor_gasto'];
                                        ?>
                                            <tr>
                                                <td>
                                                    <p><?php echo $rows['nome'] ?></p>
                                                </td>
                                                <td>
                                                    <p><?php echo $rows['pix'] ?></p>
                                                </td>
                                                <td>
                                                    <p>R$<?php echo $rows['valor_gasto'] ?></p>
                                                </td>
                                            </tr>
                                        <?php
                                            $numeroPessoas++;
                                        }
                                        $valorInd = ($valorTotal / $numeroPessoas); ?>
                                        <tr>
                                            <th>
                                                <p>Total</p>
                                            </th>
                                            <td>
                                                <p></p>
                                            </td>
                                            <td>
                                                <p>R$<?php echo $valorTotal; ?></p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="table-responsive col-md-6">
                                    <table class="table table-striped table-hover">
                                        <tr>
                                            <th>
                                                <p>Valor a receber</p>
                                            </th>
                                            <th>
                                                <p>Valor a pagar</p>
                                            </th>
                                        </tr>
                                        <?php while ($rows = mysqli_fetch_assoc($result2)) { ?>
                                            <tr>
                                                <td><?php $diferenca = $valorInd - intval($rows['valor_gasto']);
                                                    if ($diferenca < 0) { ?>
                                                        <p style="color: green">R$<?php echo $diferenca * (-1) ?></p>
                                                    <?php   } else { ?>
                                                        <p style="color: green">R$ 0.00</p>
                                                    <?php  }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php if ($diferenca > 0) { ?>
                                                        <p style="color: red">R$<?php echo $diferenca ?></p>
                                                    <?php   } else { ?>
                                                        <p style="color: red">R$ 0.00</p>
                                                    <?php  } ?>
                                                </td>
                                            </tr>
                                        <?php  } ?>

                                        <tr>
                                            <th>
                                                <p>Valor individual</p>
                                            </th>
                                            <td>
                                                <p>R$<?php echo $valorInd; ?></p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <!--table table-striped-->
                            <?php } ?>
                            <a href="home.php" class="btn btn-danger">Voltar</a>
                        </div>
                        <!--card-body-->
                    </div>
                    <!--card-->
                </div>
                <!--col-md-10-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </section>
    <!--main-->

    <!--Importando scripts-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</body>

</html>