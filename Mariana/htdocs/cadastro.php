<?php
	include("header.php");
?>
	<form method="POST" action="gravaUsuario.php">
		<label> Nome: </label>
		<input type="text" name="nomeUsuario">
		
		<label> Sobrenome </label>
		<input type="text" name="sobrenomeUsuario">
		
		<label> Data de Nascimento: </label>
		<input type="date" name="dataNascimento" min="2017-08-05">
		
		<label> Email: </label>
		<input type="email" name="emailUsuario">
		
		<label> Senha: </label>
		<input type="password" name="senhaUsuario">
		
		<label> Confirme sua Senha: </label>
		<input type="password" name="senhaUsuario">
		
		<button type="submit"> Confirmar </button>
	
	</form>

<?php
	include("footer.php");
?>
	