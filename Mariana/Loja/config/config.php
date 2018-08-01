<?php

 $localhost = 'localhost';
 $username  = 'root';
 $password  = '';
 $db 	    = 'loja';
 
 $connect  = mysqli_connect($localhost, $username, $password, $db);

define('BASEPATH', 'http://localhost/loja/public_html/');
define('APP_PATH', '../app/');

function baseUrlPublic($url){

    return BASEPATH.$url;

}

function appPath($filename){

    return APP_PATH.$filename.".php";

}