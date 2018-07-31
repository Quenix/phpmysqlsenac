<?php

$id_usuario = $_POST['id_usuario'];

$conexao = mysqli_connect('localhost', 'root', '', 'sistema_loja')
or die($conexao->error);

$query = "DELETE FROM usuario WHERE id_usuario = $id_usuario";

mysqli_query($conexao, $query);

header("Location: listarUsuario.php");
exit();