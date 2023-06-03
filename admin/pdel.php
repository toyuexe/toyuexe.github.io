<?php
session_start();
include('../auth/conexao.php');

$nome = $_GET['nome'];

$sql = "select count(*) as total from plugins where nome = '$nome'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 0) {
	$_SESSION['plugin_nao_existe'] = true;
	header('Location: plugin.php');
    exit;
}

$sql = "DELETE FROM `plugins` WHERE `nome` = '$nome'";

if($conexao->query($sql) === TRUE) {
	$_SESSION['plugin_deletado'] = true;
    header('Location: plugin.php');
}
?>