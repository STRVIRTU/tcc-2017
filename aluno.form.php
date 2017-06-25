<html>
 <head>
    <?php include_once('carregar_links.php');
    include_once('curso.class.php');
	include_once('conexao.class.php'); ?>
    <title> Cadastro do Usuário</title>
  </head>
<body>
	
<div class="row">
<div class="col-sm-4 center">
	<h1 class="text-center">Cadastro de alunos</h1>
	<form class="center" method="POST" action="?pagina=validar_cadastro_aluno">
		<label>Nome:</label>
		<input class="form-control" type="text" name="nome_aluno" id="nome_aluno"><br>
		<label>Nascimento:</label>
		<input class="form-control" type="text" name="nascimento_aluno" id="nascimento_aluno"><br>
		<label>Rg:</label>
		<input class="form-control" type="text" name="rg_aluno" id="rg_aluno"><br>		
		<label>CGM:</label>
		<input class="form-control" type="text" name="cgm_aluno" id="cgm_aluno"><br>
		<label>Curso:</label>
		<select class="form-control" type="text" name="curso_aluno" id="curso_aluno">
			<option>
		<?php
				$c = new Curso();
				$dados = $c->listar();
					foreach ($dados as $linha) {
						echo "<option>".$linha['nome']."</option>";	
					}
		?>



			
			<!-- <option>Meio Ambiente</option>
			<option>Administração</option>
			<option>Eletrônica</option>
			<option>Eletromecânica</option>
			<option>Enfermagem</option>
			<option>Edificações</option> -->
		</select><br>
		<label>Turma:</label>
		<input class="form-control" type="text" name="turma_aluno" id="turma_aluno"><br>
		<label>Email:</label>
		<input class="form-control" type="text" name="email_aluno" id="email_aluno"><br>
		<label>Senha:</label>
		<input class="form-control" type="password" name="senha_aluno" id="senha_aluno"><br>	

		<input name="tipo" type="hidden" id="tipo" value="aluno" />

		<input class="btn btn-danger"type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
	</form>
</div>
</div>

</body>
</html>	

