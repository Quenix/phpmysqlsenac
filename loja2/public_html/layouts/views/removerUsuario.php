<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id_usuario = $_POST['id_usuario'];
    include(appPath('usuario/removerUsuario'));
    header("Location: ?page=usuario");

}else{

    if(!isset($_SESSION['email'])){

        header("Location: ?page=login");

    }

}