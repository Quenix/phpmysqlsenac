<?php

session_start();

<<<<<<< HEAD
include_once('../config/config.php');
=======
include_once('../config/config.php');// conexao com o banco
>>>>>>> master
include_once('layouts/header.php');

if(isset($_GET['page'])){
    if(file_exists('layouts/views/'.$_GET['page'].'.php')){
        include_once('layouts/views/'.$_GET['page'].'.php');
    }else{
        include_once('layouts/views/404.php');
    }
}else{
    if(isset($_SESSION['email'])){
        include_once('layouts/views/home.php');

    }else{

        include_once('layouts/views/login.php');
    }
}

include_once('layouts/footer.php');