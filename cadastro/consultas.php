<?php include_once 'incs/header.inc.php' ?>
<?php include_once 'incs/menu.inc.php' ?>

<?php session_start();
if(!empty($_SESSION['id'])){

}else{
    $_SESSION['msg'] = "Área restrita!!!";
    header("Location: ../index.php");
}
?>

<div class="row container white" style="top: 15px; position: relative; border-radius: 20px;">
	<div class="col s12">
		<h5 class="light">Consultas</h5><hr>

		<table class="striped responsive-table">
			<thead>
				<tr>
					<th>Nome</th>
					<th>E-mail</th>
					<th>Telefone/Celular</th>
                    <th>Data de Nascimento</th>
                    <th>Detalhamento da Consulta</th>
                    <th>Objetivo da Consulta</th>

				</tr>
			</thead>
			<tbody>
				<?php 
					include_once 'banco/read.php';
				 ?>
			</tbody>
		</table>
	</div>
</div>



<?php include_once 'incs/footer.inc.php' ?>