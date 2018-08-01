<?php

define("PATH",     $_SERVER['DOCUMENT_ROOT']);



$server     = 'localhost';
$username   = 'root';
$password   = '';
$db         = 'loja';

$connect = mysqli_connect($server, $username, $password, $db);

define('BASEPATH', 'http://localhost/loja/public_html/');
define('APP_PATH', '../app/');

function baseUrlPublic($url){

    return BASEPATH.$url;

}

function appPath($filename){

    return APP_PATH.$filename.".php";

}