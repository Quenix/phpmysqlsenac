<?php
	session_start();
	
	if(isset($_SESSION['nome'])){
		
		$nome = $_SESSION['nome'];	
			
	}else{
		
		header("Location: index.php?login=1");
		
	}
	
	include('header.php');
		
?>

	<h1>Bem vindo, <?= $nome ?> </h1>
	
	<form method="POST" action="cadastrarUsuario.php">
		<button type="submit" class="btn btn-primary">
		<i class="far fa-user"></i>
		Cadastrar usuário
		</button>
	</form>
	
	<form method="POST" action="listarUsuario.php">
		<button type="submit" class="btn btn-success">
		<i class="far fa-user"></i>
		Listar usuário
		</button>
	</form>
	
	<form method="POST" action="logout.php">
		<button type="submit" class="btn btn-danger">
		<i class="fas fa-sign-out-alt"></i>
		Logout
		</button>
	</form>

<?php
	
	
	include('footer.php');
?>