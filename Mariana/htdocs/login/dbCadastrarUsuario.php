<?php
	include_once("validaUsuario.php");
	
	$nome         = $_POST['nomeUsuario'];
	$sobrenome    = $_POST['sobrenomeUsuario'];
	$email        = $_POST['emailUsuario'];
	$senha 		  = md5($_POST['senhaUsuario']);
	$senhaConfirm = md5($_POST['senhaConfirmacao']);
	
	
	if ($senha != $senhaConfirm ){
		header ("Location: cadastraUsuario.php?cadastro=1");
		exit();
	}
	
	if (!isset($nome) || !isset($sobrenome) || !isset($email) || !isset($senha)){ 	
		header("Location: cadastraUsuario.php?cadastro=2");
		exit();
	}
	
	if (empty($nome) || empty($sobrenome) || empty($email) || empty($senha) ){
		header("Location: cadastraUsuario.php?cadastro=3");
		exit();
	}
	
	$conexao = @mysqli_connect('localhost', 'root', '', 'sistema_loja') or die('Problemas na conexão com o banco');
	$query   = "INSERT INTO usuario (email, senha, nome, sobrenome) VALUES ('$email', '$senha', '$nome', '$sobrenome')";
	
	mysqli_query($conexao, $query) or die ($conexao->error);
	
	header ("Location: cadastraUsuario.php?cadastro=0");
	