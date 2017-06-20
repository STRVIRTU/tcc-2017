<html>
<head>
	<?php include_once('carregar_links.php'); 
	include_once('pessoa.class.php');
	include_once('conexao.class.php');?>

	<title>Listar Pessoa</title>
	<link rel="stylesheet" type="text/css" href="css/relatorio.css">
</head>
<body>
	<div id="pagina">
		<h1>Relatório de Usuários</h1>

		<table>
			<tr>
				<td class="title">Código</td>
				<td class="title">Nome</td>
				<td class="title">RG</td>
				<td class="title">Nascimento</td>
				<td class="title">E-mail</td>
			</tr>

			<?php
				$p = new Pessoa();
				$dados = $p->listar();
				foreach ($dados as $linha) {
				 	echo "<tr>";
				 	echo "<td>".$linha['id_pessoa']."</td>";
				 	echo "<td>".$linha['nome']."</td>";
				 	echo "<td>".$linha['rg']."</td>";
				 	echo "<td>".$linha['nascimento']."</td>";
				 	echo "<td>".$linha['email']."</td>";
				 	echo "</tr>";

				} 
			?>
		</table>

	</div>	
</body>
</html>