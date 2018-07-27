<html>

	<head>
		<title> PHP </title>
	</head>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<body>
		
		<?php
	
			//$nome = "Mariana";
			// para declarar variveis utiliza o simbolo $
			
			//echo $nome;

			//Pode ser declarado assim na versão PHP 7
			//echo "<h1>Meu nome é $nome</h1>";
			
			// Nas versões anteriores pode ser declarado assim:
			//echo "<h1>Meu nome é ".$nome."</h1>";
			// o simbolo ponto é utilizado para concatenar as informações
			
		?>
		
		<!--
			Utilizando o GET ele acaba trazendo as informações do login diretamente na URL
			O POST ele faz uma requisição por trás
			Normalmente pode acompanhar as requisições apertando F12, aba Network e carregando novamente a requisição.
		-->	
		
		<nav class="navbar navbar-light bg-light">
		
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
			  Login
			</button>

			<!-- Modal -->
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			  <div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Faça o Login</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					</button>
				  </div>
				  <div class="modal-body">
					<form method="POST" action="login.php">
						<label> Email </label>
						<input type="email" name="emailUsuario" >
						
						<label> Senha </label>
						<input type="password" name="senhaUsuario" >	
						
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
							<button type="submit" class="btn btn-primary">Logar</button>
						</div>
						<div class="modal-footer">
							<a href="cadastro.php">Faça seu Cadastro </a>
						</div>
					</form>
				  </div>
				</div>
			  </div>
			</div>
		</nav>
		
		<div class="content">
		 
		 <?php
		 if (isset ($_GET['login'])){
			 //switch ($_GET['login']){
				//case 
				 
			echo '<div class="alert alert-danger" role="alert">
					Usuário ou senha Inválidos
				  </div>';
		 }
		 ?>
		</div>
		
	
	
	</body>
	
<html>
