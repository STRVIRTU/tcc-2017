<html>
  <head>
    <?php include_once('carregar_links.php'); ?>
    <title> Cadastro Aluno </title>
  </head>
<body>
	<div class="container">
		<div class="row">
			<a href="#" class="thumbnail">
				<img class="img-responsive" src="img/logo.jpg" alt="Ceep">
			</a>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<img src="img/logo.jpg" class="img-rounded thumbnail" width="204" height="136">
				<label for="exampleInputFile">Selecione uma imagem</label>
				<input type="file" id="exampleInputFile">
			</div>
			<div class="col-sm-6 ">
				<form class="form" method="POST">
					<label>Nome: </label>
					<input type="text" name="nome" class="form-control" required autofocus><br>
					<div class="row">
						<div class="col-sm-6 pull-left">
							<label id="input" for="exampleInputName2">CGM:</label>
							<input type="text" class="form-control" id="exampleInputName2" placeholder="448807959">
							<label id="input" for="course">Curso</label>
							<select name="tipo" class="form-control" id="sel1">
								<option value="informatica">Informática</option>
								<option value="administração">Administração</option>
								<option value="meioambiente">Meio Ambiente</option>
							</select>
						</div>
						<div class="col-sm-6 pull-right">
							<label id="input" for="rg">RG:</label>
							<input type="text" class="form-control" id="rg" placeholder="13.195.492-1">
							<label id="input" for="old">Idade:</label>
							<input type="text" class="form-control pull-right" id="old" placeholder="18">
						</div>
					</div><br>
					<label>Email:</label>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="luan.rohde" aria-describedby="basic-addon2">
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
		</div>
	</div> <!-- /container -->


	<?php
	include ("conexao.class.php");
	$c = new Conexao();
	$sql = "insert into cadastro(nome,senha,tipo) values(:p1, :p2, :p3)";
	$p = $c->prepare($sql);
	$p->bindValue(":p1",$_POST['nome']);
	$p->bindValue(":p2",$_POST['senha']);
	$p->bindValue(":p3",$_POST['tipo']);

	$p ->execute();
	?>
</body>
</html>

<?php
if(isset($_SESSION['error'])){
	echo $_SESSION['error'];
}
session_destroy();
?>