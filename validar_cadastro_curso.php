<?php

	include_once('curso.class.php');
		$nome = $_POST['nome_curso'];

		$curso = new Curso();
		$curso->__set("curso",$nome);  
	    $curso->gravar();
	

?>