<<<<<<< HEAD
// Mixins
// --------------------------

@mixin fa-icon() {
  display: inline-block;
  font: normal normal normal #{$fa-font-size-base}/#{$fa-line-height-base} FontAwesome; // shortening font declaration
  font-size: inherit; // can't have font-size inherit on line above, so need to override
  text-rendering: auto; // optimizelegibility throws things off #1094
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;

}

@mixin fa-icon-rotate($degrees, $rotation) {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=#{$rotation})";
  -webkit-transform: rotate($degrees);
      -ms-transform: rotate($degrees);
          transform: rotate($degrees);
}

@mixin fa-icon-flip($horiz, $vert, $rotation) {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=#{$rotation}, mirror=1)";
  -webkit-transform: scale($horiz, $vert);
      -ms-transform: scale($horiz, $vert);
          transform: scale($horiz, $vert);
}


// Only display content to screen readers. A la Bootstrap 4.
//
// See: http:
=======
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
>>>>>>> 32e2792c74e9564ca1bb0e54189613c7ee21e554
