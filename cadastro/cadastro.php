<?php session_start();
if(!empty($_SESSION['id'])){

}else{
    $_SESSION['msg'] = "Área restrita!!!";
    header("Location: ../index.php");
}
?>
<?php include_once 'incs/header.inc.php' ?>


		<?php include_once 'incs/menu.inc.php' ?>

		<!--FORMULARIO DE CADASTRO -->

		<div class="row container white" style="border-radius: 20px;">
			<p>&nbsp</p>
			<form action="banco/create.php" method="post" class="col s12 m12 l12">
				<fieldset class="formulario" style="border: white;">
					<legend><img src="../../imagens/carol_avatar.jpg" alt="[Imagem de Cadastro]" width="100" class="circle"></legend>
					<h5 class="light center">Cadastro de Clientes</h5>

					<?php
						if(isset($_SESSION['msg2'])):
							echo $_SESSION['msg2'];
                            unset($_SESSION['msg2']);
						endif; 
					 ?>

					<div class="input-field col s12 m6 l6">
						<i class="material-icons prefix">account_circle</i>
						<input type="text" name="nome" id="nome" maxlength="40" required autofocus>
						<label for="nome">Nome do Cliente</label>
					</div>

					<div class="input-field col s12 m6 l6">
						<i class="material-icons prefix">email</i>
						<input type="email" name="email" id="email" maxlength="50" required>
						<label for="email">E-mail do Cliente</label>
					</div>

					<div class="input-field col s12 m6 l6">
						<i class="material-icons prefix">phone</i>
						<input type="tel" name="telefone" id="telefone" maxlength="15" required>
						<label for="telefone">Telefone do Cliente</label>
					</div>

                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">face</i>
                        <input type="date" name="nascimento" id="nascimento" maxlength="20" required>
                        <label for="nascimento">Data de Nascimento</label>
                    </div>

                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">list_alt</i>
                        <textarea id="detalhamento" name="detalhamento" class="materialize-textarea" maxlength="255"></textarea>
                        <label for="detalhamento">Detalhamento da Consulta</label>
                    </div>

                    <div class = "row col s12 m6 l6">
                        <i class="material-icons prefix">speaker_notes</i>
                        <label for="objetivo">Objetivo da consulta</label>
                        <select class = "browser-default" name="objetivo" id="objetivo">
                            <option value = "" disabled selected>Selecione o objetivo</option>
                            <option value = "Emagrecimento">Emagrecimento</option>
                            <option value = "Reeducação Alimentar">Reeducação Alimentar</option>
                            <option value = "Nutrição Clínica">Nutrição Clínica</option>
                            <option value = "Nutrição Estética">Nutrição Estética</option>
                            <option value = "Nutrição Esportiva">Nutrição Esportiva</option>
                            <option value = "Ganho de Massa Muscular">Ganho de Massa Muscular</option>
                        </select>
                    </div>




					<div class="input-field col s12">
						<input type="submit" value="Cadastrar" class="btn blue">
						<input type="reset" value="Limpar" class="btn red">
					</div>


				</fieldset>				
			</form>
		</div>




		<?php include_once 'incs/footer.inc.php' ?>