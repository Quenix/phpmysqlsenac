<?php
	include_once("validaUsuario.php");
	
	$id_usuario = $_POST['id_usuario'];
	
	if (!isset($id_usuario)){ 	
		header("Location: listarUsuario.php?excluirErro=1");
		exit();
	}
	
	@include_once('conexao.php');
	$query   = "UPDATE usuario WHERE id_usuario = $id_usuario";
	$exec    = mysqli_query($conexao, $query) or die ('Não foi possivel excluir o usuário');
	
	header ("Location: listarUsuario.php?excluirSucesso=0");
	