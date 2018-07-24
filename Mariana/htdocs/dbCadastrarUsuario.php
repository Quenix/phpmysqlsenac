<?php

	$nome         = $_POST['nomeUsuario'];
	$sobrenome    = $_POST['sobrenomeUsuario'];
	$email        = $_POST['emailUsuario'];
	$senha 		  = md5($_POST['senhaUsuario']);
	$senhaConfirm = md5($_POST['senhaConfirmacao']);
	
	if ($senha != $senhaConfirm ){
		header ("Location: cadastraUsuario.php");
		exit();
	}
	
	$conexao = @mysqli_connect('localhost', 'root', '', 'sistema_loja') or die('Problemas na conexão com o banco');
	$query   = "INSERT INTO usuario (email, senha, nome, sobrenome) VALUES ('$email', '$senha', '$nome', '$sobrenome')";
	
	mysqli_query($conexao, $query) or die ('Não foi possivel cadastrar o usuário');
	
	header ("Location: cadastraUsuario.php?cadastro=0");
	