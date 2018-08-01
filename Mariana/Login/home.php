<?php
	include_once('validaUsuario.php');
?>	
	<div class="container">
		<h1> Bem vindo(a),<?= $nome ?> </h1>;
	</div>
	<div class="container">
		<div class="col-xs-3">
			<form method="POST" action="cadastraUsuario.php" class="form-inline">
				<div class="input-group">
					<button type="submit" class="btn btn-danger">
			<i class="fas fa-sign-out-alt"></i>Cadastrar Usuario</button>
				</div>
			</form>
		</div>
		<div class="col-xs-3">
			<form method="POST" action="cadastraUsuario.php" class="form-inline">
				<div class="input-group">
					<button type="submit" class="btn btn-primary">
					<i class="fas fa-sign-out-alt"></i>Listar Usuario</button>
				</div>
			</form>
		</div>
		<div class="col-xs-3">
			<form method="POST" action="cadastraUsuario.php" class="form-inline">
				<div class="input-group">
					<button type="submit" class="btn btn-danger">
					<i class="fas fa-sign-out-alt"></i>Logout</button>
				</div>
			</form>
		</div>
	</div>
	
	
<?php	
	include('footer.php')
?>