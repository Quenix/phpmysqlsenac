<?php
	// include, inclui no sistema, as vezes acontece de incluir mais de uma vezes
	// include_once, inclui somente uma vez. Faz uma verificação
	session_start();
	$nome = $_SESSION['nome'];	
	include('header.php');
?>	

	<h1> Bem vindo(a),<?= $nome ?> </h1>;
	<form method="POST" action="logout.php">
		<button type="submit" class="btn btn-danger">
		<i class="fas fa-sign-out-alt"></i>Logout</button>
	</form>
	
	
<?php	
	include('footer.php')
?>