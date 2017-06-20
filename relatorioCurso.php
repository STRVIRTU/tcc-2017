<html>
<head>
	<?php include_once('carregar_links.php'); 
	include_once('curso.class.php');
	include_once('conexao.class.php');?>

	<title>Listar Pessoa</title>
	<link rel="stylesheet" type="text/css" href="css/relatorio.css">
</head>
<body>
	<div id="pagina">
		<h1>Relatório de Cursos</h1>

		<table>
			<tr>
				<td>Código</td>
				<td>Nome</td>

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
</body>
</html>