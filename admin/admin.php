<?php

session_start();
include('../auth/conexao.php');
include('../admin/verifica_staff.php');
include('../auth/verifica_login.php');
$usuario = $_SESSION['usuario'];
$consulta = "SELECT COUNT(*) AS total FROM `usuario`";
$con = $conexao->query($consulta) or die($conexao->error);

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>FuriousCollections — Área do Cliente</title>

	

	<link rel="shortcut icon" type="image/png" href="https://imgur.com/gyMyk9u.png"/>

	

    <link rel="stylesheet" href="https://vootytools.com/app/templates/site/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://vootytools.com/app/templates/site/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" />

    <link href="http://furiouscollections.rf.gd/essets/painel/css/sb-admin.css" rel="stylesheet">
    <link href="http://furiouscollections.rf.gd/essets/painel/css/stylep.css" rel="stylesheet">



    <script src="https://kit.fontawesome.com/4cfd508d4f.js" crossorigin="anonymous"></script>

    <script>window.scripts = [];</script>

</head>

<body class="fixed-nav" id="page-top">

<nav class="navbar navbar-expand-lg menu" id="mainNav">

    <a class="navbar-brand" href="http://furiouscollections.rf.gd/auth/login.php"><img src="https://imgur.com/gyMyk9u.png" width=25px alt="Logo"></a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">

        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">

            <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Início">

                <a class="nav-link" href="../client/painel.php">

                    <i class="fa fa-fw fa-dashboard"></i>

                    <span class="nav-link-text">Início</span>

                </a>

            </li>

            <li class="nav-item " data-toggle="tooltip" data-placement="right" title="Plugins">

                <a class="nav-link" href="http://furiouscollections.rf.gd/admin/plugin.php">

                    <i class="fas fa-fw fa-plug"></i>

                    <span class="nav-link-text">Plugin-add</span>

                </a>

            </li>

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

                    

                <img src="https://avatars.dicebear.com/v2/initials/<?php echo $_SESSION['usuario'];?>.svg" height="25px" width="25px" style="border-radius: 12px;">

                <?php echo $_SESSION['usuario'];?>            </li>

                    </ul>

    </div>

</nav>

<div class="content-wrapper">

    <div class="container-fluid">



    <main class="content">

    <div class="container">

        <div class="row">

            <div class="col-md-4">

                <div class="status-card mb-4">

                    <i class="bomba3 fas fa-plug"></i>

                    <div>
                    <?php while($dado = $con->fetch_array()){ ?>
                        <div class="bomba2"><?php echo $dado["total"]; ?></div>
                    <?php } ?>

                        <div class="bomba">Usuarios registrados. </div>

                    </div>

                </div>

            </div>
            </div>
            </div>
            </div>
            </div>


</main>

<script>

    function copy() {

        var r = document.createRange();

        r.selectNode(document.getElementById("copy"));

        window.getSelection().removeAllRanges();

        window.getSelection().addRange(r);

        try {

            document.execCommand('copy');

            window.getSelection().removeAllRanges();

            toastr.success("Token copiado com sucesso!");

        } catch (err) {

        }

    }

</script>

<script src="https://vootytools.com/app/templates/site/assets/js/app.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="http://codeseven.github.io/toastr/build/toastr.min.js"></script>

<link href="http://codeseven.github.io/toastr/build/toastr.min.css" rel="stylesheet"/>

    </div>

    <footer class="sticky-footer">

        <div class="container">

            <div class="text-center bomba3">

                <b>FuriousCollections</b> &copy; Todos direitos reservados.

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

                    <a class="btn btn-primary" href="http://furiouscollections.rf.gd/auth/logout.php">Confirmar</a>

                </div>

            </div>

        </div>

    </div>



    <script src="https://vootytools.com/app/templates/site/bower_components/jquery/dist/jquery.min.js"></script>

    <script src="https://vootytools.com/app/templates/site/bower_components/popper.js/dist/umd/popper.min.js"></script>

    <script src="https://vootytools.com/app/templates/site/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="https://vootytools.com/app/templates/site/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

    <script src="https://vootytools.com//app/templates/admin/assets/js/sb-admin.js"></script>

    <script src="https://vootytools.com//app/templates/admin/assets/js/sb-admin-datatables.js"></script>

    <script src="https://vootytools.com//app/templates/admin/assets/js/sb-admin-charts.js"></script>

    <script src="https://vootytools.com/app/templates/site/assets/js/app.js"></script>

    <script src="https://vootytools.com/app/templates/site/assets/js/api.js"></script>

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