<!DOCTYPE html>
<html>
<head>
	<title>Recuperar</title>
<?php
	session_start();
	include_once('pessoa.class.php');	
		if ($_SESSION['control'] == 1) {
			$pessoa = new Pessoa();
			$email= $_POST['email_rec'];
			$pessoa-> __set('email', $email);
			$pessoa->recuperar_senha();	
		}
?>
</head>
<body>
<div class="row">
	<div class="col-md-6 center">
		<h1 class="text-center">Recuperação de Senha</h1>
		<form class="form-rec" method="POST">
			<label>Email</label>
			<input type="text" class="form-control" name="email_rec"><br>
			<button type="submit" onclick="<?php $_SESSION['control'] = 1; ?>" class="btn btn-success" role="button">Rec. Senha</button>

</div>
</body>
</html>