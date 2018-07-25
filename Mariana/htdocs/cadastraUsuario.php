<?php
	include_once("validaUsuario.php");
?>

	<div class="content">
		 
		 <?php
			if(isset($_GET['cadastro'])){
				switch($_GET['cadastro']){
					case 1:
						echo '<div class="alert alert-danger" id="idAlerta" role="alert">
							As senhas não são iguais!
							</div>';
					break;
						
					case 2:
						echo '<div class="alert alert-danger" id="idAlerta" role="alert">
							Alguns dos campos obrigatórios não foram preenchidos!
							</div>';
					break;
						
					case 3:
						echo '<div class="alert alert-danger" id="idAlerta" role="alert">
							Alguns dos campos obrigatórios estão vazios!
							</div>';
					break;
						
					case 0:
						echo '<div class="alert alert-success" id="idAlerta" role="alert">
							Usuário cadastrado com Sucesso!
							</div>';
					break;
					
					default:
					break;
				}
			}
		 ?>
	</div>

	<div class="container">
		<div class="panel panel-default" >
			<div class="panel-heading">
				<div class="panel-title text-center">Cadastre o seu Usuário</div>
			</div>   
	
			<div class="panel-body" >
				<form method="POST" action="dbCadastrarUsuario.php">
				  <div class="form-group row">
					  <div class="input-group">
						<div class="input-group-addon">
						  <i class="fa fa-user"></i>
						</div> 
						<input id="nomeUsuario" name="nomeUsuario" placeholder="Nome" type="text" required="required" class="form-control here" autofocus>
					  </div>
				  </div>
				  <div class="form-group row">
					  <div class="input-group">
						<div class="input-group-addon">
						  <i class="fa fa-user"></i>
						</div> 
						<input id="sobrenomeUsuario" name="sobrenomeUsuario" placeholder="Sobrenome" type="text" required="required" class="form-control here">
					  </div>
				  </div>
				  <div class="form-group row">
					  <div class="input-group">
						<div class="input-group-addon">
						  <i class="fa fa-at"></i>
						</div> 
						<input id="emailUsuario" name="emailUsuario" placeholder="E-mail" type="email" required="required" class="form-control here">
					  </div>
				  </div>
				  <div class="form-group row">
					  <div class="input-group">
						<div class="input-group-addon">
						  <i class="fa fa-lock"></i>
						</div> 
						<input id="password" name="senhaUsuario" placeholder="Senha" type="password" required="required" class="form-control here">
					  </div>
				  </div>
				  <div class="form-group row">
					  <div class="input-group">
						<div class="input-group-addon">
						  <i class="fa fa-lock"></i>
						</div> 
						<input id="password" name="senhaConfirmacao" placeholder="Confirme sua Senha" type="password" required="required" class="form-control here">
					  </div>
				  </div> 
				  <div class="form-group row">
					<div class="offset-2 col-10">
					  <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
					</div>
				  </div>
				</form>
			</div>
		</div>
	</div>
	
	
<?php
	include_once("footer.php");
?>
	