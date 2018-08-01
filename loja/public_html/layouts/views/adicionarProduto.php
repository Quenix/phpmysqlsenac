<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $categoria = $_POST['categoria'];
    $nome_produto = $_POST['nome_produto'];
    $preco_produto = $_POST['preco_produto'];
    $peso_produto = $_POST['peso_produto'];
    $detalhes_produto = $_POST['detalhes_produto'];
    $foto_produto = $_FILES['foto_produto'];

    include(appPath('produto/adicionarProduto'));

}else{

    if(!isset($_SESSION['email'])){

        header("Location: ?page=login");

    }

}