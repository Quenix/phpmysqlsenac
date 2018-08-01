<?php 

	$conexao = mysqli_connect('localhost', 'root', '', 'sistema_loja') or die ('Problema de conexao com o banco');

	$query = "SELECT * FROM usuario";

	$exec = mysqli_query($conexao, $query);
	
?>







<?php 
	// Diferença entre INCLUDE e REQUIRE
	// https://goo.gl/L4GkhL
	include_once("footer.php");
?>