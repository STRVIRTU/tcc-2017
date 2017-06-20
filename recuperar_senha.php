<!DOCTYPE html>
<html>
<head>
	<title>Recuperar</title>
<?php
	session_start();
	include_once('pessoa.class.php');
			
		if ($_SESSION['control'] == 1) {
			$pessoa = new Pessoa();
			$pessoa->recuperar_senha();
			$pessoa->__set('email', $_POST['email_rec']);
			
		}
?>
</head>
<body>


<div class="row">
	<div class="col-md-6 center">
		<h1 class="text-center">Recuperação de Senha</h1>
		<form class="form-rec" method="POST">
			<label>Email</label>
			<input type="text" class="form-control" name="email-rec"><br>
			<button type="submit" onclick="<?php $_SESSION['control'] = 1; ?>" class="btn btn-success" role="button">Rec. Senha</button>

</div>
</body>
</html>