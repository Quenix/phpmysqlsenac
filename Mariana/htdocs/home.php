<?php
	include_once('validaUsuario.php');
	include_once('header.php');
?>	

	<h1> Bem vindo(a),<?= $nome ?> </h1>;
	<form method="POST" action="cadastraUsuario.php">
		<button type="submit" class="btn btn-danger">
		<i class="fas fa-sign-out-alt"></i>Cadastrar Usuario</button>
	</form>
	
	<form method="POST" action="logout.php">
		<button type="submit" class="btn btn-danger">
		<i class="fas fa-sign-out-alt"></i>Logout</button>
	</form>
	
	
<?php	
	include('footer.php')
?>