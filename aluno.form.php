<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="Página de Login">
	<meta name="author" content="Luan Rohde">
	<title>Login</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<link href="css/signin.css" rel="stylesheet">
	<link href="css/style.css" type="text/css "rel="stylesheet">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/bootstrap-datepicker.js"></script>

	<style>

	h1{
		font-size: 12pt;
	}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="center col-sm-5 col-md-5 col-lg-5">
				<form class="" method="POST" action="valida.php">
					<h1 class="form-signin-heading text-center">Cadastro de estagiário</h1>
					<label for="">Nome:</label>
					<input type="text" class="form-control"  name="nome" value="" required>
					<br/>

					<label for="">CPF:</label>
					<input type="text" id="cpf" class="form-control" name="cpf" value="">
					<br/>

					<label for="">RG:</label>
					<input type="text" class="form-control" name="rg" value="">
					<br/>

					<label for="">Telefone:</label>
					<input type="text" id="telefone" class="form-control" name="telefone" value="">
					<br/>

					<label for="">Código:</label>
					<input type="text" class="form-control"  name="idaluno" value="" readonly>
					<br/>

					<label for="">E-mail:</label>
					<input type="text" class="form-control" name="email" value="">
					<br/>
					<br/>
					<label for="">&nbsp;</label>
					<button type="submit" class="btn">Gravar</button>
					<label for="">&nbsp;</label>
					<button type="submit" class="btn">Alterar</button>
					<label for="">&nbsp;</label>
					<button type="submit" class="btn">Excluir</button>

					<label for="">&nbsp;</label>
					<button type="submit" class="btn">Consultar</button>
					<br/>
					<br/>

					<label for="">SELECIONE O CURSO:</label>
					<select name="curso" class="form-control chosen-select">
						<option value="Administração"  >Administração</option>
						<option value="Edificação">Edificação</option>
						<option value="Eletromecânica">Eletromecânica</option>
						<option value="Eletrônica">Eletrônica</option>
						<option value="Enfermagem">Enfermagem</option>
						<option value="Especialização em Enfermagem do Trabalho">Especialização em Enfermagem do Trabalho</option>
						<option value="Informática">Informática</option>
						<option value="Meio Ambiente">Meio Ambiente</option>
						<option value="Segurança do Trabalho">Segurança do Trabalho</option>

					</select>

				</form>
			</div>
			</html>
