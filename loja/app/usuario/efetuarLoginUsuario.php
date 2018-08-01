<?php

$email_digitado = trim($_POST['email']);
$senha_digitado = trim($_POST['senha']);
$senha_dig_md5  = md5($senha_digitado);

// se não esta setado o email e a senha
if (!isset($_POST['email']) && !isset($_POST['senha'])) {
    header("Location: ?page=login&retorno=dadosinvalido");
  exit();
  }
  
  // se veio sem nada
  if (empty($_POST['email'])){
      echo "Informações de email e senha não preenchido";
  }

/******  INICIA A CONEXAO COM O BANCO PARA VERIFICAR SE O EMAIL/SENHA ESTA VALIDADO  ******** */
//$conexao = @mysqli_connect('localhost','root','','loja') or die('Problema na conexao com om banco'); 
$query   = "SELECT * FROM usuario WHERE email='$email_digitado' and senha='$senha_dig_md5'";
$retorno = mysqli_query($connect, $query) or die ('Erro ao validar email/senha no banco de dados. Entre em contato com o suporte tecnico');
$dados   = mysqli_fetch_assoc($retorno);

//retorno do select. Se achar, será criado a sessão
if ($dados != null){    
    // criação das session
    $_SESSION['nome']       = $dados['nome'];
    $_SESSION['sobrenome']  = $dados['sobrenome'];
    $_SESSION['email']      = $dados['email'];

}else{
    header("Location: ?page=login&retorno=senhaincorreta");
    exit();
}


if(1!=1){

    header('Location: ?page=login');

}