<?php
	// utilizado no metodo POST
	$email = $_POST['emailUsuario'];
	$senha = $_POST['senhaUsuario'];
	
	
	//utilizado o metodo GET
	//$email = $_GET['emailUsuario'];
	//$senha = $_GET['senhaUsuario'];
	
	echo $email;
	echo $senha;
?>

<html>
	<head>
		<title> Home </title>
	</head>
	
	<body>
		<h1> Você foi logado! </h1>
		<a href="index.php"> Logout </a>
	<body>
<html>