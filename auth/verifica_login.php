<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: ../auth/login.php');
	exit();
}