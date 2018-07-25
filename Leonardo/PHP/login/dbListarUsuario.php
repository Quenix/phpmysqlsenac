<?php 

	$conexao = mysqli_connect('localhost', 'root', '', 'sistema_loja');
	
	$query = "SELECT * FROM usuario";

	$exec = mysqli_query($conexao, $query);