<html>
<head>
	<?php include_once('carregar_links.php'); 
	include_once('disciplina.class.php');
	include_once('conexao.class.php');?>

	<title>Listar Pessoa</title>
	<link rel="stylesheet" type="text/css" href="css/relatorio.css">
</head>
<body>
	<div id="pagina">
		<h1>Relatório de Disciplinas</h1>

		<table>
			<tr>
				<td>Código</td>
				<td>Nome</td>
				<td>Professor</td>
				<td>Curso</td>
				<td>Carga</td>
			</tr>

			<?php
				$d = new Disciplina();
				$dados = $d->listar();
				foreach ($dados as $linha) {
				 	echo "<tr>";
				 	echo "<td>".$linha['id_disciplina']."</td>";
				 	echo "<td>".$linha['nome']."</td>";
				 	echo "<td>".$linha['professor']."</td>";
				 	echo "<td>".$linha['curso']."</td>";
				 	echo "<td>".$linha['carga_horaria']."</td>";
				 	echo "</tr>";

				} 
			?>
		</table>

	</div>	
</body>
</html>