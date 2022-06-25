<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Criar usuário</title>

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
                    <h1><i class="bi bi-person-plus-fill"></i> Criar usuário <small>Racha conta companion</small></h1>
                </div>
                <!--col-md-10-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </header>
    <!--header-->

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <?php if (isset($_GET['error'])) { ?>
                        <div id="create-alert" class="alert alert-danger col-sm-12">
                            <?php echo $_GET['error']; ?>
                        </div>
                        <!--create-alert-->
                    <?php } ?>
                    <form method="POST" id="cadastrar" class="well" action="../controller/createUser.php" role="form">
                        <div class="form-group">
                            <label>Nome</label>
                            <input required type="text" class="form-control" placeholder="Insira o nome" name="name" value='<?php if (!empty($_GET["name"])) {
                                                                                                                                echo $_GET["name"];
                                                                                                                            } ?>'>
                        </div>
                        <!--form-group-->
                        <div class="form-group">
                            <label>Email</label>
                            <input required type="text" class="form-control" placeholder="Insira o email" name="email" value='<?php if (!empty($_GET["email"])) {
                                                                                                                                    echo $_GET["email"];
                                                                                                                                } ?>'>
                        </div>
                        <!--form-group-->
                        <div class="form-group">
                            <label>Senha</label>
                            <input required type="password" class="form-control" placeholder="Insira a senha" name="password" value='<?php if (!empty($_GET["password"])) {
                                                                                                                                            echo $_GET["password"];
                                                                                                                                        } ?>'>
                        </div>
                        <!--form-group-->
                        <div class="form-group">
                            <label>Telefone</label>
                            <input required type="text" class="form-control" placeholder="Insira o telefone" name="cel" value='<?php if (!empty($_GET["cel"])) {
                                                                                                                                    echo $_GET["cel"];
                                                                                                                                } ?>'>
                        </div>
                        <!--form-group-->
                        <div class="form-group">
                            <label>Chave pix</label>
                            <input required type="text" class="form-control" placeholder="Insira a chave pix" name="pix" value='<?php if (!empty($_GET["pix"])) {
                                                                                                                                    echo $_GET["pix"];
                                                                                                                                } ?>'>
                        </div>
                        <!--form-group-->
                        <div class="d-grip gap-2">
                            <button type="submit" class="btn btn-primary btn-block" name="cadastrar">Cadastrar</button><a href="home.php" class="btn btn-danger btn-block">Voltar</a>
                        </div>
                        <!--d-grip gap-2-->


                    </form>
                    <!--login-->
                </div>
                <!--col-md-4 col-md-offset-4-->
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