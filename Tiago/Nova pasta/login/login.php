<?php 

	if (!isset($_POST['email']) || !isset($_POST['senha'])){
		header("Location: index.php?login=1");
		exit();
	}	

	if(empty($_POST['email']) || empty($_POST['senha'])){
		header("Location: index.php");
		exit();
	}

	$email = trim($_POST['email']);
	$senha = trim(md5($_POST['senha']));
	
	$conexao = @mysqli_connect('localhost', 'root', '', 'sistema_loja') or die('Problema na conexão com o banco!');
	
	$query = "SELECT * FROM usuario WHERE email='$email' and senha='$senha'";
	
	$retorno = mysqli_query($conexao, $query) or die('Erro na execução da consulta');
	
	$dados = mysqli_fetch_assoc($retorno);
	
	if($dados != null){
		//Aqui vai gravar a SESSION e direcionar para a home
		session_start();
		$_SESSION['nome'] = $dados['nome'];
		header("Location: home.php");
		
	}else{
		header("Location: index.php?login=0");
		exit();
	}
	
	
	
	
	
	
	
	
	
	
	
	
	