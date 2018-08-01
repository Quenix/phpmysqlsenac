<?php
	@include_once("validaUsuario.php");
	
	@include_once('conexao.php');
	$query   = "SELECT * FROM usuario";
	$exec = mysqli_query($conexao, $query) or die ('Não foi possivel retornar a consulta');

