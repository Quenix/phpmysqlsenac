<?php

$query = "INSERT INTO usuario(nome, sobrenome, email, senha) values ('$nome', '$sobrenome', '$email', '$senha')";
$senha = md5($senha);

mysqli_query($connect, $query);

header("Location: ?page=usuarios");
exit();