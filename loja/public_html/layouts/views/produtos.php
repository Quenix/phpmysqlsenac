<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    include(appPath('usuario/efetuarLoginUsuario'));

}else{

    if(!isset($_SESSION['email'])){

        header("Location: ?page=login");

    }

}

include('layouts/views/navbar.php');

<<<<<<< HEAD

?>



<h1>Listagem de Produtos:</h1>
=======
include(appPath('produto/listarProduto'));

?>
<div class="container">
    <div class="row listagem ">

        <h1 class="col-10">Listagem de Produtos</h1>
        <button id="adicionar-produto" class="col-2 btn btn-success">
            <i class="fas fa-user-plus"></i> Adicionar Produtos


        </button>

    </div>


    <div class="row">
        <div class="col-12">

            <table class="table table-striped table-light">
                <thead>
                <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Preço</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Del</th>
                </tr>
                </thead>
                <tbody>
                <?php while($dados = mysqli_fetch_assoc($exec)): ?>

                    <tr>
                        <th scope="row">  <img src=" <?=$dados['foto_produto']?>" class="img-thumbnail" style="width:20%" ></img>		</th>
                        <td>			   <?=$dados['id_produto']	  ?>    	</td>
                        <td>			   <?=$dados['nome_produto'] ?>		</td>
                        <td>			   <?=$dados['preco_produto']     ?>		</td>
                        <td>			   <?=$dados['peso_produto']     ?>		</td>
                        <td>			   <?=$dados['categoria']	  ?>    	</td>
                        <td>

                            <form class="edit" >
                                <input type="hidden" name="id_produto" value="<?=$dados['id_produto']?>">
                                <input type="hidden" name="categoria" value="<?=$dados['categoria']?>">
                                <input type="hidden" name="nome_produto" value="<?=$dados['nome_produto']?>">
                                <input type="hidden" name="preco_produto" value="<?=$dados['preco_produto']?>">
                                <input type="hidden" name="peso_produto" value="<?=$dados['peso_produto']?>">
                                <input type="hidden" name="detalhes_produto" value="<?=$dados['detalhes_produto']?>">
                                <input type="hidden" name="foto_produto" value="<?=$dados['foto_produto']?>">
                                
                                <button class="btn btn-primary">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                            </form>

                        </td>
                        <td>
                            <form class="delete" method="POST" action="?page=removerProduto">
                                <input type="hidden" name="id_produto" value="<?=$dados['id_produto']?>">
                                <button class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                <?php endwhile ?>
                </tbody>
            </table>


        </div>

    </div>

</div>
>>>>>>> master
