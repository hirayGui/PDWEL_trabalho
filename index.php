<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Painel de Controle | Login</title>

    <!--Importing Bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!--Importing icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!--Importing custom styles-->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!--Main-->
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center"></i>Racha Conta Companion <small>Login</small></h1>
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
                <div class="col-md-4 col-md-offset-4">
                    <h2 style="text-align:center">Login</h2>
                    <?php if (isset($_GET['error'])) { ?>
                        <div id="login-alert" class="alert alert-danger col-sm-12">
                            <?php echo $_GET['error']; ?>
                        </div>
                        <!--login-alert-->
                    <?php } ?>
                    <form method="POST" id="login" class="well" action="controller/loginUser.php" role="form">
                        <div class="form-group">
                            <label>Email</label>
                            <input required type="text" class="form-control" placeholder="Insira seu email" name="email" value='<?php if (!empty($_POST["email"])) {
                                                                                                                                    echo $_POST["email"];
                                                                                                                                } ?>'>
                        </div>
                        <!--form-group-->
                        <div class="form-group">
                            <label>Senha</label>
                            <input required type="password" class="form-control" placeholder="Insira sua senha" name="senha" value='<?php if (!empty($_POST["senha"])) {
                                                                                                                                        echo $_POST["senha"];
                                                                                                                                    } ?>'>
                        </div>
                        <!--form-group-->
                        <input type="submit" class="btn btn-default btn-block" name="login" value="Login">

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
    <script src="js/bootstrap.min.js"></script>

</body>

</html>