<?php
	include_once('conexao.class.php');
	include_once('pessoa.class.php');
	session_start();

	$pessoa = new Pessoa();

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	if($_SERVER['request_method'] = 'POST'){

		$pessoa->__set('email', $login);
		$pessoa->__set('senha', $senha);
		if($pessoa->validar()){
			$_SESSION['logado'] = true;
			$_SESSION['user'] = $login;
			header("Location: ?pagina=admin");
		}else{
			echo '<script> alert("Login/senha inválidos!"); </script>';
			echo "<script>window.location.href='?pagina=login'</script>";
		}
	}
?>