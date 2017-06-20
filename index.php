<?php 
	// session_start();
	function __autoload($classe){
		if(file_exists('{$classe}.class.php')){
			include_once('{$classe}.class.php');
		}
	}

	if(!isset($_SESSION['logado'])){
		$pagina = "login.php";
		// header('Location:login.php');
	}

	date_default_timezone_set('America/Sao_Paulo');
?>

<html>
	<head>
		<?php include_once('carregar_links.php'); ?>
		<title> Meu Site </title>
	</head>
	<body>
		<?php
			/*include('cadastro.php');*/
			
			if(isset($_GET['pagina'])){
				switch ($_GET['pagina']) {
					case 'login': $pagina = 'login.php';break;
					case 'admin': $pagina = 'admin.php';break;
					case 'cadastro': $pagina = 'cadastro.form.php';break;
					case 'cadastro_aluno': $pagina = 'aluno.form.php';break;
					case 'cadastro_funcionario': $pagina = 'funcionario.form.php';break;
					case 'cadastro_curso': $pagina = 'curso.form.php';break;
					case 'cadastro_disciplina': $pagina = 'disciplina.form.php';break;
					case 'relatorio_aluno': $pagina = 'relatorioAluno.php';break;
					case 'relatorio_curso': $pagina = 'relatorioCurso.php';break;
					case 'relatorio_disciplina': $pagina = 'relatorioDisciplina.php';break;
					case 'relatorio_funcionario': $pagina = 'relatorioFuncionario.php';