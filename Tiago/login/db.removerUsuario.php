<?php 

	$idusuario = $_POST['idusuario'];
	$conexao = mysqli_connect('localhost', 'root', '', 'sistema_loja') or die 	($conexao->error);

	//$query = "DELETE FROM usuario WHERE idusuario = $idusuario";
	mysqli_query($conexao, $query);
	header('Location: listarusuario.php');