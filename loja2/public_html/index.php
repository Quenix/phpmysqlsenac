<?php

    session_start();
    
    if(!isset($_SESSION['carrinho'])){
        $array = [];
        $_SESSION['carrinho'] = $array;

    }

    include_once('../config/config.php');

    include_once('layouts/header.php');

    if(isset($_GET['page'])){
        if(file_exists('layouts/views/'.$_GET['page'].'.php')){
            include_once('layouts/views/'.$_GET['page'].'.php');
        }else{
            //include_once('layouts/views/404.php');
        }
    }else{
        
        include_once('layouts/views/home.php');
    
        
    }

    include_once('layouts/footer.php');

