<html>
 <head>
    <?php include_once('carregar_links.php'); ?>
    <title>Cadastro do Usuário</title>
  </head>
<body>
<div class="row">
<div class="col-sm-4 center">
	<h1 class="text-center">Cadastro de alunos</h1>
	<form class="center" method="POST" action="?pagina=validar_cadastro_aluno">
		<label>Nome:</label>
		<input class="form-control" type="text" name="nome_aluno" id="nome_aluno"><br>
		<label>Nascimento:</label>
		<input class="form-control" type="text" name="nascimento_aluno" id="nascimento_aluno"><br>
		<label>Rg:</label>
		<input class="form-control" type="text" name="rg_aluno" id="rg_aluno"><br>		
		<label>CGM:</label>
		<input class="form-control" type="text" name="cgm_aluno" id="cgm_aluno"><br>
		<label>Curso:</label>
		<input class="form-control" type="text" name="curso_aluno" id="curso_aluno"><br>
		<label>Turma:</label>
		<input class="form-control" type="text" name="turma_aluno" id="turma_aluno"><br>
		<label>Email:</label>
		<input class="form-control"type="text" name="email_