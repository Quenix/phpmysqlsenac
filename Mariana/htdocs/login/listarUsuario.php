<?php
	@include_once("validaUsuario.php");
	
	@include_once('dbListarUsuario.php');
	/*	
	EXEMPLO UM
	$i = 0;
	while ($row = mysqli_fetch_row($retorno)): 
		$idUsuario = $row['0'];
		$nomeCliente = $row['3'];
		$sobrenomeCliente = $row['3'];
		$emailCliente = $row['1'];
		$i++;

			
		echo "<p>Código = $idUsuario </br>
			     Nome = $nomeCliente </br>
				 Sobrenome = $sobrenomeCliente </br>
				 E-mail = $emailCliente</p>";
		
		
		if($i == 0) { 
			echo "Registros não encontrados!"; 
		}
		*/
		
	if(isset($_GET['excluirErro'])){	
		echo '<div class="alert alert-danger" id="idAlerta" role="alert">
							Usuário não pode ser excluído!
							</div>';
	}
	
	if(isset($_GET['excluirSucesso'])){	
		echo '<div class="alert alert-success" id="idAlerta" role="alert">
							Usuário excluido com sucesso!
							</div>';
	}
	?>
		<div class='container'>
			<table class="table table-hover">
				<thead>
					<tr>
					  <th scope="col">#</th>
					  <th scope="col">Nome</th>
					  <th scope="col">Sobrenome</th>
					  <th scope="col">E-mail</th>
					  <th scope="col">Ações</th>
					</tr>
				</thead>
				<tbody>

				<?php while ($dados = mysqli_fetch_assoc($exec)): ?>
					<tr>
					  <th scope="row"><?= $dados['id_usuario'] ?></th>
					  <td>            <?= $dados['nome'] ?></td>
					  <td>			  <?= $dados['sobrenome'] ?></td>
					  <td>			  <?= $dados['email'] ?></td>
					  <td>
						<form class="edit" method="POST" action="dbEditarUsuario.php">
							<input name="id_usuario" id="id_usuario" type="hidden"       value="<?= $dados['id_usuario'] ?>">
							<input name="nome"       id="nome"       type="hidden"       value="<?= $dados['nome'] ?>">
							<input name="sobrenome"  id="sobrenome"  type="hidden"       value="<?= $dados['sobrenome'] ?>">
						    <button type="submit" class="btn btn-primary">
							   <span class="fas fa-pencil-alt"></span>
						    </button>
						</form>
						
						<form class="delete" method="POST" action="dbRemoverUsuario.php">
						    <input name="id_usuario" id="id_usuario" type="hidden"       value="<?= $dados['id_usuario'] ?>">
						    <button type="submit" class="btn btn-danger">
							   <span class="fas fa-trash-alt"></span>
						    </button>
						</form></td>
					</tr>
				<?php endwhile ?>
				</tbody>
			</table>
		</div>



<?php
	include_once("footer.php");
?>