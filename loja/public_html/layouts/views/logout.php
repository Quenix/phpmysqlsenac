<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $token = md5(session_id());
    if(isset($_GET['token']) && $_GET['token'] === $token) {

        include(appPath('usuario/efetuarLogoutUsuario'));

    }




}
?>