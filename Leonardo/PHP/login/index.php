<html>
	<head>
		<title>Meu primeiro login</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>
	
	<body>
		<?php
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
			<input type="text" name="email" required>
			
			<label>Senha:</label>
			<input type="password" name="senha" required>	

			<button type="submit">Enviar</button>
		</form>
		
		<a href="cadastro.php">Faça seu cadastro</a>
	</body>

</html>