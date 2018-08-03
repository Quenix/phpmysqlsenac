<?php
$produto = $_POST['id_produto'];

array_push($_SESSION['carrinho'], $produto);

echo "<pre>";
print_r($_SESSION['carrinho']);
echo "</pre>";

echo 'Adicionado ao carrinho!';

//header("Location: ?page=home");
//exit();

?>