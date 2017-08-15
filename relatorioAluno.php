<html>
<head>

	<?php include_once('carregar_links.php'); 

	include_once('aluno.class.php');
	include_once('conexao.class.php');?>

	<title>Listar Pessoa</title>
	<link rel="stylesheet" type="text/css" href="css/relatorio.css">
</head>
<body>
	<?php include_once('sidebar_admin.php');?>
	<div id="pagina">
		<h1>Relatório de Alunos</h1>

		<table class="center">
			<tr>
				<td class="topo">Código</td>
				<td class="topo">Nome</td>
				<td class="topo">Nascimento</td>
				<td class="topo">RG</td>
				<td class="topo">CGM</td>
				<td class="topo">Curso</td>
				<td class="topo">Turma</td>
				<td class="topo">Email</td>
			</tr>

			<?php
				$a = new Aluno();
				$dados = $a->listar();
				foreach ($dados as $linha) {
				 	echo "<tr>";
				 	echo "<td>".$linha['id_aluno']."</td>";
				 	echo "<td>".$linha['nome']."</td>";
				 	echo "<td>".$linha['nascimento']."</td>";
				 	echo "<td>".$linha['rg']."</td>";
				 	echo "<td>".$linha['cgm']."</td>";
				 	echo "<td>".$linha['curso']."</td>";
				 	echo "<td>".$linha['turma']."</td>";
				 	echo "<td>".$linha['email']."</td>";
				 	echo "</tr>";

				} 
			?>
		</table>

	</div>
	<!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>