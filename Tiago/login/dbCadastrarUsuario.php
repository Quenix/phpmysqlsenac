<?php
	
	session_start();
	// if(!isset($_SESSION['nome'])){
		// header("Location: index.php?login=1");
		// exit();
	// }
	if(
	(empty($_POST['nome']))						||
	(empty($_POST['sobrenome'])) 				||
	(empty($_POST['email']))					||
	(empty($_POST['senha']))					||
	(empty($_POST['senha_confirmacao']))
	){
		header("Location: cadastrarUsuario.php?retorno=0");
		exit();
	}
		
	$nome 				= $_POST['nome'];
	$sobrenome 			= $_POST['sobrenome'];
	$email				= $_POST['email'];
	$senha	 			= $_POST['senha'];
	$senha_confirmacao 	= $_POST['senha_confirmacao'];
	
	if($senha != $senha_confirmacao){
		header("Location: cadastrarUsuario.php?retorno=1");
		exit();
	}
	
	$senha = md5($senha);
	
	$conexao = mysqli_connect('localhost', 'root', '', 'sistema_loja');
	
	$query = "INSERT INTO usuario (email, senha, nome, sobrenome) VALUES ('$email', '$senha', '$nome', '$sobrenome')";
	
	mysqli_query($conexao, $query) or die ($conexao->error);    
	header("Location: cadastrarUsuario.php?retorno=2");
	exit();
	