<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

$_SESSION['email'] = $email;
$_SESSION['nome'] = 'Leonardo Vasques';

if(1!=1){

    header('Location: ?page=login');

}