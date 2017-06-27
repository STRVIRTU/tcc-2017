<?php include_once('menu_admin.php');?>
<div class="container-fluid" style="height: 100%;">
	<div class="row">
		<div class="col-sm-4 center">
				<h1 class="text-center">Cadastro de Cursos</h1>
					<form method="POST" action="?pagina=validar_cadastro_curso">
						<label>Informe o nome do curso:</label>
						<input class="form-control" type="text" name="nome_curso" id="curso"><br>
						<input class="btn btn-danger" type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
					</form>
		</div>
	</div>
</div>
 	<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>