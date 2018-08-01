<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    include(appPath('usuario/efetuarLoginUsuario'));

}else{

    if(!isset($_SESSION['email'])){

        header("Location: ?page=login");

    }

}

include('layouts/views/navbar.php');


?>



<h1>Olá, <?=$_SESSION['email'];?></h1>
