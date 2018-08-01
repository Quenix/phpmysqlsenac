<?php
$senha = md5($senha);
$query = "INSERT INTO usuario(nome, sobrenome, email, senha) values ('$nome', '$sobrenome', '$email', '$senha')";


mysqli_query($connect, $query);

header("Location: ?page=usuarios");
exit();