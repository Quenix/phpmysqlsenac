<?php 
	// Diferença entre INCLUDE e REQUIRE
	// https://goo.gl/L4GkhL
	include_once("header.php");
?>

	<div class="cadastrarUsuario">
		<form method="POST" action="dbCadastrarUsuario.php">
			<div class="form-group">
				<label>Nome:</label>
				<input type="text" class="form-control" name="nome">

				<label>Sobrenome:</label>
				<input type="text" class="form-control" name="sobrenome">
				
				<label>Email: </label>
				<input type="email" class="form-control" name="email">
				
				<label>Senha: </label>
				<input type="password" class="form-control" name="senha">
				
				<label>Confirme a senha: </label>
				<input type="password" class="form-control" name="senha_confirmacao">
				
				<button id="botaoCadastrar" type="submit" class="btn btn-primary btn-block">Cadastrar!</button>
			</div>
		</form>	
	</div>
		
<?php
	include_once("footer.php");
?>
	
	
	