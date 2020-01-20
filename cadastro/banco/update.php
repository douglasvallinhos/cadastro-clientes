<?php
session_start();
include_once 'conexao.php';
$id = $_SESSION['id'];

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_NUMBER_INT);
$detalhamento = filter_input(INPUT_POST, 'detalhamento', FILTER_SANITIZE_SPECIAL_CHARS);
$objetivo = filter_input(INPUT_POST, 'objetivo', FILTER_SANITIZE_SPECIAL_CHARS);

$queryUpdate = $link->query("update tb_clientes set nome='$nome', email='$email', telefone='$telefone', nascimento='$nascimento', detalhamento='$detalhamento', objetivo='$objetivo' where id='$id'");
$affected_rows = mysqli_affected_rows($link);
if($affected_rows > 0):
	header("Location:../consultas.php");
endif;	




 ?>