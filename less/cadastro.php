

<html>
<head>
	<title>Cadastro</title>
		<?php include_once('carregar_links.php'); ?>
</head>
<body class="cadastro">
	<div class="container">
		<div class="row">
			<a href="#" class="thumbnail">
				<img class="img-responsive" src="img/logo.jpg" alt="Ceep">
			</a>
		</div>
		<div class="row">
			<div class="col-md-4">
				<img src="img/aluno.png" class="img-rounded thumbnail">
				<label  for="exampleInputFile">Selecione uma imagem</label>
				<input type="file" id="exampleInputFile">
			</div>
			<div class="col-md-6">

				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<br />

					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a href="#aluno" class="nav-link active" role="tab" data-toggle="tab">Aluno</a>
						</li>

						<li class="nav-item">
							<a href="#professor" class="nav-link" role="tab" data-toggle="tab">Professor</a>
						</li>
						

					</ul>
					<div class="tab-content">
						<div role="tablepanel" class="tab-pane fade in active" id="aluno">


							<!--ALUNO-->
							<form method="POST">
								<label>Nome: </label>
								<input type="text" name="nome" class="form-control" required autofocus><br>
								<label>Turma: </label>
								<input type="text" name="turma" class="form-control" required autofocus><br>
								<div class="row">
									<div class="col-sm-6 pull-left">
										<label for="cgm">CGM:</label>
										<input type="text" class="form-control" id="cgm" name="cgm" placeholder="448807959">
										<label id="input" for="course">Curso</label>
										<select name="curso" class="form-control" id="curso">
											<option value="informatica">Informática</option>
											<option value="administração">Administração</option>
											<option value="meioambiente">Meio Ambiente</option>
										</select>
									</div>
									<div class="col-sm-6 pull-right">
										<label for="rg">RG:</label>
										<input type="text" class="form-control" id="rg" name="rg" placeholder="13.195.492-1">
										<label for="nascimento">Data de Nascimento:</label>
										<input type="text" class="form-control pull-right" id="nascimento" name="nascimento" placeholder="05/03/1999">
									</div>
								</div><br>
								<label>Email:</label>
								<div class="input-group">
									<input type="text" class="form-control" name="email" placeholder="luan.rohde" aria-describedby="basic-addon2">
									<span class="input-group-addon" id="basic-addon2">@ceepcascavel.com.br</span>
								</div><br>
								<label>Senha:</label>
								<input type="password" name="senha" class="form-control" required><br> 
								<label>Tipo</label><br>
								<select name="tipo" class="form-control" id="sel1">
									<option value="cliente">Aluno</option>
									<option value="funcionario">Funcionário</option>
								</select><br>
								<button type="submit" class="btn">Cadastrar</button>
							</form>
						</div>
						<div role="tablepanel" class="tab-pane fade in" id="professor">
							

							<!--PROFESSOR-->
							<form method="POST">
								<label>Nome: </label>
								<input type="text" name="nome" class="form-control" required autofocus>
								<label id="input" for="rg">RG:</label>
								<input type="text" class="form-control" id="rg" placeholder="13.195.492-1">
								<label for="old">Data de Nascimento:</label>
								<input type="text" class="form-control" id="old" placeholder="05/03/1999">
								<br>
								<label>Email:</label>
								<div class="input-group">
									<input type="text" class="form-control" placeholder="luan.rohde" aria-describedby="basic-addon2">
									<span class="input-group-addon" id="basic-addon2">@ceepcascavel.com.br</span>
								</div><br>
								<label>Senha:</label>
								<input type="password" name="senha" class="form-control" required><br> 
								<button type="submit" class="btn">Cadastrar</button>
							</form>
						</div>

					</div>
				</div>



			</div>
		</div>
	</div> <!-- /container -->
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
	*/
		$aluno = new Aluno();
		$aluno->setCgm($_POST['cgm']);
		$aluno->setCurso($_POST['curso']);
		$aluno->setTurma($_POST['turma']);
		$aluno->gravar();
	?>
</body>
</html>

