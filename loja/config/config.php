<?php

 //$localhost = 'localhost';
 $localhost = '10.51.47.69';
 $username  = 'root';
 $password  = 'root';
 $db 	    = 'loja';
 
 $connect  = mysqli_connect($localhost, $username, $password, $db);

define('BASEPATH', 'http://localhost/loja/public_html/'); // variavel global
define('APP_PATH', '../app/');

function baseUrlPublic($url){

    return BASEPATH.$url;

}

function appPath($filename){

    return APP_PATH.$filename.".php";

}