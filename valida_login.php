<?php
session_start();
	include_once('conexao.class.php');
	include_once('pessoa.class.php');


	$pessoa = new Pessoa();

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	// 1->ADMIN
	// 2->ALUNO
	// 3->FUNCIONARIO

	if($_SERVER['request_method'] = 'POST'){

		$pessoa->__set('email', $login);
		$pessoa->__set('senha', $senha);
		if($pessoa->validar()){
			$_SESSION['logado'] = true;
				if ($_SESSION['tipo'] == 1) {
					header("Location: ?pagina=admin");
				}elseif ($_SESSION['tipo'] == 2) {
					header("Location: ?pagina=perfil_aluno");
				}elseif($_SESSION['tipo'] == 3){
					header("location: ?pagina=perfil_funcionario");
				}else{
					echo '<script> alert("Login/senha inválidos!"); </script>';
					echo "<script>window.location.href='?pagina=login'</script>";
				}
		}else{
			echo '<script> alert("Login/senha inválidos!"); </script>';
			echo "<script>window.location.href='?pagina=login'</script>";
		}
	}
?>