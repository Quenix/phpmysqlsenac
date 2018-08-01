<?php
	include_once("validaUsuario.php");
	
	$id_usuario   = $_POST['id_usuario'];
	$nome         = $_POST['nome'];
	$sobrenome    = $_POST['sobrenome'];

	
	if (!isset($id_usuario)){ 	
		header("Location: listarUsuario.php?editarErro=1");
		exit();
	}

	
	@include_once('conexao.php');
	$query   = "UPDATE usuario SET nome = '$nome', sobrenome = '$sobrenome' WHERE id_usuario = $id_usuario";
	$exec    = mysqli_query($conexao, $query) or die ('Não foi possivel editar o usuário');
	
	header ("Location: listarUsuario.php?editarSucesso=0");
	