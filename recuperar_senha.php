<!DOCTYPE html>
<html>
<head>
	<title>Recuperar</title>
	<?php include_once('carregar_links.php'); ?>
</head>
<body>


<div class="row">
	<div class="col-md-6 center">
		<h1 class="text-center">Recuperação de Senha</h1>
		<form class="form-rec" method="POST">
			<label>Email</label>
			<input type="text" class="form-control" name="email-rec"><br>
			<a href="?pagina=recuperar_senha" class="btn btn-success" role="button">Rec. Senha</a>
		</form>

<?php
include_once('pessoa.class.php');
$pessoa = new Pessoa();

$pessoa->recuperar_senha();
 
?>
</div>
</body>
</html>