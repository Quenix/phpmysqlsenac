<?php
<<<<<<< HEAD
$senha = md5($senha);
$query = "INSERT INTO usuario(nome, sobrenome, email, senha) values ('$nome', '$sobrenome', '$email', '$senha')";

=======

$query = "INSERT INTO usuario(nome, sobrenome, email, senha) values ('$nome', '$sobrenome', '$email', '$senha')";
>>>>>>> master

mysqli_query($connect, $query);

header("Location: ?page=usuarios");
exit();