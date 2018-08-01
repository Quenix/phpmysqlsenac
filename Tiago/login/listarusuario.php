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
		  <th scope="col">Açoes</th>
		  <th scope="col">Editar</th>
</tr>
	</thead>
	<tbody>
	<?php while($dados = mysqli_fetch_assoc($exec)): ?>

		<tr>
		  <th scope="row"> <?=$dados['idusuario']?>	</th>
		  <td>			   <?=$dados['nome']	  ?>    </td>
		  <td>			   <?=$dados['sobrenome'] ?>	</td>
		  <td>			   <?=$dados['email']     ?>	</td>
		  <td>
			
			<form method="POST" class="delete" action="db.removerUsuario.php">
			<button type="submit" class="btn btn-danger">
				<i class="btn btn-dark"></i>
				<input type="hidden" name='idusuario' value="<?=$dados['idusuario']?>" >
			</button>
			
		 
		  </td>
		   <td>
			
			<form method="POST" class="edit" action="db.editarusuario.php">
			<button type="submit" class="btn btn-danger">
				<i class="fas fa-pencil-alt"></i>
				<input type="hidden" name='idusuario' value="<?=$dados['idusuario']?>" >
			</button>
			
		 
		  </td>
		</tr>

	<?php endwhile ?>
	</tbody>

<?php 
include_once("footer.php");
?>