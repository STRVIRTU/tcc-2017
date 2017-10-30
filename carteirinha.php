

<html>
<head>
	<?php include_once('carregar_links.php'); 
	include_once('aluno.class.php');?>

	<title>Listar Pessoa</title>
	<link rel="stylesheet" type="text/css" href="css/carteirinha.css">
</head>
<body>
<div class="pagina">
	<div class="cartao center" >
	
			<div class="topo">
				<div>
					<img class="img-thumbnail foto-ceep" src="img/logo_ceep.jpg" alt="Card image cap">
				</div>

				<div>
					<p class="text-center">CEEP<br>Pedro Boaretto Neto</p>
			
				</div>

				<div>
					<img class="img-thumbnail foto-perfil" src="img/<?php echo $_SESSION['foto']?>" alt="Card image cap">
				</div>

			</div>
			<div class="rodape">
				<form>
					<div class="group-sem-espaco">
						<label>Nome</label>
						<input type="text" name="nome" value="<?php echo $_SESSION['nome']?>">
					</div>
					<div class="group">
						<label>Curso</label>
						<input type="text" name="curso">
					</div>
					<div class="group-left">
						<div class="group">
							<label>CPF</label>
							<input type="text" name="cpf">
						</div>
						<div class="group">
							<label>RG</label>
							<input type="text" name="rg">
						</div>
						<div class="group">
							<label>Serie</label>
							<input type="text" name="serie">
						</div>
						
					</div>
					<div class="group-right">
						<div class="group">
							<label>Nascimento</label>
							<input type="text" name="nascimento">
						</div>
						<div class="group">
							<label>Matricula</label>
							<input type="text" name="matricula">
						</div>
						<div class="group">
							<label>Validade</label>
							<input type="text" name="validade">
						</div>
					</div>
						
					</div>
				</form>
			</div>

			<!-- <ul>
				
				<li>
					<img class="card-img-top foto-ceep" src="img/avatar.png" alt="Card image cap">
				</li>
				<li>
					<p class="text text-center">CEEP</p>
		  			<p class="text text-center">Pedro Boaretto Neto</p> 
				</li>
				<li>
					<img class="card-img-top foto-perfil" src="img/avatar.png" alt="Card image cap">
				</li> 
			</ul> -->
			
		 
	</div>
</div>

	<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>