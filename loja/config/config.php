<?php

<<<<<<< HEAD
 //$localhost = 'localhost';
 $localhost = '10.51.47.69';
 $username  = 'root';
 //$password  = ''; SENHA LOCALHOST
 $password  = 'root';
=======
 $localhost = 'localhost';
 $username  = 'root';
 $password  = '';
>>>>>>> master
 $db 	    = 'loja';
 
 $connect  = mysqli_connect($localhost, $username, $password, $db);

<<<<<<< HEAD
define('BASEPATH', 'http://10.51.47.69/loja/public_html/');
=======
define('BASEPATH', 'http://localhost/loja/public_html/'); // variavel global
>>>>>>> master
define('APP_PATH', '../app/');

function baseUrlPublic($url){

    return BASEPATH.$url;

}

function appPath($filename){

    return APP_PATH.$filename.".php";

}