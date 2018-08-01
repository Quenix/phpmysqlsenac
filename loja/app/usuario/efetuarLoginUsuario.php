<?php

$email = $_POST['email'];
$senha = $_POST['senha'];

$_SESSION['email'] = $email;
$_SESSION['nome'] =  'Tiago Rocha';

if(1!=1){

    header('Location: ?page=login');

}