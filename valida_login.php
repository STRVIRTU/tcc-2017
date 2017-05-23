<?php 
	session_start();
	$nome = $_POST['usuario'];
	$senha = $_POST['senha'];
	if(($nome == "Vini") && ($senha == "123")){
		$_SESSION['user'] = $nome;
		$_SESSION['logado'] = true;
		setcookie("usu", $nome, time()+3600);
		header("Location:pagina-segura.php");
	}else{
		$_SESSION['error'] = "Login/Senha inválidos!";
		$_SESSION['logado'] = false;
		header("Location:login.php");
	}
?>