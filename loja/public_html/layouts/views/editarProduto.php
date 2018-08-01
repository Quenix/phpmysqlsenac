<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id_produto = $_POST['id_produto'];
    $categoria = $_POST['categoria'];
    $nome_produto = $_POST['nome_produto'];
    $preco_produto = $_POST['preco_produto'];
    $peso_produto = $_POST['peso_produto'];
    $detalhes_produto = $_POST['detalhes_produto'];
    $foto_produto = $_POST['foto_produto'];

    include(appPath('produto/editarProduto'));
    header("Location: ?page=produtos");
    exit();
}else{

    if(!isset($_SESSION['email'])){

        header("Location: ?page=login");

    }

}