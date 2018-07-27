<?php

	if (!isset($_POST['emailUsuario']) || !isset($_POST['senhaUsuario'])){ 	
		header("Location: index.php?login=1");
		exit();
	}
	
	if (empty($_POST['emailUsuario']) || empty($_POST['senhaUsuario']) ){
		header("Location: index.php");
		exit();
	}	
	
	$email = trim($_POST['emailUsuario']);
	$senha = trim(md5($_POST['senhaUsuario']));
	
	
	$conexao = @mysqli_connect('localhost', 'root', '', 'sistema_loja') or die('Problemas na conexão com o banco');
	$query = "SELECT * FROM usuario WHERE email='$email' AND senha='$senha'";
	$retorno = mysqli_query($conexao, $query) or die ('Não foi possivel retornar a consulta');
	$dados = mysqli_fetch_assoc($retorno);

	
	$nomeUsuario = $dados['nome'];
	
	
	if ($dados != null){
		session_start();
		$_SESSION['nome'] = $nomeUsuario;
		header("Location: home.php");
	}
	else {
		header("Location: index.php?login=0");
		exit();
	}
	
?>
