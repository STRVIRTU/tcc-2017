<?php include_once('menu_admin.php');?>
<div class="row">
<div class="col-sm-4 center">
	<h1 class="text-center">Cadastro de funcionários</h1>
	<form class="center"method="POST" action="?pagina=validar_cadastro_funcionario">
		<label>Nome:</label>
		<input class="form-control" type="text" name="nome_funcionario" id="nome_funcionario"><br>
		<label>Nascimento:</label>
		<input class="form-control" type="text" name="nascimento_funcionario" id="nascimento_funcionario"><br>
		<label>Rg:</label>
		<input class="form-control" type="text" name="rg_funcionario" id="rg_funcionario"><br>		
		<label>CPF:</label>
		<input class="form-control" type="text" name="cpf_funcionario" id="cpf_funcionario"><br>
		<label>Cargo:</label>
		<input class="form-control" type="text" name="cargo_funcionario" id="cargo_funcionario"><br>
		<label>Email:</label>
		<input class="form-control" type="text" name="email_funcionario" id="email_funcionario"><br>
		<label>Senha:</label>
		<input  class="form-control"type="password" name="senha_funcionario" id="senha_funcionario"><br>

		<input name="tipo" type="hidden" id="tipo" value="funcionario"/>

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
