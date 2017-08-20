<?php 

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
					case 'perfil_aluno': $pagina = "perfil_aluno.php"; break;
					case 'perfil_funcionario': $pagina = "perfil_funcionario.php"; break;
					case 'cadastro_aluno': $pagina = 'aluno.form.php';break;
					case 'cadastro_funcionario': $pagina = 'funcionario.form.php';break;
					case 'cadastro_curso': $pagina = 'curso.form.php';break;
					case 'cadastro_disciplina': $pagina = 'disciplina.form.php';break;
					case 'relatorio_aluno': $pagina = 'relatorioAluno.php';break;
					case 'relatorio_curso': $pagina = 'relatorioCurso.php';break;
					case 'relatorio_disciplina': $pagina = 'relatorioDisciplina.php';break;
					case 'relatorio_funcionario': $pagina = 'relatorioFuncionario.php';break;
					case 'recuperar_senha': $pagina = "recuperar_senha.php"; break;
					case 'validar_login': $pagina = "valida_login.php"; break;
					case 'validar_cadastro_aluno': $pagina = "validar_cadastro_aluno.php"; break;
					case 'validar_cadastro_curso': $pagina = "validar_cadastro_curso.php"; break;
					case 'validar_cadastro_disciplina': $pagina = "validar_cadastro_disciplina.php"; break;
					case 'validar_cadastro_funcionario': $pagina = "validar_cadastro_funcionario.php"; break;
					case 'acao_admin': $pagina = "acao_admin.php"; break;
					default: $pagina = $_GET['pagina'];break;
				}	
			}

			if(file_exists($pagina)){
				include_once($pagina);
			}else{
				echo '<h1 class="erro"> A pagina não existe. </h1>';
			}
			include_once('rodape.php');
		?>
		 <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>