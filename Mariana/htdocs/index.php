<html>

	<head>
		<title> PHP </title>
	</head>
	
	
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
		<form method="POST" action="home.php">
			<label> Email </label>
			<input type="email" name="emailUsuario">
			
			<label> Senha </label>
			<input type="password" name="senhaUsuario">	
			
			<button type="submit"> Enviar </button>
		</form>
		
		<a href="cadastro.php">Faça seu Cadastro </a>
	
	
	</body>
	
<html>
