<?php

define("PATH",     $_SERVER['DOCUMENT_ROOT']);



$server     = '10.51.47.69';
$username   = 'root';
$password   = 'root';
$db         = 'loja';

$connect = mysqli_connect($server, $username, $password, $db);

define('BASEPATH', 'http://localhost/loja2/public_html/');
define('APP_PATH', '../app/');

function baseUrlPublic($url){

    return BASEPATH.$url;

}

function appPath($filename){

    return APP_PATH.$filename.".php";

}