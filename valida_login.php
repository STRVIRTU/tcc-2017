<?php
	include_once('conexao.class.php');
	include_once('aluno.class.php');
	session_start();

	$aluno = new Aluno();

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	if($_SERVER['request_method'] = 'POST'){
		$aluno->__set('email', $login);
		$aluno->__set('senha', $senha);
		if($aluno->validar()){
			$_SESSION['logado'] = true;
			$_SESSION['user'] = $login;
			$pagina = 'admin.php';
		}else{
			echo 'Login/senha invalidos!';
		}
	}
?>