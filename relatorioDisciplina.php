<html>
<head>
	<?php include_once('carregar_links.php'); 
	include_once('disciplina.class.php');
	include_once('conexao.class.php');?>

	<title>Listar Pessoa</title>
	<link rel="stylesheet" type="text/css" href="css/relatorio.css">
</head>
<body>
	<!-- <?php include_once('sidebar_admin.php');?> -->
	<div id="">
		<h1>Relatório de Disciplinas</h1>

		<table class="center">
			<tr>
				<td class="topo">Código</td>
				<td class="topo">Nome</td>
				<td class="topo">Curso</td>
			</tr>

			<?php
				$d = new Disciplina();
				$dados = $d->listar();
				foreach ($dados as $linha) {
				 	echo "<tr>";
				 	echo "<td>".$linha['id_disciplina']."</td>";
				 	echo "<td>".$linha['nome']."</td>";
				 	echo "<td>".$linha['nome_curso']."</td>";
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