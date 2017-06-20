<html>
<head>
	<?php include_once('carregar_links.php'); 
	include_once('aluno.class.php');
	include_once('conexao.class.php');?>

	<title>Listar Pessoa</title>
	<link rel="stylesheet" type="text/css" href="css/relatorio.css">
</head>
<body>
	<div id="pagina">
		<h1>Relatório de Alunos</h1>

		<table>
			<tr>
				<td>Código</td>
				<td>Nome</td>
				<td>Nascimento</td>
				<td>RG</td>
				<td>CGM</td>
				<td>Curso</td>
				<td>Turma</td>
				<td>Email</td>
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
</body>
</html>