<?php 
	include_once ('header.php');	
?>
	
	<div class="content">
		 
		 <?php
		 if (isset ($_GET['login'])){
			 //switch ($_GET['login']){
				//case 
				 
			echo '<div class="alert alert-danger" id="idAlerta" role="alert">
					Usuário ou senha Inválidos!
				  </div>';
		 }
		 ?>
	</div>
		<div class="container">    
				
			<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3"> 
				
				<div class="row">                
					<div class="iconmelon">
					  <svg viewBox="0 0 32 32">
						<g filter="">
						  <use xlink:href="#git"></use>
						</g>
					  </svg>
					</div>
				</div>
				
				<div class="panel panel-default" >
					<div class="panel-heading">
						<div class="panel-title text-center">Faça seu Login</div>
					</div>     

					<div class="panel-body">

						<form name="form" id="form" class="form-horizontal" enctype="multipart/form-data" method="POST" action="login.php">
						   
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="user" type="email" class="form-control" name="emailUsuario" value="" placeholder="Email">                                        
							</div>

							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="password" type="password" class="form-control" name="senhaUsuario" placeholder="Senha">
							</div>                                                                  

							<div class="form-group">
								<!-- Button -->
								<div class="col-sm-12 controls">
									<button type="submit" href="#" class="btn btn-primary pull-left"><i class="glyphicon glyphicon-user"></i> Cadastre-se</button>
									<button type="submit" href="#" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-log-in"></i> Log in</button>                          
								</div>
							</div>

						</form>     

					</div>                     
				</div>  
			</div>
		</div>
				


<?php
	include_once('svgIndex.php');
	include ('footer.php');
?>
	