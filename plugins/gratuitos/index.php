<?php
include('../conexao.php');
$usuario = $_SESSION['usuario'];
$consulta = "SELECT * FROM `plugins` WHERE `preco` = 'Gratis'";
$con = $conexao->query($consulta) or die($conexao->error);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>furiouscollections — Plugins grátis</title>

    <link rel="shortcut icon" type="image/png" href="https://i.imgur.com/gyMyk9u.png"/>

    <link rel="stylesheet" href="https://vootytools.com/app/templates/site/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://vootytools.com/app/templates/site/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="http://furiouscollections.rf.gd/essets/style.css">

    <script src="https://kit.fontawesome.com/4cfd508d4f.js" crossorigin="anonymous"></script>
    <script>window.scripts = [];</script>
</head>
<body>
<main role="main">
        <section id="page">
        <nav class="navbar navbar-expand-lg menu">
            <div class="container">
                <a class="navbar-brand" href="http://furiouscollections.rf.gd/">
                    <img src="https://i.imgur.com/gyMyk9u.png" alt="..." width="56px">
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
        <div class="mid">
            <div class="container">
                <h1>Plugins grátis</h1>
                <h2>Impulsione seu servidor sem pagar!</h2>
            </div>
        </div>
    </section>
        <section class="categories">
    <div class="container">
        <div class="owl-carousel">
            <a href="http://furiouscollections.rf.gd/plugins/" class="category-selector active">
                <div class="category-item">
                    <i class="fas fa-asterisk"></i>
                    <span>
                        Sem filtros
                    </span>
                </div>
            </a>
                        <a href="http://furiouscollections.rf.gd/plugins/gratuitos" class="category-selector ">
                <div class="category-item">
                    <span>
                        Gratuito                    </span>
                </div>
            </a>
                        <a href="http://furiouscollections.rf.gd/plugins/depedencia" class="category-selector ">
                <div class="category-item">
                    <span>
                        Dependencias                    </span>
                </div>
            </a>
                    </div>
    </div>
</section>
<section class="plugins">
    <div class="container">
        <div class="row">
        <?php while($dado = $con->fetch_array()){ ?>
                        <div class="col-md-3">
                <div class="product">
                    <div class="product-title"><?php echo $dado["nome"]; ?></div>
                    <div class="product-version"><?php echo $dado["version"]; ?></div>
                    <div class="product-price"><?php echo $dado["preco"]; ?></div>
                    <div class="product-buttons">
                        <button class="product-btn" onclick="<?php echo $dado['url']; ?>">Baixar</button>
                    </div>
                </div>
            </div>
            <?php } ?>
                    </div>
        <nav aria-label="Navegação">
            <ul class="pagination justify-content-end mb-5">
                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Anterior</a></li> <li class="page-item active"><a class="page-link" href="#" tabindex='-1'>1</a></li><li class="page-item disabled"><a class="page-link" href="#">Próximo</a></li>            </ul>
        </nav>
    </div>
</section></main>
<footer>
    <div class="footer">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        &copy; <a href="http://furiouscollections.rf.gd/">furiouscollections</a>. Todos direitos reservados. <br /> 
                        <p class="text-muted">NÃO TEMOS NENHUMA AFILIAÇÃO COM MOJANG, AB.</p>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://vootytools.com//app/templates/site/bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://vootytools.com//app/templates/site/bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="https://vootytools.com//app/templates/site/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://vootytools.com//app/templates/site/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="https://vootytools.com//app/templates/site/assets/js/app.js"></script>
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
