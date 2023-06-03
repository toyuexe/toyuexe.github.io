<?php
include('./auth/conexao.php');
$consulta = "SELECT COUNT(*) AS total FROM `usuario`";
$con = $conexao->query($consulta) or die($conexao->error);

$consultaa = "SELECT COUNT(*) AS total FROM `plugins`";
$conn = $conexao->query($consultaa) or die($conexao->error);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FuriousCollections — Início</title>

    <link rel="shortcut icon" type="image/png" href="https://imgur.com/gyMyk9u.png"/>

    <link rel="stylesheet" href="https://vootytools.com/app/templates/site/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://vootytools.com/app/templates/site/bower_components/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="essets/style.css">

    <script src="https://kit.fontawesome.com/4cfd508d4f.js" crossorigin="anonymous"></script>
    <script>window.scripts = [];</script>
</head>
<body>
<main role="main">
        <section id="home">
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
                                <a class="dropdown-item" href="http://furiouscollections.rf.gd/plugins/gratuitos"><i class="fas fa-download"></i> Gratuitos</a>
                                <a class="dropdown-item" href="http://furiouscollections.rf.gd/plugins/pagos"><i class="fas fa-cart-plus"></i> Pagos</a>
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
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6 mt-5 text-white">
                    <h1>FuriousCollections</h1>
                </div>
                <div class="col-md-6 mt-4">
                    <img src="https://vootytools.com/app/templates/site/assets/images/code.svg" class="img-fluid">
                </div>
            </div>
         </div>
    </section>
    <section class="section">
    <div class="container section-01">
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="section-05">
                    <h4><i class="far fa-grin-stars text-primary f56 fa-3x mt-4 mb-2" aria-hidden="true"></i></h4>
                    <div class="container texting">
                        <h2>Qualidade</h2>
                        <p>Focamas na qualidade de nossos plugins para que seu servidor fique livre de problemas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="section-05">
                    <h4><i class="fas fa-fingerprint text-primary f56 fa-3x mt-4 mb-2" aria-hidden="true"></i></h4>
                    <div class="container texting">
                    <h2>Segurança</h2>
                    <p>Fornecemos uma segurança de ponta para que seus dados fiquem sempre protegidos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="section-05">
                    <h4><i class="far fa-question-circle text-primary f56 fa-3x mt-4 mb-2" aria-hidden="true"></i></h4>
                    <div class="container texting">
                    <h2>Suporte</h2>
                    <p>Nosso maior objetivo é oferecer a melhor experiência de atendimento possível.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center">
                <div class="section-05">
                    <h4><i class="fas fa-hand-sparkles text-primary f56 fa-3x mt-4 mb-2" aria-hidden="true"></i></h4>
                    <div class="container texting">
                    <h2>Códigos</h2>
                    <p>Estamos sempre estudando para aprimorar nossos códigos para manter o desempenho.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-02">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <div class="section-05">
                    <h4><i class="fas fa-users text-primary f56 fa-3x mt-4 mb-2" aria-hidden="true"></i></h4>
                    <div class="container">
                    <?php while($dado = $con->fetch_array()){ ?>
                        <h2>+ de 
                            <?php echo $dado["total"]; ?> clientes ativos
                        </h2>
                    <?php } ?>    
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="section-05">
                    <h4><i class="fas fa-plug text-primary f56 fa-3x mt-4 mb-2" aria-hidden="true"></i></h4>
                    <div class="container">
                        <?php while($dadoo = $conn->fetch_array()){ ?>
                        <h2>+ de 
                            <?php echo $dadoo["total"]; ?> Plugin ativados.
                        </h2>
                    <?php } ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section></main>
<footer>
    <div class="footer">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        &copy; <a href="http://furiouscollections.rf.gd/">FuriousCollections</a>. Todos direitos reservados. <br /> 
                        <p class="text-muted">NÃO TEMOS NENHUMA AFILIAÇÃO COM MOJANG, AB.</p>
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
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/645addf4ad80445890ec0dc3/1h01f614j';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
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