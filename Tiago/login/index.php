<?php
		include("header.php");
			if(isset($_GET['login'])){
			
				switch($_GET['login']){
					case 0:
						echo '<div class="alert alert-danger" role="alert">
							  Usuário ou senha inválidos!
						  </div>';
						break;
					case 1:
						echo '<div class="alert alert-primary" role="alert">
								  Tentativa de acesso indevida!
						</div>';
						break;
					
				}
				
			}
			
		?>
		<form method="POST" action="login.php">
			<label>E-mail:</label>
			<input id="email" type="text" name="email" required>
			
			<label>Senha:</label>
			<input id="senha" type="password" name="senha" required>	

			<button type="submit">Enviar</button>
		</form>
		
		<a href="cadastrarUsuario.php">Faça seu cadastro</a>

	<?php
	include("footer.php");
	?>