<?php
session_start();
include('../conexao.php');
$plugin = $_GET['plugin'];
$consulta = "SELECT * FROM `plugins` WHERE `nome` = '$plugin'";
$con = $conexao->query($consulta) or die($conexao->error);
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Furiouscollections — Detalhes do plugin</title>

    <link rel="shortcut icon" type="image/png" href="https://imgur.com/gyMyk9u.png"/>

    <link rel="stylesheet" href="https://vootytools.com/app/templates/site/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://vootytools.com/app/templates/site/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="http://furiouscollections.rf.gd/essets/css/styles.css">

    <script src="https://kit.fontawesome.com/4cfd508d4f.js" crossorigin="anonymous"></script>
    <script>window.scripts = [];</script>
</head>
<body>
<main role="main">
        <section id="page">
        <nav class="navbar navbar-expand-lg menu">
            <div class="container">
                <a class="navbar-brand" href="http://furiouscollections.rf.gd/">
                    <img src="https://imgur.com/gyMyk9u.png" alt="..." width="56px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="http://furiouscollections.rf.gd/"><i class="fas fa-home"></i> Início</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button"><i class="fas fa-box"></i> Plugins</a>
                            <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                                <a class="dropdown-item" href="http://furiouscollections.rf.gd/plugins/gratuitos"><i class="fas fa-download"></i> Plugins gratuitos</a>
                                <a class="dropdown-item" href="http://furiouscollections.rf.gd/plugins/pagos"><i class="fas fa-cart-plus"></i> Plugins pagos</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav mr-auto">
                                            <li class="nav-item client">
                            <a class="nav-link" href="http://furiouscollections.rf.gd/auth/"><i class="fas fa-user-lock"></i> Área do Cliente</a>
                        </li>
                    </ul>
                                    </div>
            </div>
        </nav>
        <?php while($dado = $con->fetch_array()){ ?>
        <div class="mid">
            <div class="container">
                <h1><?php echo $dado['nome']; ?></h1>
                <h2>Detalhes do plugin</h2>
            </div>
        </div>
    </section>
        
<section>

    <div class="container">

        <div class="card mt--35 p-4 mb-5">

            <div class="card-body">

                <div class="row">

                    <div class="col-md-9">

                        <h3 class="h5 font-weight-bold text-muted mb-3">

                            v<?php echo $dado["version"]; ?>
                        </h3>

                        <ul class="nav nav-tabs" id="myTab" role="tablist">

                            <li class="nav-item">

                                <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Descrição</a>

                            </li>

                        </ul>

                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active pt-4" id="description" role="tabpanel" aria-labelledby="description-tab">

                                <span style="font-size: 22px; text-align: center; text-decoration-line: underline;">CARACTERÍSTICAS GERAIS</span>
                                <li><span style="font-size: 1rem;"><?php echo $dado["descc"]; ?></span></li>


                    </div>
                    </div>
                    </div>

                    <div class="col-md-3">

                        
                        <div class="text-center h4 m-0 mb-3">

                            R$ <?php echo $dado["valor"]; ?>
                        </div>
                                                                            <?php if(!$_SESSION['usuario']) { ?>
                                                                                <button class="btn btn-dark btn-block btn-no-animation" disabled>Você não está logado</button>
                                                                            <?php }else{ ?>
                                                                                <button class="btn btn-primary btn-block btn-no-animation install" onclick="location.href = 'compra.php?plugin=<?php echo $dado['nome']; ?>' ">Comprar</button>
                                                                            <?php } ?>
                                                                            
                        
                            <p class="text-center text-danger my-3" style="display: none;"></p>

                            <p class="text-muted mt-3 mb-0">Versão atual: <b class="font-weight-bold"></b><?php echo $dado["version"]; ?></p>

                                                    </div>
                        </div>
                </div>
                <?php } ?>
            </div>

        </div>

    </div>

</section>
</main>
<footer>
    <div class="footer">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        &copy; <a href="http://furiouscollections.rf.gd/">Furiouscollections</a>. Todos direitos reservados. <br /> 
                        <p class="text-muted">NÃO TEMOS NENHUMA AFILIAÇÃO COM MOJANG, AB..</p>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://vootytools.com/app/templates/site/bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://vootytools.com/app/templates/site/bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="https://vootytools.com/app/templates/site/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://vootytools.com/app/templates/site/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
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
