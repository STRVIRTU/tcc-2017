<html>
 <head>
    <?php include_once('carregar_links.php'); ?>
    <title> Cadastro do Usuário</title>
  </head>
<body>
	<form method="POST" action="cadastro.php">
		<label>Nome:</label><input type="text" name="nome" id="nome_aluno"><br>
		<label>Rg:</label><input type="text" name="rg" id="rg_aluno"><br>
		<label>Nascimento:</label><input type="text" name="nascimento" id="nascimento_aluno"><br>
		<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
	</form>
</body>
</html>	