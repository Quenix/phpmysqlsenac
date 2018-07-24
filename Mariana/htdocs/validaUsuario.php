<?php
	// include, inclui no sistema, as vezes acontece de incluir mais de uma vezes
	// include_once, inclui somente uma vez. Faz uma verificação
	session_start();
	
	if (isset($_SESSION['nome'])){
		$nome = $_SESSION['nome'];
	}else{
		header("Location: index.php?login=1");
	}
	
	include_once('header.php');
?>	