

<html>
<head>
	<title>Cadastro</title>
		<?php include_once('carregar_links.php'); ?>
</head>
<body>

		<div class="row">
			<div class="center col-sm-5 col-md-5 col-lg-5">
				<form class="" method="POST" >
					<h1 class="form-signin-heading text-center">Cadastro de estagiário</h1>
					<label for="">Nome:</label>
					<input type="text" class="form-control"  name="turma" value="" >
					<br/>

					<label for="">CPF:</label>
					<input type="text" id="cpf" class="form-control" name="cgm" value="">
					<br/>

					<label for="">RG:</label>
					<input type="text" class="form-control" name="curso" value="">
					<br/>

					<label for="">Telefone:</label>
					<input type="text" id="telefone" class="form-control" name="telefone" value="">
					<br/>

					<label for="">Código:</label>
					<input type="text" class="form-control"  name="idaluno" value="" readonly>
					<br/>

					<label for="">E-mail:</label>
					<input type="text" class="form-control" name="email" value="">
					<br/>
					<br/>
					<label for="">&nbsp;</label>
					<button type="submit" class="btn">Gravar</button>
					<label for="">&nbsp;</label>
					<button type="submit" class="btn">Alterar</button>
					<label for="">&nbsp;</label>
					<button type="submit" class="btn">Excluir</button>

					<label for="">&nbsp;</label>
					<button type="submit" class="btn">Consultar</button>
					<br/>
					<br/>

					<label for="">SELECIONE O CURSO:</label>
					<select name="" class="form-control chosen-select">
						<option value="Administração"  >Administração</option>
						<option value="Edificação">Edificação</option>
						<option value="Eletromecânica">Eletromecânica</option>
						<option value="Eletrônica">Eletrônica</option>
						<option value="Enfermagem">Enfermagem</option>
						<option value="Especialização em Enfermagem do Trabalho">Especialização em Enfermagem do Trabalho</option>
						<option value="Informática">Informática</option>
						<option value="Meio Ambiente">Meio Ambiente</option>
						<option value="Segurança do Trabalho">Segurança do Trabalho</option>

					</select>

				</form>
			</div>
		</div>
	<?php
		include_once('aluno.class.php');
		/*
		$nome = $_POST['nome'];
		$rg = $_POST['rg'];
		$nascimento = $_POST['nascimento'];
		$email = $_POST['email'];
		$cgm = $_POST['cgm'];
		$curso = $_POST['curso'];
		$turma = $_POST['turma'];
		$turma = $_POST['turma'];
	*/

		$aluno = new Aluno();
	
		$aluno->__set('cgm', $_POST['cgm']);
		$aluno->__set('curso', $_POST['curso']);
		$aluno->__set('turma', $_POST['turma']);
		$aluno->gravar();

	?>
	</body>
</html>
