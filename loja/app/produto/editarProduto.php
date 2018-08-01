<?php

$query = "UPDATE produto SET nome_produto='$nome_produto', 
preco_produto='$preco_produto', peso_produto='$peso_produto', detalhes_produto='$detalhes_produto', 
categoria='$categoria', foto_produto='$foto_produto' 
WHERE id_produto='$id_produto';";

mysqli_query($connect, $query);

header("Location: ?page=produtos");
exit();