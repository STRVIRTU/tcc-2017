<div class="container-fluid display-table">
	<div class="row display-table-row">
<!-- Side menu -->
		<div class="col-md-2 col-sm-1 hidden-xs display-table-cell valign-top side-menu">
			<?php include_once('sidebar_admin.php'); ?>
		</div>
<!-- Main content -->
		<div class="col-md-10 col-sm-11 display-table-cell valign-top">
			<div class="col-md-3">
			</div>
			<div class="col-md-6">
				<h1 class="text-center">Cadastro de disciplinas</h1>
				<form method="POST" action="?pagina=validar_cadastro_disciplina">
					<label>Disciplina:</label>
					<input class="form-control" type="text" name="nome_disciplina" id="nome_disciplina"><br>
					<label>Curso</label>
					<select class="form-control" type="text" name="curso_disciplina" id="curso_disciplina" value="">
								<?php
								include_once('curso.class.php');
										$c = new Curso();
										$dados = $c->listar();
											foreach ($dados as $linha) {
												echo "<option>".$linha['nome']."</option>";	
											}
								?>
							</select><br>
					<input class="btn btn-danger" type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
				</form>
			</div>
			<div class="col-md-3">
			</div>
			
		</div>   
	</div>
</div>
<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
<script src="bootstrap/js/jquery.min.js"></script>
<!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
