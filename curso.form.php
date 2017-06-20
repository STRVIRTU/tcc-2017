<html>
 <head>
    <?php include_once('carregar_links.php'); ?>
    <title> Cadastro de Cursos</title>
  </head>
<body>
	<form method="POST" action="?pagina=validar_cadastro_curso">
		<label>Informe o nome do curso:</label><input type="text" name="nome_curso" id="curso"><br>
		<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
	</form>
</body>
</html>	