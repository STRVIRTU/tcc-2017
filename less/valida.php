<?php 
	session_start();
	$nome = $_POST['usuario'];
	$senha = $_POST['senha'];
	if(($nome == "Vini") && ($senha == "123")){
		$_SESSION['user'] = $nome;
		setcookie("usu", $nome, time()+3600);
		header("Location:pagina-segura.php");
	}else{
		$_SESSION['error'] = "Login/Senha inválidos!";
		header("Location:login.php");
	}
?>