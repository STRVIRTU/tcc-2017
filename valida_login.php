<?php
	include_once('conexao.class.php');
	session_start();
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	$sql = "select * from 'login' where 'usuario' = '$login' and 'senha' = '$senha'";
	$con = new Conexao();

  	$query = mysql_query($sql);
	if(mysql_num_rows ($query) > 0 )
	{
		$_SESSION['user'] = $login;
		$_SESSION['logado'] = true;
		$pagina = 'admin.php';
	}else{
		$_SESSION['logado'] = false;
		$pagina = 'login.php';
	}
?>