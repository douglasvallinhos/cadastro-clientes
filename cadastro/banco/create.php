<?php 
session_start();
include_once 'conexao.php';

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_NUMBER_INT);
$detalhamento = filter_input(INPUT_POST, 'detalhamento', FILTER_SANITIZE_SPECIAL_CHARS);
$objetivo = filter_input(INPUT_POST, 'objetivo', FILTER_SANITIZE_SPECIAL_CHARS);

$querySelect = $link->query("select email from tb_clientes");
$array_emails = [];

while($emails = $querySelect->fetch_assoc()):
	$emails_existentes = $emails['email'];
	array_push($array_emails, $emails_existentes);
endwhile;

if(in_array($email,$array_emails)) :
	$_SESSION['msg2'] = "<p class='center red-text'>".'Já existe um cliente cadastrado com esse email'."</p>";
	header("Location:../cadastro.php");
else:
	$queryInsert = $link->query("insert into tb_clientes values(default,'$nome','$email','$telefone','$nascimento','$detalhamento','$objetivo')");
	$affected_rows = mysqli_affected_rows($link);

	if($affected_rows > 0):
		$_SESSION['msg2'] = "<p class='center green-text'>".'Cadastro efetuado com sucesso!'."<br>";
		header("Location:../cadastro.php");
	endif;	
endif;	

 ?>