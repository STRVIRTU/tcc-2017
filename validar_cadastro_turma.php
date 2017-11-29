<?php
    include_once('turma.class.php');
    
        $nome = $_POST['turma'];
        $periodo = $_POST['periodo'];
        $id_curso = $_POST['curso'];
        $data_inicio = $_POST['data'];


		$turma = new Turma();
        $turma->__set("nome", $nome);
        $turma->__set("periodo",$periodo);
        $turma->__set("id_curso",$id_curso);
        $turma->__set("data_inicio",$data_inicio);  
	    $turma->gravar();
	
	    header("Location:?pagina=admin");
?>