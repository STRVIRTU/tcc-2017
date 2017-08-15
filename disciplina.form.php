<?php include_once('sidebar_admin.php');?>
<div class="row">
	<div class="col-sm-4 center">
			<h1 class="text-center">Cadastro de disciplinas</h1>
			<form method="POST" action="?pagina=validar_cadastro_disciplina">
				<label>Disciplina:</label>
				<input class="form-control" type="text" name="nome_disciplina" id="nome_disciplina"><br>
				<label>Professor:</label>
				<input class="form-control" type="text" name="prof_disciplina" id="prof_disciplina"><br>
				<label>Curso:</label>
				<input class="form-control" type="text" name="curso_disciplina" id="curso_disciplina"><br>
				<label>Carga Horaria:</label>
				<input class="form-control" type="text" name="carga_disciplina" id="carga_disciplina"><br>
				<input class="btn btn-danger" type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
			</form>
	</div>
</div>
 <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>