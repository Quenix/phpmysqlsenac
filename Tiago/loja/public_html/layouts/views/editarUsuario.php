<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $id_usuario = $_POST['id_usuario'];

    include(appPath('usuario/editarUsuario'));
    header("Location: ?page=usuarios");
    exit();
}else{

    if(!isset($_SESSION['email'])){

        header("Location: ?page=login");

    }

}