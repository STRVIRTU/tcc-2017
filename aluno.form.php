<html>
 <head>
    <?php include_once('carregar_links.php'); ?>
    <title> Cadastro do Usuário</title>
  </head>
<body>
	<form method="POST" action="validar_cadastro_aluno.php">
		<label>Nome:</label><input type="text" name="nome_aluno" id="nome_aluno"><br>
		<label>Nascimento:</label><input type="text" name="nascimento_aluno" id="nascimento_aluno"><br>
		<label>Rg:</label><input type="text" name="rg_aluno" id="rg_aluno"><br>		
		<label>CGM:</label><input type="text" name="cgm_aluno" id="cgm_aluno"><br>
		<label>Curso:</label><input type="text" name="curso_aluno" id="curso_aluno"><br>
		<label>Turma:</label><input type="text" name="turma_aluno" id="turma_aluno"><br>
		<label>Email:</label><input type="text" name="email_aluno" id="email_aluno"><br>
		<label>Senha:</label><input type="password" name="senha_aluno" id="senha_aluno"><br>	

		<input name="tipo" type="hidden" id="tipo" value="aluno" />

		<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
	</form>
</body>
</html>	

