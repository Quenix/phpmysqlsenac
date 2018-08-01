<?php 
	// Diferença entre INCLUDE e REQUIRE
	// https://goo.gl/L4GkhL
	include("header.php");
?>
	
	<form method="POST" action="gravaUsuario.php">
		<label>Nome:</label>
		<input type="text" name="nome">

		<label>Sobrenome:</label>
		<input type="text" name="sobrenome">
		
		<label>Data de Nascimento</label>
		<input type="date" name="dt_nascimento" min="2017-09-04">
		
		<label>Email: </label>
		<input type="email" name="email">
		
		<label>Senha: </label>
		<input type="password" name="senha">
		
		<label>Confirme a senha: </label>
		<input type="password" name="senha_confirmacao">
		
		<button type="submit">Cadastrar!</button>
	</form>	
	
	
<?php
	require("footer.php");
?>
	