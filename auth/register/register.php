<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>furiouscollections — Registre-se</title>
	
	<link rel="shortcut icon" type="image/png" href="https://i.imgur.com/gyMyk9u.png"/>
	
    <link rel="stylesheet" href="https://vootytools.com/app/templates/site/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://vootytools.com/app/templates/site/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="http://furiouscollections.rf.gd/essets/style.css">

    <script src="https://kit.fontawesome.com/4cfd508d4f.js" crossorigin="anonymous"></script>
    <script>window.scripts = [];</script>
</head>
<body class="auth-page">

<div class="login-card" style="height: auto!important;">
    <div class="px-5">
        <a href="http://furiouscollections.rf.gd/"><img src="https://i.imgur.com/gyMyk9u.png" height="56px" class="mt-4 mb-5" alt="Logo"></a>
        <h1 class="font-weight-bold">Registre-se</h1>
        <div class="divider w-25"></div>
        <p class="mt-2 text-muted mb-4">Informe seus dados cadastrais</p>
        <?php
        if($_SESSION["usuario_existe"]):
        ?>
        <div>
            <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
        </div>
        <?php
        endif;
        unset($_SESSION["usuario_existe"]);
        ?>
        <span class="text-danger" id="alert" style="display: none;"></span>
        <form id="register" action="registrar.php" method="POST" autocomplete="off">
            <input type="hidden" name="%Wq7gBOXoK" value="d7b971affbc65a5b586d0a6f21d0e3932ad1fbfd5322c77465cda1871926bdb1">
            <div class="input-group mt-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <input class="form-control" name="usuario" autocomplete="off" placeholder="Usuário">
            </div>
            <div class="input-group mt-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-envelope"></i>
                    </div>
                </div>
            </div>
            <div class="input-group mt-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-lock"></i>
                    </div>
                </div>
                <input type="password" class="form-control" name="senha" autocomplete="off" placeholder="Senha">
            </div>
            <div class="input-group mt-3 mb-4">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-lock"></i>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary btn-rounded btn-block">Registrar</button>
        </form>
    </div>
    <a class="btn btn-link btn-block text-muted mt-4" href="http://furiouscollections.rf.gd/auth/">Voltar para o login</a>
    <footer class="mb-4 text-center">
        <b>furiouscollections</b> &copy; Todos os direitos reservados.
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