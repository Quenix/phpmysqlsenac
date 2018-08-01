<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha_confirmar = $_POST['senha_confirmar'];

    include(appPath('usuario/adicionarUsuario'));
    header("Location: ?page=usuarios");
    exit();
}else{

    if(!isset($_SESSION['email'])){

        header("Location: ?page=login");

    }

}