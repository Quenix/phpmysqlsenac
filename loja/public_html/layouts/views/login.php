<?php   
    if (isset($_GET['retorno'])){
        if ($_GET['retorno'] == "senhaincorreta"){
          echo "Dados inválido - 0";	
        } 

        if ($_GET['retorno'] == "emailincorreta"){
            echo "Dados inválido - 1";	
          } 

          if ($_GET['retorno'] == "dadosinvalido"){
            echo "Dados inválido - 2";	
          } 
	}	
?>

<br/>

<div class = "container">
    <div class="form">
        <form action="?page=home" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu email" required autofocus>
                <small id="emailHelp" class="form-text text-muted">Nunca compartilhe seu email com outras pessoas!</small>
            </div>
            <br/>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="senha"  class="form-control" id="senha" placeholder="Senha" required autofocus>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Lembra-me</label>
            </div>
            <br/>
            <button type="submit" class="btn btn-primary">Conectar</button>
        </form>
    </div>

</div>