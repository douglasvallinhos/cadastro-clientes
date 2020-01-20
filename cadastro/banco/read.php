<?php

include_once 'conexao.php';

$querySelect = $link->query("select * from tb_clientes");
while($registros = $querySelect->fetch_assoc()):
	$id = $registros['id'];
	$nome = $registros['nome'];
	$email = $registros['email'];
	$telefone = $registros['telefone'];
	//FORMATACAO DE DATA
	$nascimento = date('d/m/Y',strtotime($registros['nascimento']));
	$detalhamento = nl2br($registros['detalhamento']);
	$objetivo = $registros['objetivo'];

	// FORMATACAO DE TELEFONE CELULAR
    $t1 = substr($telefone,0,2);
    $t2 = substr($telefone,2,5);
    $t3 = substr($telefone,7,5);
    $telefone = "($t1)$t2$t3";





	echo "<tr>";
	echo "<td>$nome</td><td>$email</td><td>$telefone</td><td>$nascimento</td><td>$detalhamento</td><td>$objetivo</td><td><a href='edit.php?id=$id'><i class='material-icons'>edit</i></a></td><td><a href='del.php?id=$id&nome=$nome'><i class='material-icons'>delete</i></a></td>";
	echo "</tr>";

endwhile;

 ?>
