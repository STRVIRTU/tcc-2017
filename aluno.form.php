<html>
 <head>
    <?php include_once('carregar_links.php');
    include_once('curso.class.php');
	include_once('conexao.class.php'); 
	include_once('aluno.class.php');
	include_once('pessoa.class.php');

	
	$aluno = new Aluno;
	$aluno->__set('cgm', @$_GET['cgm']);
	$aluno->carregar();
	$id =$aluno->__get('idpessoa');

	$pessoa = new Pessoa;
	$pessoa->__set('id', @$_SESSION['idpessoa'] );
	$pessoa->carregar();
	

	?>
    <title> Cadastro do Usuário</title>

    <script	>

    function carregarinput() {
	    var CustomerNumber = document.getElementById("cgm_aluno").value;
	    var Url = "?pagina=cadastro_aluno&cgm=" + CustomerNumber;
	    window.location.href=Url;
	}




    </script>
  </head>
<body>
	
<div class="row">
<div class="col-sm-4 center">
	<h1 class="text-center">Cadastro de alunos</h1>
	<!-- <form class="center" method="POST" action="?pagina=validar_cadastro_aluno">
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
		</select><br>
		<label>Turma:</label>
		<input class="form-control" type="text" name="turma_aluno" id="turma_aluno"><br>
		<label>Email:</label>
		<input class="form-control" type="text" name="email_aluno" id="email_aluno"><br>
		<label>Senha:</label>
		<input class="form-control" type="password" name="senha_aluno" id="senha_aluno"><br>	

		<input name="tipo" type="hidden" id="tipo" value="aluno" />

		<input class="btn btn-danger"type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
	</form> -->


	<ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#aluno" aria-controls="home" role="tab" data-toggle="tab">Aluno</a></li>
      <li role="presentation"><a href="#funcionario" aria-controls="profile" role="tab" data-toggle="tab">Fucionário</a></li>
    </ul>

    <!----------ALUNO---------->                                
    <div class="tab-content">
	    <div role="tabpanel" class="tab-pane active" id="aluno">
		    <form method="POST" action="?pagina=validar_cadastro_aluno">
				<label>Nome: </label>
				<input class="form-control" type="text" name="nome_aluno" value="<?php echo $pessoa->__get('nome')?>" id="nome_aluno"  required autofocus><br>
				<label>Turma: </label>
				<input class="form-control" type="text" name="turma_aluno" id="turma_aluno" value="<?php echo $aluno->__get('turma')?>"><br>
				<div class="row">
					<div class="col-sm-6 pull-left">
						<label for="cgm">CGM:</label>
						<input class="form-control" type="text" name="cgm_aluno" id="cgm_aluno" value="<?php echo $aluno->__get('cgm')?>"onblur="carregarinput()" placeholder="448807959">
						<label id="input" for="course">Curso</label>
							<select class="form-control" type="text" name="curso_aluno" id="curso_aluno" value="">
								<?php
										$c = new Curso();
										$dados = $c->listar();
											foreach ($dados as $linha) {
												echo "<option>".$linha['nome']."</option>";	
											}
								?>
							</select>
					</div>
					<div class="col-sm-6 pull-right">
						<label for="rg">RG:</label>
						<input class="form-control" type="text" name="rg_aluno" id="rg_aluno" value="<?php echo $pessoa->__get('rg')?>"placeholder="13.195.492-1">
						<label for="nascimento">Data de Nascimento:</label>
						<input class="form-control" type="text" name="nascimento_aluno" value="<?php echo $pessoa->__get('nascimento')?>" id="nascimento_aluno" placeholder="05/03/1999">
					</div>
				</div><br>
				<label>Email:</label>
				<div class="input-group">
					<input class="form-control" type="text" name="email_aluno" id="email_aluno" value="<?php echo $pessoa->__get('email')?>" placeholder="luan.rohde" aria-describedby="basic-addon2">
					<span class="input-group-addon" id="basic-addon2">@ceepcascavel.com.br</span>
				</div><br>
				<label>Senha:</label>
				<input  class="form-control" type="password" name="senha_aluno" id="senha_aluno" required><br>
				<button type="submit" class="btn">Cadastrar</button>
		    </form>                                   	
    </div>
     <div role="tabpanel" class="tab-pane" id="funcionario">

     <!----------FUNCIONÁRIO----------> 	
     	<form method="POST" action="?pagina=validar_cadastro_funcionario">
				<label>Nome: </label>
				<input class="form-control" type="text" name="nome_funcionario" id="nome_funcionario"required autofocus><br>
						<label for="rg">RG:</label>
						<input class="form-control" type="text" name="rg_funcionario" id="rg_funcionario" placeholder="13.195.492-1"><br>
						<label for="cpf">CPF:</label>
						<input class="form-control" type="text" name="cpf_funcionario" id="cpf_funcionario" placeholder="123.456.789-10"><br>
						<label for="nascimento">Data de Nascimento:</label>
						<input class="form-control" type="text" name="nascimento_funcionario" id="nascimento_funcionario" placeholder="05/03/1999"><br>
				<label>Email</label>
				<div class="input-group">
					<input class="form-control" type="text" name="email_funcionario" id="email_funcionario" placeholder="luan.rohde" aria-describedby="basic-addon2">
					<span class="input-group-addon" id="basic-addon2">@ceepcascavel.com.br</span>
				</div><br>
				<label>Senha:</label>
				<input  class="form-control" type="password" name="senha_funcionario" id="senha_funcionario" required><br> 
				<select name="cargo_funcionario" class="form-control" id="cargo">
					<option value="3">Professor</option>
					<option value="3">Pedagogo</option>
				</select><br>

				
				<button type="submit" class="btn">Cadastrar</button>
		    </form>                                   	
    

    </div>
    </div>
							
														
															
	
</div>
</div>

</body>
</html>	

