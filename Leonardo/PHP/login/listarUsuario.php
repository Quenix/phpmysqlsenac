<?php 
	include_once("header.php");
	include_once("dbListarUsuario.php");
?>

<table class="table table-striped table-dark">
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
		  <th scope="row"> <?=$dados['id_usuario']?>		</th>
		  <td>			   <?=$dados['nome']	  ?>    	</td>
		  <td>			   <?=$dados['sobrenome'] ?>		</td>
		  <td>			   <?=$dados['email']     ?>		</td>
		  <td>
			
			<form class="edit" method="POST" action="dbEditarUsuario.php">
				<input type="hidden" name="id_usuario" value="<?=$dados['id_usuario']?>">
				<button class="btn btn-primary">  
					<i class="fas fa-pencil-alt"></i>
				</button>
			</form>
			
		  </td>
		  <td>
			<form class="delete" method="POST" action="dbRemoverUsuario.php">
				<input type="hidden" name="id_usuario" value="<?=$dados['id_usuario']?>">
				<button class="btn btn-danger">  
					<i class="far fa-trash-alt"></i>
				</button>
			</form>
		  </td>
		</tr>

	<?php endwhile ?>
	</tbody>

<?php 
include_once("footer.php");
?>