<?php

	include_once('curso.class.php');
		$nome = $_POST['nome_curso'];

		$curso = new Curso();
		$curso->__set("curso",$nome);  
	    $curso->gravar();
	
<<<<<<< HEAD
	    header("Location:?pagina=admin");
=======

>>>>>>> 32e2792c74e9564ca1bb0e54189613c7ee21e554
?>