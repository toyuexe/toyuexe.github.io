<?php
session_start();
include('../auth/conexao.php');
$usuario = $_SESSION['usuario'];
$consulta = "SELECT * FROM `usuario` WHERE `usuario` = '$usuario'";
$con = $conexao->query($consulta) or die($conexao->error);
?>


<?php while($dado = $con->fetch_array()){ if($dado["type"] == 'membro'): header('Location: ../client'); ?>
<?php endif;} ?>