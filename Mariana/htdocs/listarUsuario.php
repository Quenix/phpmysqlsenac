<?php
	include_once("validaUsuario.php");
?>

<?php
	@include_once('conexao.php');

	$query   = "SELECT * FROM usuario";
	$exec = mysqli_query($conexao, $query) or die ('Não foi possivel retornar a consulta');
	
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
		?>
		<div class='container'>
			<table class="table table-hover">
				<thead>
					<tr>
					  <th scope="col">#</th>
					  <th scope="col">Nome</th>
					  <th scope="col">Sobrenome</th>
					  <th scope="col">E-mail</th>
					</tr>
				</thead>
				<tbody>

				<?php while ($dados = mysqli_fetch_assoc($exec)): ?>
					<tr>
					  <th scope="row"><?= $dados['id_usuario'] ?></th>
					  <td><?= $dados['nome'] ?></td>
					  <td><?= $dados['sobrenome'] ?></td>
					  <td><?= $dados['email'] ?></td>
					</tr>
				<?php endwhile ?>
				</tbody>
			</table>
		</div>



<?php
	include_once("footer.php");
?>