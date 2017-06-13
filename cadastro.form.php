<html>
 <head>
    <?php include_once('carregar_links.php'); ?>
    <title> Cadastro do Usuário</title>
  </head>
<body>
	<form method="POST" action="cadastro.php">
		<label>CGM:</label><input type="text" name="cgm" id="login"><br>
		<label>CURSO:</label><input type="text" name="curso" id="senha"><br>
		<label>TURMA:</label><input type="text" name="turma" id="turma1"><br>
		<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
	</form>
</body>
</html>	