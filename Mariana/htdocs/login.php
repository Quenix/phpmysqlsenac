<?php

	//echo password_hash('123', PASSWORD_DEFAULT);
	//$hash = '$2y$10$hganNElj5LyKRGAOORR5FOi8cYCXW36NZLpiaC7jPmvmJ7Em0Kyoy11';
	//var_dump(password_verify('teste', $hash);
	
	//die('11');
	//isset();
	// testa se o parametro esta setado ou não
	
	//header("Location: index.php");
	// redireciona para uma outra pagina
	
	// echo pode ser usado para escrever alguma coisa na tela
	// die pode ser usado para matar todo o processo e não continua mais o que tem após ele
	
	
	// utilizado no metodo POST
	//$email = isset($_POST['emailUsuario']);
	//$senha = isset($_POST['senhaUsuario']);

	//echo($email);
	//Poderia colocar assim: E ele iria validar se é verdadeiro
	//if (isset($_POST['emailUsuario'])
	
	// Quando possui a exclamação na frente do teste, ele já verifica se é falso, caso seja, entra direto no if
	//if (!isset($_POST['emailUsuario'])
		
	//empty verifica se é vazio, então precisa ser uma verdade
	//trim retira espaços em branco/vazios no decorrer da palavra
	//str_replace
	//explode quebra o valor em pedaços a partir de um caractere determinado

	//if (($email == false && $senha == false))
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
	
	//echo md5($senha);
	// colocando o @ antes, caso seja só um warning ele esconde
	// se for erro ele mostra normal
	
	$conexao = @mysqli_connect('localhost', 'root', '', 'sistema_loja') or die('Problemas na conexão com o banco');
	$query = "SELECT * FROM usuario WHERE email='$email' AND senha='$senha'";
	$retorno = mysqli_query($conexao, $query) or die ('Não foi possivel retornar a consulta');
	//$dados = mysqli_fetch_assoc($retorno);
	$dados = mysqli_fetch_array($retorno);
	
	if ($dados != null){
		die('Você está logado');
	}
	else {
		header("Location: index.php?login=0");
	}
	
	//fetch é usado sempre para dar um retorno de informação
	
	var_dump($dados);
	
	//echo password_hash('123', PASSWORD_DEFAULT);
	//die('11');
	//utilizado o metodo GET
	//$email = $_GET['emailUsuario'];
	//$senha = $_GET['senhaUsuario'];
	
	//echo $email;
	//echo $senha;
?>

<html>
	<head>
		<title> Home </title>
	</head>
	
	<body>
	<!--
		<h1> Você foi logado! </h1>
		<a href="index.php"> Logout </a> -->
	<body>
<html>