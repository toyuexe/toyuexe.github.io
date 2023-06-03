<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FuriousCollections — Login</title>
	
	<link rel="shortcut icon" type="image/png" href="https://imgur.com/gyMyk9u.png"/>
	
    <link rel="stylesheet" href="https://vootytools.com/app/templates/site/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://vootytools.com/app/templates/site/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="../essets/style.css">

    <script src="https://kit.fontawesome.com/4cfd508d4f.js" crossorigin="anonymous"></script>
    <script>window.scripts = [];</script>
</head>
<body class="auth-page">

<div class="login-card px-5" style="height: auto!important;">
    <div class="px-5">
        <a href="https://FuriousCollections.rf.gd/"><img src="https://imgur.com/gyMyk9u.png" height="56px" class="mt-4 mb-5" alt="Logo"></a>
        <h1 class="font-weight-bold">Login</h1>
        <div class="divider w-25"></div>
        <?php
        if($_SESSION["status_cadastro"]):
        ?>
        <div>
            <p>Obrigado por se registrar, coloque suas informação aqui.</p>
        </div>
        <?php
        endif;
        unset($_SESSION["status_cadastro"]);
        ?>

        <?php
        if($_SESSION["nao_autenticado"]):
        ?>
        <div>
            <p>Usuario ou Senha inválido.</p>
        </div>
        <?php
        endif;
        unset($_SESSION["nao_autenticado"]);
        ?>

        <p class="mt-2 text-muted mb-5">Entre na conta com seus dados</p>
        <span class="text-danger" id="alert" style="display: none;"></span>
        <form action="logar.php" id="login" method="POST" autocomplete="off">
            <input type="hidden" name="1d4ADr8Eos" value="cdf0a7eea18152e6001127b3c85c319d14e7408c96d74ac8b3fa210241f31f79">
            <div class="input-group mt-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <input name="usuario" name="text" class="form-control" placeholder="Seu usuário" autofocus="">
            </div>
            <div class="input-group mt-3 mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </div>
                </div>
                <input name="senha" class="form-control" type="password" placeholder="Sua senha">
            </div>
            <button type="submit" class="btn btn-primary btn-block btn-rounded mt-3">Login</button>
        </form>
    </div>
    <a class="btn btn-link btn-block text-muted" href="/auth/register">Não tem uma conta? Registre-se</a>
    <footer class="mb-4 text-center">
        <b>FuriousCollections</b> &copy; Todos os direitos reservados.
    </footer>
</div>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js" type="31848ff2690d8ecfa42e55bd-text/javascript"></script>
<script src="https://vootytools.com/app/templates/site/bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://vootytools.com/app/templates/site/bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="https://vootytools.com/app/templates/site/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://vootytools.com/app/templates/site/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="https://vootytools.com/app/templates/site/bower_components/email-autocomplete/jquery.email-autocomplete.min.js"></script>
<script src="https://vootytools.com/app/templates/site/assets/js/app.js"></script>
<script>
    $(function() {
        if(scripts instanceof Array) {
            $.each(scripts, function (index, fn) {
                if(typeof fn === 'function') fn();
            });
        }
    });
</script>
</body>
</html>