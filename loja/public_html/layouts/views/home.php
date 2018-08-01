<?php

<<<<<<< HEAD
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    include(appPath('usuario/efetuarLoginUsuario'));
=======

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    include(appPath('usuario/efetuarLoginUsuario')); 
>>>>>>> master

}else{

    if(!isset($_SESSION['email'])){

        header("Location: ?page=login");

    }

}

include('layouts/views/navbar.php');

<<<<<<< HEAD

?>



<h1>Olá, <?=$_SESSION['email'];?></h1>
=======
?>

<h1>Você esta logado <?=$_SESSION['nome'];?></h1>
>>>>>>> master
