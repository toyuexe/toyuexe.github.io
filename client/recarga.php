<?php
session_start();
include('../auth/conexao.php');
$usuario = $_SESSION['usuario'];
$consulta = "SELECT * FROM `usuario` WHERE `usuario` = '$usuario'";
$con = $conexao->query($consulta) or die($conexao->error);
include('../auth/verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Furiouscollections — Recarregar</title>
	
	<link rel="shortcut icon" type="image/png" href="https://i.imgur.com/gyMyk9u.png"/>
	
    <link rel="stylesheet" href="https://vootytools.com/app/templates/site/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://vootytools.com/app/templates/site/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link href="http://furiouscollections.rf.gd/essets/painel/css/sb-admin.css" rel="stylesheet">
    <link href="http://furiouscollections.rf.gd/essets/painel/css/stylep.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/4cfd508d4f.js" crossorigin="anonymous"></script>
    <script>window.scripts = [];</script>
</head>
<body class="fixed-nav" id="page-top">
<nav class="navbar navbar-expand-lg menu" id="mainNav">
    <a class="navbar-brand" href="http://furiouscollections.rf.gd/client"><img src="https://i.imgur.com/gyMyk9u.png" width=25px alt="Logo"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item " data-toggle="tooltip" data-placement="right" title="Início">
                <a class="nav-link" href="http://furiouscollections.rf.gd/client">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Início</span>
                </a>
            </li>
            <li class="nav-item " data-toggle="tooltip" data-placement="right" title="Plugins">
                <a class="nav-link" href="http://furiouscollections.rf.gd/plugins">
                    <i class="fas fa-fw fa-plug"></i>
                    <span class="nav-link-text">Plugins</span>
                </a>
            </li>
            <li class="nav-item " data-toggle="tooltip" data-placement="right" title="Plugins">
                <a class="nav-link" href="http://furiouscollections.rf.gd/client/historico">
                    <i class="fas fa-fw fa-money-check-alt"></i>
                    <span class="nav-link-text">Transações</span>
                </a>
            </li>
            <?php while($dado = $con->fetch_array()){ ?>
            <li class="nav-item " data-toggle="tooltip" data-placement="right" title="Plugins">
            <a href="http://furiouscollections.rf.gd/client/recarga.php" class="nav-link">
                    <i class="fas fa-wallet"></i> R$<?php echo $dado["dinheiro"]; ?>                </a>
            </li>
            <?php } ?>

            <li class="nav-item " data-toggle="tooltip" data-placement="right" title="Plugins">
                <a class="nav-link" href="http://furiouscollections.rf.gd/auth/logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-link-text">Desconectar</span>
                </a>
            </li>

        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
                    <li class="navbar-text mr-2 ml-2">
                    <?php while($dado = $con->fetch_array()){ ?>
                <img src="https://avatars.dicebear.com/v2/initials/<?php echo $dado['usuario']; ?> " height="25px" width="25px" style="border-radius: 12px;">
                <?php echo $dado["usuario"]; ?>           </li>
                    </ul>
                    <?php } ?>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">

    <main class="content">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="h4 font-weight-light mt-3">Recarregue sua conta</div>
                <div class="mb-4"></div>
                <form action="recarregar.php" id="checkout" method="POST">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="font-weight-bold text-muted" for="value">Valor da recarga</label>
                            <div style="position: relative" class="mb-3">
                                <input
                                    name="value"
                                    id="value"
                                    class="custom-form-control custom-cost"
                                    value="0"
                                    onkeyup="this.value=this.value.replace(/[^\d]/,'')"
                                    onchange="this.value=this.value.replace(/[^\d]/,'')"
                                >
                            </div>
                        </div>
                    </div>
                    
                    <label class="font-weight-bold text-muted mt-3">Forma de pagamento</label>
                    <div class="row mb-4">
                        <div class="col-md-2">
                            <button class="btn btn-primary btn-block" name="mercado-pago">
                                MercadoPago
                            </button>
                      
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
    </div>
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center bomba3">
                <b>Furiouscollections</b> &copy; Todos direitos reservados.
            </div>
        </div>
    </footer>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutLabel">Tem certeza?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Após confirmar a saída, você será redirecionado a página de login e perderá acesso ao painel.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="http://furiouscollections.rf.gd/client/logout.php">Confirmar</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://vootytools.com/app/templates/site/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="https://vootytools.com/app/templates/site/bower_components/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://vootytools.com/app/templates/site/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://vootytools.com/app/templates/site/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="https://vootytools.com/app/templates/site/assets/js/app.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js" type="31848ff2690d8ecfa42e55bd-text/javascript"></script>
    <script>
        $(function() {
            if(scripts instanceof Array) {
                $.each(scripts, function (index, fn) {
                    if(typeof fn === 'function') fn();
                });
            }
        });
    </script>
</div>
</body>
</html>