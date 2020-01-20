<?php
session_start(); 
include_once 'incs/header.inc.php';
include_once 'incs/menu.inc.php';
?>



<?php 
	include_once 'banco/conexao.php';
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	$_SESSION['id'] = $id;
	$querySelect = $link->query("select * from tb_clientes where id='$id'");

	while($registros = $querySelect->fetch_assoc()):
		
		$nome = $registros['nome'];
		$email = $registros['email'];
		$telefone = $registros['telefone'];
        $nascimento = $registros['nascimento'];
        $detalhamento = $registros['detalhamento'];
        $objetivo = $registros['objetivo'];
	endwhile;	
 ?>





<!--FORMULARIO DE CADASTRO -->

		<div class="row container white" style=" position: relative; border-radius: 20px;">
			<p>&nbsp</p>
			<form action="banco/update.php" method="post" class="col s12">
				<fieldset class="formulario" style="border: white;">
					<legend><img src="imagens/cadastro.png" alt="[Imagem de Cadastro]" width="100"></legend>
					<h5 class="light center">Alteração de Registros</h5>

					

					<div class="input-field col s12 l6">
						<i class="material-icons prefix">account_circle</i>
						<input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlength="40" required autofocus>
						<label for="nome">Nome do Cliente</label>
					</div>

					<div class="input-field col s12 l6">
						<i class="material-icons prefix">email</i>
						<input type="email" name="email" id="email" value="<?php echo $email ?>" maxlength="50" required>
						<label for="email">E-mail do Cliente</label>
					</div>

					<div class="input-field col s12 l6">
						<i class="material-icons prefix">phone</i>
						<input type="tel" name="telefone" id="telefone" value="<?php echo $telefone ?>" maxlength="15" required>
						<label for="telefone">Telefone do Cliente</label>
					</div>

                    <div class="input-field col s12 l6">
                        <i class="material-icons prefix">face</i>
                        <input type="date" name="nascimento" id="nascimento" value="<?php echo $nascimento ?>" maxlength="20" required>
                        <label for="nascimento">Data de Nascimento</label>
                    </div>

                    <div class="input-field col s12 l6">
                        <i class="material-icons prefix">list_alt</i>
                        <textarea id="detalhamento" name="detalhamento" class="materialize-textarea" maxlength="255"><?php echo $detalhamento ?></textarea>
                        <label for="detalhamento">Detalhamento da Consulta</label>
                    </div>

                    <div class = "row col s12 l6">
                        <i class="material-icons prefix">speaker_notes</i>
                        <label for="objetivo">Objetivo da consulta</label>
                        <select class = "browser-default" name="objetivo" id="objetivo">
                            <option value = "" disabled selected><?php echo $objetivo ?></option>
                            <option value = "Emagrecimento">Emagrecimento</option>
                            <option value = "Reeducação Alimentar">Reeducação Alimentar</option>
                            <option value = "Nutrição Clínica">Nutrição Clínica</option>
                            <option value = "Nutrição Estética">Nutrição Estética</option>
                            <option value = "Nutrição Esportiva">Nutrição Esportiva</option>
                            <option value = "Ganho de Massa Muscular">Ganho de Massa Muscular</option>
                        </select>
                    </div>

					<div class="input-field col s12">
						<input type="submit" value="Alterar" class="btn blue">
						<a href="consultas.php" class="btn red">Cancelar</a>
					</div>
				</fieldset>				
			</form>
		</div>












<?php include_once 'incs/footer.inc.php'; ?>
 