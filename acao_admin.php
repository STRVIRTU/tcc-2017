	<?php

	include_once('aluno.class.php');
	include_once('pessoa.class.php');
	if(@$_POST['acao'] == 'excluir'){
		$id = $_POST['id'];

		$aluno = new Aluno();
	    $aluno->__set("idpessoa",$id); 
	 
	    $pessoa = new Pessoa();
	    $aluno->__set("id",$id);

	    $aluno->excluir();
	   	header("Location: ?pagina=admin");
	}
?>