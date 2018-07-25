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
	if(isset($_GET['retorno'])){
			
				switch($_GET['retorno']){
					case 0:
						echo '<div class="alert alert-danger" role="alert">
							  Favor preencher todos os campos!
						  </div>';
						break;
					case 1:
						echo '<div class="alert alert-danger" role="alert">
							  Senha divergente da confirmação!
						  </div>';
						break;
					case 2:
						echo '<div class="alert alert-success" role="alert">
							  Cadastro efetuado com sucesso!
						  </div>';
						break;
				}
				
			}
	include_once("footer.php");
?>
	
	
	