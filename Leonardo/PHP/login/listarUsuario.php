<?php 
include_once("header.php");
	$conexao = mysqli_connect('localhost', 'root', '', 'sistema_loja');
	$query = "SELECT * FROM usuario";

	$exec = mysqli_query($conexao, $query);
?>

<table class="table table-striped table-dark">
	<thead>
		<tr>
		  <th scope="col">ID</th>
		  <th scope="col">Nome</th>
		  <th scope="col">Sobrenome</th>
		  <th scope="col">Email</th>
		</tr>
	</thead>
	<tbody>
	<?php while($dados = mysqli_fetch_assoc($exec)): ?>

		<tr>
		  <th scope="row"> <?=$dados['id_usuario']?>	</th>
		  <td>			   <?=$dados['nome']	  ?>    </td>
		  <td>			   <?=$dados['sobrenome'] ?>	</td>
		  <td>			   <?=$dados['email']     ?>	</td>
		</tr>

	<?php endwhile ?>
	</tbody>

<?php 
include_once("footer.php");
?>