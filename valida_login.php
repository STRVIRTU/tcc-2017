<<<<<<< HEAD
<?php
	include_once('conexao.class.php');
	include_once('aluno.class.php');
	session_start();

	$aluno = new Aluno();

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	echo "antes do post";
	if($_SERVER['request_method'] = 'POST'){
	echo "depois do post";
		$aluno->__set('email', $login);
		$aluno->__set('senha', $senha);
		if($aluno->validar()){
			$_SESSION['logado'] = true;
			$_SESSION['user'] = $login;
			header("Location: ?pagina=admin");
		}else{
			echo 'Login/senha invalidos!';
		}
	}
=======
<?php
	include_once('conexao.class.php');
	include_once('aluno.class.php');
	session_start();

	$aluno = new Aluno();

	$login = $_POST['login'];
	$senha = $_POST['senha'];
	echo "antes do post";
	if($_SERVER['request_method'] = 'POST'){
	echo "depois do post";
		$aluno->__set('email', $login);
		$aluno->__set('senha', $senha);
		if($aluno->validar()){
			$_SESSION['logado'] = true;
			$_SESSION['user'] = $login;
			header("Location: ?pagina=admin");
		}else{
			echo 'Login/senha invalidos!';
		}
	}
>>>>>>> 32e2792c74e9564ca1bb0e54189613c7ee21e554
?>