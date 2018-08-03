
<?php foreach($_SESSION['carrinho'] as $list):?>
    
<?php
    $query = "SELECT * FROM produto WHERE id_produto = $list";
    $exec = mysqli_query($connect, $query);
    $data = mysqli_fetch_assoc($exec);
?>
<ul>
    <li><?= $list;?> - <?= $data['nome_produto'];?></li>
</ul>

<?php endforeach; ?>