<?php

	$nome 				= $_POST['nome'];
	$sobrenome 			= $_POST['sobrenome'];
	$email				= $_POST['email'];
	$senha	 			= $_POST['senha'];
	$senha_confirmacao 	= $_POST['senha_confirmacao'];
	
	if($senha != $senha_confirmacao){
		header("Location: cadastrarUsuario.php");
		exit();
	}
	
	$conexao = mysqli_connect('localhost', 'root', '', 'sistema_loja');
	
	$query = "INSERT INTO usuario (email, senha, nome, sobrenome) VALUES ('$email', '$senha', '$nome', '$sobrenome')";
	
	mysqli_query($conexao, $query) or die('Não foi possível cadastrar o usuário!');
	
	
