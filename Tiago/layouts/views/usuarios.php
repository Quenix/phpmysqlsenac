<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    include(appPath('usuario/efetuarLoginUsuario'));

}else{

    if(!isset($_SESSION['email'])){

        header("Location: ?page=login");

    }

}

include('layouts/views/navbar.php');

include(appPath('usuario/listarUsuario'));

?>
<div class="container">
    <div class="row listagem ">

        <h1 class="col-10">Listagem de Usuários:</h1>
        <button id="adicionar-usuario" class="col-2 btn btn-success">
            <i class="fas fa-user-plus"></i> Adicionar usuário


        </button>

    </div>


    <div class="row">
        <div class="col-12">

            <table class="table table-striped table-light">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Del</th>
                </tr>
                </thead>
                <tbody>
                <?php while($dados = mysqli_fetch_assoc($exec)): ?>

                    <tr>
                        <th scope="row">   <?=$dados['idusuario']?>		</th>
                        <td>			   <?=$dados['nome']	  ?>    	</td>
                        <td>			   <?=$dados['sobrenome'] ?>		</td>
                        <td>			   <?=$dados['email']     ?>		</td>
                        <td>

                            <form class="edit" >
                                <input type="hidden" name="idusuario" value="<?=$dados['idusuario']?>">
                                <input type="hidden" name="nome" value="<?=$dados['nome']?>">
                                <input type="hidden" name="sobrenome" value="<?=$dados['sobrenome']?>">
                                <button class="btn btn-primary">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                            </form>

                        </td>
                        <td>
                            <form class="delete" method="POST" action="?page=removerUsuario">
                                <input type="hidden" name="idusuario" value="<?=$dados['idusuario']?>">
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