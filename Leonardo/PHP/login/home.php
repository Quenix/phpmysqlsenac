<?php
	session_start();
	$nome = $_SESSION['nome'];	
	
	include('header.php');
		
?>

	<h1>Bem vindo, <?= $nome ?> </h1>
	<form method="POST" action="logout.php">
		<button type="submit" class="btn btn-danger">
		<i class="fas fa-sign-out-alt"></i>
		Logout
		</button>
	</form>

<?php
	
	
	include('footer.php');
?>