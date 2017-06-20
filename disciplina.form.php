<html>
 <head>
    <?php include_once('carregar_links.php'); ?>
    <title> Cadastro de Cursos</title>
  </head>
<body>
	<form method="POST" action="?pagina=validar_cadastro_disciplina">
		<label>Disciplina:</label><input type="text" name="nome_disciplina" id="nome_disciplina"><br>
		<label>Professor:</label><input type="text" name="prof_disciplina" id="prof_disciplina"><br>
		<label>Curso:</label><input type="text" name="curso_disciplina" id="curso_disciplina"><br>
		<label>Carga Horaria:</label><input type="text" name="carga_disciplina" id="carga_disciplina"><br>
		<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
	</form>
</body>
</html>	