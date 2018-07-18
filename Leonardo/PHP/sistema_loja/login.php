<?php
	
	if(!isset($_POST['email']) || !isset($_POST['senha']))
		header("Location: index.php");
		
	
	
	$email = $_POST['email'];
	$senha = MD5($_POST['senha']);
	
	$conexao = mysqli_connect('localhost', 'root', '', 'sistema_loja') or die('Falha ao conectar no banco');
	
	$query = "SELECT * FROM usuario where email = '$email' and senha = '$senha'";
	
	$retorno = mysqli_query($conexao, $query) or die ('Falha na execução da query. Consulte o programador mais próximo!');
	
	$dados = mysqli_fetch_assoc($retorno);
	
	if($dados != null){
		
		echo 'Logado com sucesso!';
		
	}