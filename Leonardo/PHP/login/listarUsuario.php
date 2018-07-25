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
		  <th scope="col">Ações</th>
		</tr>
	</thead>
	<tbody>
	<?php while($dados = mysqli_fetch_assoc($exec)): ?>

		<tr>
		  <th scope="row"> <?=$dados['id_usuario']?>		</th>
		  <td>			   <?=$dados['nome']	  ?>    	</td>
		  <td>			   <?=$dados['sobrenome'] ?>		</td>
		  <td>			   <?=$dados['email']     ?>		</td>
		  <td>			   <i class="far fa-trash-alt"></i>	</td>
		</tr>

	<?php endwhile ?>
	</tbody>

<?php 
include_once("footer.php");
?>