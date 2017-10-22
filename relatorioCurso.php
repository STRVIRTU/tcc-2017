<html>
<head>
	<?php include_once('carregar_links.php'); 

	include_once('curso.class.php');
	include_once('conexao.class.php');?>

	<title>Listar Pessoa</title>
	<link rel="stylesheet" type="text/css" href="css/relatorio.css">
</head>
<body>
	<!-- <?php include_once('sidebar_admin.php');?> -->
	<div id="pagina">
		<h1>Relatório de Cursos</h1>

		<table>
			<tr>
				<td class="topo">Código</td>
				<td class="topo">Nome</td>

			</tr>

			<?php
				$c = new Curso();
				$dados = $c->listar();
				foreach ($dados as $linha) {
				 	echo "<tr>";
				 	echo "<td>".$linha['id_curso']."</td>";
				 	echo "<td>".$linha['nome']."</td>";
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