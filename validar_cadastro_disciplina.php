<?php

	include_once('disciplina.class.php');
		$nome = $_POST['nome_disciplina'];
		$curso_disciplina = $_POST['curso_disciplina'];

		$disc = new Disciplina();
		$disc->__set("nome",$nome);  
	    $disc->__set("curso",$curso_disciplina);

	    $disc->gravar();
	
	    header("Location:?pagina=admin");
?>