<html>
 <head>
    <?php include_once('carregar_links.php'); ?>
    <title> Cadastro do Usuário</title>
  </head>
<body>
	<form method="POST" action="?pagina=validar_cadastro_funcionario">
		<label>Nome:</label><input type="text" name="nome_funcionario" id="nome_funcionario"><br>
		<label>Nascimento:</label><input type="text" name="nascimento_funcionario" id="nascimento_funcionario"><br>
		<label>Rg:</label><input type="text" name="rg_funcionario" id="rg_funcionario"><br>		
		<label>CPF:</label><input type="text" name="cpf_funcionario" id="cpf_funcionario"><br>
		<label>Cargo:</label><input type="text" name="cargo_funcionario" id="cargo_funcionario"><br>
		<label>Email:</label><input type="text" name="email_funcionario" id="email_funcionario"><br>
		<label>Senha:</label><input type="password" name="senha_funcionario" id="senha_funcionario"><br>

		<input name="tipo" type="hidden" id="tipo" value="funcionario" />

		<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
	</form>
</body>
</html>	