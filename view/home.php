<?php include_once("../controller/readUsers.php"); ?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Home</title>

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
                    <h1><i class="bi bi-house"></i> Home <small>Racha conta companion</small></h1>
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
                    <!--Cards showing simplified statistics-->
                    <div class="card">
                        <div class="card-header main-color-bg">
                            <h5>Visão Geral</h5>
                        </div>
                        <div class="card-body">
                            <div class="col-md-6">
                                <div class="well dash-box"><a href="selectUsuarios.php">
                                        <h2><i class="bi bi-pencil-square"></i> Rachar </h2>
                                        <h4>nova conta</h4>
                                    </a>
                                </div>
                                <!--well dash-box-->
                            </div>
                            <!--col-md-6-->
                            <div class="col-md-6">
                                <div class="well dash-box"><a href="criarUsuario.php">
                                        <h2><i class="bi bi-person-plus-fill"></i> Adicionar </h2>
                                        <h4>novo usuário</h4>
                                    </a>
                                </div>
                                <!--well dash-box-->
                            </div>
                            <!--col-md-6-->
                        </div>
                        <!--card-body-->
                    </div>
                    <!--card-->
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
                            <h3 class="card-title">Usuários</h3>
                        </div>
                        <!--card-header-->
                        <div class="card-body table-responsive">
                            <?php if (mysqli_num_rows($result)) { ?>
                                <table class="table table-striped table-hover">
                                    <tr>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Telefone</th>
                                        <th>Pix</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    <?php while ($rows = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td><?php echo $rows['nome'] ?></td>
                                            <td><?php echo $rows['email'] ?></td>
                                            <td><?php echo $rows['telefone'] ?></td>
                                            <td><?php echo $rows['pix'] ?></td>
                                            <td><a href="editUsuario.php?id=<?php echo $rows['id'] ?>" class="btn btn-default"><i class="bi bi-pencil-fill"></i> Editar</a></td>
                                            <td><a href="../controller/deleteUser.php?id=<?php echo $rows['id'] ?>" class="btn btn-danger"><i class="bi bi-trash3-fill"></i> Excluir</a></td>
                                        </tr>
                                    <?php } ?>
                                </table>
                                <!--table table-striped-->
                            <?php } ?>
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