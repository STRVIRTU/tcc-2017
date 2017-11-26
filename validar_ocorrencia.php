<?php

	include_once('ocorrencia.class.php');
	

		$o = new Ocorrencia();
		$o->__set("id_aluno",$_POST['aluno']);  
        $o->__set("id_funcionario", $_SESSION['id_pessoa']);
        $o->__set('data', $_POST['data']);
        $o->__set('observacao', $_POST['obs']);

	    if($o->gravar()){
            header("Location:?pagina=perfil_funcionario");
        }
	
	    
?>