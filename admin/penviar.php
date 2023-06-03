<?php
session_start();
include('../auth/conexao.php');

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$preco = mysqli_real_escape_string($conexao, trim($_POST['preco']));
$url = mysqli_real_escape_string($conexao, trim($_POST['url']));
$version = mysqli_real_escape_string($conexao, trim($_POST['version']));
$valor = mysqli_real_escape_string($conexao, trim($_POST['valor']));
$texto = mysqli_real_escape_string($conexao, trim($_POST['texto']));

$sql = "select count(*) as total from plugins where nome = '$nome'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['plugin_existe'] = true;
	header('Location: plugin.php');
    exit;
}

$sql = "INSERT INTO plugins (nome, preco, url, version, valor, descc) VALUES ('$nome', '$preco', '$url', '$version', '$valor', '$texto')";

if($conexao->query($sql) === TRUE) {
	$_SESSION['plugin_botado'] = true;
    header('Location: plugin.php');
}

if($preco == 'Pago'){
    $sqlcreate = "ALTER TABLE `usuario` ADD `$nome` VARCHAR(200) NOT NULL AFTER `dinheiro`;";
    if($conexao->query($sqlcreate) === TRUE) {
}
}

?>