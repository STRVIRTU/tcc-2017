<!DOCTYPE html>
<html>
<head>
	<title>Recuperar</title>
	<?php include_once('carregar_links.php'); ?>
</head>
<body>

<?php
include_once('pessoa.class.php');
$pessoa = new Pessoa();

$pessoa->recuperar_senha();

?>
<p>Sucesso</p>
</body>
</html>